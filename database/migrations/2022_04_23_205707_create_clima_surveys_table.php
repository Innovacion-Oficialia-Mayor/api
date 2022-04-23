<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Ejecuta la migración de la tabla surveys
   * de las base de datos de Clima Laboral.
   *
   * @return void
   */
  protected $connection = 'clima';

  public function up() {
    Schema::create('surveys', function (Blueprint $table) {
      $table->uuid('id')
            ->primary();

      $table->unsignedTinyInteger('dependency_id');

      $db = DB::connection('admin')->getDatabaseName();

      $table->foreign('dependency_id')
            ->references('id')
            ->on($db.'.dependencies')
            ->restrictOnUpdate()
            ->restrictOnDelete();

      $table->unsignedTinyInteger('percentage_users');

      $table->unsignedBigInteger('started_at');

      $table->unsignedBigInteger('finished_at');

      $table->dateTime('created_at')
            ->useCurrent();

      $table->dateTime('updated_at')
            ->useCurrent()
            ->useCurrentOnUpdate();
    });
  }

  /**
   * Invierte la migración.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('surveys');
  }
};

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
  /**
   * Ejecuta todos los seeders de todos los servicios web.
   *
   * @return void
   */
  public function run() {
    $this->call([
      AdminSeeder::class,
      ClimaSeeder::class,
    ]);
  }
}

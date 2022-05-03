<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Resources\Json\JsonResource;

class JobResource extends JsonResource {
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
  public function toArray($request) {
    return [
      'id'   => $this->id,
      'name' => $this->name,
      'link' => route('admin.jobs.show', ['id' => $this->id]),
    ];
  }
}
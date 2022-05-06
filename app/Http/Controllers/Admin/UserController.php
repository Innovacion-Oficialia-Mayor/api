<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\User;
use App\Http\Resources\Admin\UserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class UserController extends Controller {
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct() {
    //
  }

  public function index(Request $request){
    /**
     * Valida los parámetros de consulta de la ruta.
     */
    $query = $this->validate($request, [
      'sortBy' => ['bail', 'nullable', 'string', Rule::in(['asc', 'desc'])],
    ]);

    $sortBy = Arr::get($query, 'sortBy', 'asc');

    return UserResource::collection(User::with([
      'role', 'gender', 'job', 'jobLevel', 'payrollTypeCategory.type',
      'payrollTypeCategory.category', 'dependencyArea.dependency',
      'dependencyArea.area',
    ])
    ->orderBy('name', $sortBy)
    ->orderBy('firstsurname', $sortBy)
    ->orderBy('secondsurname', $sortBy)
    ->paginate())
    ->additional([
      'message' => [
        'type' => 'success',
        'code' => Response::HTTP_OK,
        'description' => '',
    ]]);
  }

  public function store(Request $request) {
    /**
     * Valida los campos de la petición.
     */
    $input = $this->validate($request, [
      'payroll' => 'bail|required|string|min:5|max:10|unique:App\Models\Admin\User',
      'email'   => 'bail|nullable|string|max:255|email|unique:App\Models\Admin\User',
      'role_id' => 'bail|required|integer|min:1|exists:App\Models\Admin\Role,id',
      'gender_id' => 'bail|required|integer|min:1|exists:App\Models\Admin\Gender,id',
      'job_id' => 'bail|required|integer|min:1|exists:App\Models\Admin\Job,id',
      'job_level_id' => 'bail|required|integer|min:1|exists:App\Models\Admin\JobLevel,id',
      'payroll_type_category_id' => 'bail|required|integer|min:1|exists:App\Models\Admin\PayrollTypesCategory,id',
      'dependency_area_id' => 'bail|required|integer|min:1|exists:App\Models\Admin\DependencyArea,id',
      'name' => 'bail|required|string|min:1|max:60',
      'firstsurname'  => 'bail|required|min:1|max:60',
      'secondsurname' => 'bail|required|min:1|max:60',
      'phone'  => 'bail|required|min:10|max:10',
      'active' => 'bail|nullable|boolean',
      'entered_at' => 'bail|required|date_format:Y/m/d',
    ]);

    $input['id'] = Str::uuid();

    $id = User::create($input)->id;

    return (new UserResource(User::with([
      'role', 'gender', 'job', 'jobLevel', 'payrollTypeCategory.type',
      'payrollTypeCategory.category', 'dependencyArea.dependency',
      'dependencyArea.area',
    ])
    ->findOrFail($id)))
    ->additional([
      'message' => [
        'type' => 'success',
        'code' => Response::HTTP_CREATED,
        'description' => '',
    ]])
    ->response()
    ->setStatusCode(Response::HTTP_CREATED);
  }

  public function show(Request $request, $id) {
    return (new UserResource(User::with([
      'role', 'gender', 'job', 'jobLevel', 'payrollTypeCategory.type',
      'payrollTypeCategory.category', 'dependencyArea.dependency',
      'dependencyArea.area',
    ])
    ->findOrFail($id)))
    ->additional([
      'message' => [
        'type' => 'success',
        'code' => Response::HTTP_OK,
        'description' => '',
    ]]);
  }

  public function update(Request $request, $id) {
    /**
     * Valida los campos de la petición.
     */
    $input = $this->validate($request, [
      'payroll' => 'bail|nullable|string|min:5|max:10|unique:App\Models\Admin\User',
      'email'   => 'bail|nullable|string|max:255|email|unique:App\Models\Admin\User',
      'role_id' => 'bail|nullable|integer|min:1|exists:App\Models\Admin\Role,id',
      'gender_id' => 'bail|nullable|integer|min:1|exists:App\Models\Admin\Gender,id',
      'job_id' => 'bail|nullable|integer|min:1|exists:App\Models\Admin\Job,id',
      'job_level_id' => 'bail|nullable|integer|min:1|exists:App\Models\Admin\JobLevel,id',
      'payroll_type_category_id' => 'bail|nullable|integer|min:1|exists:App\Models\Admin\PayrollTypesCategory,id',
      'dependency_area_id' => 'bail|nullable|integer|min:1|exists:App\Models\Admin\DependencyArea,id',
      'name' => 'bail|nullable|string|min:1|max:60',
      'firstsurname'  => 'bail|nullable|min:1|max:60',
      'secondsurname' => 'bail|nullable|min:1|max:60',
      'phone'  => 'bail|nullable|min:10|max:10',
      'active' => 'bail|nullable|boolean',
      'entered_at' => 'bail|nullable|date_format:Y/m/d',
    ]);

    $user = User::with([
      'role', 'gender', 'job', 'jobLevel', 'payrollTypeCategory.type',
      'payrollTypeCategory.category', 'dependencyArea.dependency',
      'dependencyArea.area',
    ])->findOrFail($id);

    $user->update($input);

    return (new UserResource($user))
    ->additional([
      'message' => [
        'type' => 'success',
        'code' => Response::HTTP_OK,
        'description' => '',
    ]]);
  }
}

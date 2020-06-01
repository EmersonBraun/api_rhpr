<?php

namespace App\Http\Middleware;

use Closure;
use JWTAuth;
use App\Repositories\Admin\UserRepository;
use App\Traits\ResponseTrait;

class CheckHasPermission
{
  use ResponseTrait;

  protected $repository;
  public function __construct(UserRepository $repository)
	{
    $this->repository = $repository;
  }
  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @return mixed
   */
  public function handle($request, Closure $next, $permission='')
  {
    $user = JWTAuth::toUser($request->token);
    if (!$user) {
      $response = $this->failedResponse('User not found!');
      return response()->json($response->data, 401, $response->headers, $response->options);
    }
    $permissions = $this->repository->getAllPermissions($user->id, true);
    if (!$permissions) {
      $response = $this->failedResponse('Not has permissions!');
      return response()->json($response->data, 401, $response->headers, $response->options);
    }
    if (!in_array($permission, $permissions)) {
      $response = $this->failedResponse('Not has permission to access this resource!');
      return response()->json($response->data, 401, $response->headers, $response->options);
    }

    return $next($request);
  }
}
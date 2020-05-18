<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminpermissionRequest;
use App\Repositories\AdminpermissionRepository;

class AdminpermissionController extends Controller
{
    protected $repository;
    public function __construct(AdminpermissionRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"adminpermission"},
    *     path="api/v1/adminpermission",
    *     description="Return a list with adminpermissions",
    *     @OA\Response(
    *         response=200,
    *         description="A list with adminpermissions",
    *     ),
    *     @OA\Response(
    *         response=400,
    *         description="An error happened"
    *     ),
    *     @OA\Response(
    *         response=422,
    *         description="Missing Data"
    *     ),
    *     @OA\Response(
    *         response=501,
    *         description="Not implemented"
    *     ),
    * )
    */
    public function index()
    {
        $response = $this->repository->all();
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Post(
    *     tags={"adminpermission"},
    *     path="api/v1/adminpermission",
    *     description="Create new adminpermission",
    *     @OA\Response(
    *         response=200,
    *         description="A created adminpermission",
    *     ),
    *     @OA\Response(
    *         response=400,
    *         description="An error happened"
    *     ),
    *     @OA\Response(
    *         response=422,
    *         description="Missing Data"
    *     ),
    *     @OA\Response(
    *         response=501,
    *         description="Not implemented"
    *     ),
    * )
    */
    public function store(AdminpermissionRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"adminpermission"},
    *     path="api/v1/adminpermission",
    *     description="Return a specific adminpermission",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of adminpermission",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific adminpermission",
    *     ),
    *     @OA\Response(
    *         response=400,
    *         description="An error happened"
    *     ),
    *     @OA\Response(
    *         response=422,
    *         description="Missing Data"
    *     ),
    *     @OA\Response(
    *         response=501,
    *         description="Not implemented"
    *     ),
    * )
    */
    public function show($id)
    {
        $response = $this->repository->findOrFail($id);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Put(
    *     tags={"adminpermission"},
    *     path="api/v1/adminpermission",
    *     description="Update a specific adminpermission",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of adminpermission",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated adminpermission",
    *     ),
    *     @OA\Response(
    *         response=400,
    *         description="An error happened"
    *     ),
    *     @OA\Response(
    *         response=422,
    *         description="Missing Data"
    *     ),
    *     @OA\Response(
    *         response=501,
    *         description="Not implemented"
    *     ),
    * )
    */
    public function update(AdminpermissionRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"adminpermission"},
    *     path="api/v1/adminpermission",
    *     description="Remove a specific adminpermissions",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of adminpermission",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted adminpermission",
    *     ),
    *     @OA\Response(
    *         response=400,
    *         description="An error happened"
    *     ),
    *     @OA\Response(
    *         response=422,
    *         description="Missing Data"
    *     ),
    *     @OA\Response(
    *         response=501,
    *         description="Not implemented"
    *     ),
    * )
    */
    public function destroy($id)
    {
        $response = $this->repository->findAndDelete($id);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Put(
    *     tags={"adminpermission"},
    *     path="api/v1/adminpermission/restore",
    *     description="Restore a specific adminpermission",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of adminpermission",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored adminpermission",
    *     ),
    *     @OA\Response(
    *         response=400,
    *         description="An error happened"
    *     ),
    *     @OA\Response(
    *         response=422,
    *         description="Missing Data"
    *     ),
    *     @OA\Response(
    *         response=501,
    *         description="Not implemented"
    *     ),
    * )
    */
    public function restore($id)
    {
        $response = $this->repository->findAndRestore($id);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"adminpermission"},
    *     path="api/v1/adminpermission/forceDelete",
    *     description="Remove permanently adminpermission",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of adminpermission",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly adminpermission",
    *     ),
    *     @OA\Response(
    *         response=400,
    *         description="An error happened"
    *     ),
    *     @OA\Response(
    *         response=422,
    *         description="Missing Data"
    *     ),
    *     @OA\Response(
    *         response=501,
    *         description="Not implemented"
    *     ),
    * )
    */
    public function forceDelete($id)
    {
        $response = $this->repository->findAndDestroy($id);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

}

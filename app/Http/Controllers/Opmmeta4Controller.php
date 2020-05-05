<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Opmmeta4Request;
use App\Repositories\Opmmeta4Repository;

class Opmmeta4Controller extends Controller
{
    protected $repository;
    public function __construct(Opmmeta4Repository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"opmmeta4"},
    *     path="api/v1/opmmeta4",
    *     description="Return a list with opmmeta4s",
    *     @OA\Response(
    *         response=200,
    *         description="A list with opmmeta4s",
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
    *     tags={"opmmeta4"},
    *     path="api/v1/opmmeta4",
    *     description="Create new opmmeta4",
    *     @OA\Response(
    *         response=200,
    *         description="A created opmmeta4",
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
    public function store(Opmmeta4Request $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"opmmeta4"},
    *     path="api/v1/opmmeta4",
    *     description="Return a specific opmmeta4",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of opmmeta4",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific opmmeta4",
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
    *     tags={"opmmeta4"},
    *     path="api/v1/opmmeta4",
    *     description="Update a specific opmmeta4",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of opmmeta4",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated opmmeta4",
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
    public function update(Opmmeta4Request $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"opmmeta4"},
    *     path="api/v1/opmmeta4",
    *     description="Remove a specific opmmeta4s",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of opmmeta4",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted opmmeta4",
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
    *     tags={"opmmeta4"},
    *     path="api/v1/opmmeta4/restore",
    *     description="Restore a specific opmmeta4",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of opmmeta4",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored opmmeta4",
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
    *     tags={"opmmeta4"},
    *     path="api/v1/opmmeta4/forceDelete",
    *     description="Remove permanently opmmeta4",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of opmmeta4",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly opmmeta4",
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

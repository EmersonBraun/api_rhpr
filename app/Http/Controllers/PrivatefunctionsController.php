<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PrivatefunctionsRequest;
use App\Repositories\PrivatefunctionsRepository;

class PrivatefunctionsController extends Controller
{
    protected $repository;
    public function __construct(PrivatefunctionsRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"privatefunctions"},
    *     path="api/v1/privatefunctions",
    *     description="Return a list with privatefunctions",
    *     @OA\Response(
    *         response=200,
    *         description="A list with privatefunctions",
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
    *     tags={"privatefunctions"},
    *     path="api/v1/privatefunctions",
    *     description="Create new privatefunctions",
    *     @OA\Response(
    *         response=200,
    *         description="A created privatefunctions",
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
    public function store(PrivatefunctionsRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"privatefunctions"},
    *     path="api/v1/privatefunctions",
    *     description="Return a specific privatefunctions",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of privatefunctions",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific privatefunctions",
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
    *     tags={"privatefunctions"},
    *     path="api/v1/privatefunctions",
    *     description="Update a specific privatefunctions",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of privatefunctions",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated privatefunctions",
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
    public function update(PrivatefunctionsRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"privatefunctions"},
    *     path="api/v1/privatefunctions",
    *     description="Remove a specific privatefunctions",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of privatefunctions",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted privatefunctions",
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
    *     tags={"privatefunctions"},
    *     path="api/v1/privatefunctions/restore",
    *     description="Restore a specific privatefunctions",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of privatefunctions",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored privatefunctions",
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
    *     tags={"privatefunctions"},
    *     path="api/v1/privatefunctions/forceDelete",
    *     description="Remove permanently privatefunctions",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of privatefunctions",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly privatefunctions",
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

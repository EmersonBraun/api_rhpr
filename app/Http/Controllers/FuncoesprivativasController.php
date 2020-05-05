<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\FuncoesprivativasRequest;
use App\Repositories\FuncoesprivativasRepository;

class FuncoesprivativasController extends Controller
{
    protected $repository;
    public function __construct(FuncoesprivativasRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"funcoesprivativas"},
    *     path="api/v1/funcoesprivativas",
    *     description="Return a list with funcoesprivativas",
    *     @OA\Response(
    *         response=200,
    *         description="A list with funcoesprivativas",
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
    *     tags={"funcoesprivativas"},
    *     path="api/v1/funcoesprivativas",
    *     description="Create new funcoesprivativas",
    *     @OA\Response(
    *         response=200,
    *         description="A created funcoesprivativas",
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
    public function store(FuncoesprivativasRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"funcoesprivativas"},
    *     path="api/v1/funcoesprivativas",
    *     description="Return a specific funcoesprivativas",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of funcoesprivativas",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific funcoesprivativas",
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
    *     tags={"funcoesprivativas"},
    *     path="api/v1/funcoesprivativas",
    *     description="Update a specific funcoesprivativas",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of funcoesprivativas",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated funcoesprivativas",
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
    public function update(FuncoesprivativasRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"funcoesprivativas"},
    *     path="api/v1/funcoesprivativas",
    *     description="Remove a specific funcoesprivativas",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of funcoesprivativas",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted funcoesprivativas",
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
    *     tags={"funcoesprivativas"},
    *     path="api/v1/funcoesprivativas/restore",
    *     description="Restore a specific funcoesprivativas",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of funcoesprivativas",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored funcoesprivativas",
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
    *     tags={"funcoesprivativas"},
    *     path="api/v1/funcoesprivativas/forceDelete",
    *     description="Remove permanently funcoesprivativas",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of funcoesprivativas",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly funcoesprivativas",
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

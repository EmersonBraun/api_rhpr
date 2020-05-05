<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\DependentesativaRequest;
use App\Repositories\DependentesativaRepository;

class DependentesativaController extends Controller
{
    protected $repository;
    public function __construct(DependentesativaRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"dependentesativa"},
    *     path="api/v1/dependentesativa",
    *     description="Return a list with dependentesativas",
    *     @OA\Response(
    *         response=200,
    *         description="A list with dependentesativas",
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
    *     tags={"dependentesativa"},
    *     path="api/v1/dependentesativa",
    *     description="Create new dependentesativa",
    *     @OA\Response(
    *         response=200,
    *         description="A created dependentesativa",
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
    public function store(DependentesativaRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"dependentesativa"},
    *     path="api/v1/dependentesativa",
    *     description="Return a specific dependentesativa",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of dependentesativa",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific dependentesativa",
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
    *     tags={"dependentesativa"},
    *     path="api/v1/dependentesativa",
    *     description="Update a specific dependentesativa",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of dependentesativa",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated dependentesativa",
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
    public function update(DependentesativaRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"dependentesativa"},
    *     path="api/v1/dependentesativa",
    *     description="Remove a specific dependentesativas",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of dependentesativa",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted dependentesativa",
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
    *     tags={"dependentesativa"},
    *     path="api/v1/dependentesativa/restore",
    *     description="Restore a specific dependentesativa",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of dependentesativa",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored dependentesativa",
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
    *     tags={"dependentesativa"},
    *     path="api/v1/dependentesativa/forceDelete",
    *     description="Remove permanently dependentesativa",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of dependentesativa",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly dependentesativa",
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

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\InativosRequest;
use App\Repositories\InativosRepository;

class InativosController extends Controller
{
    protected $repository;
    public function __construct(InativosRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"inativos"},
    *     path="api/v1/inativos",
    *     description="Return a list with inativos",
    *     @OA\Response(
    *         response=200,
    *         description="A list with inativos",
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
    *     tags={"inativos"},
    *     path="api/v1/inativos",
    *     description="Create new inativos",
    *     @OA\Response(
    *         response=200,
    *         description="A created inativos",
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
    public function store(InativosRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"inativos"},
    *     path="api/v1/inativos",
    *     description="Return a specific inativos",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of inativos",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific inativos",
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
    *     tags={"inativos"},
    *     path="api/v1/inativos",
    *     description="Update a specific inativos",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of inativos",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated inativos",
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
    public function update(InativosRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"inativos"},
    *     path="api/v1/inativos",
    *     description="Remove a specific inativos",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of inativos",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted inativos",
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
    *     tags={"inativos"},
    *     path="api/v1/inativos/restore",
    *     description="Restore a specific inativos",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of inativos",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored inativos",
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
    *     tags={"inativos"},
    *     path="api/v1/inativos/forceDelete",
    *     description="Remove permanently inativos",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of inativos",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly inativos",
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

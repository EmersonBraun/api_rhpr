<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostoRequest;
use App\Repositories\PostoRepository;

class PostoController extends Controller
{
    protected $repository;
    public function __construct(PostoRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"posto"},
    *     path="api/v1/posto",
    *     description="Return a list with postos",
    *     @OA\Response(
    *         response=200,
    *         description="A list with postos",
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
    *     tags={"posto"},
    *     path="api/v1/posto",
    *     description="Create new posto",
    *     @OA\Response(
    *         response=200,
    *         description="A created posto",
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
    public function store(PostoRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"posto"},
    *     path="api/v1/posto",
    *     description="Return a specific posto",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of posto",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific posto",
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
    *     tags={"posto"},
    *     path="api/v1/posto",
    *     description="Update a specific posto",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of posto",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated posto",
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
    public function update(PostoRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"posto"},
    *     path="api/v1/posto",
    *     description="Remove a specific postos",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of posto",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted posto",
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
    *     tags={"posto"},
    *     path="api/v1/posto/restore",
    *     description="Restore a specific posto",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of posto",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored posto",
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
    *     tags={"posto"},
    *     path="api/v1/posto/forceDelete",
    *     description="Remove permanently posto",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of posto",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly posto",
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

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PositionsRequest;
use App\Repositories\PositionsRepository;

class PositionsController extends Controller
{
    protected $repository;
    public function __construct(PositionsRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"positions"},
    *     path="api/v1/positions",
    *     description="Return a list with positions",
    *     @OA\Response(
    *         response=200,
    *         description="A list with positions",
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
    *     tags={"positions"},
    *     path="api/v1/positions",
    *     description="Create new positions",
    *     @OA\Response(
    *         response=200,
    *         description="A created positions",
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
    public function store(PositionsRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"positions"},
    *     path="api/v1/positions",
    *     description="Return a specific positions",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of positions",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific positions",
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
    *     tags={"positions"},
    *     path="api/v1/positions",
    *     description="Update a specific positions",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of positions",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated positions",
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
    public function update(PositionsRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"positions"},
    *     path="api/v1/positions",
    *     description="Remove a specific positions",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of positions",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted positions",
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
    *     tags={"positions"},
    *     path="api/v1/positions/restore",
    *     description="Restore a specific positions",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of positions",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored positions",
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
    *     tags={"positions"},
    *     path="api/v1/positions/forceDelete",
    *     description="Remove permanently positions",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of positions",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly positions",
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

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\HistoricalpoliceRequest;
use App\Repositories\HistoricalpoliceRepository;

class HistoricalpoliceController extends Controller
{
    protected $repository;
    public function __construct(HistoricalpoliceRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"historicalpolice"},
    *     path="api/v1/historicalpolice",
    *     description="Return a list with historicalpolices",
    *     @OA\Response(
    *         response=200,
    *         description="A list with historicalpolices",
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
    *     tags={"historicalpolice"},
    *     path="api/v1/historicalpolice",
    *     description="Create new historicalpolice",
    *     @OA\Response(
    *         response=200,
    *         description="A created historicalpolice",
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
    public function store(HistoricalpoliceRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"historicalpolice"},
    *     path="api/v1/historicalpolice",
    *     description="Return a specific historicalpolice",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of historicalpolice",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific historicalpolice",
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
    *     tags={"historicalpolice"},
    *     path="api/v1/historicalpolice",
    *     description="Update a specific historicalpolice",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of historicalpolice",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated historicalpolice",
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
    public function update(HistoricalpoliceRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"historicalpolice"},
    *     path="api/v1/historicalpolice",
    *     description="Remove a specific historicalpolices",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of historicalpolice",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted historicalpolice",
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
    *     tags={"historicalpolice"},
    *     path="api/v1/historicalpolice/restore",
    *     description="Restore a specific historicalpolice",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of historicalpolice",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored historicalpolice",
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
    *     tags={"historicalpolice"},
    *     path="api/v1/historicalpolice/forceDelete",
    *     description="Remove permanently historicalpolice",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of historicalpolice",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly historicalpolice",
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

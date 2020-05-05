<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationsRequest;
use App\Repositories\ReservationsRepository;

class ReservationsController extends Controller
{
    protected $repository;
    public function __construct(ReservationsRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"reservations"},
    *     path="api/v1/reservations",
    *     description="Return a list with reservations",
    *     @OA\Response(
    *         response=200,
    *         description="A list with reservations",
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
    *     tags={"reservations"},
    *     path="api/v1/reservations",
    *     description="Create new reservations",
    *     @OA\Response(
    *         response=200,
    *         description="A created reservations",
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
    public function store(ReservationsRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"reservations"},
    *     path="api/v1/reservations",
    *     description="Return a specific reservations",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of reservations",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific reservations",
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
    *     tags={"reservations"},
    *     path="api/v1/reservations",
    *     description="Update a specific reservations",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of reservations",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated reservations",
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
    public function update(ReservationsRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"reservations"},
    *     path="api/v1/reservations",
    *     description="Remove a specific reservations",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of reservations",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted reservations",
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
    *     tags={"reservations"},
    *     path="api/v1/reservations/restore",
    *     description="Restore a specific reservations",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of reservations",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored reservations",
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
    *     tags={"reservations"},
    *     path="api/v1/reservations/forceDelete",
    *     description="Remove permanently reservations",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of reservations",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly reservations",
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

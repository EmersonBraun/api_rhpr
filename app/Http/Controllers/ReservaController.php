<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReservaRequest;
use App\Repositories\ReservaRepository;

class ReservaController extends Controller
{
    protected $repository;
    public function __construct(ReservaRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"reserva"},
    *     path="api/v1/reserva",
    *     description="Return a list with reservas",
    *     @OA\Response(
    *         response=200,
    *         description="A list with reservas",
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
    *     tags={"reserva"},
    *     path="api/v1/reserva",
    *     description="Create new reserva",
    *     @OA\Response(
    *         response=200,
    *         description="A created reserva",
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
    public function store(ReservaRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"reserva"},
    *     path="api/v1/reserva",
    *     description="Return a specific reserva",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of reserva",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific reserva",
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
    *     tags={"reserva"},
    *     path="api/v1/reserva",
    *     description="Update a specific reserva",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of reserva",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated reserva",
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
    public function update(ReservaRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"reserva"},
    *     path="api/v1/reserva",
    *     description="Remove a specific reservas",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of reserva",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted reserva",
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
    *     tags={"reserva"},
    *     path="api/v1/reserva/restore",
    *     description="Restore a specific reserva",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of reserva",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored reserva",
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
    *     tags={"reserva"},
    *     path="api/v1/reserva/forceDelete",
    *     description="Remove permanently reserva",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of reserva",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly reserva",
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

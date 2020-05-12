<?php

namespace App\Http\Controllers\v0;

use App\Http\Controllers\Controller;
use App\Http\Requests\v0\ReservaRequest;
use App\Repositories\v0\ReservaRepository;

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
    *     path="api/v0/reserva",
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
    public function search(ReservaRequest $request)
    {
        $response = $this->repository->search($request);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }
}

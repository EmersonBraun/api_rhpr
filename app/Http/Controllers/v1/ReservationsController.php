<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\ReservationsRequest;
use App\Repositories\v1\ReservationsRepository;

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
    public function seach(ReservationsRequest $request)
    {
        $response = $this->repository->seach($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }
}

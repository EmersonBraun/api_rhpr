<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\PositionsRequest;
use App\Repositories\v1\PositionsRepository;

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
    public function seach(PositionsRequest $request)
    {
        $response = $this->repository->seach($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }
}

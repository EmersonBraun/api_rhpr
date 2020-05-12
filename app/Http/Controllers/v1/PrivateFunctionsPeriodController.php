<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\PrivateFunctionsPeriodRequest;
use App\Repositories\v1\PrivateFunctionsPeriodRepository;

class PrivateFunctionsPeriodController extends Controller
{
    protected $repository;
    public function __construct(PrivateFunctionsPeriodRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"privateFunctionsPeriod"},
    *     path="api/v1/privateFunctionsPeriod",
    *     description="Return a list with privateFunctionsPeriod",
    *     @OA\Response(
    *         response=200,
    *         description="A list with privateFunctionsPeriod",
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
    public function search(PrivateFunctionsPeriodRequest $request)
    {
        $response = $this->repository->search($request);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }
}

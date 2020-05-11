<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\PrivateFunctionsPeriodsRequest;
use App\Repositories\v1\PrivateFunctionsPeriodsRepository;

class PrivateFunctionsPeriodsController extends Controller
{
    protected $repository;
    public function __construct(PrivateFunctionsPeriodsRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"privateFunctionsPeriods"},
    *     path="api/v1/privateFunctionsPeriods",
    *     description="Return a list with privateFunctionsPeriods",
    *     @OA\Response(
    *         response=200,
    *         description="A list with privateFunctionsPeriods",
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
    public function searchGet(PrivateFunctionsPeriodsRequest $request)
    {
        $response = $this->repository->searchGet($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Post(
    *     tags={"privateFunctionsPeriods"},
    *     path="api/v1/privateFunctionsPeriods",
    *     description="A list with privateFunctionsPeriods",
    *     @OA\Response(
    *         response=200,
    *         description="A list with privateFunctionsPeriods",
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
    public function searchPost(PrivateFunctionsPeriodsRequest $request)
    {
        $response = $this->repository->searchPost($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

}

<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\PrivateFunctionsRequest;
use App\Repositories\v1\PrivateFunctionsRepository;

class PrivateFunctionsController extends Controller
{
    protected $repository;
    public function __construct(PrivateFunctionsRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"privateFunctions"},
    *     path="api/v1/privateFunctions",
    *     description="Return a list with privateFunctions",
    *     @OA\Response(
    *         response=200,
    *         description="A list with privateFunctions",
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
    public function searchGet(PrivateFunctionsRequest $request)
    {
        $response = $this->repository->searchGet($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Post(
    *     tags={"privateFunctions"},
    *     path="api/v1/privateFunctions",
    *     description="A list with privateFunctions",
    *     @OA\Response(
    *         response=200,
    *         description="A list with privateFunctions",
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
    public function searchPost(PrivateFunctionsRequest $request)
    {
        $response = $this->repository->searchPost($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

}

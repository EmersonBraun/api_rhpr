<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\ActiveDependentsRequest;
use App\Repositories\v1\ActiveDependentsRepository;

class ActiveDependentsController extends Controller
{
    protected $repository;
    public function __construct(ActiveDependentsRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"activeDependents"},
    *     path="api/v1/activeDependents",
    *     description="Return a list with activeDependents",
    *     @OA\Response(
    *         response=200,
    *         description="A list with activeDependents",
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
    public function searchGet(ActiveDependentsRequest $request)
    {
        $response = $this->repository->searchGet($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Post(
    *     tags={"activeDependents"},
    *     path="api/v1/activeDependents",
    *     description="A list with activeDependents",
    *     @OA\Response(
    *         response=200,
    *         description="A list with activeDependents",
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
    public function searchPost(ActiveDependentsRequest $request)
    {
        $response = $this->repository->searchPost($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }
}

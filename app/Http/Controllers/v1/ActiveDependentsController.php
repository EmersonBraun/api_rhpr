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
    public function search(ActiveDependentsRequest $request)
    {
        $response = $this->repository->search($request);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }
}

<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\AbsenceRequest;
use App\Repositories\v1\AbsenceRepository;

class AbsenceController extends Controller
{
    protected $repository;
    public function __construct(AbsenceRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"absence"},
    *     path="api/v1/absence",
    *     description="Return a list with absences",
    *     @OA\Response(
    *         response=200,
    *         description="A list with absences",
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
    public function searchGet(AbsenceRequest $request)
    {
        $response = $this->repository->searchGet($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Post(
    *     tags={"absence"},
    *     path="api/v1/absence",
    *     description="A list with absence",
    *     @OA\Response(
    *         response=200,
    *         description="A list with absence",
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
    public function searchPost(AbsenceRequest $request)
    {
        $response = $this->repository->searchPost($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

}

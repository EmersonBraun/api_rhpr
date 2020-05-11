<?php

namespace App\Http\Controllers\v0;

use App\Http\Controllers\Controller;
use App\Http\Requests\v0\AusenciaRequest;
use App\Repositories\v0\AusenciaRepository;

class AusenciaController extends Controller
{
    protected $repository;
    public function __construct(AusenciaRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"ausencia"},
    *     path="api/v0/ausencia",
    *     description="Return a list with ausencias",
    *     @OA\Response(
    *         response=200,
    *         description="A list with ausencias",
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
    public function searchGet(AusenciaRequest $request)
    {
        $response = $this->repository->searchGet($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Post(
    *     tags={"ausencia"},
    *     path="api/v0/ausencia",
    *     description="Return a list with ausencias",
    *     @OA\Response(
    *         response=200,
    *         description="A list with ausencia",
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
    public function searchPost(AusenciaRequest $request)
    {
        $response = $this->repository->searchPost($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    } 

}

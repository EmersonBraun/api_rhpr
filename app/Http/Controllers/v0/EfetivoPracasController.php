<?php

namespace App\Http\Controllers\v0;

use App\Http\Controllers\Controller;
use App\Http\Requests\v0\EfetivoPracasRequest;
use App\Repositories\v0\EfetivoPracasRepository;

class EfetivoPracasController extends Controller
{
    protected $repository;
    public function __construct(EfetivoPracasRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"efetivoPracas"},
    *     path="api/v0/efetivoPracas",
    *     description="Return a list with efetivoPracas",
    *     @OA\Response(
    *         response=200,
    *         description="A list with efetivoPracas",
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
    public function searchGet(EfetivoPracasRequest $request)
    {
        $response = $this->repository->searchGet($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Post(
    *     tags={"efetivoPracas"},
    *     path="api/v0/efetivoPracas",
    *     description="Return a list with efetivoPracas",
    *     @OA\Response(
    *         response=200,
    *         description="A list with efetivoPracas",
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
    public function searchPost(EfetivoPracasRequest $request)
    {
        $response = $this->repository->searchPost($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }
}

<?php

namespace App\Http\Controllers\v0;

use App\Http\Controllers\Controller;
use App\Http\Requests\v0\EfetivoPmprRequest;
use App\Repositories\v0\EfetivoPmprRepository;

class EfetivoPmprController extends Controller
{
    protected $repository;
    public function __construct(EfetivoPmprRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"EfetivoPmpr"},
    *     path="api/v0/EfetivoPmpr",
    *     description="Return a list with EfetivoPmprs",
    *     @OA\Response(
    *         response=200,
    *         description="A list with EfetivoPmprs",
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
    public function searchGet(EfetivoPmprRequest $request)
    {
        $response = $this->repository->searchGet($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Post(
    *     tags={"EfetivoPmpr"},
    *     path="api/v0/EfetivoPmpr",
    *     description="Return a list with EfetivoPmprs",
    *     @OA\Response(
    *         response=200,
    *         description="A list with EfetivoPmpr",
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
    public function searchPost(EfetivoPmprRequest $request)
    {
        $response = $this->repository->searchPost($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }
}
<?php

namespace App\Http\Controllers\v0;

use App\Http\Controllers\Controller;
use App\Http\Requests\v0\OpmPmprRequest;
use App\Repositories\v0\OpmPmprRepository;

class OpmPmprController extends Controller
{
    protected $repository;
    public function __construct(OpmPmprRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"opmPmpr"},
    *     path="api/v0/opmPmpr",
    *     description="Return a list with opmPmprs",
    *     @OA\Response(
    *         response=200,
    *         description="A list with opmPmprs",
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
    public function searchGet(OpmPmprRequest $request)
    {
        $response = $this->repository->searchGet($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Post(
    *     tags={"opmPmpr"},
    *     path="api/v0/opmPmpr",
    *     description="A list with opmPmpr",
    *     @OA\Response(
    *         response=200,
    *         description="A list with opmPmpr",
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
    public function searchPost(OpmPmprRequest $request)
    {
        $response = $this->repository->searchPost($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

}

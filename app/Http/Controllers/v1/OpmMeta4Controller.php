<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\OpmMeta4Request;
use App\Repositories\v1\OpmMeta4Repository;

class OpmMeta4Controller extends Controller
{
    protected $repository;
    public function __construct(OpmMeta4Repository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"opmMeta4"},
    *     path="api/v1/opmMeta4",
    *     description="Return a list with opmMeta4s",
    *     @OA\Response(
    *         response=200,
    *         description="A list with opmMeta4s",
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
    public function searchGet(OpmMeta4Request $request)
    {
        $response = $this->repository->searchGet($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Post(
    *     tags={"opmMeta4"},
    *     path="api/v1/opmMeta4",
    *     description="A list with opmMeta4",
    *     @OA\Response(
    *         response=200,
    *         description="A list with opmMeta4",
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
    public function searchPost(OpmMeta4Request $request)
    {
        $response = $this->repository->searchPost($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

}

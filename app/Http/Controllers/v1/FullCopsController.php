<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\FullCopsRequest;
use App\Repositories\v1\FullCopsRepository;

class FullCopsController extends Controller
{
    protected $repository;
    public function __construct(FullCopsRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"fullCops"},
    *     path="api/v1/fullCops",
    *     description="Return a list with fullCops",
    *     @OA\Response(
    *         response=200,
    *         description="A list with fullCops",
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
    public function search(FullCopsRequest $request)
    {
        $response = $this->repository->search($request);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }
}

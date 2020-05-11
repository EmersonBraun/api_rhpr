<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\v0\DependentesInativoRequest;
use App\Repositories\v0\DependentesInativoRepository;

class DependentesInativoController extends Controller
{
    protected $repository;
    public function __construct(DependentesInativoRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"DependentesInativo"},
    *     path="api/v0/DependentesInativo",
    *     description="Return a list with DependentesInativos",
    *     @OA\Response(
    *         response=200,
    *         description="A list with DependentesInativos",
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
    public function searchGet(DependentesInativoRequest $request)
    {
        $response = $this->repository->searchGet($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Post(
    *     tags={"DependentesInativo"},
    *     path="api/v0/DependentesInativo",
    *     description="Return a list with DependentesInativos",
    *     @OA\Response(
    *         response=200,
    *         description="A list with DependentesInativo",
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
    public function searchPost(DependentesInativoRequest $request)
    {
        $response = $this->repository->searchPost($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }
}

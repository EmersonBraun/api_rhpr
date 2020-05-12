<?php

namespace App\Http\Controllers\v0;

use App\Http\Controllers\Controller;
use App\Http\Requests\v0\InativosRequest;
use App\Repositories\v0\InativosRepository;

class InativosController extends Controller
{
    protected $repository;
    public function __construct(InativosRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"inativos"},
    *     path="api/v0/inativos",
    *     description="Return a list with inativos",
    *     @OA\Response(
    *         response=200,
    *         description="A list with inativos",
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
    public function search(InativosRequest $request)
    {
        $response = $this->repository->search($request);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }
}

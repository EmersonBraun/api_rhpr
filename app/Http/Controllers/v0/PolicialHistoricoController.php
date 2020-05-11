<?php

namespace App\Http\Controllers\v0;

use App\Http\Controllers\Controller;
use App\Http\Requests\v0\PolicialHistoricoRequest;
use App\Repositories\v0\PolicialHistoricoRepository;

class PolicialHistoricoController extends Controller
{
    protected $repository;
    public function __construct(PolicialHistoricoRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"policialHistorico"},
    *     path="api/v0/policialHistorico",
    *     description="Return a list with policialHistoricos",
    *     @OA\Response(
    *         response=200,
    *         description="A list with policialHistoricos",
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
    public function searchGet(PolicialHistoricoRequest $request)
    {
        $response = $this->repository->searchGet($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Post(
    *     tags={"policialHistorico"},
    *     path="api/v0/policialHistorico",
    *     description="A list with policialHistorico",
    *     @OA\Response(
    *         response=200,
    *         description="A list with policialHistorico",
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
    public function searchPost(PolicialHistoricoRequest $request)
    {
        $response = $this->repository->searchPost($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PolicialhistoricoRequest;
use App\Repositories\PolicialhistoricoRepository;

class PolicialhistoricoController extends Controller
{
    protected $repository;
    public function __construct(PolicialhistoricoRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"policialhistorico"},
    *     path="api/v1/policialhistorico",
    *     description="Return a list with policialhistoricos",
    *     @OA\Response(
    *         response=200,
    *         description="A list with policialhistoricos",
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
    public function index()
    {
        $response = $this->repository->all();
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Post(
    *     tags={"policialhistorico"},
    *     path="api/v1/policialhistorico",
    *     description="Create new policialhistorico",
    *     @OA\Response(
    *         response=200,
    *         description="A created policialhistorico",
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
    public function store(PolicialhistoricoRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"policialhistorico"},
    *     path="api/v1/policialhistorico",
    *     description="Return a specific policialhistorico",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of policialhistorico",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific policialhistorico",
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
    public function show($id)
    {
        $response = $this->repository->findOrFail($id);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Put(
    *     tags={"policialhistorico"},
    *     path="api/v1/policialhistorico",
    *     description="Update a specific policialhistorico",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of policialhistorico",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated policialhistorico",
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
    public function update(PolicialhistoricoRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"policialhistorico"},
    *     path="api/v1/policialhistorico",
    *     description="Remove a specific policialhistoricos",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of policialhistorico",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted policialhistorico",
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
    public function destroy($id)
    {
        $response = $this->repository->findAndDelete($id);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Put(
    *     tags={"policialhistorico"},
    *     path="api/v1/policialhistorico/restore",
    *     description="Restore a specific policialhistorico",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of policialhistorico",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored policialhistorico",
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
    public function restore($id)
    {
        $response = $this->repository->findAndRestore($id);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"policialhistorico"},
    *     path="api/v1/policialhistorico/forceDelete",
    *     description="Remove permanently policialhistorico",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of policialhistorico",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly policialhistorico",
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
    public function forceDelete($id)
    {
        $response = $this->repository->findAndDestroy($id);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

}

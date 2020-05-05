<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\EfetivopmprRequest;
use App\Repositories\EfetivopmprRepository;

class EfetivopmprController extends Controller
{
    protected $repository;
    public function __construct(EfetivopmprRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"efetivopmpr"},
    *     path="api/v1/efetivopmpr",
    *     description="Return a list with efetivopmprs",
    *     @OA\Response(
    *         response=200,
    *         description="A list with efetivopmprs",
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
    *     tags={"efetivopmpr"},
    *     path="api/v1/efetivopmpr",
    *     description="Create new efetivopmpr",
    *     @OA\Response(
    *         response=200,
    *         description="A created efetivopmpr",
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
    public function store(EfetivopmprRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"efetivopmpr"},
    *     path="api/v1/efetivopmpr",
    *     description="Return a specific efetivopmpr",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of efetivopmpr",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific efetivopmpr",
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
    *     tags={"efetivopmpr"},
    *     path="api/v1/efetivopmpr",
    *     description="Update a specific efetivopmpr",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of efetivopmpr",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated efetivopmpr",
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
    public function update(EfetivopmprRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"efetivopmpr"},
    *     path="api/v1/efetivopmpr",
    *     description="Remove a specific efetivopmprs",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of efetivopmpr",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted efetivopmpr",
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
    *     tags={"efetivopmpr"},
    *     path="api/v1/efetivopmpr/restore",
    *     description="Restore a specific efetivopmpr",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of efetivopmpr",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored efetivopmpr",
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
    *     tags={"efetivopmpr"},
    *     path="api/v1/efetivopmpr/forceDelete",
    *     description="Remove permanently efetivopmpr",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of efetivopmpr",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly efetivopmpr",
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

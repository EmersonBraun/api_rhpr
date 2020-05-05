<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PolicialRequest;
use App\Repositories\PolicialRepository;

class PolicialController extends Controller
{
    protected $repository;
    public function __construct(PolicialRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"policial"},
    *     path="api/v1/policial",
    *     description="Return a list with policials",
    *     @OA\Response(
    *         response=200,
    *         description="A list with policials",
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
    *     tags={"policial"},
    *     path="api/v1/policial",
    *     description="Create new policial",
    *     @OA\Response(
    *         response=200,
    *         description="A created policial",
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
    public function store(PolicialRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"policial"},
    *     path="api/v1/policial",
    *     description="Return a specific policial",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of policial",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific policial",
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
    *     tags={"policial"},
    *     path="api/v1/policial",
    *     description="Update a specific policial",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of policial",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated policial",
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
    public function update(PolicialRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"policial"},
    *     path="api/v1/policial",
    *     description="Remove a specific policials",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of policial",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted policial",
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
    *     tags={"policial"},
    *     path="api/v1/policial/restore",
    *     description="Restore a specific policial",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of policial",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored policial",
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
    *     tags={"policial"},
    *     path="api/v1/policial/forceDelete",
    *     description="Remove permanently policial",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of policial",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly policial",
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

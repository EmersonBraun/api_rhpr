<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\EfetivopracasRequest;
use App\Repositories\EfetivopracasRepository;

class EfetivopracasController extends Controller
{
    protected $repository;
    public function __construct(EfetivopracasRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"efetivopracas"},
    *     path="api/v1/efetivopracas",
    *     description="Return a list with efetivopracas",
    *     @OA\Response(
    *         response=200,
    *         description="A list with efetivopracas",
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
    *     tags={"efetivopracas"},
    *     path="api/v1/efetivopracas",
    *     description="Create new efetivopracas",
    *     @OA\Response(
    *         response=200,
    *         description="A created efetivopracas",
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
    public function store(EfetivopracasRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"efetivopracas"},
    *     path="api/v1/efetivopracas",
    *     description="Return a specific efetivopracas",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of efetivopracas",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific efetivopracas",
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
    *     tags={"efetivopracas"},
    *     path="api/v1/efetivopracas",
    *     description="Update a specific efetivopracas",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of efetivopracas",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated efetivopracas",
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
    public function update(EfetivopracasRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"efetivopracas"},
    *     path="api/v1/efetivopracas",
    *     description="Remove a specific efetivopracas",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of efetivopracas",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted efetivopracas",
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
    *     tags={"efetivopracas"},
    *     path="api/v1/efetivopracas/restore",
    *     description="Restore a specific efetivopracas",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of efetivopracas",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored efetivopracas",
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
    *     tags={"efetivopracas"},
    *     path="api/v1/efetivopracas/forceDelete",
    *     description="Remove permanently efetivopracas",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of efetivopracas",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly efetivopracas",
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

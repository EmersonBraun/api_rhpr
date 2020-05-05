<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\FuncprivRequest;
use App\Repositories\FuncprivRepository;

class FuncprivController extends Controller
{
    protected $repository;
    public function __construct(FuncprivRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"funcpriv"},
    *     path="api/v1/funcpriv",
    *     description="Return a list with funcprivs",
    *     @OA\Response(
    *         response=200,
    *         description="A list with funcprivs",
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
    *     tags={"funcpriv"},
    *     path="api/v1/funcpriv",
    *     description="Create new funcpriv",
    *     @OA\Response(
    *         response=200,
    *         description="A created funcpriv",
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
    public function store(FuncprivRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"funcpriv"},
    *     path="api/v1/funcpriv",
    *     description="Return a specific funcpriv",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of funcpriv",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific funcpriv",
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
    *     tags={"funcpriv"},
    *     path="api/v1/funcpriv",
    *     description="Update a specific funcpriv",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of funcpriv",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated funcpriv",
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
    public function update(FuncprivRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"funcpriv"},
    *     path="api/v1/funcpriv",
    *     description="Remove a specific funcprivs",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of funcpriv",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted funcpriv",
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
    *     tags={"funcpriv"},
    *     path="api/v1/funcpriv/restore",
    *     description="Restore a specific funcpriv",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of funcpriv",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored funcpriv",
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
    *     tags={"funcpriv"},
    *     path="api/v1/funcpriv/forceDelete",
    *     description="Remove permanently funcpriv",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of funcpriv",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly funcpriv",
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

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminresponsibleRequest;
use App\Repositories\AdminresponsibleRepository;

class AdminresponsibleController extends Controller
{
    protected $repository;
    public function __construct(AdminresponsibleRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"adminresponsible"},
    *     path="api/v1/adminresponsible",
    *     description="Return a list with adminresponsibles",
    *     @OA\Response(
    *         response=200,
    *         description="A list with adminresponsibles",
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
    *     tags={"adminresponsible"},
    *     path="api/v1/adminresponsible",
    *     description="Create new adminresponsible",
    *     @OA\Response(
    *         response=200,
    *         description="A created adminresponsible",
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
    public function store(AdminresponsibleRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"adminresponsible"},
    *     path="api/v1/adminresponsible",
    *     description="Return a specific adminresponsible",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of adminresponsible",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific adminresponsible",
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
    *     tags={"adminresponsible"},
    *     path="api/v1/adminresponsible",
    *     description="Update a specific adminresponsible",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of adminresponsible",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated adminresponsible",
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
    public function update(AdminresponsibleRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"adminresponsible"},
    *     path="api/v1/adminresponsible",
    *     description="Remove a specific adminresponsibles",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of adminresponsible",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted adminresponsible",
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
    *     tags={"adminresponsible"},
    *     path="api/v1/adminresponsible/restore",
    *     description="Restore a specific adminresponsible",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of adminresponsible",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored adminresponsible",
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
    *     tags={"adminresponsible"},
    *     path="api/v1/adminresponsible/forceDelete",
    *     description="Remove permanently adminresponsible",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of adminresponsible",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly adminresponsible",
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

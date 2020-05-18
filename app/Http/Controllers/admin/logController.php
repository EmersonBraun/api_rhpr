<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminlogRequest;
use App\Repositories\AdminlogRepository;

class AdminlogController extends Controller
{
    protected $repository;
    public function __construct(AdminlogRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"adminlog"},
    *     path="api/v1/adminlog",
    *     description="Return a list with adminlogs",
    *     @OA\Response(
    *         response=200,
    *         description="A list with adminlogs",
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
    *     tags={"adminlog"},
    *     path="api/v1/adminlog",
    *     description="Create new adminlog",
    *     @OA\Response(
    *         response=200,
    *         description="A created adminlog",
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
    public function store(AdminlogRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"adminlog"},
    *     path="api/v1/adminlog",
    *     description="Return a specific adminlog",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of adminlog",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific adminlog",
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
    *     tags={"adminlog"},
    *     path="api/v1/adminlog",
    *     description="Update a specific adminlog",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of adminlog",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated adminlog",
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
    public function update(AdminlogRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"adminlog"},
    *     path="api/v1/adminlog",
    *     description="Remove a specific adminlogs",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of adminlog",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted adminlog",
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
    *     tags={"adminlog"},
    *     path="api/v1/adminlog/restore",
    *     description="Restore a specific adminlog",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of adminlog",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored adminlog",
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
    *     tags={"adminlog"},
    *     path="api/v1/adminlog/forceDelete",
    *     description="Remove permanently adminlog",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of adminlog",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly adminlog",
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

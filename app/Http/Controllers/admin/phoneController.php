<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminphoneRequest;
use App\Repositories\AdminphoneRepository;

class AdminphoneController extends Controller
{
    protected $repository;
    public function __construct(AdminphoneRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"adminphone"},
    *     path="api/v1/adminphone",
    *     description="Return a list with adminphones",
    *     @OA\Response(
    *         response=200,
    *         description="A list with adminphones",
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
    *     tags={"adminphone"},
    *     path="api/v1/adminphone",
    *     description="Create new adminphone",
    *     @OA\Response(
    *         response=200,
    *         description="A created adminphone",
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
    public function store(AdminphoneRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"adminphone"},
    *     path="api/v1/adminphone",
    *     description="Return a specific adminphone",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of adminphone",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific adminphone",
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
    *     tags={"adminphone"},
    *     path="api/v1/adminphone",
    *     description="Update a specific adminphone",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of adminphone",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated adminphone",
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
    public function update(AdminphoneRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"adminphone"},
    *     path="api/v1/adminphone",
    *     description="Remove a specific adminphones",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of adminphone",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted adminphone",
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
    *     tags={"adminphone"},
    *     path="api/v1/adminphone/restore",
    *     description="Restore a specific adminphone",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of adminphone",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored adminphone",
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
    *     tags={"adminphone"},
    *     path="api/v1/adminphone/forceDelete",
    *     description="Remove permanently adminphone",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of adminphone",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly adminphone",
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

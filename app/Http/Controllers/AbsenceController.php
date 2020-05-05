<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AbsenceRequest;
use App\Repositories\AbsenceRepository;

class AbsenceController extends Controller
{
    protected $repository;
    public function __construct(AbsenceRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"absence"},
    *     path="api/v1/absence",
    *     description="Return a list with absences",
    *     @OA\Response(
    *         response=200,
    *         description="A list with absences",
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
    *     tags={"absence"},
    *     path="api/v1/absence",
    *     description="Create new absence",
    *     @OA\Response(
    *         response=200,
    *         description="A created absence",
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
    public function store(AbsenceRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"absence"},
    *     path="api/v1/absence",
    *     description="Return a specific absence",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of absence",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific absence",
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
    *     tags={"absence"},
    *     path="api/v1/absence",
    *     description="Update a specific absence",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of absence",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated absence",
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
    public function update(AbsenceRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"absence"},
    *     path="api/v1/absence",
    *     description="Remove a specific absences",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of absence",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted absence",
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
    *     tags={"absence"},
    *     path="api/v1/absence/restore",
    *     description="Restore a specific absence",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of absence",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored absence",
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
    *     tags={"absence"},
    *     path="api/v1/absence/forceDelete",
    *     description="Remove permanently absence",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of absence",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly absence",
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

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\DependentesinativoRequest;
use App\Repositories\DependentesinativoRepository;

class DependentesinativoController extends Controller
{
    protected $repository;
    public function __construct(DependentesinativoRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"dependentesinativo"},
    *     path="api/v1/dependentesinativo",
    *     description="Return a list with dependentesinativos",
    *     @OA\Response(
    *         response=200,
    *         description="A list with dependentesinativos",
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
    *     tags={"dependentesinativo"},
    *     path="api/v1/dependentesinativo",
    *     description="Create new dependentesinativo",
    *     @OA\Response(
    *         response=200,
    *         description="A created dependentesinativo",
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
    public function store(DependentesinativoRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"dependentesinativo"},
    *     path="api/v1/dependentesinativo",
    *     description="Return a specific dependentesinativo",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of dependentesinativo",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific dependentesinativo",
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
    *     tags={"dependentesinativo"},
    *     path="api/v1/dependentesinativo",
    *     description="Update a specific dependentesinativo",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of dependentesinativo",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated dependentesinativo",
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
    public function update(DependentesinativoRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"dependentesinativo"},
    *     path="api/v1/dependentesinativo",
    *     description="Remove a specific dependentesinativos",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of dependentesinativo",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted dependentesinativo",
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
    *     tags={"dependentesinativo"},
    *     path="api/v1/dependentesinativo/restore",
    *     description="Restore a specific dependentesinativo",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of dependentesinativo",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored dependentesinativo",
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
    *     tags={"dependentesinativo"},
    *     path="api/v1/dependentesinativo/forceDelete",
    *     description="Remove permanently dependentesinativo",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of dependentesinativo",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly dependentesinativo",
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

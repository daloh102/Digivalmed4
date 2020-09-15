<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRayStationtwoIoRequest;
use App\Http\Requests\UpdateRayStationtwoIoRequest;
use App\Http\Resources\Admin\RayStationtwoIoResource;
use App\RayStationtwoIo;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RayStationtwoIoApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('ray_stationtwo_io_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new RayStationtwoIoResource(RayStationtwoIo::all());
    }

    public function store(StoreRayStationtwoIoRequest $request)
    {
        $rayStationtwoIo = RayStationtwoIo::create($request->all());

        return (new RayStationtwoIoResource($rayStationtwoIo))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(RayStationtwoIo $rayStationtwoIo)
    {
        abort_if(Gate::denies('ray_stationtwo_io_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new RayStationtwoIoResource($rayStationtwoIo);
    }

    public function update(UpdateRayStationtwoIoRequest $request, RayStationtwoIo $rayStationtwoIo)
    {
        $rayStationtwoIo->update($request->all());

        return (new RayStationtwoIoResource($rayStationtwoIo))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(RayStationtwoIo $rayStationtwoIo)
    {
        abort_if(Gate::denies('ray_stationtwo_io_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $rayStationtwoIo->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

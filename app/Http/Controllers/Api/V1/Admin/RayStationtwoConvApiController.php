<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRayStationtwoConvRequest;
use App\Http\Requests\UpdateRayStationtwoConvRequest;
use App\Http\Resources\Admin\RayStationtwoConvResource;
use App\RayStationtwoConv;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RayStationtwoConvApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('ray_stationtwo_conv_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new RayStationtwoConvResource(RayStationtwoConv::all());
    }

    public function store(StoreRayStationtwoConvRequest $request)
    {
        $rayStationtwoConv = RayStationtwoConv::create($request->all());

        return (new RayStationtwoConvResource($rayStationtwoConv))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(RayStationtwoConv $rayStationtwoConv)
    {
        abort_if(Gate::denies('ray_stationtwo_conv_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new RayStationtwoConvResource($rayStationtwoConv);
    }

    public function update(UpdateRayStationtwoConvRequest $request, RayStationtwoConv $rayStationtwoConv)
    {
        $rayStationtwoConv->update($request->all());

        return (new RayStationtwoConvResource($rayStationtwoConv))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(RayStationtwoConv $rayStationtwoConv)
    {
        abort_if(Gate::denies('ray_stationtwo_conv_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $rayStationtwoConv->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

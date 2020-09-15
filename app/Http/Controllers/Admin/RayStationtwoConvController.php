<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyRayStationtwoConvRequest;
use App\Http\Requests\StoreRayStationtwoConvRequest;
use App\Http\Requests\UpdateRayStationtwoConvRequest;
use App\RayStationtwoConv;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RayStationtwoConvController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('ray_stationtwo_conv_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $rayStationtwoConvs = RayStationtwoConv::all();

        return view('admin.rayStationtwoConvs.index', compact('rayStationtwoConvs'));
    }

    public function create()
    {
        abort_if(Gate::denies('ray_stationtwo_conv_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.rayStationtwoConvs.create');
    }

    public function store(StoreRayStationtwoConvRequest $request)
    {
        $rayStationtwoConv = RayStationtwoConv::create($request->all());

        return redirect()->route('admin.ray-stationtwo-convs.index');
    }

    public function edit(RayStationtwoConv $rayStationtwoConv)
    {
        abort_if(Gate::denies('ray_stationtwo_conv_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.rayStationtwoConvs.edit', compact('rayStationtwoConv'));
    }

    public function update(UpdateRayStationtwoConvRequest $request, RayStationtwoConv $rayStationtwoConv)
    {
        $rayStationtwoConv->update($request->all());

        return redirect()->route('admin.ray-stationtwo-convs.index');
    }

    public function show(RayStationtwoConv $rayStationtwoConv)
    {
        abort_if(Gate::denies('ray_stationtwo_conv_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.rayStationtwoConvs.show', compact('rayStationtwoConv'));
    }

    public function destroy(RayStationtwoConv $rayStationtwoConv)
    {
        abort_if(Gate::denies('ray_stationtwo_conv_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $rayStationtwoConv->delete();

        return back();
    }

    public function massDestroy(MassDestroyRayStationtwoConvRequest $request)
    {
        RayStationtwoConv::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

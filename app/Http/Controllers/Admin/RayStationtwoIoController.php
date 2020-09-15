<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyRayStationtwoIoRequest;
use App\Http\Requests\StoreRayStationtwoIoRequest;
use App\Http\Requests\UpdateRayStationtwoIoRequest;
use App\RayStationtwoIo;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RayStationtwoIoController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('ray_stationtwo_io_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $rayStationtwoIos = RayStationtwoIo::all();

        return view('admin.rayStationtwoIos.index', compact('rayStationtwoIos'));
    }

    public function create()
    {
        abort_if(Gate::denies('ray_stationtwo_io_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.rayStationtwoIos.create');
    }

    public function store(StoreRayStationtwoIoRequest $request)
    {
        $rayStationtwoIo = RayStationtwoIo::create($request->all());

        return redirect()->route('admin.ray-stationtwo-ios.index');
    }

    public function edit(RayStationtwoIo $rayStationtwoIo)
    {
        abort_if(Gate::denies('ray_stationtwo_io_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.rayStationtwoIos.edit', compact('rayStationtwoIo'));
    }

    public function update(UpdateRayStationtwoIoRequest $request, RayStationtwoIo $rayStationtwoIo)
    {
        $rayStationtwoIo->update($request->all());

        return redirect()->route('admin.ray-stationtwo-ios.index');
    }

    public function show(RayStationtwoIo $rayStationtwoIo)
    {
        abort_if(Gate::denies('ray_stationtwo_io_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.rayStationtwoIos.show', compact('rayStationtwoIo'));
    }

    public function destroy(RayStationtwoIo $rayStationtwoIo)
    {
        abort_if(Gate::denies('ray_stationtwo_io_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $rayStationtwoIo->delete();

        return back();
    }

    public function massDestroy(MassDestroyRayStationtwoIoRequest $request)
    {
        RayStationtwoIo::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

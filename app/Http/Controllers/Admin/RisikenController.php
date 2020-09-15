<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyRisikenRequest;
use App\Http\Requests\StoreRisikenRequest;
use App\Http\Requests\UpdateRisikenRequest;
use App\Risiken;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RisikenController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('risiken_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $risikens = Risiken::all();

        return view('admin.risikens.index', compact('risikens'));
    }

    public function create()
    {
        abort_if(Gate::denies('risiken_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.risikens.create');
    }

    public function store(StoreRisikenRequest $request)
    {
        $risiken = Risiken::create($request->all());

        return redirect()->route('admin.risikens.index');
    }

    public function edit(Risiken $risiken)
    {
        abort_if(Gate::denies('risiken_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.risikens.edit', compact('risiken'));
    }

    public function update(UpdateRisikenRequest $request, Risiken $risiken)
    {
        $risiken->update($request->all());

        return redirect()->route('admin.risikens.index');
    }

    public function show(Risiken $risiken)
    {
        abort_if(Gate::denies('risiken_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.risikens.show', compact('risiken'));
    }

    public function destroy(Risiken $risiken)
    {
        abort_if(Gate::denies('risiken_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $risiken->delete();

        return back();
    }

    public function massDestroy(MassDestroyRisikenRequest $request)
    {
        Risiken::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

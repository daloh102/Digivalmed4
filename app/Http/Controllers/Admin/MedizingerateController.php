<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyMedizingerateRequest;
use App\Http\Requests\StoreMedizingerateRequest;
use App\Http\Requests\UpdateMedizingerateRequest;
use App\Medizingerate;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MedizingerateController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('medizingerate_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $medizingerates = Medizingerate::all();

        return view('admin.medizingerates.index', compact('medizingerates'));
    }

    public function create()
    {
        abort_if(Gate::denies('medizingerate_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.medizingerates.create');
    }

    public function store(StoreMedizingerateRequest $request)
    {
        $medizingerate = Medizingerate::create($request->all());

        return redirect()->route('admin.medizingerates.index');
    }

    public function edit(Medizingerate $medizingerate)
    {
        abort_if(Gate::denies('medizingerate_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.medizingerates.edit', compact('medizingerate'));
    }

    public function update(UpdateMedizingerateRequest $request, Medizingerate $medizingerate)
    {
        $medizingerate->update($request->all());

        return redirect()->route('admin.medizingerates.index');
    }

    public function show(Medizingerate $medizingerate)
    {
        abort_if(Gate::denies('medizingerate_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.medizingerates.show', compact('medizingerate'));
    }

    public function destroy(Medizingerate $medizingerate)
    {
        abort_if(Gate::denies('medizingerate_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $medizingerate->delete();

        return back();
    }

    public function massDestroy(MassDestroyMedizingerateRequest $request)
    {
        Medizingerate::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

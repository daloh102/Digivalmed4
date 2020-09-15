<?php

namespace App\Http\Controllers\Admin;

use App\DicomNamerIo;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyDicomNamerIoRequest;
use App\Http\Requests\StoreDicomNamerIoRequest;
use App\Http\Requests\UpdateDicomNamerIoRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DicomNamerIoController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('dicom_namer_io_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $dicomNamerIos = DicomNamerIo::all();

        return view('admin.dicomNamerIos.index', compact('dicomNamerIos'));
    }

    public function create()
    {
        abort_if(Gate::denies('dicom_namer_io_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.dicomNamerIos.create');
    }

    public function store(StoreDicomNamerIoRequest $request)
    {
        $dicomNamerIo = DicomNamerIo::create($request->all());

        return redirect()->route('admin.dicom-namer-ios.index');
    }

    public function edit(DicomNamerIo $dicomNamerIo)
    {
        abort_if(Gate::denies('dicom_namer_io_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.dicomNamerIos.edit', compact('dicomNamerIo'));
    }

    public function update(UpdateDicomNamerIoRequest $request, DicomNamerIo $dicomNamerIo)
    {
        $dicomNamerIo->update($request->all());

        return redirect()->route('admin.dicom-namer-ios.index');
    }

    public function show(DicomNamerIo $dicomNamerIo)
    {
        abort_if(Gate::denies('dicom_namer_io_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.dicomNamerIos.show', compact('dicomNamerIo'));
    }

    public function destroy(DicomNamerIo $dicomNamerIo)
    {
        abort_if(Gate::denies('dicom_namer_io_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $dicomNamerIo->delete();

        return back();
    }

    public function massDestroy(MassDestroyDicomNamerIoRequest $request)
    {
        DicomNamerIo::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

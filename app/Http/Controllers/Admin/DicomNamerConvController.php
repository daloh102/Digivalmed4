<?php

namespace App\Http\Controllers\Admin;

use App\DicomNamerConv;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyDicomNamerConvRequest;
use App\Http\Requests\StoreDicomNamerConvRequest;
use App\Http\Requests\UpdateDicomNamerConvRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DicomNamerConvController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('dicom_namer_conv_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $dicomNamerConvs = DicomNamerConv::all();

        return view('admin.dicomNamerConvs.index', compact('dicomNamerConvs'));
    }

    public function create()
    {
        abort_if(Gate::denies('dicom_namer_conv_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.dicomNamerConvs.create');
    }

    public function store(StoreDicomNamerConvRequest $request)
    {
        $dicomNamerConv = DicomNamerConv::create($request->all());

        return redirect()->route('admin.dicom-namer-convs.index');
    }

    public function edit(DicomNamerConv $dicomNamerConv)
    {
        abort_if(Gate::denies('dicom_namer_conv_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.dicomNamerConvs.edit', compact('dicomNamerConv'));
    }

    public function update(UpdateDicomNamerConvRequest $request, DicomNamerConv $dicomNamerConv)
    {
        $dicomNamerConv->update($request->all());

        return redirect()->route('admin.dicom-namer-convs.index');
    }

    public function show(DicomNamerConv $dicomNamerConv)
    {
        abort_if(Gate::denies('dicom_namer_conv_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.dicomNamerConvs.show', compact('dicomNamerConv'));
    }

    public function destroy(DicomNamerConv $dicomNamerConv)
    {
        abort_if(Gate::denies('dicom_namer_conv_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $dicomNamerConv->delete();

        return back();
    }

    public function massDestroy(MassDestroyDicomNamerConvRequest $request)
    {
        DicomNamerConv::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

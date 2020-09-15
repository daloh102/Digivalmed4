<?php

namespace App\Http\Controllers\Admin;

use App\DicomNamerCbcT;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyDicomNamerCbcTRequest;
use App\Http\Requests\StoreDicomNamerCbcTRequest;
use App\Http\Requests\UpdateDicomNamerCbcTRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DicomNamerCbcTsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('dicom_namer_cbc_t_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $dicomNamerCbcTs = DicomNamerCbcT::all();

        return view('admin.dicomNamerCbcTs.index', compact('dicomNamerCbcTs'));
    }

    public function create()
    {
        abort_if(Gate::denies('dicom_namer_cbc_t_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.dicomNamerCbcTs.create');
    }

    public function store(StoreDicomNamerCbcTRequest $request)
    {
        $dicomNamerCbcT = DicomNamerCbcT::create($request->all());

        return redirect()->route('admin.dicom-namer-cbc-ts.index');
    }

    public function edit(DicomNamerCbcT $dicomNamerCbcT)
    {
        abort_if(Gate::denies('dicom_namer_cbc_t_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.dicomNamerCbcTs.edit', compact('dicomNamerCbcT'));
    }

    public function update(UpdateDicomNamerCbcTRequest $request, DicomNamerCbcT $dicomNamerCbcT)
    {
        $dicomNamerCbcT->update($request->all());

        return redirect()->route('admin.dicom-namer-cbc-ts.index');
    }

    public function show(DicomNamerCbcT $dicomNamerCbcT)
    {
        abort_if(Gate::denies('dicom_namer_cbc_t_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.dicomNamerCbcTs.show', compact('dicomNamerCbcT'));
    }

    public function destroy(DicomNamerCbcT $dicomNamerCbcT)
    {
        abort_if(Gate::denies('dicom_namer_cbc_t_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $dicomNamerCbcT->delete();

        return back();
    }

    public function massDestroy(MassDestroyDicomNamerCbcTRequest $request)
    {
        DicomNamerCbcT::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

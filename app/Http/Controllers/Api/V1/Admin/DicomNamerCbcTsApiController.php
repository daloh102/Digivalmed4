<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\DicomNamerCbcT;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDicomNamerCbcTRequest;
use App\Http\Requests\UpdateDicomNamerCbcTRequest;
use App\Http\Resources\Admin\DicomNamerCbcTResource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DicomNamerCbcTsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('dicom_namer_cbc_t_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new DicomNamerCbcTResource(DicomNamerCbcT::all());
    }

    public function store(StoreDicomNamerCbcTRequest $request)
    {
        $dicomNamerCbcT = DicomNamerCbcT::create($request->all());

        return (new DicomNamerCbcTResource($dicomNamerCbcT))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(DicomNamerCbcT $dicomNamerCbcT)
    {
        abort_if(Gate::denies('dicom_namer_cbc_t_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new DicomNamerCbcTResource($dicomNamerCbcT);
    }

    public function update(UpdateDicomNamerCbcTRequest $request, DicomNamerCbcT $dicomNamerCbcT)
    {
        $dicomNamerCbcT->update($request->all());

        return (new DicomNamerCbcTResource($dicomNamerCbcT))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(DicomNamerCbcT $dicomNamerCbcT)
    {
        abort_if(Gate::denies('dicom_namer_cbc_t_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $dicomNamerCbcT->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

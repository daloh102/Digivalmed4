<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\DicomNamerConv;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDicomNamerConvRequest;
use App\Http\Requests\UpdateDicomNamerConvRequest;
use App\Http\Resources\Admin\DicomNamerConvResource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DicomNamerConvApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('dicom_namer_conv_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new DicomNamerConvResource(DicomNamerConv::all());
    }

    public function store(StoreDicomNamerConvRequest $request)
    {
        $dicomNamerConv = DicomNamerConv::create($request->all());

        return (new DicomNamerConvResource($dicomNamerConv))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(DicomNamerConv $dicomNamerConv)
    {
        abort_if(Gate::denies('dicom_namer_conv_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new DicomNamerConvResource($dicomNamerConv);
    }

    public function update(UpdateDicomNamerConvRequest $request, DicomNamerConv $dicomNamerConv)
    {
        $dicomNamerConv->update($request->all());

        return (new DicomNamerConvResource($dicomNamerConv))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(DicomNamerConv $dicomNamerConv)
    {
        abort_if(Gate::denies('dicom_namer_conv_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $dicomNamerConv->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\DicomNamerIo;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDicomNamerIoRequest;
use App\Http\Requests\UpdateDicomNamerIoRequest;
use App\Http\Resources\Admin\DicomNamerIoResource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DicomNamerIoApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('dicom_namer_io_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new DicomNamerIoResource(DicomNamerIo::all());
    }

    public function store(StoreDicomNamerIoRequest $request)
    {
        $dicomNamerIo = DicomNamerIo::create($request->all());

        return (new DicomNamerIoResource($dicomNamerIo))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(DicomNamerIo $dicomNamerIo)
    {
        abort_if(Gate::denies('dicom_namer_io_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new DicomNamerIoResource($dicomNamerIo);
    }

    public function update(UpdateDicomNamerIoRequest $request, DicomNamerIo $dicomNamerIo)
    {
        $dicomNamerIo->update($request->all());

        return (new DicomNamerIoResource($dicomNamerIo))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(DicomNamerIo $dicomNamerIo)
    {
        abort_if(Gate::denies('dicom_namer_io_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $dicomNamerIo->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

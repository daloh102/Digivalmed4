<?php

namespace App\Http\Requests;

use App\DicomNamerIo;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyDicomNamerIoRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('dicom_namer_io_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:dicom_namer_ios,id',
        ];
    }
}

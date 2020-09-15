<?php

namespace App\Http\Requests;

use App\DicomNamerCbcT;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyDicomNamerCbcTRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('dicom_namer_cbc_t_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:dicom_namer_cbc_ts,id',
        ];
    }
}

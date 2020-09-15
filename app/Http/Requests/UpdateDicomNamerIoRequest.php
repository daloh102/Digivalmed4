<?php

namespace App\Http\Requests;

use App\DicomNamerIo;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateDicomNamerIoRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('dicom_namer_io_edit');
    }

    public function rules()
    {
        return [
            'bytes' => [
                'string',
                'required',
            ],
        ];
    }
}

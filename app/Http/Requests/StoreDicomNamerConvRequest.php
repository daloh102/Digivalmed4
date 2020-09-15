<?php

namespace App\Http\Requests;

use App\DicomNamerConv;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreDicomNamerConvRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('dicom_namer_conv_create');
    }

    public function rules()
    {
        return [
            'source_ip'     => [
                'string',
                'required',
            ],
            'dest_ip'       => [
                'string',
                'required',
            ],
            'protokoll'     => [
                'string',
                'required',
            ],
            'medizingeraet' => [
                'string',
                'required',
            ],
        ];
    }
}

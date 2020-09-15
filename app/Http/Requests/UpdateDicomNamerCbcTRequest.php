<?php

namespace App\Http\Requests;

use App\DicomNamerCbcT;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateDicomNamerCbcTRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('dicom_namer_cbc_t_edit');
    }

    public function rules()
    {
        return [
            'name'        => [
                'string',
                'required',
            ],
            'patientenid' => [
                'string',
                'required',
            ],
            'kv'          => [
                'string',
                'required',
            ],
        ];
    }
}

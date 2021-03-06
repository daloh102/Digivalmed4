<?php

namespace App\Http\Requests;

use App\RayStationtwoConv;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreRayStationtwoConvRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('ray_stationtwo_conv_create');
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

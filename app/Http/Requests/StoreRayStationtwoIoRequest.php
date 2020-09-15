<?php

namespace App\Http\Requests;

use App\RayStationtwoIo;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreRayStationtwoIoRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('ray_stationtwo_io_create');
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

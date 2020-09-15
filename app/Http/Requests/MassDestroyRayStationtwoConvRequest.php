<?php

namespace App\Http\Requests;

use App\RayStationtwoConv;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyRayStationtwoConvRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('ray_stationtwo_conv_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:ray_stationtwo_convs,id',
        ];
    }
}

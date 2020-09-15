<?php

namespace App\Http\Requests;

use App\RayStationtwoIo;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyRayStationtwoIoRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('ray_stationtwo_io_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:ray_stationtwo_ios,id',
        ];
    }
}

<?php

namespace App\Http\Requests;

use App\Medizingerate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyMedizingerateRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('medizingerate_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:medizingerates,id',
        ];
    }
}

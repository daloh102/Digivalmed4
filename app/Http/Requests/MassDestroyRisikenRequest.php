<?php

namespace App\Http\Requests;

use App\Risiken;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyRisikenRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('risiken_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:risikens,id',
        ];
    }
}

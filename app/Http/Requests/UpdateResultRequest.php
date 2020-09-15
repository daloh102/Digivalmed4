<?php

namespace App\Http\Requests;

use App\Result;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateResultRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('result_edit');
    }

    public function rules()
    {
        return [
            'name'                               => [
                'string',
                'required',
            ],
            'eaid'                               => [
                'string',
                'required',
            ],
            'ebene'                              => [
                'string',
                'required',
            ],
            'risiko'                             => [
                'string',
                'required',
            ],
            'risikoid'                           => [
                'string',
                'required',
            ],
            'url'                                => [
                'string',
                'required',
            ],
            'source'                             => [
                'string',
                'required',
            ],
            'auswirkung_netto'                   => [
                'string',
                'required',
            ],
            'auswirkung_brutto'                  => [
                'string',
                'required',
            ],
            'eintrittswahrscheinlichkeit_brutto' => [
                'string',
                'required',
            ],
            'eintrittswahrscheinlichkeit_netto'  => [
                'string',
                'nullable',
            ],
        ];
    }
}

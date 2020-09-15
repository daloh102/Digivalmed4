<?php

namespace App\Http\Requests;

use App\Risiken;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreRisikenRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('risiken_create');
    }

    public function rules()
    {
        return [
            'eaid'                               => [
                'string',
                'required',
            ],
            'risiko'                             => [
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
            'auswirkung_brutto'                  => [
                'string',
                'required',
            ],
            'auswirkung_netto'                   => [
                'string',
                'required',
            ],
            'eintrittswahrscheinlichkeit_brutto' => [
                'string',
                'required',
            ],
            'eintrittswahrscheinlichkeit_netto'  => [
                'string',
                'required',
            ],
        ];
    }
}

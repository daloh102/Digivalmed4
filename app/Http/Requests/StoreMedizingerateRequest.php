<?php

namespace App\Http\Requests;

use App\Medizingerate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreMedizingerateRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('medizingerate_create');
    }

    public function rules()
    {
        return [
            'name'            => [
                'string',
                'required',
            ],
            'ip'              => [
                'string',
                'required',
            ],
            'dns_suffix'      => [
                'string',
                'required',
            ],
            'mac'             => [
                'string',
                'required',
            ],
            'ansprechpartner' => [
                'string',
                'required',
            ],
            'notizen'         => [
                'string',
                'nullable',
            ],
        ];
    }
}

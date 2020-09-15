<?php

namespace App\Http\Requests;

use App\Workflow;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreWorkflowRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('workflow_create');
    }

    public function rules()
    {
        return [
            'name'  => [
                'string',
                'required',
            ],
            'ebene' => [
                'string',
                'required',
            ],
            'eaid'  => [
                'string',
                'required',
            ],
        ];
    }
}

<?php

namespace App\Http\Requests;

use App\WorkflowPath;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreWorkflowPathRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('workflow_path_create');
    }

    public function rules()
    {
        return [
            'nummer' => [
                'string',
                'required',
            ],
            'name'   => [
                'string',
                'required',
            ],
            'eaid'   => [
                'string',
                'required',
            ],
        ];
    }
}

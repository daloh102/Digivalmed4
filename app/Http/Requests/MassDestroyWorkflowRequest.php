<?php

namespace App\Http\Requests;

use App\Workflow;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyWorkflowRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('workflow_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:workflows,id',
        ];
    }
}

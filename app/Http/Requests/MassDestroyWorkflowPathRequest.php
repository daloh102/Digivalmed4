<?php

namespace App\Http\Requests;

use App\WorkflowPath;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyWorkflowPathRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('workflow_path_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:workflow_paths,id',
        ];
    }
}

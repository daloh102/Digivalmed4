<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMedizingerateRequest;
use App\Http\Requests\UpdateMedizingerateRequest;
use App\Http\Resources\Admin\MedizingerateResource;
use App\Medizingerate;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MedizingerateApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('medizingerate_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MedizingerateResource(Medizingerate::all());
    }

    public function store(StoreMedizingerateRequest $request)
    {
        $medizingerate = Medizingerate::create($request->all());

        return (new MedizingerateResource($medizingerate))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Medizingerate $medizingerate)
    {
        abort_if(Gate::denies('medizingerate_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MedizingerateResource($medizingerate);
    }

    public function update(UpdateMedizingerateRequest $request, Medizingerate $medizingerate)
    {
        $medizingerate->update($request->all());

        return (new MedizingerateResource($medizingerate))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Medizingerate $medizingerate)
    {
        abort_if(Gate::denies('medizingerate_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $medizingerate->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

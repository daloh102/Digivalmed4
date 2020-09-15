<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRisikenRequest;
use App\Http\Requests\UpdateRisikenRequest;
use App\Http\Resources\Admin\RisikenResource;
use App\Risiken;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RisikenApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('risiken_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new RisikenResource(Risiken::all());
    }

    public function store(StoreRisikenRequest $request)
    {
        $risiken = Risiken::create($request->all());

        return (new RisikenResource($risiken))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Risiken $risiken)
    {
        abort_if(Gate::denies('risiken_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new RisikenResource($risiken);
    }

    public function update(UpdateRisikenRequest $request, Risiken $risiken)
    {
        $risiken->update($request->all());

        return (new RisikenResource($risiken))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Risiken $risiken)
    {
        abort_if(Gate::denies('risiken_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $risiken->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

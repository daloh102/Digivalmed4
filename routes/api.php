<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Medizingerates
    Route::apiResource('medizingerates', 'MedizingerateApiController');

    // Workflows
    Route::apiResource('workflows', 'WorkflowsApiController');

    // Workflow Paths
    Route::apiResource('workflow-paths', 'WorkflowPathApiController');

    // Risikens
    Route::apiResource('risikens', 'RisikenApiController');

    // Results
    Route::apiResource('results', 'ResultApiController');

    // Dicom Namer Ios
    Route::apiResource('dicom-namer-ios', 'DicomNamerIoApiController');

    // Dicom Namer Cbc Ts
    Route::apiResource('dicom-namer-cbc-ts', 'DicomNamerCbcTsApiController');

    // Dicom Namer Convs
    Route::apiResource('dicom-namer-convs', 'DicomNamerConvApiController');

    // Ray Stationtwo Ios
    Route::apiResource('ray-stationtwo-ios', 'RayStationtwoIoApiController');

    // Ray Stationtwo Convs
    Route::apiResource('ray-stationtwo-convs', 'RayStationtwoConvApiController');
});

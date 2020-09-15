<?php

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes();
Route::get('userVerification/{token}', 'UserVerificationController@approve')->name('userVerification');
// Admin

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Medizingerates
    Route::delete('medizingerates/destroy', 'MedizingerateController@massDestroy')->name('medizingerates.massDestroy');
    Route::resource('medizingerates', 'MedizingerateController');

    // Workflows
    Route::delete('workflows/destroy', 'WorkflowsController@massDestroy')->name('workflows.massDestroy');
    Route::resource('workflows', 'WorkflowsController');

    // Workflow Paths
    Route::delete('workflow-paths/destroy', 'WorkflowPathController@massDestroy')->name('workflow-paths.massDestroy');
    Route::resource('workflow-paths', 'WorkflowPathController');

    // Risikens
    Route::delete('risikens/destroy', 'RisikenController@massDestroy')->name('risikens.massDestroy');
    Route::resource('risikens', 'RisikenController');

    // Results
    Route::delete('results/destroy', 'ResultController@massDestroy')->name('results.massDestroy');
    Route::resource('results', 'ResultController');

    // Dicom Namer Ios
    Route::delete('dicom-namer-ios/destroy', 'DicomNamerIoController@massDestroy')->name('dicom-namer-ios.massDestroy');
    Route::resource('dicom-namer-ios', 'DicomNamerIoController');

    // Dicom Namer Cbc Ts
    Route::delete('dicom-namer-cbc-ts/destroy', 'DicomNamerCbcTsController@massDestroy')->name('dicom-namer-cbc-ts.massDestroy');
    Route::resource('dicom-namer-cbc-ts', 'DicomNamerCbcTsController');

    // Dicom Namer Convs
    Route::delete('dicom-namer-convs/destroy', 'DicomNamerConvController@massDestroy')->name('dicom-namer-convs.massDestroy');
    Route::resource('dicom-namer-convs', 'DicomNamerConvController');

    // Ray Stationtwo Ios
    Route::delete('ray-stationtwo-ios/destroy', 'RayStationtwoIoController@massDestroy')->name('ray-stationtwo-ios.massDestroy');
    Route::resource('ray-stationtwo-ios', 'RayStationtwoIoController');

    // Ray Stationtwo Convs
    Route::delete('ray-stationtwo-convs/destroy', 'RayStationtwoConvController@massDestroy')->name('ray-stationtwo-convs.massDestroy');
    Route::resource('ray-stationtwo-convs', 'RayStationtwoConvController');

    // Audit Logs
    Route::resource('audit-logs', 'AuditLogsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    Route::get('global-search', 'GlobalSearchController@search')->name('globalSearch');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
// Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
    }
});

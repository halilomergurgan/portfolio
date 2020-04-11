<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/Home', 'HomeController@index');
Route::get('/Portfolio', 'HomeController@portfolio');
Route::get('/About', 'HomeController@about');
Route::get('/Portfolio', 'HomeController@portfolio');
Route::get('/Contact', 'HomeController@contact');
Route::get('/Journal', 'HomeController@journal');
Route::get('/Project/{id}', 'HomeController@project');


Route::group(array('namespace' => 'admin'), function () {

    Route::get('admin/', function () {return view('admin.index');});

    // Project
    Route::get('admin/project/', 'ProjectController@index');
    Route::get('admin/project/edit/{id}', 'ProjectController@edit');
    Route::post('admin/project/update', 'ProjectController@update');
    Route::get('admin/project/delete/{id}', 'ProjectController@delete');
    Route::get('admin/project/create', [
        'uses' => 'ProjectController@create',
        'as' => 'admin.project.create'
    ]);
    Route::get('admin/project/data', [
        'uses' => 'ProjectController@data',
        'as' => 'admin.project.data'
    ]);

    Route::post('admin/project/store', [
        'uses' => 'ProjectController@store',
        'as' => 'admin.project.store'
    ]);

    // Tag
    Route::get('admin/tag/', 'TagController@index');
    Route::get('admin/tag/edit/{id}', 'TagController@edit');
    Route::post('admin/tag/update', 'TagController@update');
    Route::get('admin/tag/delete/{id}', 'TagController@delete');
    Route::get('admin/tag/create', [
        'uses' => 'TagController@create',
        'as' => 'admin.tag.create'
    ]);
    Route::get('admin/tag/data', [
        'uses' => 'TagController@data',
        'as' => 'admin.tag.data'
    ]);

    Route::post('admin/tag/store', [
        'uses' => 'TagController@store',
        'as' => 'admin.tag.store'
    ]);

    // Image
    Route::get('admin/image/', 'ImageController@index');
    Route::get('admin/image/edit/{id}', 'ImageController@edit');
    Route::post('admin/image/update', 'ImageController@update');
    Route::get('admin/image/delete/{id}', 'ImageController@delete');
    Route::get('admin/image/create', [
        'uses' => 'ImageController@create',
        'as' => 'admin.image.create'
    ]);
    Route::get('admin/image/data', [
        'uses' => 'ImageController@data',
        'as' => 'admin.image.data'
    ]);

    Route::post('admin/image/store', [
        'uses' => 'ImageController@store',
        'as' => 'admin.image.store'
    ]);

});

Route::get('storage/{filename}', function ( $filename)
{
    $path = storage_path('app/'. $filename);
    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});
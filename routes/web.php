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

Route::any('/{page}', function ($page) {
    return view('admin.dashboard');
});
Route::get('/contact', function () {
    // redirect('/contact');
    return view('contact');
});
Route::get('components', function () {
    return view('components');
});
Route::get('admin/users/create', 'UsersController@create');
Route::post('admin/users/store', 'UsersController@store');
Route::any('{parent} / {page}', function ($parent, $page) {
    if (view()->exists($parent . ' . ' . $page)) {
        return view()->make($parent . ' . ' . $page, $data);
        // return view($parent . ' . ' . $page);
    }
});

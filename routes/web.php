<?php

Route::name('products.')->group(function () {
    Route::put('products/{id}', 'ProductController@update')->name('update');
    Route::get('products/{id}/edit', 'ProductController@edit')->name('edit');
    Route::get('products/create', 'ProductController@create')->name('create');
    Route::get('products/{id}', 'ProductController@show')->name('show');
    Route::get('products', 'ProductController@index')->name('index');
    Route::post('products', 'ProductController@store')->name('store');
});



//rota de login caso entre do middleware auth
Route::get('/login', function () {
    return 'Login';
})->name('login');


Route::get('/', function () {
    return view('welcome');
});

<?php

Route::any('products/search', 'ProductController@search')->name('products.search')->middleware('auth');

// CRUD nas rotas simplificado
Route::resource('products', 'ProductController')->middleware(['auth', 'check.is.admin']);

// CRUD nas rotas mais verboso
/* Route::name('products.')->group(function () {
    Route::delete('products/{id}', 'ProductController@destroy')->name('destroy');
    Route::put('products/{id}', 'ProductController@update')->name('update');
    Route::get('products/{id}/edit', 'ProductController@edit')->name('edit');
    Route::get('products/create', 'ProductController@create')->name('create');
    Route::get('products/{id}', 'ProductController@show')->name('show');
    Route::get('products', 'ProductController@index')->name('index');
    Route::post('products', 'ProductController@store')->name('store');
}); */



//rota de login caso entre do middleware auth
Route::get('/login', function () {
    return 'Login';
})->name('login');


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

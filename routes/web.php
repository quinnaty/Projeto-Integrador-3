<?php

Route::get('/', function() {
    return redirect()->route('site-principal');
});

// Grupo para o site
Route::group(['prefix' => 'site'], function() {
    Route::get('/', 'SiteController@index')->name('site-principal');
    Route::get('/contatos', 'SiteController@contatos')->name('contatos');
    Route::get('/contemplados', 'SiteController@contemplados')->name('contemplados');
    Route::get('/editais', 'SiteController@editais')->name('editais');
    Route::get('/listaespera', 'SiteController@listaespera')->name('listaespera');


});

// Grupo de rotas para os testes
Route::group(['prefix' => 'teste'], function() {
    Route::get('/', 'TesteController@index')->name('teste-principal');
    Route::post('/cadastra-postagem', 'TesteController@cadastraPostagem')->name('cadastra-postagem');
    Route::get('/deleta-postagem/{id}', 'TesteController@deletaPostagem')->name('deleta-postagem');
});


<?php

/*
|--------------------------------------------------------------------------
| Vanilo's Admin Routes
|
| Routes in this file will be added in a group attributes of which
| are to be defined in the box/module config file in the config
| key of routes.namespace, routes.prefix with smart defaults
|--------------------------------------------------------------------------
*/

Route::resource('taxonomy', 'TaxonomyController');
Route::resource('product', 'ProductController');
Route::resource('property', 'PropertyController');
Route::resource('order', 'OrderController');
Route::resource('media', 'MediaController')->only(['destroy', 'store']);

Route::get('/taxonomy/{taxonomy}/taxon/create', 'TaxonController@create')->name('taxon.create');
Route::post('/taxonomy/{taxonomy}/taxon', 'TaxonController@store')->name('taxon.store');
Route::get('/taxonomy/{taxonomy}/taxon/{taxon}/edit', 'TaxonController@edit')->name('taxon.edit');
Route::put('/taxonomy/{taxonomy}/taxon/{taxon}', 'TaxonController@update')->name('taxon.update');
Route::delete('/taxonomy/{taxonomy}/taxon/{taxon}', 'TaxonController@destroy')->name('taxon.destroy');

Route::put('/taxonomy/{taxonomy}/sync', 'TaxonomyController@sync')->name('taxonomy.sync');

Route::get('/property/{property}/value/create', 'PropertyValueController@create')->name('property_value.create');
Route::post('/property/{property}/value', 'PropertyValueController@store')->name('property_value.store');
Route::get('/property/{property}/value/{propertyValue}/edit', 'PropertyValueController@edit')->name('property_value.edit');
Route::put('/property/{property}/value/{propertyValue}', 'PropertyValueController@update')->name('property_value.update');
Route::delete('/property/{property}/value/{propertyValue}', 'PropertyValueController@destroy')->name('property_value.destroy');

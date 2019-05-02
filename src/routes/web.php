<?php

Route::group(['namespace' => 'lmi\contact\http\controller'], function () {
    Route::get('contact','ContactController@index')->name('contact');

    Route::post('contact', 'ContactController@send')->name('contact');    
});

<?php


Route::get('webcommand', function () {
    return view('webcommand::form');
});

Route::post('webcommand', 'WebCommandController@execute')->name('webcommand.execute');

<?php
Route::get('test', function () {
    return "Test Packages";
});

Route::get('view', function () {
    return view('grittekno.menu::index');
});
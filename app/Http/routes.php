<?php

Route::get('/', function () {
    return view('pages/main');
});

Route::group(["prefix" => "api/v1"], function() {
   Route::resource("projects", "ProjectsController");
});
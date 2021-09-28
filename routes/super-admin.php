<?php

use Illuminate\Support\Facades\Route;


Route::prefix("super-admin")->group(function(){
    Route::get("/", function() {
        dd("super-admin");
    });
 });
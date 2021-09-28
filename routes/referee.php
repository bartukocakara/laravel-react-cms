<?php

use Illuminate\Support\Facades\Route;


Route::prefix("referee")->group(function(){
    Route::get("/", function() {
        dd("referee");
    });
 });
<?php

use Illuminate\Support\Facades\Route;


Route::prefix("coach")->group(function(){
    Route::get("/", function() {
        dd("coach");
    });
 });
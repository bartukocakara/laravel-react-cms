<?php

use Illuminate\Support\Facades\Route;


Route::prefix("trainer")->group(function(){
    Route::get("/", function() {
        dd("trainer");
    });
 });
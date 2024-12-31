<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\QueryController;
use Illuminate\Support\Facades\Route;


Route::get('/',[QueryController::class,'Demo1']);


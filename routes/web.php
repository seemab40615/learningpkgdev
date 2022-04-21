<?php

use Illuminate\Support\Facades\Route;

Route::get("/learning", [\Seemab40615\Learningpkgdev\Http\Controllers\LearningController::class, 'index'])->name("learning.index");


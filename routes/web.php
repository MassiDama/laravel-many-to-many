<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TypeController;


Route::get('/', [TypeController :: class, 'index']) -> name('type.index');

Route::get('/projects', [ProjectController :: class, 'index']) -> name('project.index');


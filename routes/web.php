<?php

use App\Livewire\HomeForm;
use App\Livewire\Outputs\CreateOutput;
use App\Livewire\Outputs\ViewOutput;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', HomeForm::class)->name('home');
Route::get('/output', ViewOutput::class)->name('view.form');
Route::get('/output/create', CreateOutput::class)->name('output.form');

<?php

use App\Livewire\HomeForm;
use App\Livewire\Calendario;
use App\Livewire\Outputs\ViewOutput;
use Illuminate\Support\Facades\Route;
use App\Livewire\Outputs\CreateOutput;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', HomeForm::class)->name('home');
Route::get('/output', ViewOutput::class)->name('view.form');
Route::get('/output/create', CreateOutput::class)->name('output.form');
Route::get('/calendario', Calendario::class)->name('calendario');

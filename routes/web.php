<?php

use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Livewire\Ambiente\AmbienteList;
use App\Livewire\Dashboard;
use App\Livewire\Sensores\SensoresCreate;
use App\Livewire\Sensores\SensoresList;
use App\Models\Ambiente;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class);

Route::get('/list', SensoresList::class)->name('sensores.list');

Route::get('/create', SensoresCreate::class)->name('sensores.create');
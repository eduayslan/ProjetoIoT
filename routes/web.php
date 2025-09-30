<?php

use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Livewire\Ambiente\AmbienteList;
use App\Livewire\Dashboard;
use App\Livewire\Sensores\SensoresCreate;
use App\Livewire\Sensores\SensoresEdit;
use App\Livewire\Sensores\SensoresList;
use App\Models\Ambiente;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class);


Route::get('/list/ambientes', AmbienteList::class)->name('ambientes.list');

Route::get('/create/ambientes', AmbienteCreate::class)->name('ambientes.create');

Route::get('/edit{id}/ambientes', AmbienteEdit::class)->name('ambientes.edit');

Route::get('/list/sensores', SensoresList::class)->name('sensores.list');

Route::get('/create/sensores', SensoresCreate::class)->name('sensores.create');

Route::get('/edit{id}/sensores', SensoresEdit::class)->name('sensores.edit');

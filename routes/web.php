<?php

use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Livewire\Ambiente\AmbienteList;
use App\Livewire\Dashboard;
use App\Models\Ambiente;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class);

Route::get('/list', AmbienteList::class)->name('ambientes.list');

Route::get('/create', AmbienteCreate::class)->name('ambientes.create');

Route::get('/edit{id}', AmbienteEdit::class)->name('ambientes.edit');
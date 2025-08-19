<?php

use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Livewire\Ambiente\AmbienteList;
use App\Models\Ambiente;
use Illuminate\Support\Facades\Route;

Route::get('/create', AmbienteCreate::class)->name('ambientes.create');
Route::get('/', AmbienteList::class)->name('ambientes.list');
Route::get('/{id}/edit', AmbienteEdit::class)->name('ambientes.edit');
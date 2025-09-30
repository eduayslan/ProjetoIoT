<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;
use Livewire\WithPagination;

class AmbienteList extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = 15;

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => 15],
    ];


    public function render()
    {
        $ambientes = Ambiente::where('nome', 'like', "%{$this->search}%")
            ->orWhere('descricao', 'like', "%{$this->search}%")
            ->orWhere('status', 'like', "%{$this->search}%")
            ->paginate($this->perPage);

        return view('livewire.ambiente.ambiente-list', compact('ambientes'));
    }

    public function delete($id)
    {
        Ambiente::findOrFail($id)->delete();
        session()->flash('message', 'Ambiente deletado com sucesso');
    }
}

<?php

namespace App\Livewire\Sensores;

use App\Models\Ambiente;
use App\Models\Sensor;
use Livewire\Component;

class SensoresCreate extends Component
{
    public $ambiente_id;
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;


    protected $rules = [
        'ambiente_id' => 'required',
        'codigo' => 'required|unique:sensors,codigo',
        'tipo' => 'required',
        'descricao' => 'required'
    ];

    protected $messages = [
        'ambiente_id.required' => 'O campo é obrigatório',
        'codigo.required' => 'O campo é obrigatório',
        'codigo.unique' => 'O campo é único',
        'tipo.required' => 'O campo é obrigatório',
        'descricao.required' => 'O campo é obrigatório'
    ];


     public function store()
    {
        $this->validate();
        Sensor::Create([
            'ambiente_id' => $this->ambiente_id,
            'codigo' => $this -> codigo,
            'tipo' => $this -> tipo,
            'descricao' => $this -> descricao,
            'status' => $this -> status,
        ]);

        session()->flash('success', 'Sensor Cadastrado');
        return redirect()->route('sensores.list');

    }

    public function render()
    {
        $ambientes = Ambiente::all();
        return view('livewire.sensores.sensores-create', compact('ambientes'));
    }
}

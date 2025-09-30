<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteCreate extends Component
{
    public $nome;
    public $descricao;
    public $status;


    protected $rules = [
        'nome' => 'required',
        'descricao' => 'required',
        
    ];

    protected $messages = [
        'nome.required' => 'O campo é obrigatório',
        'descricao.required' => 'O campo é obrigatório',
      
    ];

     public function store()
    {

        Ambiente::Create([
            'nome' => $this -> nome,
            'descricao' => $this -> descricao,
            'status' => $this -> status,
        ]);

        session()->flash('message', 'Ambiente Criado com Sucesso. . .');
        $this->reset(['nome', 'descricao', 'status']);
        return redirect()->route('ambientes.list');

    }
    public function render()
    {
        return view('livewire.ambiente.ambiente-create');
    }
}

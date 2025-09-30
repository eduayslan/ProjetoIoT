<?php

namespace App\Livewire\Sensores;

use App\Models\Ambiente;
use App\Models\Sensor;
use Livewire\Component;

class SensoresEdit extends Component
{
    public $ambiente_id;
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;
    public $id;

   public function mount($id)
    {
        $sensor = Sensor::find($id);

       if ($sensor == null) {
            return redirect()->route('sensor-index');
        }

        $this->id = $sensor->id;
        $this->ambiente_id = $sensor->ambiente_id;
        $this->codigo = $sensor->codigo;
        $this->tipo= $sensor->tipo;
        $this->descricao = $sensor->descricao;
        $this->status= $sensor->status;
    }

    public function update(){

    

        $sensor = Sensor::find($this->id);

        $sensor->update([
            'ambiente_id' => $this->ambiente_id,
            'codigo' => $this->codigo,
            'tipo'=> $this->tipo,
            'descricao' => $this->descricao,
            'status'=> $this->status
        ]);
        $sensor->save();

        return redirect()->route('sensores.list');
    }

    public function render()
    {
        $ambientes = Ambiente::all();
        return view('livewire.sensores.sensores-edit', compact('ambientes'));
    }

}

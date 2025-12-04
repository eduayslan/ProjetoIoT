<?php

namespace App\Livewire\Sensores;

use App\Models\Sensor;
use Livewire\Component;
use Livewire\WithPagination;

class SensoresList extends Component
{
     use WithPagination;

    public $search = '';
    public $perPage = 18;

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => 18],
    ];

    /**
     * Alterna o status (0 ou 1) do Sensor no banco de dados.
     * @param int $sensorId O ID do sensor a ser atualizado.
     */
    public function toggleStatus(int $sensorId)
    {
        $sensor = Sensor::findOrFail($sensorId);

        $sensor->status = $sensor->status ? 0 : 1;

        $sensor->save();

        session()->flash('message', 'Status do Sensor ' . $sensor->id . 
        ' atualizado para: ' . ($sensor->status ? 'Ativo' : 'Inativo'));
    }

    public function render()
    {
        $sensores = Sensor::where('codigo', 'like', "%{$this->search}%")
            ->orWhere('ambiente_id', 'like', "%{$this->search}%")
            ->orWhere('tipo', 'like', "%{$this->search}%")
            ->orWhere('descricao', 'like', "%{$this->search}%")
            ->orWhere('status', 'like', "%{$this->search}%")
            ->paginate($this->perPage);
        return view('livewire.sensores.sensores-list', compact('sensores'));
    }

    public function delete($id){
        Sensor::findOrFail($id)->delete();
        session()->flash('message', 'Sensor deletado com sucesso');
    }
}

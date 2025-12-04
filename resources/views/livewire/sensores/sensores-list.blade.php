<div class="container-fluid bg-light min-vh-100 py-4" style="background-color: #f0f4f8;"> 
    <div class="mb-3">
        <input type="text" wire:model.live='search' class="form-control">
    </div>
    <div class="container">
        <div class="row align-items-center mb-4">
            <div class="col-md-6">
                <h2 class="mb-0 text-dark">
                    <i class="bi bi-code"></i> Sensores
                </h2>
            </div>
            <div class="col-md-6 text-end">
                <a href="{{ route('sensores.create') }}" class="btn btn-primary shadow-sm">
                    <i class="bi bi-plus-circle me-1"></i> Novo Sensor
                </a>
            </div>
        </div>

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID do Sensor</th>
                        <th><i class="bi bi-houses"></i>Ambiente</th>
                        <th><i class="bi bi-clipboard"></i>Tipo</th>
                        <th><i class="bi bi-text-left"></i>Descricao</th>
                        <th><i class="bi bi-code-slash"></i> Codigo</th>
                        <th><i class="bi bi-toggle-on"></i>Status</th>
                        <th><i class="bi bi-play-circle"></i>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($sensores as $sensor)
                        <tr>
                            <td>{{ $sensor->id }}</td>
                            <td>{{ $sensor->ambiente->nome }}</td>
                            <td>{{ $sensor->tipo }}</td>
                            <td>{{ $sensor->descricao }}</td>
                            <td>{{ $sensor->codigo }}</td>
                            <td>
                                <div class="form-check form-switch d-flex align-items-center m-8">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="sensorSwitch{{ $sensor->id }}"
                                        wire:click="toggleStatus({{ $sensor->id }})"
                                        {{ $sensor->status == 1 ? 'checked' : '' }}>
                                    <label class="form-check-label ms-2" for="sensorSwitch{{ $sensor->id }}">
                                        {{ $sensor->status == 1 ? 'On' : 'Off' }}
                                    </label>
                                </div>
                            </td>
                            <td>
                                <a href="{{ route('sensores.edit', $sensor->id) }}" class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <button wire:click="delete({{ $sensor->id }})"
                                    class="btn btn-sm btn-outline-danger me-1" title="Excluir"
                                    wire:confirm="Tem certeza?">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">
                                Nenhum sensor encontrado.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

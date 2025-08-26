<div class="d-flex justify-content-center align-items-center mt-5" style="background-color: #f7f7f7;">
    <div class="card shadow-lg bg-dark text-light border-0" style="width: 100%; max-width: 600px;">
        <div class="card-body">
            <h4 class="card-title mb-4 text-center text-warning">
                <i class="bi bi-person-plus-fill"></i> Editar Ambiente. . .
            </h4>

            
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            
            <form wire:submit.prevent="update">
                <div class="mb-3">
                    <label class="form-label text-light"><i class="bi bi-person"></i> Nome</label>
                    <input type="text" wire:model="nome" class="form-control">
                    @error('nome') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label text-light"><i class="bi bi-credit-card"></i> Descrição</label>
                    <input type="text" wire:model="descricao" class="form-control">
                    @error('descricao') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

            <div class="mb-3">
            <span style="font-size:20px">
                <i class="bi bi-briefcase-fill"></i>
                <label for="status" class="form-label">Status</label>
            </span>

            <select class="form-select" aria-label="default-select example"@error('status') is-invalid @enderror
                id="status" wire:model.defer="status" placeholder="">
                <option hidden></option>
                <option value="1">True</option>
                <option value="0">False</option>
            </select>
            @error('cargo')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
            <br>


                <div class="d-flex justify-content-between">
                    <a href="{{ route('ambientes.list') }}" class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-left-circle"></i> Voltar
                    </a>

                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-check-circle"></i> Atualizar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
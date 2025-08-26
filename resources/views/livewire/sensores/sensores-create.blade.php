<div class="d-flex justify-content-center align-items-center mt-5" style="background-color: #f7f7f7;"> <!-- Cor de fundo alterada -->
    <div class="card shadow-lg bg-dark text-light border-0" style="width: 100%; max-width: 600px;"> <!-- Cor do card alterada -->
        <div class="card-body">
            <h4 class="card-title mb-4 text-center text-warning"> <!-- Cor do título alterada -->
                <i class="bi bi-person-plus-fill"></i> Novo Ambiente
            </h4>

            <form wire:submit.prevent="store">

                <div class="mb-3">
            <span style="font-size:20px">
                <label for="ambiente_id" class="form-label">Ambiente ID</label>
                <i class="bi bi-briefcase-fill"></i>
            </span>

            <select class="form-select" aria-label="default-select example"@error('ambiente_id') is-invalid @enderror
                id="ambiente_id" wire:model.defer="ambiente_id" placeholder="">
                <option hidden></option>
                <option value="1">Sala</option>
                <option value="0">Escritório</option>
            </select>
            @error('ambiente_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>


                <div class="mb-3">
                    <label class="form-label text-light"><i class="bi bi-person"></i> codigo</label>
                    <input type="text" wire:model="codigo" class="form-control">
                    @error('codigo') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label text-light"><i class="bi bi-credit-card"></i> Tipo</label>
                    <input type="text" wire:model="tipo" class="form-control">
                    @error('tipo') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
            <span style="font-size:20px">
                <label for="status" class="form-label">Status</label>
                <i class="bi bi-briefcase-fill"></i>
            </span>

            <select class="form-select" aria-label="default-select example"@error('status') is-invalid @enderror
                id="status" wire:model.defer="status" placeholder="">
                <option hidden></option>
                <option value="1">True</option>
                <option value="0">False</option>
            </select>
            @error('status')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

                <button type="submit" class="btn btn-success">Cadastrar</button>
        <a href="{{ route('sensores.list') }}" class="btn btn-secondary ms-2">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
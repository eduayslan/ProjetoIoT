<div class="d-flex justify-content-center align-items-center mt-5" style="background-color: #f7f7f7;">
    <div class="card shadow-lg bg-dark text-light border-0" style="width: 100%; max-width: 600px;">
        <div class="card-body">
            <h4 class="card-title mb-4 text-center text-warning">
                <i class="bi bi-person-plus-fill"></i> Novo Ambiente
            </h4>

            <form wire:submit.prevent="store">

                <div class="mb-3">
            <span style="font-size:20px">
                <label for="ambiente_id" class="form-label"></label>
                
            </span>
            <form wire:submit.prevent="store">
            <option selected >Ambiente</option>
            <select class="form-select" aria-label="Default select example" wire:model.defer='ambiente_id' id="ambiente_id">
            @foreach ($ambientes as $a)
            <option value="{{$a->id}}">{{$a->nome}}</option>
            @endforeach
            </select>



            @error('ambiente_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>


                <div class="mb-3">
                    <label class="form-label text-light"><i class="bi bi-person"></i>Codigo</label>
                    <input type="text" wire:model="codigo" class="form-control">
                    @error('codigo') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label text-light"><i class="bi bi-credit-card"></i> Descrição</label>
                    <input type="text" wire:model="descricao" class="form-control">
                    @error('descricao') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label text-light"><i class="bi bi-chat-left-dots"></i> Tipo</label>
                    <input type="text" wire:model="tipo" class="form-control">
                    @error('tipo') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                <i class="bi bi-briefcase"></i>
                <label for="status" class="form-label">Status</label>
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
            <div class="mb-3">
            <button type="submit" class="btn btn-success">Cadastrar</button>
            </div>           
    </div>
            </form>
        </div>
    </div>
</div>
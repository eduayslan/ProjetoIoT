<div class="container-fluid bg-light min-vh-100 py-4" style="background-color: #f0f4f8;"> <!-- Fundo suave da página -->
    <div class="container">
        <div class="row align-items-center mb-4">
            <div class="col-md-6">
                <h2 class="mb-0 text-dark">
                    <i class="bi bi-people-fill me-1"></i> Ambiente
                </h2>
            </div>
            <div class="col-md-6 text-end">
                <a href="{{ route('ambientes.create') }}" class="btn btn-primary shadow-sm"> <!-- Botão colorido com borda suave -->
                    <i class="bi bi-plus-circle me-1"></i> Novo Ambiente
                </a>
            </div>
        </div>

        <!-- Card com fundo neutro e leve sombreamento -->
        <div class="card shadow-lg border-0 rounded-4 bg-white"> <!-- Card com fundo branco e sombra -->
            <div class="card-body">
                <div class="row mb-4 align-items-center">
                    <div class="col-md-6 mb-2 mb-md-0">
                        
                    </div>
                </div>

                @if (session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="bi bi-check-circle me-1"></i> {{ session('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="bg-info text-white"> <!-- Cabeçalho da tabela com fundo azul suave -->
                            <tr>
                                <th><i class="bi bi-person me-1"></i> Nome</th>
                                <th><i class="bi bi-credit-card me-1"></i> Descrição</th>
                                <th><i class="bi bi-envelope me-1"></i> Status</th>
                                <th class="text-center"><i class="bi bi-gear me-1"></i> Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($ambientes as $ambiente)
                                <tr class="hover-table">
                                    <td>{{ $ambiente->nome }}</td>
                                    <td>{{ $ambiente->descricao }}</td>
                                    <td>{{ $ambiente->status }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('ambientes.edit', $ambiente->id) }}" class="btn btn-sm btn-outline-warning me-1" title="Editar">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                   <td colspan="5" class="text-center text-muted">
                                       <i class="bi bi-info-circle"></i> Nenhum ambiente encontrado.
                                   </td> 
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-end mt-3">
                    {{ $ambientes->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
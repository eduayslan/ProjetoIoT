<div class="container-fluid bg-light min-vh-100 py-4" style="background-color: #f0f4f8;"> <!-- Fundo suave da página -->
    <div class="container">
        <div class="row align-items-center mb-4">
            <div class="col-md-6">
                <h2 class="mb-0 text-dark">
                    <i class="bi bi-people-fill me-1"></i> Registros
                </h2>
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
                                <th><i class="bi bi-person me-1"></i> Sensor</th>
                                <th><i class="bi bi-credit-card me-1"></i> Valor</th>
                                <th><i class="bi bi-credit-card me-1"></i> Unidade</th>
                                <th><i class="bi bi-envelope me-1"></i> Data e Hora</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($registros as $registro)
                                <tr class="hover-table">
                                    <td>{{ $registro->sensor_id }}</td>
                                    <td>{{ $registro->valor }}</td>
                                    <td>{{ $registro->unidade }}</td>
                                    <td>{{ $registro->data_hora }}</td>
                                    <td class="text-center">
                                </tr>
                            @empty
                                <tr>
                                   <td colspan="5" class="text-center text-muted">
                                       <i class="bi bi-info-circle"></i> Nenhum registro encontrado.
                                   </td> 
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="d-flex flex-column align-items-center mt-3">
                        <div class="mb-2">
                            Mostrando {{ $registros->firstItem() }} até {{ $registros->lastItem() }} de
                            {{ $registros->total() }} resultados
                        </div>

                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                              
                                <li class="page-item {{ $registros->onFirstPage() ? 'disabled' : '' }}">
                                    <a href="#" class="page-link" wire:click.prevent="previousPage"
                                        aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>

                                @foreach ($registros->getUrlRange(1, $registros->lastPage()) as $page => $url)
                                    <li class="page-item {{ $registros->currentPage() == $page ? 'active' : '' }}">
                                        <a href="#" class="page-link"
                                            wire:click.prevent="gotoPage({{ $page }})">{{ $page }}</a>
                                    </li>
                                @endforeach

                               
                                <li class="page-item {{ $registros->hasMorePages() ? '' : 'disabled' }}">
                                    <a href="#" class="page-link" wire:click.prevent="nextPage" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>


                    </div>

                </div>

                <div class="d-flex justify-content-end mt-3">
                </div>
            </div>
        </div>
    </div>
</div>
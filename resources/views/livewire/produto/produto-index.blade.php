<div class='mt-5'>
    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="container">
        <div class="mb-3">
            <input type="text" wire:model.live='search' placeholder="pesquisar..." class="form-control">
        </div>
    </div>

    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Cor</th>
                    <th scope="col">Textura</th>
                    <th scope="col">Peso</th>
                    <th scope="col">Unidade de medida</th>
                    <th scope="col">Aplicação</th>
                    <th scope="col">Quantidade no estoque</th>
                    <th scope="col">Quantidade mínima</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $p)
                    <tr>
                        <th scope="row">{{ $p->id }}</th>
                        <td>{{ $p->nome }}</td>
                        <td>{{ $p->cor }}</td>
                        <td>{{ $p->textura }}</td>
                        <td>{{ $p->peso }}</td>
                        <td>{{ $p->unidade_medida }}</td>
                        <td>{{ $p->aplicacao }}</td>
                        <td>{{ $p->qtd_estoque }}</td>
                        <td>{{ $p->qtd_minima }}</td>
                        <td>
                            <a href="{{ route('produto.edit', ['id' => $p->id]) }}"
                                class="btn btn-sm btn-info">Editar</a>

                            <button wire:click='delete({{ $p->id }})'
                                class="btn btn-sm btn-danger">Excluir</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

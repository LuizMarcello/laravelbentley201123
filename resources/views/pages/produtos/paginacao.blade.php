{{-- Extendendo a view "index.blade.php" --}}
@extends('index')

{{-- Criando aqui a seção "content" --}}
@section('content')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center
           pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Produtos</h1>
    </div>
    <div>
        <form action="{{ route('produto.index') }}" method="GET">
            {{-- Pelo "name", dá para identificar o que foi digitado neste input --}}
            <input type="text" name="pesquisar" placeholder="Digite o nome" />
            <button>Pesquisar</button>
            <a type="button" href="{{ route('cadastrar.produto') }}" class="btn btn-success float-end">
                Incluir Produto
            </a>
        </form>
        <div class="table-responsive mt-4">
            @if ($findProduto->isEmpty())
                <p> Não existem dados!</p>
            @else
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>Categoria</th>
                            <th>Nome</th>
                            <th>Banda</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Nota fiscal</th>
                            <th>Valor</th>
                            <th>Serial</th>
                            <th>Situação</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($findProduto as $produto)
                            <tr>
                                <td>{{ $produto->tipodeproduto }}</td>
                                <td>{{ $produto->nome }}</td>
                                <td>{{ $produto->banda }}</td>
                                <td>{{ $produto->marca }}</td>
                                <td>{{ $produto->modelo }}</td>
                                <td>{{ $produto->notafiscal }}</td>
                                <td>{{ 'R$' . ' ' . number_format($produto->valor, 2, ',', '.') }}</td>
                                <td>{{ $produto->serial }}</td>
                                <td>{{ $produto->situacao }}</td>
                                <td>
                                    {{-- Assim, vai enviar um "get", será para a rota "get" --}}
                                    <a href="{{ route('atualizar.produto', $produto->id) }}" class="btn btn-light btn-sm">
                                        Editar
                                    </a>

                                    {{-- Este "meta", é para enviar um token da sessão (Laravel com ajax) --}}
                                    <meta name='csrf-token' content="{{ csrf_token() }}" />
                                    {{-- Dispara esta função que está no "projeto.js" --}}
                                    {{-- Ela espera os parâmetros: rotaUrl e idDoRegistro  --}}
                                    <a onclick="deleteRegistroPaginacao('{{ route('produto.delete') }}',  {{ $produto->id }} )"
                                        class="btn btn-danger btn-sm">
                                        Excluir
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection

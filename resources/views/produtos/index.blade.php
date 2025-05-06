<!-- resources/views/produtos/index.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <!-- Você pode adicionar seu CSS aqui -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-…"
          crossorigin="anonymous">
</head>
<body class="p-4">
    <h1 class="mb-4">Lista de Produtos</h1>

    <a href="{{ url('/produtos/create') }}" class="btn btn-primary mb-3">Cadastrar Novo</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Código</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($produtos as $produto)
                <tr>
                    <td>{{ $produto->codigo }}</td>
                    <td>{{ $produto->descricao }}</td>
                    <td>
                        <a href="{{ url("/produtos/{$produto->id}/edit") }}"
                           class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ url("/produtos/{$produto->id}") }}"
                              method="POST"
                              class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">
                                Excluir
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Nenhum produto cadastrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
          rel="stylesheet"
          crossorigin="anonymous">
</head>
<body class="p-4">
    <h1 class="mb-4">Editar Produto</h1>

    <form action="{{ url("/produtos/{$produto->id}") }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="codigo" class="form-label">Código</label>
            <input type="text" name="codigo" id="codigo"
                   value="{{ $produto->codigo }}"
                   class="form-control" maxlength="30" required>
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" name="descricao" id="descricao"
                   value="{{ $produto->descricao }}"
                   class="form-control" maxlength="60" required>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ url('/produtos') }}" class="btn btn-secondary">Voltar</a>
    </form>
</body>
</html>

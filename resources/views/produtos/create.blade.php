<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
          rel="stylesheet"
          crossorigin="anonymous">
</head>
<body class="p-4">
    <h1 class="mb-4">Cadastrar Produto</h1>

    <form action="{{ url('/produtos') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="codigo" class="form-label">Código</label>
            <input type="text" name="codigo" id="codigo"
                   class="form-control" maxlength="30" required>
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" name="descricao" id="descricao"
                   class="form-control" maxlength="60" required>
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ url('/produtos') }}" class="btn btn-secondary">Voltar</a>
    </form>
</body>
</html>

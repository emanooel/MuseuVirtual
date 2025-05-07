<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Mineral</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Editar Mineral</h2>
        <form action="{{ route('minerais.update', $mineral->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="text" class="form-control" id="id" name="id" value="{{ $mineral->id }}" readonly>
            </div>

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ $mineral->nome }}" required>
            </div>

            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea class="form-control" id="descricao" name="descricao" rows="3" required>{{ $mineral->descricao }}</textarea>
            </div>

            <div class="mb-3">
                <label for="propriedades" class="form-label">Propriedades</label>
                <textarea class="form-control" id="propriedades" name="propriedades" rows="3">{{ $mineral->propriedades }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
        <br>
        <form action="{{ route('minerais.destroy', $mineral->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
    </div>
</body>
</html>
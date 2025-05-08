<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Minerais</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Tabela de Minerais</h2>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Propriedades</th>
                </tr>
            </thead>
            <tbody>
                @foreach($minerais as $mineral)
                    <tr>
                        <td>{{ $mineral->id }}</td>
                        <td>{{ $mineral->nome }}</td>
                        <td>{{ $mineral->descricao }}</td>
                        <td>{{ $mineral->propriedades }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
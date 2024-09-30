<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Livros</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Lista de Livros</h1>
        <form id="search-form" method="GET" action="search.php">
            <div class="form-group">
                <input type="text" name="query" class="form-control" placeholder="Digite o título do livro" required />
            </div>
            <button type="submit" class="btn btn-primary btn-block">Buscar</button>
        </form>
    </div>
</body>
</html>

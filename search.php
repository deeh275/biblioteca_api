<?php
if (isset($_GET['query'])) {
    $query = urlencode($_GET['query']);
    $apiUrl = "https://www.googleapis.com/books/v1/volumes?q=$query";

    $response = file_get_contents($apiUrl);
    $data = json_decode($response, true);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados da Busca</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Resultados da Busca</h1>
        <h2 class="mt-4">Resultados:</h2>
        <ul class="list-group">
            <?php if (isset($data['items'])): ?>
                <?php foreach ($data['items'] as $item): ?>
                    <li class="list-group-item">
                        <?php echo htmlspecialchars($item['volumeInfo']['title']); ?> - 
                        <?php echo htmlspecialchars(implode(", ", $item['volumeInfo']['authors'] ?? ['Autor desconhecido'])); ?>
                    </li>
                <?php endforeach; ?>
            <?php else: ?>
                <li class="list-group-item">Nenhum livro encontrado.</li>
            <?php endif; ?>
        </ul>
        <a href="index.php" class="btn btn-secondary mt-4">Voltar</a>
    </div>
</body>
</html>

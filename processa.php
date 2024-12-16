<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Visitante</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Dados do Visitante</h1>
        <nav>
            <ul>
                <li><a href="index.html">Página Inicial</a></li>
                <li><a href="desenvolvedores.html">Desenvolvedores</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Informações Recebidas:</h2>
        <ul>
            <li><strong>Nome:</strong> <?php echo htmlspecialchars($_POST['nome']); ?></li>
            <li><strong>E-mail:</strong> <?php echo htmlspecialchars($_POST['email']); ?></li>
            <li><strong>Data de Nascimento:</strong> <?php echo htmlspecialchars($_POST['data_nascimento']); ?></li>
            <li><strong>Gênero:</strong> <?php echo htmlspecialchars($_POST['genero']); ?></li>
            <li><strong>Cor Favorita:</strong> <?php echo htmlspecialchars($_POST['cor_favorita']); ?></li>
            <li><strong>Telefone:</strong> <?php echo htmlspecialchars($_POST['telefone']); ?></li>
            <li><strong>Site Pessoal:</strong> <?php echo htmlspecialchars($_POST['url']); ?></li>
            <li><strong>Hora de Visita:</strong> <?php echo htmlspecialchars($_POST['hora_visita']); ?></li>
        </ul>
    </main>
    <footer>
        <p>IFRN Campus Santa Cruz - Trabalho de Autoria Web</p>
        <p>Prof. Marcelo Figueiredo Barbosa Júnior</p>
        <p>Grupo: [Nomes dos integrantes]</p>
    </footer>
</body>
</html>
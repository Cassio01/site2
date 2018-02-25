<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Teste</title>
</head>
<body>
<div style="background-color: #79bfb4" class="container">
    <?php include 'formulario.php' ?>
    <?php if ($exibirTabela) : ?>
        <?php include 'tabela.php' ?>
    <?php endif; ?>
</div>
</body>
</html>

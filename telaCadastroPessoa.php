<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de pessoa</title>
</head>
<body>
    <?php require 'menu.html'; ?>
    <h1>Cadastro de pessoa</h1>
    <form action="controller.php" method="post">
        <label for="Nome">Nome</label>
        <br>
        <input type="text" name="nome" id="nome" required>
        <br>
        <label for="idade">idade</label>
        <br>
        <input type="number" name="idade" id="idade" required>
        <br>
        <label for="sexo">sexo</label>
        <br>
        <select name="sexo" id="sexo">
            <option value="">Clica aí...</option>
            <option value="F">Feminino</option>
            <option value="M">Masculino</option>
        </select>
        <br>
        <label for="senha">senha</label>
        <br>
        <input type="password" name= "senha" id= "senha" required>
        <br>
        <input type="hidden" name="acao" id="acao" value="cadastroPessoa">
        <input type="submit" value="Cadastrar">
    </form> 
</body>
</html>




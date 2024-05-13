<?php
$acao = $_POST['acao'];

   if ($acao === 'entrar'){
    $usuario = $_POST['usuario'];
    $senha = $_POST ['senha'];

    $arquivo = fopen('pessoas.csv', 'r');

    $pessoas = [];

    while ($linha = fgetcsv($arquivo)) {
        $arrayLinha = explode(';', $linha[0]);

        $pessoa = [
            'codigo' => $arrayLinha[0],
            'nome' => $arrayLinha[1],
            'senha'=> $arrayLinha[2],
            'idade' => $arrayLinha[3],
            'sexo' => $arrayLinha[4]
    ];

        array_push($pessoas, $pessoa);
    }

    $usuarioEncontrado = false;
    
    foreach ($pessoas as $pessoa) {
        if ($usuario == $pessoa['nome'] && $senha == $pessoa['senha']) {
            $usuarioEncontrado = true;
            break;
        }
    }
    
    session_start();

    if ($usuarioEncontrado == true) {
        $_SESSION['logado'] = true;

        header('location: telaProdutos.php');
    }
    else {
        header('location: telalogin.php');
    }
    
    exit();


   }
    else if ($acao === 'cadastrar') {
    $descricao = $_POST['descricao'];

    $preco = floatval($_POST['idade']);
    
    $arquivo = fopen('products.csv', 'r');

    $produtos = [];

    while ($linha = fgetcsv($arquivo)) {
        $arrayLinha = explode(';', $linha[0]);
    

        $produto = [
            'codigo' => $arrayLinha[0],
            'descricao' => $arrayLinha[1],
            'idade' => $arrayLinha [2]
        ];
        array_push($pessoas, $pessoa);
    }
    fclose($arquivo);

    $arquivo = fopen('products.csv', 'a');

    $pessoa = [
        count($pessoas) + 1,
        $nome, 
        $idade
    ];
    

    fputcsv($arquivo, $pessoa, ';' );

    fclose($arquivo);

    header('Location: telaProdutos.php');
    exit;

   }
   
   else if ($acao === 'cadastroPessoa') {

   
    $nome = $_POST['nome'];

    $senha = $_POST['senha'];

    $idade = $_POST['idade'];

    $sexo = $_POST['sexo'];

    $arquivo = fopen('pessoas.csv', 'r');

    $pessoas = [];

    while ($linha = fgetcsv($arquivo)) {
        $arrayLinha = explode(';', $linha[0]);
    

        $pessoa = [
            'codigo' => $arrayLinha[0],
            'nome'  => $arrayLinha[1],
            'senha' => $arrayLinha [2],
            'idade' => $arrayLinha [3],
            'sexo'  => $arrayLinha [4]
        ];
        array_push($pessoas, $pessoa);
    }

    fclose($arquivo);

    $arquivo = fopen('pessoas.csv', 'a');

    $pessoa = [
    count($pessoas) + 1,   
     $nome,
     $senha,
     $idade,
     $sexo

    ];

    fputcsv($arquivo, $pessoa, ';');

    fclose($arquivo);

    header('Location: telaCadastroPessoa.php');
    exit();

    }
?>
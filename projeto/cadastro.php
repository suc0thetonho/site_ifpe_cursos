<?php

   include("conexao.php");


   try {

  
    $nome = $_POST["nome"];
    $email= $_POST["email"];
    $senha= md5($_POST["senha"]);
    
    $tabela = "login";
    
    //verificar se existe algum email

    $sqlVerificacao = "SELECT COUNT(*) FROM $tabela WHERE email = :email";
    $stmtVerificacao = $pdo->prepare($sqlVerificacao);
    $stmtVerificacao->bindParam(':email', $email);
    $stmtVerificacao->execute();
    $existeUsuario = $stmtVerificacao->fetchColumn();
    
    //verificação de 
    if ($existeUsuario){
        echo "usuario, já existe";
    }else{
        $sql = "INSERT INTO $tabela (nome, email, senha)VALUES(:nome, :email, :senha)";
    $stmt = $pdo->prepare($sql);
    
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);

    $stmt->execute();
    echo "cadastrado com sucesso";
    }

  
    }
    catch (PDOException $e) {
        echo "Erro na inserção: " . $e->getMessage();
    }

?>
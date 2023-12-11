<?php

    include("conexao.php");

        try {
            
            $tabela = "login";
            $idUsuario = "19";

            $sql = "SELECT nome FROM $tabela WHERE id = :idUsuario";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':idUsuario', $idUsuario, PDO::PARAM_INT);
            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($row) {
                echo "<p>Nome: " . htmlspecialchars($row['nome']) . "</p>";
                // Adicione outros campos conforme necessário
            } else {
                echo "Nenhum usuário encontrado com o ID $idUsuario.";
            }

        }catch (PDOException $e){
            echo "Erro na inserção: " . $e->getMessage();
        }

    
?>
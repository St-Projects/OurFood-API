<?php
require "DataBase.php";
$db = new DataBase();
if (isset($_POST['nomecompleto']) && isset($_POST['email']) && isset($_POST['usuario']) && isset($_POST['senha'])) {
    if ($db->bdCon()) {
        try{ 
            if ($db->registrar($_POST['nomecompleto'], $_POST['email'], $_POST['usuario'], $_POST['senha'])) {
            echo "Registro feito com sucesso!";
        } 
    }
    catch(Exception $e){
        echo "O registro falhou: ", $e->getMessage();
    }
    } else echo "Error: Erro na conexão com o banco";
} else echo "Todos os campos são necessários!!";
?>

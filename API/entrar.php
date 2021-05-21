<?php
require "DataBase.php";
$db = new DataBase();
if (isset($_POST['usuario']) && isset($_POST['senha'])) {
    if ($db->bdCon()) {
        if ($db->logIn($_POST['usuario'], $_POST['senha'])) {
            echo "Login efetuado";
        } else echo "Usuário ou senha incorreta";
    } else echo "Error: Erro na conexão com o banco";
} else echo "Todos os dados são necessários";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
<center>
<h1>Registrar</h1>
    <form action="registrar.php" method="POST">
        <input placeholder="nome completo" type="text" name="nomecompleto"><br>
        <input placeholder="email" type="text" name="email"><br>
        <input placeholder="usuario" type="text" name="usuario"><br>
        <input placeholder="senha" type="text" name="senha"><br>
        <button type="submit">Registrar</button>
    </form>
    <br><br>
    <h1>logIn</h1>
    <form action="entrar.php" method="POST">
        <input placeholder="usuario" type="text" name="usuario"><br>
        <input placeholder="senha" type="text" name="senha"><br>
        <button type="submit">Entrar</button>
    </form>
</center>
</body>
</html>
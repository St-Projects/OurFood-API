<?php
require "DataBaseConfig.php";

class DataBase
{
    public $con;
    public $data;
    private $sql;
    protected $server;
    protected $usuariobd;
    protected $senhabd;
    protected $nomebd;

    public function __construct()
    {
        $this->con = null;
        $this->data = null;
        $this->sql = null;
        $dbc = new DataBaseConfig();
        $this->server = $dbc->server;
        $this->usuariobd = $dbc->usuariobd;
        $this->senhabd = $dbc->senhabd;
        $this->nomebd = $dbc->nomebd;
    }

    function bdCon()
    {
        $this->con = mysqli_connect($this->server, $this->usuariobd, $this->senhabd, $this->nomebd);
        return $this->con;
    }

    function prepareData($data)
    {
        return mysqli_real_escape_string($this->con, stripslashes(htmlspecialchars($data)));
    }

    function logIn($usuario, $senha)
    {
        $usuario = $this->prepareData($usuario);
        $senha = $this->prepareData($senha);
        $this->sql = "SELECT * FROM usuarios WHERE usuario = '" . $usuario . "'";
        $resultado = mysqli_query($this->con, $this->sql);
        $row = mysqli_fetch_assoc($resultado);
        if (mysqli_num_rows($resultado) != 0) {
            $dbusername = $row['usuario'];
            $dbpassword = $row['senha'];
            if ($dbusername == $usuario && password_verify($senha, $dbpassword)) {
                $login = true;
            } else $login = false;
        } else $login = false;

        return $login;
    }

    function registrar($nomecompleto, $email, $usuario, $senha)
    {
        $nomecompleto = $this->prepareData($nomecompleto);
        $usuario = $this->prepareData($usuario);
        $senha = $this->prepareData($senha);
        $email = $this->prepareData($email);
        $senha = password_hash($senha, PASSWORD_DEFAULT);
        $this->sql =
            "INSERT INTO usuarios(nome_completo, usuario, senha, email) 
             VALUES ('" . $nomecompleto . "','" . $usuario . "','" . $senha . "','" . $email . "')";
        if (mysqli_query($this->con, $this->sql)) {
            return true;
        } else return false;
    }

}

?>

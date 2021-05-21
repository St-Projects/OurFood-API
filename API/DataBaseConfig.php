<?php

class DataBaseConfig
{
    public $server;
    public $usuariobd;
    public $senhabd;
    public $nomebd;

    public function __construct()
    {

        $this->server = 'localhost';
        $this->usuariobd = 'root';
        $this->senhabd = '';
        $this->nomebd = 'android';

    }
}

?>

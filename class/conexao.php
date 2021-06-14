<?php


class conexao extends mysqli {

    public $servidor;
    public $usuario;
    public $senha;
    public $banco;
    public $mysqli;
    
    function __construct() {
        $this->servidor = '127.0.0.1';
        $this->usuario = 'root';
        $this->senha = '';
        $this->banco = 'serasa';
    }

    public function conectar()
    {
        return $this->mysqli = new mysqli($this->servidor, $this->usuario, $this->senha, $this->banco);
            
    }
    
    function __destruct() {
        
    }
}


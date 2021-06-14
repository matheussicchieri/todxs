<?php

require_once('class/conexao.php');

class emprestimo extends conexao {
    
    public $conexao;
    
    function __construct() {
        
    }
    public function emprestimo_menu()
    {
       $con = new conexao();
       $this->conexao = $con->conectar();
       $result = $this->conexao->query("select resultado from menu_emprestimo;");
       $row = $result->fetch_row();
       return $row[0];
       
    }
    
    public function emprestimo($id)
    {
       $con = new conexao();
       $this->conexao = $con->conectar();
       $result = $this->conexao->query("select * from emprestimo where id_emprestimo = $id;");
       $row = $result->fetch_row();
       return $row;
       
    }
    
     public function emprestimo_index()
    {
       $con = new conexao();
       $this->conexao = $con->conectar();
       $result = $this->conexao->query("select resultado from index_emprestimo;");
       $row = $result->fetch_row();
       return $row[0];
       
    }
    
    
    
}


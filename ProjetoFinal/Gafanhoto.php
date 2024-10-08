<?php 
    require_once "Pessoa.php";
    class Gafanhoto extends Pessoa{
        private $login;
        private $totAssistido;

        public function assistirMaisUm(){
            $this->totAssistido ++;
        }

        public function __construct($nome, $idade, $sexo, $login){
           parent ::__construct($nome, $idade, $sexo);
            $this->nome = $nome;
            $this->totAssistido = 0;
        }

        function getLogin(){
            return $this->login;
        }

        function getTotAssistido(){
            return $this->totAssistido;
        }

        function setLogin($login){
            $this->login = $login;
        }

        function setTotAssistido($totAssistido){
            $this->totAssistido = $totAssistido;
        }
    }
?>
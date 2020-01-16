<?php

class Pessoa  {

    var $id;
    var $nome;    
    var $data_nascimento;
    var $email;
    var $telefone;

    function __construct(
        $id, 
        $nome, 
        $data_nascimento, 
        $email, 
        $telefone){

        $this->id = $id;      
        $this->nome = $nome;
        $this->data_nascimento = $data_nascimento;
        $this->email = $email;      
        $this->telefone = $telefone;
    }

    function nomeValido()
    {
       
        if (strlen($this->nome) < 3) return false;

        return true;
    }

    function telefoneValido()
    {
      if (strlen($this->telefone) == 15) {
        //(99) 99999-9999
        $regex_telefone = "/\([0-9]{2}\)[0-9]{5}\-[0-9]{4}/";
        return preg_match($regex_telefone, str_replace(" ", "", $this->telefone));
      } else {
        return false;
      }
    }
  
    function emailValido()
    {
      if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
        return true;
      } else {
        return false;
      }
    }

    public function dataValida()
    {

        // 10/01/2019
        // 2019-01-10
       
        if (strlen($this->data_nascimento) != 10) return false;

        if (!strpos($this->data_nascimento, "-")) return false;

        $partes = explode("-", $this->data_nascimento);

        $ano = $partes[0];
        $mes = $partes[1];
        $dia = $partes[2];

        if (strlen($ano) < 4) return false;

        if (!checkdate($mes, $dia, $ano)) return false;

        return true;
    }


    public function validar(){
        if (!$this->dataValida()) throw new Exception("Data de Nascimento Inválida");
        if (!$this->emailValido()) throw new Exception("Email Inválido");
        if (!$this->telefoneValido()) throw new Exception("Telefone Inválido");
        if (!$this->nomeValido()) throw new Exception("Nome Inválido");
    }


}


   
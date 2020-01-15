<?php

class Pessoa  {

    private $id;
    private $nome;    
    private $data_nascimento;
    private $email;
    private $telefone;


    public function __construct($id, $nome, $data_nascimento, $email, $telefone){

        $this->setId($id);        
        $this->setNome($nome);
        $this->setDataNascimento($data_nascimento);
        $this->setEmail($email);        
        $this->setTelefone($telefone);

    }

    public function getId(){
        return $this->id;
    }

    public function getNome(){
        return $this->nome; 
    }

    public function getDataNascimento(){
        return $this->data_nascimento;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setNome($nome){
        $this->nome = $nome; 
    }

    public function setDataNascimento($data_nascimento){
        $this->data_nascimento = $data_nascimento;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    
   
}


   
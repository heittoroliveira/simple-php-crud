<?php
require 'model/Pessoa.php';

class PessoaService
{
    private $base;

    public function __construct($conn)
    {
        $this->base = $conn;
    }

    public function index()
    {
        $list = [];
        $query = "SELECT * FROM `pessoa`";
        $result = $this->base->query($query);
        while ($pessoa = $result->fetch_assoc()) {
            extract($pessoa, null, null);
            $list[]  = new Pessoa($id, $nome, $data_nascimento, $email, $telefone);
        }
        return $list;
    }

    public function store($pessoa)
    {
        $query = "INSERT INTO `pessoa` (nome, email, data_nascimento, telefone) VALUES (?, ?, ?, ?)";

        if ($stmt = $this->base->prepare($query)) {
            $stmt->bind_param('ssss', $pessoa->nome, $pessoa->email, $pessoa->data_nascimento, $pessoa->telefone);
        }

        if (!$stmt->execute()) {
            throw new Exception(`Erro ao inserir pessoa $stmt->error`);
            return false;
        }

        return true;
    }


    public function show($id)
    {
        $query = "SELECT * FROM `pessoa` WHERE id = ?";
        
        $stmt = $this->base->prepare($query);

        $stmt->bind_param('i', $id);

        if (!$stmt->execute()) {
            throw new Exception(`Não foi possível exibir registro $stmt->error`);
            return false;
        }

        $result = $stmt->get_result();

        $aux_query = $result->fetch_assoc();

        $pessoa = new Pessoa($aux_query["id"], $aux_query["nome"], $aux_query["data_nascimento"], $aux_query["email"], $aux_query["telefone"]);

        $stmt->close();
        return $pessoa;
    }

    public function update($pessoa)
    {
        if (is_numeric($pessoa->id) && $pessoa->id >= 1) {
            
            $query = "UPDATE `pessoa` SET `nome`=?, `email`=?, `data_nascimento`=?, `telefone`=? WHERE id = ? ";

            $stmt = $this->base->prepare($query);

            $stmt->bind_param('ssssi', $pessoa->nome, $pessoa->email, $pessoa->data_nascimento, $pessoa->telefone, $pessoa->id);

            if (!$stmt->execute()) {
                throw new Exception(`Erro ao alterar registro $stmt->error`);
                return false;
            }

            $stmt->close();

            return true;
        }
    }

    public function destroy($id)
    {
        $query = "DELETE FROM `pessoa` WHERE id='$id'";
        $result = $this->base->query($query);
        return $result;
    }


    public function popular()
    {
        if (!isset($_POST) || empty($_POST)) {
            throw new Exception("Favor Preencher os campos");
        }

        extract($_POST, null, null);
        return new Pessoa($id, $nome, $data_nascimento, $email, $telefone);
    }
}

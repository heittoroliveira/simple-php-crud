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
         $result = $this->base->query("SELECT * FROM `pessoa`"); 
         while ($pessoa = $result->fetch_assoc()) {             
             extract($pessoa, null, null);
             $list[]  = new Pessoa($id, $nome, $data_nascimento, $email, $telefone);
         }         
         return $list;
         
     }

     public function store()
     {

        
        $query = "INSERT INTO `pessoa` (nome, email, data_nascimento, telefone) VALUES (?, ?, ?, ?)";

        if($stmt = $this->base->prepare($query)){
            $stmt->bind_param('ssss', $param_nome, $param_email, $param_data_nascimento, $param_telefone);

            $param_nome = $_POST['nome'];
            $param_email = $_POST['email'];
            $param_data_nascimento = $_POST['data_nascimento'];
            $param_telefone = $_POST['telefone'];
        }

        if($stmt->execute()){           
            return true;
        } else {
            return false;
        }
       
        
     }

     public function destroy($id){

        $result = $this->base->query("DELETE FROM `pessoa` WHERE id='$id'");
        return $result; 
     }


     public function valida(){
        if(isset($_SESSION['error'])){ 
            unset($_SESSION["error"]);
        }
        $erro = [];

        
        if ( !isset( $_POST ) || empty( $_POST ) ) {
            $erro[] = 'Por Favor Preencher os Campos.';
        }
        // Validação ID
        if(isset($_POST['id']) && !empty($_POST['id'])){
           
        }        
            
        // Validação Nome
        if(isset($_POST['nome']) && !empty($_POST['nome'])){
            
        } else {
            $erro[] = 'Campo nome obrigatório';
        }
            
        // Validação Data Nascimento - '25/12/2016'
        if(isset($_POST['data_nascimento']) && !empty($_POST['data_nascimento'])){           
            $arraData = explode('/', $_POST['data_nascimento']);            
            if(!checkdate($arraData[1], $arraData[0], $arraData[2])){
                $erro[] = "Campo data inválida";
            } else {
                $_POST['data_nascimento'] = `$arraData[2]-$arraData[1]-$arraData[0]`;
            }
                
        }
   
             
        // Validação Email
        if(isset($_POST['email']) && !empty($_POST['email'])){            
            if(!filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL))
                $erro[] = "Campo e-mail inválido";
            
        } else {
            $erro[] = "Campo e-mail obrigatório";
        }
                   
        // Validação Telefone - '(99) 99999-9999'; 
        if(isset($_POST['telefone']) && !empty($_POST['telefone'])){           
            if (!preg_match('/^\([0-9]{2}\)?\s?[0-9]{4,5}-[0-9]{4}$/', $_POST['telefone']))
                $erro[] = "Campo telefone inválido";           
        } 
            

       
        
        if(count($erro) > 0 ){
            $_SESSION["error"]=$erro;
            return false;
        } else {
            return true;
        }
        
    }


     /*
    
     public function show()
     {
         if ($sql = $mysqli->prepare("SELECT `id`, `nome`, `data_nascimento`, `email`, `telefone` FROM `pessoa` WHERE `id` = ?")) {
             // Atribui valores às variáveis da consulta
            $sql->bind_param('s', $data); // Coloca o valor de $data no lugar da primeira interrogação (?)
            // Executa a consulta
            $sql->execute();
             // Atribui o resultado encontrado a variáveis
             $sql->bind_result($id, $titulo, $link);
             // Para cada resultado encontrado...
             while ($sql->fetch()) {
                 // Exibe um link com a notícia
                 echo '['. $titulo .']('. $link .')';
                 echo '';
             } // fim while
             // Total de notícias
             echo 'Total de notícias: ' . $sql->num_rows;
             // Fecha a consulta
             $sql->close();
         }
     }

    
    
     public function store()
     { */
         /*INSERT INTO TB_CLIENTE (ID_CLIENTE, NM_CLIENTE, DTNASC, RG_CLIENTE, CPF_CLIENTE, EMAIL_CLIENTE, TEL_CLIENTE, CEL_CLIENTE) VALUES

    (2, ‘Maria Querubina’, ’09/12/1978′, ‘MG-12.123.098’, ‘987.123.456-77’, ‘querubina@querosa.com.br’, ‘(33) 3210-1234’, ‘(33) 8876-0900’); */
   //  }
    
    // public function update()
    // {
         // UPDATE TB_CLIENTE SET EMAIL_CLIENTE = “francismara@gmail.com” WHERE ID_CLIENTE = 3;
    // }
    
    // public function destroy()
    // {
         //DELETE FROM TB_CLIENTE WHERE ID_CLIENTE = 3;
     //}
 }

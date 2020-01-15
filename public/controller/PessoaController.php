<?php

require_once '../config/DB.php'; 
require_once 'services/PessoaService.php'; 


$ps = new PessoaService($conn);  


$pessoas = $ps->index();


switch ($_GET['action']) {
   
    case 'delete':
        if(isset($_SESSION)){ 
            unset($_SESSION);
        }
       
        if(isset($_GET['id']) && is_numeric($_GET['id'])){
    
            $id = $_GET['id'];                              
            
            if($ps->destroy($id)){
               $_SESSION['success'] = "Dado foi deletado";
            }else{
               $_SESSION['error'] = "Não foi possivel deletar!". $ps->error(); 
            }

            header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . $location);
        }else{
            // set header response code
            http_response_code(404);
            echo "<h1>404 Page Not Found!</h1>";
        }


        break;



    case 'update':

        if(isset($_SESSION)){ 
            unset($_SESSION);
        }
      
        break;


    case 'create':
        if(isset($_SESSION)){ 
            unset($_SESSION);
        }
        
        if ($ps->valida()) {
            if($ps->store())
            {
                $_SESSION['success'] = "Dado foi inserido";
            }
            header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . $location);
        }

        break;
    default:
   
}


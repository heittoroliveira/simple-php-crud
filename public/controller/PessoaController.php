<?php

require_once '../config/DB.php';
require_once 'services/PessoaService.php';
require_once 'helper/Utils.php';

// Inicialização de Variaveis
$ps = new PessoaService($conn);
$utils = new Utils();
$pessoa_list = $ps->index();
$pessoa = new Pessoa(-1, '', '', '', '');


if (!isset($_GET['action'])) {
    $action = '';
} else {
    $action = $_GET['action'];
}

switch ($action) {

    case 'delete':

        $utils->limparSessao();
        
        if ($id = $utils->validaGetID()) {        
           
            if (!$ps->destroy($id)) {
                $utils->exibeError(`Não foi possivel deletar! $ps->error()`);
            } else{
                $utils->exibeSuccess("Registro excluído");
            }
                      
            $utils->redirect();

        } else {
            // set header response code
            http_response_code(404);
            $utils->notFound();
        }

        break;

    case 'update':

        $utils->limparSessao();

        try {
            
            if ($id = $utils->validaGetID()) {  
                $pessoa = $ps->show($id);
            } else {
                $up_pessoa = $ps->popular();
                $up_pessoa->validar();
                if ($ps->update($up_pessoa)) {
                    $utils->exibeSuccess("Registro foi Atualizado");
                    $utils->redirect();
                }
            }

        } catch (Exception $error) {
            $utils->exibeError($error->getMessage());
        }

        break;

    case 'create':

        $utils->limparSessao();

        try {
            $new_pessoa = $ps->popular();
            $new_pessoa->validar();
            if ($ps->store($new_pessoa)) {
                $utils->exibeSuccess("Dados Registrados");
            }
            $utils->redirect();
        } catch (Exception $error) {
            $utils->exibeError($error->getMessage());
        }
        break;

    default:
        
    
}

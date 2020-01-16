<?php 

class Utils {

    function limparSessao()
    {
        $_SESSION['error'] = null;
        $_SESSION['success'] = null;
    }

    function redirect()
    {
        header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . $location);
    }

    function notFound(){
        header("Location: 404.php");
    }

    function exibeError($msg)
    {
        $_SESSION['error'] = $msg;
    }

    function exibeSuccess($msg)
    {
        $_SESSION['success'] = $msg;
    }

    function validaGetID(){
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            return (int)$_GET['id'];
        } else {
            return false;
        }
    }



}


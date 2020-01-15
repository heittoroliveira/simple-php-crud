<?php
 require_once('init.php');

$conn = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PASS, MYSQL_DBNAME, MYSQL_PORT);
if (mysqli_connect_errno()) {
    // transformar em um session
    die('Não foi possível conectar-se ao banco de dados: ' . mysqli_connect_error());
    exit();
}
mysqli_set_charset($conn, 'utf8');

/* activate reporting */
$driver = new mysqli_driver();
$driver->report_mode = MYSQLI_REPORT_ERROR;



    
    
   
    
    
    
    



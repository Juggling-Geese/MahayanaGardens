<?php

session_start();

if(isset($_SESSION['current_page'])){
   $last_page = $_SESSION['current_page'];
}else{
   $last_page = 'index.php';
}

session_unset();
session_destroy();
//echo $last_page;
header("Location: ". $last_page);

?>

<?php 
session_start();
//for including the php files
spl_autoload_register(function($class_name){
    include "classes/$class_name.php";
});
$source = new source;
 ?>
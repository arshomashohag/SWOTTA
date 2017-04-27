<?php
include_once('php/allFunctions.php');

if(isset($_POST['add']))
   {
   	$name = $_POST['subc'];
   	$cid = $_POST['cat'];

   	     addSubcategory($name,$cid);
    
   		 header('Location: '.$_SERVER['HTTP_REFERER']);
   	

   }

?>
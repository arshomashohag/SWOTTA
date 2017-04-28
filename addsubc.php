<?php
include_once('php/allFunctions.php');

if(isset($_POST['add']))
   {
   	$name = $_POST['subc'];
   	$cid = $_POST['cat'];

   	     addSubcategory($name,$cid);
    
   		 header('Location: '.$_SERVER['HTTP_REFERER']);
   	

   }

   if(isset($_POST['add_content']))
   {
    	$category_id=$_POST['category'];
    	$subcategory_id=$_POST['subcategory'];
    	$title=$_POST['title'];
    	$article=$_POST['article'];
    	
      $filetmp = $_FILES["image"]["tmp_name"];
      $filename = $_FILES["image"]["name"];
      if(!empty($filename)){
      $count=checkCountImage();
      $filepath = "images/".$count.$filename;  
      }
                             
          
    	addContentes($category_id,$subcategory_id,$title,$filepath,$filetmp,$article);
      header('Location: '.$_SERVER['HTTP_REFERER']);
   }

?>
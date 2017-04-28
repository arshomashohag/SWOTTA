<?php
include_once('php/allFunctions.php');

if(isset($_POST['add']))
   {
   	$name = $_POST['subc'];
   	$cid = $_POST['cat'];
        
   	     $r = addSubcategory($name,$cid);
   	     $message=null;
         /*if($r=="Ok")
   		 header('Location: '.$_SERVER['HTTP_REFERER']);*/

   		 $message = $r;
   	

   }
   if(isset($_POST['add_content']))
   {
    	$category_id=$_POST['category'];
    	$subcategory_id=$_POST['subcategory'];
    	$title=$_POST['title'];
    	$article=$_POST['article'];
    	$article = nl2br(htmlentities($article, ENT_QUOTES, 'UTF-8'));
    	
      $filetmp = $_FILES["image"]["tmp_name"];
      $filename = $_FILES["image"]["name"];

      if(!empty($filename)){
      $count=checkCountImage();
      $filepath = "images/".$count.$filename;  
      }
      

           $message = null;

      $r = addContentes($category_id,$subcategory_id,$title,$filepath,$filetmp,$article);
      if($r){
      	//header('Location: '.$_SERVER['HTTP_REFERER']);

       $message= "Contents Are Saved Successfully !!";
    }
        else{

      			$message = "Something wrong!!! Please try again!!";
      }
   }


?>


<!DOCTYPE html>
<html>
<head>
	<title>Message | SWOTTA - A Community News Portal</title>


	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="screen" />
</head>
<body>

  <div class="container">
		    <center>
					  	<div class="jumbotron" >
					  		<?php 
                                 $back = $_SERVER['HTTP_REFERER'];

					  			if(isset($message)){
					  				printf('<div><strong class="alert alert-danger">%s</strong></div>', $message);
					  			}

					  			printf('<div> 
					  							<center>
					  								<a class="btn btn-primary" href="%s">Back</a>
					  							</center>
					  				</div>', $back);

					  		?>

					  	</div>

		  	</center>
  </div>

</body>
</html>
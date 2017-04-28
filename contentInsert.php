<?php
 include_once('php/allFunctions.php');


   ob_start();
        session_start();
        
         if(!isset($_SESSION['email']) || !isset($_SESSION['admin'])){
            header("Location: php/error.php");
        }

   // $cid = $_GET['id'];
   // $name = $_GET['name'];


   $catresult = getCategory();
   
   

?>


<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<script type="text/javascript" src="assets/js/jquery-min.js"></script> 
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="assets/js/jquery.bxslider.js"></script> 
<script type="text/javascript" src="assets/js/selectnav.min.js"></script> 



<link rel="stylesheet" type="text/css" href="assets/font/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="assets/font/font.css" />
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/myStyle.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/jquery.bxslider.css" media="screen" />






</head>


<body>


<div class="body_wrapper">
  <div class="center">
    <div class="header_area">
      <div class="logo floatleft"><a href="#"><img src="images/logo12.png" alt="" /></a></div>
      <div class="top_menu floatleft">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact us</a></li>
          <li><a href="#">Subscribe</a></li>
            <?php 
          if(isset($_SESSION['email'])){
                $email=$_SESSION['email'];

                if(isset($_SESSION['admin'])){
                  print('<li><a href="admin.php">Admin</a></li>');
                }
                 
                  print('<li><a href="logout.php">Logout</a></li>');
                 

              }

               else { 
                print('<li><a href="login.php">Login</a></li>');
             }

        ?>
        </ul>
      </div>
   </div>
   




<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
   function selectsubc(id){

    var xmlhttp;
    
     
           if (window.XMLHttpRequest){

                                  xmlhttp = new XMLHttpRequest();

                                  }

                                   else{ 
                                     xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                                  }

                               xmlhttp.onreadystatechange = function(){
                                 
                                 if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                        document.getElementById("subcategory").innerHTML = xmlhttp.responseText;
                                    }

                               }

                              xmlhttp.open("GET", "subcategoryajax.php?q=" + id, true);
                              xmlhttp.send();
                            
                    return; 
   }


   function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#imgInp").change(function(){
    readURL(this);
});

</script>
             
   <!--body part-->
   <section>
        

        <div class="panel panel-primary">
            <div class="panel-heading">
                <span> <h2></h2></span>
            </div>

            <div class="panel-body" id="pBody">
                
                <div class="row">                                    
                 <div class="col-md-9">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <span class="contactHead"><h2>Add Contents </h2></span>
                        </div>
                        <div class="panel-body">
                            <form action="addsubc.php" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
                                 <div class="form-group">
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Category Name</label>
                                <div class="col-sm-10">
                                    <select required name="category" id="category" onchange="selectsubc(this.value)" class="form-control">
                                        <option>Select Category</option>  
                                        <?php 
                                            
                                            while($data=mysqli_fetch_assoc($catresult))
                                            {
                                               printf('
                                                    <option value="%s">%s</option>
                                                ', $data['id'], $data['name']);

                                         } ?>
                                    </select>
                                </div>
                                 </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="col-sm-2 control-label">Subcategory Name</label>
                                    <div class="col-sm-10">
                                    <select required name="subcategory" id="subcategory" class="form-control">


                                    </select>
                                    </div>
                                </div> 
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
                                <div class="col-sm-10">
                                  <input type="file" accept=".jpg,.png,.gif" class="form-control" id="imgInp" name="image">

                                </div>
                          </div>
                          <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Article Title</label>
                                <div class="col-sm-10">
                                  <input type="text" name="title" class="form-control" required>
                                </div>
                          </div>
                          <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Article</label>
                                <div class="col-sm-10">
                                  <textarea  name="article" type="text" class="form-control" id="inputtext" placeholder="Write article" rows="8" required> </textarea>
                                </div>
                          </div>
                           <div class="form-group">
                                <div class="col-sm-6"></div>
                                <div class="col-sm-6">
                                    <button  type="submit" class="btn btn-success form-control" name="add_content">Add Content</button>
                                </div>
                          </div>

                         </form>
                        </div>
                     
                                   

                    </div>
                                                                 
                </div>

                <div class="col-md-3" style="max-height: 300px; overflow: auto;">
                 <form id="form1" runat="server">
                    
                    <img src="
                       
                       
                      <?php 
                            $temp="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==";
                          if(strlen($filepath)>0)
                              echo $filepath ; 
                          else
                              echo $temp;
                                 
                                 
                                 
                                 ?>
                       
                       
                       
                       
                       " width="200" height="200" class="img-responsive" alt="Photo">
                      
                </form>
                </div>
             </div> 

        </div>
                                     
                                      
  

    </div>
             
        
   </section>
   <!--End Body Part -->

<script type="text/javascript">
  
selectnav('nav', {
    label: '-Navigation-',
    nested: true,
    indent: '-'
});
selectnav('f_menu', {
    label: '-Navigation-',
    nested: true,
    indent: '-'
});
$('.bxslider').bxSlider({
    mode: 'fade',
    captions: true
});
</script>


</body>
</html>








































<?php 

?>


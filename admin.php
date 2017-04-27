
<?php
        include "php/dbConnection.php";
        include "php/allFunctions.php";
        include_once('content.php');

        ob_start();
        session_start();

         if(!isset($_SESSION['email']) || !isset($_SESSION['admin'])){
            header("Location: index.php");
        }  

      if(isset($_POST['signup']))
      {
        $msg = registration();
      }
      ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SWOTTA - A Community News Portal</title>
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
          
           
          
      <section>
        
        <div class="panel panel-primary">

            <div class="panel-header">
              <center><h2>Dashboard</h2></center>
            </div>

            <div class="panel-body">
               <div>

                 <!-- Nav tabs -->
                 <ul class="nav nav-tabs" role="tablist">
                   <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">Category</a></li>
                   <li role="presentation" ><a href="#content" aria-controls="profile" role="tab" data-toggle="tab">Content</a></li>
                   <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
                 </ul>

                 <!-- Tab panes -->
                 <div class="tab-content">




                    <!-- Category panes -->
                   <div role="tabpanel" class="tab-pane fade-in active" id="category">
                                    
                                      
                                        
                                         
                                             <div class="panel panel-primary">
                                                <div class="panel-heading">
                                                  <span> <h2>All Categories</h2></span>
                                                   
                                                
                                            
                                                </div>

                                                <div class="panel-body" id="pBody">
                                                    <table class="table table-striped">
                                                        <thead>
                                                           <tr>
                                                            <th>Name(Click to Update)</th>

                                                            <th><span pull-right">Subcategories</span></th>
                                                           </tr>
                                                        </thead>
                               

                                                          <tbody id="cBody">

                                                              <?php 

                                                                    getContentBody();
                                                               ?>

                                                          </tbody>

                                                         
                                                    </table>


                                                                
                                                  </div>

                                             </div>
                                    
                                     
                                   
                                  
                   </div>
                    <!-- End Of category Pane -->


                    <!--Content pane -->
                   <div role="tabpanel" class="tab-pane" id="content">

                        <div class="panel panel-primary">

                            <div class="panel-heading">
                              <h2>All Contents</h2>
                            </div>
                            <div class="panel-body">
                                <?php
                                   //$content = getContents();
                                ?>
                            </div>
                          
                        </div>
                     
                   </div>
                   <!-- ENd of content pane -->


                   <!--setting pane -->
                   <div role="tabpanel" class="tab-pane" id="settings">
                      <div class="panel panel-primary">

                            <div class="panel-heading">
                              <h2>Profile Settings</h2>
                            </div>
                            <div class="panel-body">
                                 
                            </div>
                          
                        </div>
                   </div>

                   <!--End of settings pane -->

                 </div>

               </div>
        </div>
           
      </section>

     </div>
  </div>

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
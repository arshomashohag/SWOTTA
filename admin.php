
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


$message=null;

if(isset($_POST['addadmn'])){
     $name = $_POST['name'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $confirmpass = $_POST['confirmpass'];

     $message = addAdmin($email, $password, $confirmpass, $name);

 }

 if(isset($_POST['changepass'])){
     $old = $_POST['old'];
     $new = $_POST['newpass'];
     $newcof = $_POST['newconfirmpass'];

     $message = changeAdminPass($_SESSION['email'], $old, $new, $newcof);
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


</script>


 
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
              <?php 

              if(isset($message)){
                 printf('
                  <div class="alert alert-info">
                      <center>
                        %s
                      </center>
                  </div>

                  ', $message);
              }

              ?>
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
                                <div class="row">
                                <!--Add admin column -->
                                <div class="col-md-6">

                                     <!--Add admin --> 
                                        <div class="panel panel-info">
                                            <div class="panel-heading"><h3>Add Admin</h3></div>
                                            <div class="panel-body">
                                              <form id="addadmin" action="admin.php" method="post">
                                                  <label for="name">Name</label>
                                                  <input class="form-control" type="text" name="name" placeholder="Admin Name" required>

                                                  <label for="name">Email</label>
                                                  <input class="form-control" type="email" name="email" placeholder="Email" required>

                                                  <label for="name">Password</label>
                                                  <input class="form-control" type="password" name="password" placeholder="Password" required>

                                                  <label for="name">Re-type Password</label>
                                                  <input class="form-control" type="password" name="confirmpass" placeholder="Confirm Password" required>

                                                  <input type="submit"  class="form-control btn btn-primary" name="addadmn" value="Add">

                                              </form>
                                            </div>
                                        </div>
                                     <!-- End Add admin -->

                                 </div>
                                 <!-- End add admin column -->

                                 <!--Account  Setting -->
                                 <div class="col-md-6">

                                        <div class="panel panel-info">
                                            <div class="panel-heading"><h3>Change Password</h3></div>
                                            <div class="panel-body">
                                              <form  action="admin.php" method="post">
                                                  <label for="name">Old Password</label>
                                                  <input class="form-control" type="password" name="old" placeholder="Old Password" required>

                                                  <label for="name">New Password</label>
                                                  <input class="form-control" type="password" name="newpass" placeholder="New Password" required>

                                                  <label for="name">Confirm Password</label>
                                                  <input class="form-control" type="password" name="newconfirmpass" placeholder="Re-type Password" required>
                                                 
                                                  <input type="submit"  class="form-control btn btn-primary" name="changepass" value="Change">

                                              </form>
                                            </div>
                                        </div>
                                   
                                 </div>
                                 <!-- Account Setting end -->

                                </div>
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
<?php 
include "php/dbConnection.php";
	
	function signin_checking($email, $password){

	global $connection;
		      $error=false;
          $msg="";
		       
         $email = mysqli_real_escape_string($connection,$email);
         $password = mysqli_real_escape_string($connection,$password);

         if(empty($email)){
                
                return "Please enter your  username.";

            }


            if (empty($password)){
                 
                return "Please enter password.";
            }

             
            	  $hashFormat = "$2y$10$";
                $salt = "iusesomecrazystrings22";
                $hashF_and_salt = $hashFormat . $salt;
                $password = crypt($password, $hashF_and_salt);
                $query = "SELECT email,password from users where email='$email'";
                $query_email_result = mysqli_query($connection,$query);
                $row=mysqli_fetch_array($query_email_result);
                $count_user =mysqli_num_rows($query_email_result);

                   if($count_user==1 && $row['password']==$password){

                         
                       if($email=='najmul2022@gmail.com') {
                                  return "admin";
                            }
                            
                            return "ok";
                            
                      }
              else  return "Wrong username or password, Try again...";
                       

                        
	}



	function registration()
	{
		// Signup form action is here
    global $connection;
        $error=false;
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        
        $email = mysqli_real_escape_string($connection,$email);
        $password = mysqli_real_escape_string($connection,$password);
		$confirm_password = mysqli_real_escape_string($connection,$confirm_password);
          // check username exist or not

            if(empty($email)){
                $error=true;
                $emailError = "Please enter your  email.";

            }
            else {

                $query = "SELECT email from users where email='$email'";
                $query_email_result = mysqli_query($connection,$query);
                $check_email =mysqli_num_rows($query_email_result);
                if($check_email!=0){
                    
                    return "Provided Email is already in use.";
                }

            }

      // password validation
          if (empty($password)){
              
             return "Please enter password.";
          } else if(strlen($password) < 6) {
               
              return "Password must have atleast 6 characters.";
          }
        if (empty($confirm_password)){
            
            return "Please enter password.";
        } else if($password != $confirm_password) {
             
            return "Password does not match";
        }

             



                        $hashFormat = "$2y$10$";
                        $salt = "iusesomecrazystrings22";
                        $hashF_and_salt = $hashFormat . $salt;
                        $password = crypt($password, $hashF_and_salt);
                        $query="INSERT INTO users(email,password)";
                        $query.="values('$email','$password')";
                        $query_insert_result = mysqli_query($connection,$query);
                        if($query_insert_result)
                        {
                             
                            $_SESSION['email'] = $email;                            
                            header("Location: index.php");
                        }
                        else
                        {
                            
                            return "Something went wrong, try again later...";
                        }
 
	}


  function getAllCategory(){

    global $connection;

    $query = "SELECT 
    c.id,
    c.name,
    sc.id,
    sc.name
    FROM category as c left outer join subcategory as sc 
    on c.id=sc.cid";


    $result = mysqli_query($connection, $query);

    while($row=mysqli_fetch_assoc($result)){

    }

  }

  function getCategory(){
    global $connection;
    $query = "SELECT * FROM category";

    $result = mysqli_query($connection, $query);

    return $result;
  }

  function getSubCategory($cid){
    global $connection;
    $query = "SELECT 
    sc.id,
    sc.name
    FROM subcategory as sc where sc.cid='$cid'";

    $result = mysqli_query($connection, $query);

    return $result;
  }

  function addSubcategory($name,$cid)
  {

    global $connection;
    $query = "SELECT * FROM subcategory WHERE name='$name'";
    $result = mysqli_query($connection,$query);


    if(mysqli_num_rows($result)==0){
       $query = "INSERT into subcategory(cid,name) values('$cid','$name')";
       mysqli_query($connection,$query);

    }

  
  }




  function getContents($id, $cid){
    global $connection;
    $query = "SELECT * FROM content WHERE scid='$cid' AND scid='$id'";

    return mysqli_query($connection, $query);
  }





function addContentes($category_id,$subcategory_id,$title,$filepath,$filetmp,$article)
                      { 
                      
                          global $connection;
                          $filepath = mysqli_real_escape_string($connection,$filepath);
                          $query = "INSERT into content(cid,scid,head,image,body) values('$category_id',$subcategory_id,'$title','$filepath','$article')";
                           $result=mysqli_query($connection,$query);
                          if($result && strlen($filepath)>0){
                            move_uploaded_file($filetmp,$filepath);
                            
                          }

                          
                    }


 function checkCountImage(){
      global $connection;
       $query = "SELECT * FROM photon ";
       $result=mysqli_query($connection, $query);
       $row= mysqli_fetch_assoc($result);
       $count= $row['count'];  
       $old=$count;
       $count=$count+1;
       $queryU="UPDATE photon SET count='$count' WHERE id=1 ";
       mysqli_query($connection,$queryU);
       return $old;

 }                   
                  

?>
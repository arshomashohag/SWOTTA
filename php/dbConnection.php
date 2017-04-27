<?php 

$connection=mysqli_connect('localhost','root','','swotta');

if(!$connection)
{
echo "Database connection Failed ". mysqli_connect_error();
}

?>
<?php 

$connection=mysqli_connect('localhost','root','','swotta_update');

if(!$connection)
{
echo "Database connection Failed ". mysqli_connect_error();
}

?>
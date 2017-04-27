<?php
include_once('php/allFunctions.php');

function getContentBody(){


     $result = getCategory();

     while ($row = mysqli_fetch_assoc($result)) {
     	$cid = $row['id'];
     	$res = getSubCategory($cid);
     	print('<tr>');

     			print('<td>');
     			printf('<a href="categorydetails.php?id=%s&name=%s" target="_blank">%s</a>
					   
					 </td> ',$row['id'], $row['name'], $row['name']);

     			 

     			print('<td>');
     			print('<ul>');
     			while($rw = mysqli_fetch_assoc($res)){
     				printf('<li>%s
							
     					</li>', $rw['name']);
     			}
     			print('</ul>');
     			print('</td>');

     	print('</tr>');
     }

}



?>
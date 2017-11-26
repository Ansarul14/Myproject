<?php
    $a=$_POST['field1'];
	$b=$_POST['field2'];
	$c=$_POST['field3'];
	$d=$_POST['field4'];
	$r=$_POST['roll'];
	
	$total=$a+$b+$c+$d;
   $db=mysqli_connect('localhost','root','','cseproject');
   if ($_POST['dept']=='eng')
   {
	   $sql="update engv set math='$a',phy='$b',chem='$c',eng='$d',total='$total' where hscroll='$r'";
	   $result=mysqli_query($db,$sql);
	   header('location: resultcal.php');
   }
   else 
   {
	   $f=$_POST['field5'];
	   $total=$a+$b+$c+$d+$f;
	   $sql="update enga set math='$a',phy='$b',chem='$c',eng='$d',arch='$f',total='$total' where hscroll='$r'";
	   $result=mysqli_query($db,$sql);
	    header('location: resultcal.php');
   }
      

?>
<?php
   $a=$_POST['field1'];
   $b=$_POST['field2'];
   if (!empty($a)&&!empty($b)&&$a=='ruet'&&$b=='ruet')
   {
	   header('location: teacher2.php');
   }
   else 
   {
	   echo '<script language="javascript">';
       echo 'alert("Invalid Username or Password");';
        echo 'window.location.href="teacher.php";';
        echo '</script>';
   }


?>
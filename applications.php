<?php
   $db=mysqli_connect('localhost','root','','cseproject');
   $a=$_POST['field1'];
   $b=$_POST['field2'];
   $c=$_POST['sboard'];
   $d=$_POST['field3'];
   $e=$_POST['field4'];
   $f=$_POST['hboard'];
   $g=$_POST['dept'];
   $h=$_POST['number'];
   if (strlen($h)==11&&$h[0]=='0'&&$h[1]=='1'&&$h[2]=='5')
   {
	   if ($g=='eng')
	   $sql="insert into engv (name,ssc,sscboard,hscroll,hscreg,hscboard,type,phone)
	   value('$a',$b,'$c',$d,$e,'$f','$g','$h')";
	   else if ($g=='arch')
		   $sql="insert into enga (name,ssc,sscboard,hscroll,hscreg,hscboard,type,phone)
	   value('$a',$b,'$c',$d,$e,'$f','$g','$h')";
	   $result=mysqli_query($db,$sql);
	   header ('location: complete.php');
   }
   else 
   {
	    echo '<script language="javascript">';
       echo 'alert("Your Entered data was invalid");';
        echo 'window.location.href="apply.php";';
        echo '</script>';
   }


?>
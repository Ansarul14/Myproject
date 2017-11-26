<?php
   $db=mysqli_connect('localhost','root','','cseproject');
   $sql="insert into enga  select * from arch";
   $result=mysqli_query($db,$sql);
   header('location: teacher2.php');

?>
<?php

  $db=mysqli_connect('localhost','root','','cseproject');
  $sql="delete from engv";
  $result=mysqli_query($db,$sql);
  header('location: teacher2.php');


?>
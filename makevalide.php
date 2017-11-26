<?php
   $db=mysqli_connect('localhost','root','','cseproject');
   $sql1="select hscroll from eng";
   $sql1="select hscroll from engv";
   //$sql="insert into engv(name,ssc,sscboard,hscroll,hscreg,hscboard,type,phone) select name,ssc,sscboard,hscroll,hscreg,hscboard,type,phone from eng";
   $sql="insert into engv (name,ssc,sscboard,hscroll,hscreg,hscboard,type,phone) select name,ssc,sscboard,hscroll,hscreg,hscboard,type,phone from eng left join engv on eng.hscrollengv.hscroll";
   
   
   $result=mysqli_query($db,$sql);
   header('location: teacher2.php');

?>
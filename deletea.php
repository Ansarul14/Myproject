  <?php
			  $db=mysqli_connect("localhost","root","",'cseproject');
			
				  $box=$_POST['num'];
				 while(list($key,$val)=@each($box))
				 {
					 mysqli_query($db,"delete from enga where hscroll=$val");
				 }	
				 header("location: arch.php");
			 
		?>
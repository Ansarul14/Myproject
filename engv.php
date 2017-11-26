<html>

  <head> 
     <title>
	 Rajshahi University Of Engineering And Technology
	 </title>
	 <style type="text/css">
	  .topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  color: #f2f2f2;
  display: block;
  float: left;
  font-size: 17px;
  padding: 16px 68px;
  text-align: center;
  text-decoration: none;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 67%;
	margin-top:20px;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #486766;}
#customers tr:nth-child(odd){background-color: #27AE60;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}


	 </style>
	  <link rel="stylesheet" href="style.css">
	  <link rel="stylesheet" href="apply.css">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
            
  </head>
  <body>
       
		   <div class="header">
		      <img src="images/ruet.png">
		    
		   </div> 
		   
		<div class="main1">
		     <h2>Valid candidates list for engineering</h2>
		  <table id="customers">
		       <tr>
			     
				 <th>Exam Roll-No</th>
				 <th>Name</th>
				 <th>ssc Roll</th>
				 <th>ssc board</th>
				 <th>hsc roll</th>
				 <th>hsc board</th>
				 <th>Group</th>
				 <th>Phone-No</th>
				 
			   </tr>
			  <form action="rvalide.php" method="post">
		       <?php
                   $db=mysqli_connect('localhost','root','','cseproject');
				   $sql="select name,ssc,sscboard,hscroll,hscreg,hscboard,type,phone from engv";
				   $result=mysqli_query($db,$sql);
				   $co=1;
				   while($row=mysqli_fetch_array($result))
				   {
					   echo "<tr>";
                           
						  echo "<td>";
						    echo $co;
						  echo "</td>";
						  echo "<td>";
						    echo $row['name'];
						  echo "</td>";
						  echo "<td>";
						    echo $row['ssc'];
						  echo "</td>";
						  echo "<td>";
						    echo $row['sscboard'];
						  echo "</td>";
						  echo "<td>";
						    echo $row['hscroll'];
						  echo "</td>";
						  
						  echo "<td>";
						    echo $row['hscboard'];
						  echo "</td>";
						  echo "<td>";
						    echo $row['type'];
						  echo "</td>";
						  echo "<td>";
						    echo $row['phone'];
						  echo "</td>";
						  $co++;
				   }
                   
                ?>			   
		     </table>
			 
			   
			 
		</div>
		<div class="footer" style="margin-top:250px">
		   <p>Copyright © Rajshahi University Of Engineering And Technology 2017 </p>
		</div>
		
  </body>

</html>

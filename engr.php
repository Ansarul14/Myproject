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
    width: 80%;
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
.input{
	text-align:center;
	padding:5px;
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
		    
		  <table id="customers">
		      
			  
		       <?php
                   $db=mysqli_connect('localhost','root','','cseproject');
				   $sql="select * from engv order by total desc";
				   $result=mysqli_query($db,$sql);
				   $co=1;
				   $a=$_POST['roll'];
				   while($row=mysqli_fetch_array($result))
				   {
					   if ($row['hscroll']==$a){
						   ?>
						    <tr>
			     
				 <th>Merit Position</th>
				 <th>Name</th>
				 <th>hsc roll</th>
				 <th>Group</th>
				 <th>Math</th>
				 <th>Physics</th>
				 <th>Chemistry</th>
				 <th>English</th>
				 
				 <th>Total</th>
				 
			   </tr>
			   <?php
					   echo "<tr>";
                           
						  echo "<td>";
						    echo $co;
						  echo "</td>";
						  echo "<td>";
						    echo $row['name'];
						  echo "</td>";
						 
						  echo "<td>";
						    echo $row['hscroll'];
						  echo "</td>";
						  
						  echo "<td>";
						    echo 'Engineering';
						  echo "</td>";
						  echo "<td>";
						    echo $row['math'];
						  echo "</td>";
						  echo "<td>";
						    echo $row['phy'];
						  echo "</td>";
						  echo "<td>";
						    echo $row['chem'];
						  echo "</td>";
						  echo "<td>";
						    echo $row['eng'];
						  echo "</td>";
						  
						  echo "<td>";
						    echo $row['total'];
						  echo "</td>";
						  echo "</tr>";
					   $flag=0; break;
					   }
					   else {
						   $flag=1;
					   }
						  $co++;
				   }
				   if ($flag==1)
				   {
					   ?><div class="body">
		        				
		      <h3 style="margin-top:100px">Sorry Your roll doesnot match</h3>
		   </div>
				   <?php }
                   
                ?>			   
		     </table>
			 
			    
			 
		</div>
		<div class="footer" style="margin-top:370px">
		   <p>Copyright © Rajshahi University Of Engineering And Technology 2017 </p>
		</div>
		
  </body>

</html>

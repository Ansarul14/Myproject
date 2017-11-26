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

#customers tr:nth-child(even){background-color: #24323D;}
#customers tr:nth-child(odd){background-color: #486766;}

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
		     <form action="engr.php" class="input" method="POST">
			     <input type="text" name="roll" placeholder="search by your hsc roll";
				 required autocomplete="off" style="box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    padding: 8px;
    outline: none;
    border: 1px solid #B0CFE0;
    -webkit-transition: all 0.30s ease-in-out;
    -moz-transition: all 0.30s ease-in-out;
    -ms-transition: all 0.30s ease-in-out;
    -o-transition: all 0.30s ease-in-out;">
				 <input type="submit" value="submit"style=" -moz-box-shadow: inset 0px 1px 0px 0px #3985B1;
    -webkit-box-shadow: inset 0px 1px 0px 0px #3985B1;
    box-shadow: inset 0px 1px 0px 0px #3985B1;
    background-color: #216288;
    border: 1px solid #17445E;
    display: inline-block;
    cursor: pointer;
    color: #FFFFFF;
    padding: 8px 18px;
    text-decoration: none;
    font: 12px Arial, Helvetica, sans-serif;">
			 </form>
		  <table id="customers">
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
                   $db=mysqli_connect('localhost','root','','cseproject');
				   $sql="select name,hscroll,math,phy,chem,eng,total from engv order by total desc";
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
						  $co++;
				   }
                   
                ?> 		   
		     </table>
				  
				   
			 
			    
			 
		</div>
		
		<div class="footer" style="margin-top:300px">
		   <p>Copyright © Rajshahi University Of Engineering And Technology 2017 </p>
		</div>
		
  </body>

</html>

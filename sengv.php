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
    padding: 5px;
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
		   <div class="topnav">
       <a href="index.php" class="active">Home</a>
      
	   <a href="http://www.ruet.ac.bd/uploads/media/default/0001/01/63b04cb5f38e83a19e1f962f8bdd8f9366f2f13f.pdf">Admission Notice</a>
       <a href="apply.php">Apply Now</a>
       <a href="svalid.php">Valid Candidates List</a>
       <a href="result.php">Admission Result</a>
        </div>
		<div class="main1">
		     <form action="vshoweng.php" class="input" method="POST">
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
			     
				 <th>Exam Roll-No</th>
				 <th>Name</th>
				 <th>ssc Roll</th>
				 <th>ssc board</th>
				 <th>hsc roll</th>
				 <th>hsc board</th>
				 <th>Group</th>
				 <th>Phone-No</th>
				 
			   </tr>
			  
		       <?php
                   $db=mysqli_connect('localhost','root','','cseproject');
				   $sql="select * from engv";
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

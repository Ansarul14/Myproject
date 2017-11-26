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

#customers tr:nth-child(even){background-color: #179377;}
#customers tr:nth-child(odd){background-color: #305A72;}

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
		   <div class="topnav">
       <a href="index.php" class="active">Home</a>
       <a href="form.php">Applications Forms</a>
       <a href="valid.php">Valid Candidates</a>
       <a href="resultcal.php">Result Calculation</a>
       <a href="result.php">Admission Result</a>
        </div>
		<div class="main1">
		 
		  <table id="customers">
		       <tr>
			     <th>#</th>
				 <th>Form-No</th>
				 <th>Name</th>
				 <th>ssc Roll</th>
				 <th>ssc board</th>
				 <th>hsc roll</th>
				 <th>hsc board</th>
				 <th>Group</th>
				 <th>Phone-No</th>
				 
			   </tr>
			   <form action="delete.php" method="post" >
		       <?php
                   $db=mysqli_connect('localhost','root','','cseproject');
				   $sql="select * from applications";
				   $result=mysqli_query($db,$sql);
				   $co=1;
				   while($row=mysqli_fetch_array($result))
				   {
					   echo "<tr>";
                           echo "<td>";?>
						   <input type="checkbox" name="num[]" value="<?php echo $row["hscroll"];?>"/>
						   <?php
						  echo "</td>";
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
			 
			    <input type="submit" value="remove from list" name="delete" style="background: linear-gradient(to bottom, #2D77A2 5%, #337DA8 100%);
    background-color: #28739E;padding:8px;text-align:center;-moz-box-shadow: inset 0px 1px 0px 0px #3985B1;
    -webkit-box-shadow: inset 0px 1px 0px 0px #3985B1;
    box-shadow: inset 0px 1px 0px 0px #3985B1;
    background-color: #216288;
    border: 1px solid #17445E;
    display: inline-block;
    cursor: pointer;
    color: #FFFFFF;
    padding: 8px 18px;
    text-decoration: none;
    font: 14px Arial, Helvetica, sans-serif;text-align:center;
	margin-top:10px;margin-left:300px;">
	
			 </form>
			 
		</div>
		<div class="footer" style="margin-top:300px">
		   <p>Copyright © Rajshahi University Of Engineering And Technology 2017 </p>
		</div>
		
  </body>

</html>

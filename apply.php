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
       <a href="#">Admission Result</a>
        </div>
		   <form class="form-style-9" method="post" action="applications.php">
		   
<ul>
<li>
    <input type="text" name="field1" required autocomplete="off"class="field-style field-split align-left" placeholder="Name" />
    <input type="text" name="field2"required autocomplete="off" class="field-style field-split align-right" placeholder="ssc roll" />

</li>
<li>
<select name="sboard" style="padding:7px;width:450px;color:grey;";>
   <option selected="" value="">Select SSC Board</option>
<option value="barisal">Barisal</option>
<option value="chittagong">Chittagong</option>
<option value="comilla">Comilla</option>
<option value="dhaka">Dhaka</option>
<option value="dinajpur">Dinajpur</option>
<option value="jessore">Jessore</option>
<option value="rajshahi">Rajshahi</option>
<option value="sylhet">Sylhet</option>
<option value="madrasah">Madrasah</option>
<option value="tec">Technical</option>
<option value="dibs">DIBS(Dhaka)</option>
   </select>
</li>
<li>
    <input type="text" name="field3" required autocomplete="off"class="field-style field-split align-left" placeholder="hsc roll" />
    <input type="text" name="field4" required autocomplete="off" class="field-style field-split align-right" placeholder="hsc reg no" />
</li>
<li><select name="hboard" required autocomplete="off"style="padding:7px;width:450px;color:grey;";>
   <option selected="" value="">Select HSC Board</option>
<option value="barisal">Barisal</option>
<option value="chittagong">Chittagong</option>
<option value="comilla">Comilla</option>
<option value="dhaka">Dhaka</option>
<option value="dinajpur">Dinajpur</option>
<option value="jessore">Jessore</option>
<option value="rajshahi">Rajshahi</option>
<option value="sylhet">Sylhet</option>
<option value="madrasah">Madrasah</option>
<option value="tec">Technical</option>
<option value="dibs">DIBS(Dhaka)</option>
   </select>
</li>
<li><select name="dept" required autocomplete="off"style="padding:7px;width:450px;color:grey;";>
 <option selected="" value="">Select Your choice</option>
   <option value="eng"  >Engineering</option>
   <option value="arch">Architecture</option>
   </select>
</li>
<li>
<input type="text" required autocomplete="off"name="number" placeholder="Teletalk Phone Number"style="padding:7px;width:450px;color:grey;">
</li>
<li>
<input type="submit" value="Submit" />
</li>
</ul>
</form>
		
		<div class="footer">
		   <p>Copyright © Rajshahi University Of Engineering And Technology 2017 </p>
		</div>
  </body>

</html>
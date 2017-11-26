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
	  <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="apply.css">    
  </head>
  <body>
       
		   <div class="header">
		      <img src="images/ruet.png">
		    
		   </div> 
		   <div class="topnav">
       <a href="index.php" class="active">Home</a>
       <a href="forms.php">Applications Forms</a>
       <a href="validc.php">Valid Candidates</a>
       <a href="resultcal.php">Result Calculation</a>
       <a href="result.php">Admission Result</a>
        </div>
		
		   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#ddlPassport").change(function () {
            if ($(this).val() == "arch") {
                $("#dvPassport").show();
            } else {
                $("#dvPassport").hide();
            }
        });
    });
</script>
		<form class="form-style-9" method="post" action="resultsave.php">
		   
<ul>
<li>
<input type="text" name="roll"style="padding:7px;width:450px;text-align:center"; required autocomplete="off"class="field-style field-split align-left" placeholder="HSC Roll" />
	<br/><br/><br/>
    <input type="text" name="field1"style="padding:7px;width:450px;text-align:center"; required autocomplete="off"class="field-style field-split align-left" placeholder="Math" />
	<br/><br/><br/>
    <input type="text" name="field2"style="padding:7px;width:450px;text-align:center";required autocomplete="off" class="field-style field-split align-right" placeholder="Physics" />
      <br/><br/><br/>
	  <input type="text" name="field3"style="padding:7px;width:450px;text-align:center"; required autocomplete="off"class="field-style field-split align-left" placeholder="Chemistry" />
	<br/><br/><br/>
	<input type="text" name="field4"style="padding:7px;width:450px;text-align:center"; required autocomplete="off"class="field-style field-split align-left" placeholder="English" />
	<br/><br/>
</li>
<li>
<select name="dept" id="ddlPassport" required autocomplete="off"style="padding:7px;width:450px;color:grey;";>
 <option selected="" value="">Select the group</option>
   <option value="eng"  >Engineering</option>
   <option value="arch">Architecture</option>
   </select>
</li>
 <div id="dvPassport" style="display: none">
    
   <input type="text" name="field5"style="padding:7px;width:450px;text-align:center"; class="field-style field-split align-left" placeholder="Architecture" />
	<br/><br/>
</div>
<input type="submit" value="Submit" style="background: linear-gradient(to bottom, #2D77A2 5%, #337DA8 100%);
    background-color: #28739E;padding:8px;text-align:center;-moz-box-shadow: inset 0px 1px 0px 0px #3985B1;
    -webkit-box-shadow: inset 0px 1px 0px 0px #3985B1;
    box-shadow: inset 0px 1px 0px 0px #3985B1;
    background-color: #216288;
    border: 1px solid #17445E;
    display: inline-block;
    cursor: pointer;
    color: #FFFFFF;
    padding: 8px 16px;
    text-decoration: none;
    font: 14px Arial, Helvetica, sans-serif;text-align:center;
	margin-top:10px;margin-left:5px;"/>
</li>
</ul>
</form>
		<div class="footer" style="margin-top:130px">
		   <p>Copyright © Rajshahi University Of Engineering And Technology 2017 </p>
		</div>
  </body>

</html>
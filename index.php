<html>

  <head> 
     <title>
	 Rajshahi University Of Engineering And Technology
	 </title>
	 <style type="text/css">
ul {
    background-color: #333;
    font-size: 22px;
    list-style-type: none;
    margin: 24px 0 0;
    overflow: hidden;
    padding: 0;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}


.marquee {
  
  
  color:white;
  height: 50px;
  overflow: hidden;
  position: relative;
  width: 960px;
  text-align: center;
  margin-left: 200px;
  background: #216288;
  margin-top:30px;
}
.marquee p {
 position: absolute;
 width: 100%;
 height: 100%;
 margin: 0;
 font-size:20px;
 font-weight:bold;
 
 line-height: 25px;
 text-align: center;
 /* Starting position */
 -moz-transform:translateX(100%);
 -webkit-transform:translateX(100%);	
 transform:translateX(100%);
 /* Apply animation to this element */	
 -moz-animation: scroll-left 1s linear infinite;
 -webkit-animation: scroll-left 7s linear infinite;
 animation: scroll-left 18s linear infinite;
}
/* Move it (define the animation) */
@-moz-keyframes scroll-left {
 0%   { -moz-transform: translateX(100%); }
 100% { -moz-transform: translateX(-100%); }
}
@-webkit-keyframes scroll-left {
 0%   { -webkit-transform: translateX(100%); }
 100% { -webkit-transform: translateX(-100%); }
}
@keyframes scroll-left {
 0%   { 
 -moz-transform: translateX(100%); /* Browser bug fix */
 -webkit-transform: translateX(100%); /* Browser bug fix */
 transform: translateX(100%); 		
 }
 100% { 
 -moz-transform: translateX(-100%); /* Browser bug fix */
 -webkit-transform: translateX(-100%); /* Browser bug fix */
 transform: translateX(-100%); 
 }
}








	 </style>
  <link rel="stylesheet" href="style.css">
 
	  <meta name="viewport" content="width=device-width, initial-scale=1">
            
  </head>
  <body>
         <div class="all">
		   <div class="header">
		      <img src="images/ruet.png">
		    
		   </div> 
		   
		   
		   <div class="nav">
		     <ul>
			    <li> <a class="active"href="admissionhome.php">Online Application</a></li>
				<li> <a href="teacher.php">Admin-Login</a></li>
				<li> <a href="contact.php">Contact</a></li>
				<li> <a href="notice.php">Notice</a></li>
			 </ul>
		   </div>
		   
		  <div class="marquee" width="550px">
		  
		  <marquee><p>1.Undergraduate Admission 2017-18 result has been published     
		  2.Admission process will be started in 8/11/17
		  3.Please Keep update for any information</p></marquee>
		  </div>
		  
		   
		
		<div class="footer" style="margin-top:450px">
		   <p>Copyright © Rajshahi University Of Engineering And Technology 2017 </p>
		</div>
		</div>
  </body>

</html>
<?php 

include("db_conn.php");
error_reporting(0);
?>
<html>  
<head>  
    <title>CORONA BED BOOKING</title>  
    
<link rel = "stylesheet" href = "stylebedbooking.css">   
</head>    
<body>
   <center>
     <h1><u>CITY HOSPITAL</u></h1></center>
          
<form action="display_booking.php" method="POST">
          <center><h2>CORONA BED BOOKING</h2><br></center>
            
NAME <input type = "text" placeholder = "Enter Patient's Name"  name = "pname" id="pname"><br><br>
            
AGE <input type = "text" placeholder = "Enter Patient's Age" name = "age" id="age"><br><br>
            
DATE <input type = "text" placeholder = "Enter Date"  name = "date" id="date"><br><br>
            
TIME <input type = "text" placeholder = " Enter Time"  name = "time" id="time"><br><br>
            
<input type="file" id="myFile" name="filename"><br><br>
           
 <center><button type="submit" class="button">SUBMIT</button></center>
        </form>  
     </center>
</body>     
</html>  
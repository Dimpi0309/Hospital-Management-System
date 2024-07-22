<style>
	*{
		margin:0;
		padding:0;
		font-family:century gothic;
	}
	body{
	background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(image.jpg);
	height:100vh;
	background-size:cover;
	background-position:center;
	}
</style>
<?php
include("db_conn.php");
error_reporting(0);
$_GET['a'];
$_GET['b'];
$_GET['c'];
$_GET['d'];
$_GET['e'];
$_GET['f'];
$_GET['g'];
$_GET['h'];
$_GET['i'];
?>
<html>
  <head>
  </head>
  <body>
    <form action="" method="GET">
    P_ID<input type="text" name="pid" value="<?php echo $_GET['a'];?>"/><br><br>
    P_NAME<input type="text" name="pname" value="<?php echo $_GET['b'];?>"/><br><br>
    AGE<input type="text" name="age" value="<?php echo $_GET['c'];?>"/><br><br>
    GENDER<input type="text" name="gender" value="<?php echo $_GET['d'];?>"/><br ><br>
    CONTACT<input type="text" name="con" value="<?php echo $_GET['e'];?>"/><br><br>
    ADDRESS<input type="text" name="add" value="<?php echo $_GET['f'];?>"/><br><br>
    DOB<input type="text" name="dob" value="<?php echo $_GET['g'];?>"/><br><br>
    DATE_OF_AD<input type="text" name="ad" value="<?php echo $_GET['h'];?>"/><br><br>
    D_ID<input type="text" name="did" value="<?php echo $_GET['i'];?>"/><br><br>
    <input type="submit" name="submit" value="update"/>
    </form>     
             <?php
                          if($_GET['submit'])
                          {
                                    $A=$_GET['pid'];
                                    $B=$_GET['pname'];
                                    $C=$_GET['age'];
                                    $D=$_GET['gender'];
                                    $E=$_GET['con'];
                                    $F=$_GET['add'];
                                    $G=$_GET['dob'];
                                    $H=$_GET['ad'];
                                    $I=$_GET['did'];
                                    $query= "UPDATE  patient SET Pname='$B' , Age ='$C' ,  Gender='$D' , Contact='$E' , Address='$F' , DOB='$G' , Date_of_ad='$H' , Did='$I' WHERE Pid='$A' ";
                                    $data=mysqli_query($conn,$query);
                                    if($data)
                                   {
                                              echo "<font color='green'>Record Updated Successfully.<a href='view.php'>Check Updated list here</a>";                      
                                   }
                                    else
                                   {
                                              echo "<font color='red'>RECORDS NOT UPDATED. <a href='view.php'>Check Updated list here</a>";
                                  }                          
                          }
                          else
                          { 
                                    echo "<font color='blue'>CLICK ON UPDATE BUTTON TO SAVE THE CHANGES";
                                    
                          } 
                  ?>
   </body>
</html>
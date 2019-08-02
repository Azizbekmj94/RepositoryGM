
 <?php
	
if(isset($_GET['signup-button'])){$name=  $_GET['username']; $email=  $_GET['email'];
$password=  $_GET['password'];
$cf=$_GET['repassword'];
$month=$_GET['DoBmonth'];
$day=$_GET['DoBday']; $year=$_GET['DoByear']; $countri= $_GET['Country']; 

$k=0;
if($password!=$cf){echo ($password.'  :  '.$cf.' = '."Passwords don't match" ); $k=2;};
if($k<1){ echo"<br><br>"; echo ("<H3>Registratsiyaga olindi</H3>");
  $db = @mysql_connect('localhost','root','');
 @mysql_select_db('asaka',$db); 
 $sql="INSERT INTO sighn1 VALUES('$name','$email','$password','$day',
 '$month','$year','$countri')";
$r=mysql_query($sql); }};
 ?>    
    
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search Results</title>
</head>

<body>
<?php
$state=$_POST['state'];
$city=$_POST['city'];
$area=$_POST['area'];
$name="";
$mob_no="";
$blood=$_POST['b_group'];
$b="O+";
$sql = "SELECT `name` ,  `mob_no`  FROM `register` WHERE `blood_group` LIKE '".$blood."' AND `state` LIKE '".$state."' AND `city` LIKE '".$city."' AND `area` LIKE '".$area."'";
//echo $sql."<br/>";
$con = new mysqli("localhost","root","","blood_db");
if(!$con)
	echo "Unable to connect to database!";
$stmt = $con->prepare($sql);
$stmt->bind_result($name,$mob_no);
$stmt->execute();
$i=0;
   while($stmt->fetch() && $i<1)
   {
    echo"<br/><h1>Most eligible donor</h1> <br/>Name: ".$name."<br/>Contact no.:".$mob_no;   
	$i++;
   }
   //Second level

$sql = "SELECT `name` ,  `mob_no`  FROM `register` WHERE `blood_group` LIKE '".$blood."' AND `state` LIKE '".$state."' AND `city` LIKE '".$city."'";   
//echo $sql."<br/>";
$stmt = $con->prepare($sql);
$stmt->bind_result($name,$mob_no);
$stmt->execute();
   while($stmt->fetch() && $i<1)
   {
    echo"<br/><h1>Most eligible donor</h1> <br/>Name: ".$name."<br/>Contact no.:".$mob_no;   
	$i++;
   }
   if($i!=0)
   echo"<br/><h2>Other donors</h2><table border='1' id='white' ></br><tr><td>Name</td><td>Contact no.</td>";  
    while($stmt->fetch())
   { 
   echo"<tr><td>".$name."</td><td>".$mob_no."</td></tr>";  
   }
   
   //Third level
	$sql = "SELECT `name` ,  `mob_no`  FROM `register` WHERE `blood_group` LIKE '".$blood."' AND `state` LIKE '".$state."'";   
//echo $sql."<br/>";
$stmt = $con->prepare($sql);
$stmt->bind_result($name,$mob_no);
$stmt->execute();
	if($i==0)
		{
  		 while($stmt->fetch() && $i<1)
  		 {
  		  echo"<br/><h1>Most eligible donor</h1> <br/>Name: ".$name."<br/>Contact no.:".$mob_no;   
			$i++;
   		}
  	 if($i!=0)
  	 echo"<br/><h2>Other donors</h2><table border='1'  id='white' ></br><tr><td>Name</td><td>Contact no.</td>";  
 		   while($stmt->fetch())
 			  { 
 			  echo"<tr><td>".$name."</td><td>".$mob_no."</td></tr>";  
  			 }
		}
		else
		{
  		 while($stmt->fetch())
  		 { 
 		  echo"<tr><td>".$name."</td><td>".$mob_no."</td></tr>";  
  			 }
		}
 //In case of no results     

   if($i==0)
   echo "<br>Sorry, no eligible donors are available";
   ?>	
</body>
</html>
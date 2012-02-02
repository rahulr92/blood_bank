
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registration Successful</title>
<!--<link href="file:///C|/wamp/www/rahul/style.css" rel="stylesheet" type="text/css" />
--></head>

<body>
<?php
$dob= $_POST['dd']." ".$_POST['mm']." ".$_POST['yy'];
$dntn_date= $_POST['ldd']." ".$_POST['lmm']." ".$_POST['lyy'];
$con = new mysqli("localhost","root","","blood_db");
$stmt= $con->prepare("insert into register(name,uname,pswd,dob,gender,blood_group,area,pin,city,state,weight,mob_no,dontn_date,email) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssssssssssssss",$_POST['name'],$_POST['uname'],$_POST['passwd'],$dob,$_POST['gender'],$_POST['bgroup'],$_POST['area'],$_POST['pin'],$_POST['city'],$_POST['state'],$_POST['weight'],$_POST['mnum'],$dntn_date,$_POST['emailid']);
$stmt->execute();
echo "Account has been successfully registered.";
?>
<br />
<a href="../index.php">
 Home
</a>
</body>
</html>

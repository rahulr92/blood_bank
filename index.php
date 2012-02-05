<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Automated Online Blood Bank Database Project</title>
<script type="text/javascript" src="actions.js" ></script>
<link rel="stylesheet" href="style.css" />
</head>

<body >
<div id="wrapper">
<h1>Automated Bloodbank Database Management Project</h1>
<div id="menu">
<ol>
<li><a href="register/form.php">Register as Donor</a></li>
<li><a href="whydonate.php">Why donate blood?</a></li>
<li><a href="#">Refer a friend</a></li>
<li><a href="#">Contact Us</a></li>
</ol>
</div>

<div id="search_form">
<h2>Find a donor</h2>
<form action="results.php" method="post" name="search">
		<select name="state">
        <option value="" selected="selected"> --- Select State ---</option>
							<option value="INAN"> Andaman Nicobar			</option><option value="INAP"> Andhra Pradesh			</option><option value="INAR"> Arunachal Pradesh			</option><option value="INAS"> Assam			</option><option value="INBI"> Bihar			</option><option value="INCH"> Chandigarh			</option><option value="INCT"> Chhattisgarh			</option><option value="INDA"> Dadra and Nagar Haveli			</option><option value="INDD"> Daman and Diu			</option><option value="INDL"> Delhi			</option><option value="INGO"> Goa			</option><option value="INGU"> Gujarat			</option><option value="INHA"> Haryana			</option><option value="INHP"> Himachal Pradesh			</option><option value="INJK"> Jammu and Kashmir			</option><option value="INJH"> Jharkhand			</option><option value="INKA"> Karnataka			</option><option value="INKR"> Kerala			</option><option value="INLA"> Lakshadweep			</option><option value="INMP"> Madhya Pradesh			</option><option value="INMH"> Maharashtra			</option><option value="INMA"> Manipur			</option><option value="INME"> Meghalaya			</option><option value="INMI"> Mizoram			</option><option value="INNA"> Nagaland			</option><option value="INOR"> Orissa			</option><option value="INPY"> Pondicherry			</option><option value="INPB"> Punjab			</option><option value="INRJ"> Rajasthan			</option><option value="INSI"> Sikkim			</option><option value="INTN"> Tamil Nadu			</option><option value="INTR"> Tripura			</option><option value="INUP"> Uttar Pradesh			</option><option value="INUT"> Uttaranchal			</option><option value="INWB"> West Bengal					</option>
         </select>
         <br />
	<input type="text" id="city" name="city" value="--Enter City--"  onfocus="this.select()" />
    <br/>
   	<input type="text" id="area" name="area" value="--Enter Area--"  onfocus="this.select()" />
    <br  />
   	<input type="text" id="b_group" name="b_group" value="--Enter Blood Group--"  onfocus="this.select()" /><br />
    <input type="submit" name="submit" value="Search" />
    <br  />
</form>
</div>
<div id="login_form">
<form action="validate.php" method="post">
<h3>Donor Login</h3><label>Username</label><input type="text" name="username"/><br />
<label>Password</label> <input	type="password" name="password" /><br />
<input type="submit" value="Login" /><br />
    <a href="forgetpassword.php">Forgot password?</a>
</form>
</div>
</div>
</body>
</html>
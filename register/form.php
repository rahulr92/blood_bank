<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>registration form</title>
	<link rel="stylesheet" type="text/css" href="view.css" media="all">
	<script type="text/javascript" src="view.js"></script>
	<script type="text/javascript" src="calendar.js"></script>
	<script type="text/javascript" src="validate.js"></script>
</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	
	<!--..form container starts here...-->	 
	<div id="form_container">
		
		<!--....heading.....-->
		<h1><a>Registeration Form</a></h1>
		
		<!--.....form starts here....-->
		<form id="form_316650" class="appnitro" name="register"  method="post" action="success.php" onsubmit="return validate();">
					<div class="form_description">
					<h2>DONOR REGISTRATION FORM</h2>
					<p>Automated Online Bloodbank Database Management Project</p>
					</div>	
					
					
			<!--...form members as unordered list...-->		
			<ul >
			
					<!--....name.....-->
					<li id="li_1" >
						<label class="description" for="element_1">Name: </label>
						<div>
							<input id="element_1" name="name" class="element text medium" type="text" maxlength="20" value=""/> 
						</div> 
					</li>		
					
					
					<!--.....username....-->
					<li id="li_2" >
						<label class="description" for="element_2">Username: </label>
						<div>
							<input id="element_2" name="uname" class="element text medium" type="text" maxlength="20" value=""/> 
						</div> 
					</li>
					
					<!--.....password....-->
					<li id="li_3" >
						<label class="description" for="element_3">Password: </label>
						<div>
							<input id="element_3" name="passwd" class="element text medium" type="password" maxlength="20" value=""/> 
						</div> 
						<p class="guidelines" id="guide_6"><small>password must have minimum 6 letters</small></p> 
					</li>
					
					<!--....confirm password.....-->
					<li id="li_4" >
						<label class="description" for="element_4">Confirm password </label>
						<div>
							<input id="element_4" name="cpasswd" class="element text medium" type="password" maxlength="20" value=""/> 
						</div> 
					</li>
					
					<!--.....date of birth....-->
					<li id="li_5" >
						<label class="description" for="element_5">Date of Birth </label>
						<span>
							<input id="element_5_1" name="dd" class="element text" size="2" maxlength="2" value="" type="text"> /
							<label for="element_5_1">DD</label>
						</span>
						<span>
							<input id="element_5_2" name="mm" class="element text" size="2" maxlength="2" value="" type="text"> /
							<label for="element_5_2">MM</label>
						</span>
						<span>
							<input id="element_5_3" name="yy" class="element text" size="4" maxlength="4" value="" type="text">
							<label for="element_5_3">YYYY</label>
						</span>	
						<span id="calendar_5">
							<img id="cal_img_5" class="datepicker" src="images/calendar.gif" alt="Pick a date.">	
						</span>
						<script type="text/javascript">
							Calendar.setup
						({
							inputField	 : "element_5_3",
							baseField    : "element_5",
							displayArea  : "calendar_5",
							button		 : "cal_img_5",
							ifFormat	 : "%B %e, %Y",
							onSelect	 : selectEuropeDate
						});
						</script>	
						<p class="guidelines" id="guide_6"><small>minimum:18,maximum:50</small></p> 						
					</li>
					
					<!--.....gender....-->
					<li id="li_10" >
						<label class="description" for="element_10">Gender </label>
						<span>
							<input id="element_10_1" name="gender" class="element checkbox" type="radio" value="male" />
							<label class="choice" for="element_10_1">male</label>
							<input id="element_10_2" name="gender" class="element checkbox" type="radio" value="female" />
							<label class="choice" for="element_10_2">female</label>
						</span> 
					</li>
					
					<!--....bloodgroup.....-->
					<li id="li_11" >
						<label class="description" for="element_11">Blood group </label>
						<div>
							<select class="element select medium" id="element_11" name="bgroup"> 
							<option value="" selected="selected"></option>
							<option value="A+" >A+</option>
							<option value="A-" >A-</option>
							<option value="B+" >B+</option>
                                                        <option value="B-" >B-</option>
                                                        <option value="O+" >O+</option>
                                                        <option value="O-" >O-</option>
                                                        <option value="AB+" >AB+</option>
                                                        <option value="AB-" >AB-</option>
							</select>
						</div> 
					</li>
                    <!--....address.....-->
					<li id="li_6" >
						<label class="description" for="element_6">Locality </label>
						<div>
						<label for="element_14_1">Area</label>   <input id="element_14_1" name="area" class="element text small" type="" maxlength="20" value=""/> <br />
						   <label for="element_14_2">PIN code</label> <input id="element_14_2" name="pin" class="element text small" type="text" maxlength="20" value=""/> <br />
						 <label for="element_14_3">City</label>	     <input id="element_14_3" name="city" class="element text small" type="text" maxlength="20" value=""/> <br />
							<label for="element_14_4">State</label>     <select name="state" class="element medium">
        <option value="" selected="selected"> --- Select State ---</option>
							<option value="INAN"> Andaman Nicobar			</option><option value="INAP"> Andhra Pradesh			</option><option value="INAR"> Arunachal Pradesh			</option><option value="INAS"> Assam			</option><option value="INBI"> Bihar			</option><option value="INCH"> Chandigarh			</option><option value="INCT"> Chhattisgarh			</option><option value="INDA"> Dadra and Nagar Haveli			</option><option value="INDD"> Daman and Diu			</option><option value="INDL"> Delhi			</option><option value="INGO"> Goa			</option><option value="INGU"> Gujarat			</option><option value="INHA"> Haryana			</option><option value="INHP"> Himachal Pradesh			</option><option value="INJK"> Jammu and Kashmir			</option><option value="INJH"> Jharkhand			</option><option value="INKA"> Karnataka			</option><option value="INKR"> Kerala			</option><option value="INLA"> Lakshadweep			</option><option value="INMP"> Madhya Pradesh			</option><option value="INMH"> Maharashtra			</option><option value="INMA"> Manipur			</option><option value="INME"> Meghalaya			</option><option value="INMI"> Mizoram			</option><option value="INNA"> Nagaland			</option><option value="INOR"> Orissa			</option><option value="INPY"> Pondicherry			</option><option value="INPB"> Punjab			</option><option value="INRJ"> Rajasthan			</option><option value="INSI"> Sikkim			</option><option value="INTN"> Tamil Nadu			</option><option value="INTR"> Tripura			</option><option value="INUP"> Uttar Pradesh			</option><option value="INUT"> Uttaranchal			</option><option value="INWB"> West Bengal					</option>
         </select>
						</div>
					</li>
					
					<!--....weight.....-->
					<li id="li_6" >
						<label class="description" for="element_6">Weight </label>
						<div>
							<input id="element_6" name="weight" class="element text small" type="text" maxlength="3" value=""/> 
						</div>
						<p class="guidelines" id="guide_6"><small>your weight must be greater than 50kg to elgible for blood donation</small></p> 
					</li>
					
					<!--....mobilenumber.....-->
					<li id="li_7" >
						<label class="description" for="element_7">Mobile number </label>
						<div>
							<input id="element_7" name="mnum" class="element text medium" type="text" maxlength="10" value=""/> 
						</div> 
					</li>	
					
					<!--....emailid.....-->
					<li id="li_8" >
						<label class="description" for="element_8">Email id: </label>
						<div>
							<input id="element_8" name="emailid" class="element text medium" type="text" maxlength="255" value=""/> 
						</div> 
					</li>	
					
					<!--....last blood donation date.....-->
					<li id="li_9" >
						<label class="description" for="element_9">Date of last blood donation </label>
						<span>
							<input id="element_9_1" name="ldd" class="element text" size="2" maxlength="2" value="" type="text"> /
							<label for="element_9_1">DD</label>
						</span>
						<span>
							<input id="element_9_2" name="lmm" class="element text" size="2" maxlength="2" value="" type="text"> /
							<label for="element_9_2">MM</label>
						</span>
						<span>
							<input id="element_9_3" name="lyy" class="element text" size="4" maxlength="4" value="" type="text">
							<label for="element_9_3">YYYY</label>
						</span>	
						<span id="calendar_9">
							<img id="cal_img_9" class="datepicker" src="images/calendar.gif" alt="Pick a date.">	
						</span>
						<script type="text/javascript">
							Calendar.setup
								({
								inputField	 : "element_9_3",
								baseField    : "element_9",
								displayArea  : "calendar_9",
								button		 : "cal_img_9",
								ifFormat	 : "%B %e, %Y",
								onSelect	 : selectEuropeDate
								});
						</script>		 
					</li>	
					
					<!--...i accept......-->
					<li id="li_12" >
						<label class="description" for="element_12"> </label>
						<span>
							<input id="element_12_1" name="accept" class="element checkbox" type="checkbox" value="1" />
							<label class="choice" for="element_12_1">I have read the above eligibility criteria and confirm that I am eligible to donate blood.</label>
						</span>
					</li>
					
					<!--...submit......-->
					<li class="buttons">
						<input type="hidden" name="form_id" value="316650" />			    
						<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
					</li>
			<!--....unordered list ends here.....-->
			</ul>
			
		<!--....form ends here.....-->
		</form>	
		
		<!--....footer.....-->
		<div id="footer">
			Powered by<a href="http://www.ieee.org">IEEE</a>
		</div>
		<!--....footer ends here.....-->
		
		</div>
		<!--....container ends here.....-->
	
		<img id="bottom" src="bottom.png" alt="">
	</body>
</html>
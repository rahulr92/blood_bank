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
						<label class="description" for="element_3">password: </label>
						<div>
							<input id="element_3" name="passwd" class="element text medium" type="password" maxlength="20" value=""/> 
						</div> 
						<p class="guidelines" id="guide_6"><small>password must have minimum 6 letters</small></p> 
					</li>
					
					<!--....confirm password.....-->
					<li id="li_4" >
						<label class="description" for="element_4">confirm password </label>
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
						<label class="description" for="element_10">gender </label>
						<span>
							<input id="element_10_1" name="gender" class="element checkbox" type="radio"  />
							<label class="choice" for="element_10_1">male</label>
							<input id="element_10_2" name="gender" class="element checkbox" type="radio" />
							<label class="choice" for="element_10_2">female</label>
						</span> 
					</li>
					
					<!--....bloodgroup.....-->
					<li id="li_11" >
						<label class="description" for="element_11">blood group </label>
						<div>
							<select class="element select medium" id="element_11" name="bgroup"> 
							<option value="" selected="selected"></option>
							<option value="1" >A+</option>
							<option value="2" >A-</option>
							<option value="3" >B+</option>
                                                        <option value="4" >B-</option>
                                                        <option value="5" >0+</option>
                                                        <option value="6" >O-</option>
                                                        <option value="7" >AB+</option>
                                                        <option value="8" >AB-</option>
							</select>
						</div> 
					</li>
					
					<!--....weight.....-->
					<li id="li_6" >
						<label class="description" for="element_6">weight </label>
						<div>
							<input id="element_6" name="weight" class="element text small" type="text" maxlength="3" value=""/> 
						</div>
						<p class="guidelines" id="guide_6"><small>your weight must be greater than 50kg to elgible for blood donation</small></p> 
					</li>
					
					<!--....mobilenumber.....-->
					<li id="li_7" >
						<label class="description" for="element_7">mobile number </label>
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
			powered by<a href="http://www.ieee.org">IEEE</a>
		</div>
		<!--....footer ends here.....-->
		
		</div>
		<!--....container ends here.....-->
	
		<img id="bottom" src="bottom.png" alt="">
	</body>
</html>
<!--
function validate()
{

//name
if ( document.register.name.value == "" )
	{
		alert("enter the name");    		
		return false;
	}
        
	
//username
if (document.register.uname.value=="")
    {
        alert("enter the username");
        return false;		
    }
    
	
//password
if(document.register.passwd.value=="")
	{
		alert("enter the password");		
		return false;
		//register.passwd.focus();
	}
if(document.register.passwd.value.length<6)
	{
		alert("password must contain atleast 6 characters");			
		return false;
		//register.passwd.focus();
		
	}
if(document.register.cpasswd.value=="")
	{
		alert("confirm the password");		
		return false;
		//register.passwd.focus();
	}
if(document.register.passwd.value!=document.register.cpasswd.value)
	{ 
		alert("both passwords doesnot match");
		return false;
	}
if(document.register.uname.value==document.register.passwd.value)
	{
		alert("username cannot be ur password");
		return false;
	}
        
        
//checking sate of birth mnm=18,mxm=50 


//email id
if(document.register.emailid.value=="")
    {
        alert("error: email id cannot be empty");
        return false;
    }

var x=document.register.emailid.value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
    alert("Not a valid e-mail address");
    return false;
  }
  
 //mobile number
 if(document.register.mnum.value=="")
     {
         alert("mobile number cannot be empty");
         return false;
     }
  if(document.register.mnum.value.length!=10)
      {
          alert("mobile number must contain 10 digits");
          return false;
      }
      
  //weight
  if(document.register.weight.value=="")
      {
          alert("weight cannot be empty");
          return false;
      }
   if(document.register.weight.value<50)
       {
           alert("you are not eligible for blood donation,weight must be greater than 50");
           return false;
       }
       
       
   //blood group
   if(document.register.bgroup.selectedIndex==0)
       {
           alert("please fill up ur blood group ");
           return false;
       }
   

    return true;
	

}

-->
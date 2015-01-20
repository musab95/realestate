<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register Free - Real Estate</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/grid.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
	<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
	<script type="text/javascript" src="js/cufon-yui.js"></script>
	<script type="text/javascript" src="js/Myriad_Pro_italic_400-Myriad_Pro_italic_600.font.js"></script>
	<script type="text/javascript" src="js/cufon-replace.js"></script>	
	<script type="text/javascript" src="js/jquery.faded.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<!--[if lt IE 7]>
		<link rel="stylesheet" href="css/ie/ie6.css" type="text/css" media="screen">
		<script type="text/javascript" src="js/ie_png.js"></script>
		<script type="text/javascript">
				ie_png.fix('.png, .logo, .extra-banner');
		</script>
	<![endif]-->
	<!--[if lt IE 9]>
		<script type="text/javascript" src="js/html5.js"></script>
	<![endif]-->
	<script language="JavaScript" type="text/JavaScript">
function formValidation()  
{  

 var x = document.forms["myForm"]["firstname"].value;
 var y = document.forms["myForm"]["email"].value;
 var atpos = y.indexOf("@");
 var dotpos = y.lastIndexOf(".");
var ucity = document.forms["myForm"]["city"].value; 
 var a = document.myForm.password.value;
 var umob = document.forms["myForm"]["mobile"].value; 
    
    if (x == null || x == "") {
        alert("First name must be filled out");
        return false;
    }
    
    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=y.length) {
        alert("Not a valid e-mail address");
        return false;
    }
    
   
if(a=="")
{
alert("Please Enter Your Password");
return false;
}
if ((a.length < 4) || (a.length > 8))
{
alert("Your Password must be 4 to 8 Character");
return false;
}

 if(ucity=="Default")
	{
		alert("Please select City ");
		return false;
	}	
	if(umob=="")
	{
		alert("Please Enter Mobile no. ");
		return false;
	}
	if (umob.length < 10)
{
alert("Please Enter Right Mobile no.");
return false;
}
}  


	</script>
</head>

<body>
	<!-- header -->
	<?php
			include('header1.php');
			?>
	<!-- content -->
	<section id="content">
		<div class="container_16">

			<div class="clearfix">
				<section id="mainContent" class="grid_16">
				<div id="imgtd" valign="bottom" style="padding-bottom:10px;float:left;width:36%;">
			<div>
			<img id="1" border="0" alt="Register Now" src="images/reg1.gif">
			</div>
			<div>
			<img id="2" border="0" alt="Register Now" src="images/reg2.gif">
			</div>
			<div>
			<img id="3" border="0" alt="Register Now" src="images/reg3.jpg">
			</div>
			<div>
			<img id="4" border="0" alt="Register Now" src="images/reg4.jpg">
			</div>
			<div>
			<img id="5" border="0" alt="Register Now" src="images/reg5.jpg">
			</div>
			<div>
			<img id="6" border="0" alt="Register Now" src="images/reg6.jpg">
			</div>
			<div>
			<img id="7" border="0" alt="Register Now" src="images/reg7.jpg">
			</div>
			<div>
			<img id="8" border="0" alt="Register Now" src="images/reg8.jpg">
			</div>
			<div style="clear:both;"> </div>
				</div>
					
				<div class="container_form">
				<h2>Become a Member</h2>
				<div class="aligncenter">
				<form  method="post" action="conn.php" onSubmit="return formValidation()" name="myForm">
					 <fieldset>
        	<table>
        	  <tr>
        	  <td><div class="form_row"><h4>User Type*:</h4></div> </td><td><div class="form_row"><input type='radio' name='typee' value="owner" /><font color="#000000">Owner</font> &nbsp; <input type='radio' name='typee' value="seller" /><font color="#000000">Seller</font></div> </td>   
           </tr> 
           <tr>
           <td><div class="form_row"><h4>First Name*: </h4></div></td><td><div class="form_row"><input type="text" name="firstname" value="" /></div></td>
					   </tr>  
           <tr>
           <td><div class="form_row"><h4>Email*: </h4></div></td><td><div class="form_row"><input type="text" name="email" value="" /></div></td>
           </tr>     
           <tr>
           <td><div class="form_row"><h4>Password*: </h4></div></td><td><div class="form_row"><input type="password" name="password" value="" /></div></td>
           </tr> 
							<tr>
							<td><div class="form_row"><h4>City*:</h4></div></td><td><div class="form_row"><select name='city'><option value="Default">---Select City---</option><option value='mumbai'>Mumbai</option><option value='Pune'>Pune</option><option value='thane'>Thane</option><option value='newmumbai'>New Mumbai</option></select></div></td>       					
         	</tr>
         	<tr>	
         	<td><div class="form_row"><h4>Mobile*:</h4></div></td><td><div class="form_row"><input type="text" name="mobile" value="" /> </div></td>
         	</tr>
          	</table>          
				            <div class="form_row">
                		<div class="wrapper"><input type="submit" value="Submit Now" name="submit"   /></div><br />
                <h4>		Already have an account?<a href="login.php" >Login</a></h4>
                  </div>
                </fieldset>
                </form>
                </div>
        </div>
				</section>
					</section>
	<!-- footer -->
	<?php
			include('footer.php');
			?>
	<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>

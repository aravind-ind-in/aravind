<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aravind Templates</title>

<link href="style.css" type="text/css" media="all" rel="stylesheet" />

<!--GOOGLE ANALYSIS START-->
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-11825057-1");
pageTracker._trackPageview();
} catch(err) {}</script>
<!--GOOGLE ANALYSIS END-->

</head>

<body>

<div id="wrapper">

	<div class="top-header">
    
    	<img src="images/logo.png" alt="http://aravindtemplates.com" />
    
    </div><!--top-header-->
    
    
   
        
        <div class="middle-content-bg">
        
        	<div class="about-contact">
                <div class="about-container">
                    <span class="title"> </span>
                    <img src="images/aravind.png" alt="" />
                    <p>Welcome....!!! This is Aravind from Chennai in India. I am a web designer.  I am also doing freelance.  I                        have got good skills in XHTML, CSS, Photoshop, Java Script (j-query), Flash Animation Templates,  Wordpress                        blogs, etc.,</p>
                    <p>Get in touch with me......!!! </p>
                
                </div><!--aoubt-container-->
                
                <div class="contact-container">
                    <span class="title"></span>
<?php

 if(isset($_POST['Submit_Contact']))
 {
   $toMailAddress="aravindtemplates@gmail.com";
   
   $subject="Contact e-mail";
   $message=$_POST['message'];
   
   $headers=$_POST['name'] .$_POST['email'];
   
   if(mail($toMailAddress, $subject, $message, $headers))
   {
    echo "<i>Mail sent successfully</i>";
   }

 }
 

?>
<script>
function $1(x)
{
	return document.getElementById(x);
}

function __(element)
{
	$1(element).focus();
	return false;
}

function checkNull(element)
{
	if($1(element).value=="")
	{
		alert("Enter the "+element);
		return __(element);
	}
}

function checkNumeric(element)
{
	if(isNaN($1(element).value))
	{
		alert("Enter numeric values only");
		return __(element);
	}
}

function checkMail(email)
{
	if(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test($1(email).value)==false)
	{
		    alert("Enter valid email-id");
			return __(email);
	}
}


/*Contact us*/
function validate()
{
	if(checkNull('name')==false){return false;}
    if(checkNull('email')==false){return false;}
	else 
	{
	 if(checkMail('email')==false){return false;}
	}
	if(checkNull('message')==false){return false;}
	
}


</script>



                    <div class="contact-form">
                      <form action="" method="post" name="contact_us" id="contact_us" onsubmit="return validate();">
                            <p>
                               <label for="name">Name <span>:</span></label> 
                               <input id="name" type="text" name="name" />
                            </p>
                            
                            <p>
                               <label for="name">E-mail <span>:</span></label> 
                               <input id="email" type="text" name="email" />
                            </p>
                            
                            <p>
                               <label for="name">Message <span>:</span></label> 
                               <textarea rows="2"  cols="20"  id="message"  name="message" ></textarea>
                            </p>
                            
                            <p>
                               <input class="submit" type="submit" value="submit" name="Submit_Contact" />
                            </p>
                            
                        </form>

        </div><!--contact-form-->                    

                </div><!--contact-container-->
            </div><!--about-contact-->
            
            <!--<div class="social-links-containter">
            	<p>I’m a regular user of various social websites, feel free to join me at… </p>
                <ul>
                	<li><a href=""></a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                </ul>
            </div>-->
            
            
        </div><!--middle-content-bg-->
        
        <div class="footer"> &copy;<a href="index.html" target="_blank">www.aravindtemplates.com</a> All right reserved.</div>
        
    
     

</div><!--wrapper-->


</body>
</html>


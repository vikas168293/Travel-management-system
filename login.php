
<?php
if(isset($_POST['Submit']))
{
$username=$_REQUEST["username"];
$password=$_REQUEST["password"];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>LOGIN</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/easySlider1.5.js"></script>
<script type="text/javascript" charset="utf-8">
// <![CDATA[
$(document).ready(function(){	
	$("#slider").easySlider({
		controlsBefore:	'<p id="controls">',
		controlsAfter:	'</p>',
		auto: true, 
		continuous: true
	});	
});
function IMG1_onclick() {


}

// ]]>
</script>
<style type="text/css">
.gallery { width:860px; height:250px; margin:0 auto; padding:0; }
#slider { margin:0; padding:0; list-style:none; }
#slider ul,
#slider li { margin:0; padding:0; list-style:none; }
/* 
    define width and height of list item (slide)
    entire slider area will adjust according to the parameters provided here
*/
#slider li { width:860px; height:250px; overflow:hidden; }
p#controls { margin:0; padding:0; position:relative; }
#prevBtn { display:block; margin:0; overflow:hidden; width:16px; height:26px; position:absolute; left:-40px; top:-150px; }
#nextBtn { display:block; margin:0; overflow:hidden; width:16px; height:26px; position:absolute; left: 880px; top:-150px; }
#prevBtn a { display:block; width:16px; height:26px; background:url(images/l_arrow.gif) no-repeat 0 0; }
#nextBtn a { display:block; width:16px; height:26px; background:url(images/r_arrow.gif) no-repeat 0 0; }
</style>
</head>
<body>

<div class="main">
  <div class="header">
    <div class="block_header">
      <div class="logo"><img src="LOGO.jpg" width="270" height="101" border="0" alt="logo" /></a>&nbsp;</div>
      <div class="search">
        
          
        
      </div>
      <div class="menu">
        <ul>
          <li><a href="home.php" class="active"><span>Home</span></a></li>
          <li><a href="about.php"><span> About Us</span></a></li>
          <li><a href="services.php"><span>Services</span></a></li>
          <li><a href="Portfolio.php"><span>Portfolio</span></a></li>
          <li><a href="contact.php"><span>Contact </span></a></li>
        </ul>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="slider_top">
    <div class="header_text">
      <div class="gallery">
        <div id="slider">
          <ul>
            <!--<li style="height: 249px">
              <div class="div">
                <div class="left1">
                  <h2>
                      <span style="color: #006666; text-decoration: underline">Low Floor AC Bus</span></h2>
                  <p> Low floor AC bus is comfortable for all the persons . It has fully Air Condition
                      envionment to making your travel happyness and enjoyfully.</p>
                  
                </div>
                <img src="BUS/bi.jpg" alt="screen 1" width="416" height="240" border="0" class="screen"  /> 
                  <span style="color: #006666; text-decoration: underline"> </span></div>
            </li>
            <li>
              <div class="div">
                <div class="left1">
                  <h2>
                      <span style="text-decoration: underline">&nbsp;Super Delux AC Bus</span></h2>
                   <p class="uli"> It is more comfortable for the passengers that do long&nbsp; way gerney . AC facilite
                       makes your travel simple and without any tiredness.&nbsp;<br /><br />
                  </p>
                  
                </div>
              <img src="BUS/bus-blue.jpg" alt="screen 1" width="416" height="240" border="0" class="screen"  /> </div>
            </li>-->
           <li>
              <div class="div">
                
              <img src="BUS/Bus Center 1.jpg" alt="screen 1" width="416" height="240" border="0" class="screen"  /> </div>
                            <div class="div" style="margin-left:10px;">
                &nbsp;&nbsp;
              <img src="BUS/bus-blue.jpg" alt="screen 1" width="416" height="240" border="0" class="screen"  style="margin-left:15px;"/> </div>
            </li>
          </ul>
          <div class="clr"></div>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="top_bg">
  
  
  </div>
  <div class="clr"></div>
  <div class="FBG">
  <div class="FBG_resize">
    <div class="Recent">
    <a href="onticket.php"><img src="BUS/E-tickets-and-Online-Reservation-300x257.jpg" alt="picture" width="61" height="60" /></a>
<p>
<span style="text-decoration: underline"><strong>Get Online Ticket</strong><br />
    </span><a href="onticket.php"><span>Click Here for Online Ticket</span></a></p>
        <p>&nbsp;
        </p>
    </div>
    <div class="Recent">
    <a href="inquiry.php"><img src="BUS/local.jpg" alt="picture" width="61" height="60" /></a>
<p><span style="text-decoration: underline"><strong>Local And Interstate Bus Inquiry</strong><br />
    </span><a href="inquiry.php"><span>Click Here for Inquiry</span></a></p>
        <p>&nbsp;
            </p>
    </div>
    <div class="Recent">
    <a href="take a tour.php"><img src="BUS/tour.jpg" alt="picture" width="61" height="60" /></a>
<p><span style="text-decoration: underline"><strong>Tourism Packages</strong><br />
        </span><a href="take a tour.php"><span>Click Here To Get Info</span></a></p>
      <p>&nbsp;
            </p>
    </div>
    <div class="Recent2">
    <a href="login.php"><img src="BUS/admin.jpg" alt="picture" width="61" height="60" id="IMG1" onclick="return IMG1_onclick()" /></a>
<p><span style="text-decoration: underline"><strong>Admin Login</strong><br />
    </span><a href="login.php"><span>Click Here </span></a></p>
    <form id="form1" name="form1"  runat="server" metod="post">
        <p>&nbsp;
            </p>
        <p>
            &nbsp;<table style="text-align: center">
                <tr>
                    <td style="width: 100px">
                    </td>
                    <td style="width: 100px">
                    </td>
                </tr>
                <tr>
                    <td style="width: 100px">
                        User Name</td>
                    <td style="width: 100px">
                        <input type="text" name="username" id="username"> </td>
                </tr>
                <tr>
                    <td style="width: 100px">
                        Password</td>
                    <td style="width: 100px">
                        <input type="password" name="password" id="password"></td>
                </tr>
                <tr>
                    <td style="text-align: center;" colspan="2">
                        <input type="submit" name="Submit" id="submit" value="Log In"OnClick="Button1_Click1" />
                        <input type="reset" name="Submit" id="submit" OnClick="Button2_Click2" /></td>
                        
                </tr>
            </table></form>
        </p>
     </div>
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
  </div>
  
</div>


</body>
</html>
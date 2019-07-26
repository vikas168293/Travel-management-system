

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>HOME</title>
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
<form id="form2" name="form2" runat="server" method="post">
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
                      <span style="color: #006666; text-decoration: underline">
                          <asp:LinkButton ID="LinkButton1" runat="server" OnClick="LinkButton1_Click">Low Floor Ac Bus</asp:LinkButton></span></h2>
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
                      <span style="text-decoration: underline">
                          <asp:LinkButton ID="LinkButton3" runat="server" OnClick="LinkButton3_Click">Super Delux Ac Bus</asp:LinkButton></span>&nbsp;</h2>
                   <p class="uli"> It is more comfortable for the passengers that do long&nbsp; way gerney . AC facilite
                       makes your travel simple and without any tiredness.&nbsp;<br /><br />
                  
                </div>
              <img src="BUS/bus-blue.jpg" alt="screen 1" width="416" height="240" border="0" class="screen"  /> 
                  <asp:LinkButton ID="LinkButton2" runat="server" OnClick="LinkButton2_Click"></asp:LinkButton></div>
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
  
  <div class="clr"></div>
  </div>
  <div class="clr"></div>
  <div class="FBG">
  <div class="FBG_resize">
    <div class="Recent">
   <img src="BUS/E-tickets-and-Online-Reservation-300x257.jpg" alt="picture" width="61" height="60" /></a>
<p>
<span style="text-decoration: underline"><strong>Get Online Ticket</strong><br />
    </span><a href="onticket.php"><span>Click Here for Online Ticket</span></a></p>
        <p>&nbsp;
        </p>
    </div>
    <div class="Recent">
    <img src="BUS/local.jpg" alt="picture" width="61" height="60" /></a>
<p><span style="text-decoration: underline"><strong>Bus Timing And Fair Inquiry</strong><br />
    </span><a href="inquiry.php"><span>Click Here for Inquiry</span></a></p>
        <p>&nbsp;
            </p>
    </div>
    <div class="Recent">
    <img src="BUS/tour.jpg" alt="picture" width="61" height="60" /></a>
<p><span style="text-decoration: underline"><strong>Book Now</strong><br />
        </span><a href="take a tour.php"><span>Click Here To Book</span></a></p>
      <p>&nbsp;
            </p>
    </div>
    <div class="Recent2">
    <img src="BUS/admin.jpg" alt="picture" width="61" height="60" id="IMG1" onclick="return IMG1_onclick()" /></a>
<p><span style="text-decoration: underline"><strong>Admin Login</strong><br />
    </span><a href="login.php"><span>Click Here </span></a></p>
        <p>&nbsp;
            </p>
    </div>
    <div class="clr"></div>
  </div>
  <div class="clr"></div>
</div>
  
  <div class="body">
    <div class="body_resize">
      <div class="left">
        <h4>Welcome to OM Bus Service
<h4>
        <h2><span>Travel And Torism Hub</span></h2>
        <p><strong>OM bus service is an organisation that provides travel and torism service on the affortable prices to their customers .</strong> 
            &nbsp;</p>
        <p>
            </p>
        <h2>What We Do.<br />
       <span> For safe and comfortable travel use our bus services</span></h2>
       
        <p><strong> Give service on time on our commitment <a href="#">read more </a></p>
      </div>
      <div class="right">
        <h2>Blog updates<br />
       
        <span> Live from our blog page</span></h2>
        <p><strong>OUR EARLY TOUR FOR AGRA</strong><br />
          To see the beauty of <span style="font-size: 14pt"><span style="font-size: 12pt; font-family: Cambria">
                Taj , Agra Red Fort</span> </span>and other places of Agra book Yourself .<br />
          <em><span> Last Date for Registration 25-06-2018</span></em><br />Date of going on Tour 30-06-2018&nbsp; <a href="take a tour.php">Click For Registration</a></p>
        <p><strong>Delhi Tour comming soon</strong><br />
Watch the  Historicl Places of Delhi with our Special Tour Package on the event of 
            <span style="font-family: Cambria">Gandhi Jayanti</span>.
            <br />
<em><span> Last Date for Registration 25-09-2018</span></em><br />Date of going on Tour 01-10-2018&nbsp; <a href="take a tour.php">Click For Registration </a><br />
        <br />
        </p>
         <p><strong>Visit Pink City JAIPUR</strong><br />
Injoy the winter in the Jaipur(Raj.).Visit <span style="font-family: Cambria">Havamahal</span>,<span
                 style="font-family: Cambria">Dilvada Tample</span> and other places of Pink City.<br />
<em><span>Last Date for Registration 25-01-2019</span></em><br />Date of going on Tour 01-02-2019&nbsp; <a href="take a tour.php">Click For Registration</a><br />
        <br />
        </p>
        
      </div>
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
  </div>
 
</div>

</form>
</body>
</html>
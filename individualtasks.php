

<?php
if(isset($_POST['Submit']))
{
  echo $Name=$_REQUEST['Name'];
 echo $Address=$_REQUEST['Address'];
 echo $Contactno=$_REQUEST['Contactno'];
 echo $Bustype=$_REQUEST['Bustype'];
 echo $Numberofdays=$_REQUEST['Numberofdays'];
 echo $Numberofpersons=$_REQUEST['Numberofpersons'];
 echo $Place=$_REQUEST['Place'];
 
 echo $Registrationdate=$_REQUEST['Registrationdate'];
 
 
 }
 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>INDIVIDUAL PROGRAMS</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<form name="takeatour" method="post">
<div class="main">
  <div class="header">
    <div class="block_header">
      <div class="logo"><img src="LOGO.jpg" width="270" height="101" border="0" alt="logo" /></a></div>
      <div class="search">
        
      </div>
      <div class="menu">
        <ul>
          <li><a href="home.php "><span>Home</span></a></li>
          <li><a href="About.php"><span>About Us</span></a></li>
          <li><a href="services.php"><span>Services</span></a></li>
          <li><a href="Portfolio.php"><span>Portfolio</span></a></li>
          <li><a href="contact.php"><span>Contact</span></a></li>
          
          
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="slider_top">
    <div class="header_text2">
      
      <h2> Registration For Individual Programs</h2>
      <div class="clr"></div>
    </div>
  </div>
  
   <div class="body">
    <div class="body_resize">
      <div class="left">
        <h2>
            Book Now<br />
        <span>Enjoy Yourself</span></h2>
        
       
      <table style="width: 100%; height: 100%; font-weight:bold">
              <tr><td style="width: 100px">
                  Name</td>
                  <td style="width: 100px">                  </td>
                  <td style="width: 100px"><label>
                  <input type="text" name="Name" id="Name" />
</label>                  </td>
              </tr>
              <tr><td style="width: 100px">
                  Address</td>
                  <td style="width: 100px">                  </td>
                  <td style="width: 100px"><label>
                  <input type="text" name="Address" id="Address" />
</label>                  </td>
              </tr>
              <tr><td style="width: 100px">
                  Contact No</td>
                  <td style="width: 100px">                  </td>
                  <td style="width: 100px"><label>
                  <input type="text" name="Contactno" id="Contactno" />
</label>                  </td>
              </tr>
              <tr><td style="width: 100px">
                  Bus Type</td>
                  <td style="width: 100px">                  </td>
                  <td style="width: 100px"><label>
                  <Select name="Bustype">
        <option>Select Here</option>
        <option>Lower Floor AC-Bus</option>
        <option> Super DeluxAC Bus</option>
        <option> Luxary Bus</option>
                </Select>
              </tr>
              <tr><td style="width: 100px">
                  Number Of Days</td>
                  <td style="width: 100px">                  </td>
                  <td style="width: 100px"><label>
                  <input type="text" name="Numberofdays" id="Numberofdays" />
</label>                  </td>
              </tr>
              
              <tr><td style="width: 100px">
                 Number Of Persons</td>
                  <td style="width: 100px">                  </td>
                  <td style="width: 100px"><label>
                  <input type="text" name="Numberofpersons" id="Numberofpersons" />
</label>                  </td>
              </tr>
              <tr><td style="width: 100px">
                 Place</td>
                  <td style="width: 100px">                  </td>
                  <td style="width: 100px"><label>
                  <input type="text" name="Place" id="Place" />
</label>                  </td>
              </tr>
              
              
              <tr><td style="width: 100px">
                  Registration Date</td>
                  <td style="width: 100px">                  </td>
                  <td style="width: 100px"><label>
                  <input type="text" name="Registrationdate" id="Registrationdate" />
</label>                  </td>
              </tr>
              
              <tr>
                  <td style="width: 100px">
                  <td style="width: 100px">                     </td>
                  <td style="width: 100px"><input type="submit" name="Submit" id="Submit" value="Submit" /></td>
              </tr>
          </table>
          
          
      </div>
      
      <div class="right">
        <h2>Blog updates<br />
       
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

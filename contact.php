
<?php
include("Db/dbconnect.php");
if(isset($_POST['Submit']))
{
 $Name=$_REQUEST["Name"];
 $Address=$_REQUEST["Address"];
 $Contactno=$_REQUEST["Contactno"];
 $Emailid=$_REQUEST["Emailid"];
 $Message=$_REQUEST["Message"];
 $insert="insert into usermessage(Name,Address,Contactno,Emailid,Message)values('".$Name."','".$Address."','".$Contactno."','".$Emailid."','".$Message."')";
 $query=mysql_query($insert);

}
?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Contact Us</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<form name="form1" method="post">
<div class="main">
  <div class="header">
    <div class="block_header">
      <div class="logo"><img src="LOGO.jpg" width="270" height="101" border="0" alt="logo" /></a></div>
      <div class="search">
        
      </div>
      <div class="menu">
        <ul>
          <li><a href="home.php "><span>Home</span></a></li>
          <li><a href="about.php"><span> About Us</span></a></li>
          <li><a href="services.php"><span>Services</span></a></li>
          <li><a href="Portfolio.php"  ><span>Portfolio</span></a></li>
          <li><a href="contact.php" class="active"><span>Contact </span></a></li>
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="slider_top">
    <div class="header_text2">
      
      <h2>Contact Us </h2>
      <div class="clr"></div>
    </div>
  </div>
  
  
   <div class="body">
    <div class="body_resize">
      <div class="left">
         <p><span>If you want to any inquiry ,information and our latest tourism package than you
              login and gives message for our company.</span></p>
          <table style="width: 100%; height: 100%; font-weight:bold">
              <tr><td style="width: 100px">
                  Name</td>
                  <td style="width: 100px">                  </td>
                  <td style="width: 100px"><label>
                  <input type="text" name="Name" id="Name" />
</label>                  </td>
              </tr>
              <tr>
                  <td style="width: 100px">
                      Address</td>
                  <td style="width: 100px">                     </td>
                  <td style="width: 100px"><input type="text" name="Address" id="Address" /></td>
              </tr>
              <tr>
                  <td style="width: 100px">
                      Contact No</td>
                  <td style="width: 100px">                  </td>
                  <td style="width: 100px"><input type="text" name="Contactno" id="Contactno" /></td>
              </tr>
              <tr>
                  <td style="width: 100px">
                      E-Mail Id</td>
                  <td style="width: 100px">                    </td>
                  <td style="width: 100px"><input type="text" name="Emailid" id="Emailid" /></td>
              </tr>
              <tr>
                  <td style="width: 100px">
                      Message</td>
                  <td style="width: 100px">                     </td>
                  <td style="width: 100px"><label>
                    <textarea name="Message" id="Message" cols="22" rows="4"></textarea>
                  </label></td>
              </tr>
              <tr>
                  <td style="width: 100px">
                  <td style="width: 100px">                     </td>
                  <td style="width: 100px"><input type="submit" name="Submit" id="Submit" value="Submit" /></td>
              </tr>
          </table>
      </div>
      <div class="right">
        <h2>Get In Touch
       </h2>
        
         
       <p>
            <strong>Address</strong>: Subhash Nagar Lohiya Sadan Chhibramau Kannauj<br />
            <strong>Post Office</strong>:     Chhibramau<br />
            <strong>District</strong>:        Kannauj(209721)<br />
            <strong>Phone Number</strong>: 9935923148<br />
              <strong>E-mail: </strong>priyranjans794@gmail.com</p>
              <h2>News Diary<br />
        <span> Latest news of Company</span></h2>
        <p><strong>20th / May / 2018</strong><br />
        The company nominated for best transport service provider company of year 2018</p>
        <p><strong>15th /May / 2018</strong><br />
            Company decided open a new branch in Agra.</p>
        <p><strong>7th /April /2018</strong><br />
            India's no 1 company as The annual growth of last financial year 2017-2018. .
        </p>
        
        
      </div>
     
    <div class="clr"></div>
  </div>
  
</div>


</form>
</body>
</html>

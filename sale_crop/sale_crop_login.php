<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Log In for Sale</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../style.css" rel="stylesheet" type="text/css" />
<link href="../layout.css" rel="stylesheet" type="text/css" />
<script src="../maxheight.js" type="text/javascript"></script>
<script src="../jquery.js" type="text/javascript"></script>
<script src="../js/jq.js" type="text/javascript"></script>
<script src="../js/easyslider.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
// <![CDATA[
$(document).ready(function(){
	$(".slider").easySlider({
		controlsBefore:	'<p id="controls">',
		controlsAfter:	'</p>',
		auto: true,
		continuous: true
	});
});
// ]]>
</script>


<!--PHP CODE begins-->

       <?php
		$con=mysqli_connect("localhost","root","","ekrishi");
		if(!$con)
		{
			echo "connect failed...";
		}
	//	mysql_select_db();
		$err="";
		$errp="";
		$ea="";
		$q="select * from log_in_verify";
		$smt=mysqli_query($con,$q);

		while($rs=mysqli_fetch_assoc($smt))
 		{
			if($_SERVER["REQUEST_METHOD"]=="POST")
	 		{
				if($_POST['txtRid']=="")
				{
					$err="Please enter your Reg.Id";
				}
				if($_POST['txtPwd']=="")
				{
					$errp="Please enter your Password";
				}
				if($_POST['txtAn']=="")
				{
					$ea="Please enter your Aadhar Number";
				}
      			if($rs['reg_id']==$_POST["txtRid"])
	    		{
   		   			if($rs['pass']!=$_POST["txtPwd"] && $rs['aadhar_no']==$_POST["txtAn"])
		      		{
				  		$errp="Password is wrong";
			   		}
					if($rs['aadhar_no']!=$_POST["txtAn"] && $rs['pass']==$_POST["txtPwd"])
		       		{
				  		$ea="Aadhar Number is wrong";
			  		}
					if($rs['pass']==$_POST["txtPwd"] && $rs['aadhar_no']==$_POST["txtAn"])
					{
		    			$rg=$rs['reg_id'];
						$pwd=$rs['pass'];
						$an=$rs['aadhar_no'];
						$dt=date("y/m/d");

						$tm=date("h:i:sa");
						$insrtq="insert into log_in_detail(reg_id,pass,aadhar_no,login_date,login_time) values($rg,'$pwd',$an,'$dt','$tm')";
						mysql_query("$insrtq");
		    			header("location:sale_crp_frm.php");
	     			}
					if($rs['pass']!=$_POST["txtPwd"] && $rs['aadhar_no']!=$_POST["txtAn"])
		       		{
				   		$errp="Password is wrong";
				  		$ea="Aadhar Number is wrong";
			   		}
				}
			}
		}

		?>

<!--PHP CODE ends-->
</head>
<body id="page1" onload="new ElementMaxHeight();">

<div id="main">

  <!-- header -->
  <div id="header">
    <div class="row-1">
      <div class="wrapper">
        <div class="logo">
          <h1><a href="#">krishi </a></h1>
          <em><span class="txt_up">e-</span></em> <strong>A complete farmers solutions</strong> </div>
        <div class="phones"> Call Us+91-7250088899<br />
          <span class="txt_cl">
          <a href="../login_option.php">LOG OUT ! ! !</a></span> </div>
      </div>
    </div>

    <div class="row-2">
      <div class="indent">

        <!-- header-box begin -->
        <div class="header-box" id="box">
        <!--SLIDER begin-->
        <div class="slider">
        	<div class="slice1">
      <div class="slice2" id="slider">
        <ul>
          <li class="slide">
            <div>
              <p class="img">
              <img src="../images/image31.jpg" width="483" height="272" /></p>
              <h2>Collection of Different crops</h2>
              <p>We sale all kinds of crops, With varieties of seeds and crops.</p>
              <p>
              <img src="../images/info4.gif" width="123" height="90" border="0" alt="view" /></p>
            </div>
          </li>
        </ul>
          </div>
          </div>
        </div>
        <!--Slider ends-->
          <div class="inner">
            <ul class="nav">
               <li><a href="../index.php">Home page</a></li>
              <li><a href="../crop.php">Crop Detail</a></li>
              <li><a href="sale_crop_login.php" class="current">Sale Crop</a></li>
              <li><a href="../auctions/farmer_login.php">Crop Auction</a></li>
              <li><a href="../buyer/buyer_login.php">Booking</a></li>
              <li><a href="../about.php">About Us</a></li>
            </ul>
          </div>
        </div>

        <!-- header-box end -->
      </div>
    </div>
  </div>
  <!-- content -->
  <div id="ease">
  <div class="sal">
  	<br />
        <h2 class="txts">&nbsp;&nbsp;
        <a href="../index.php">
        <img src="../images/home-button-icon15.gif" height="70" width="80"></a>
        LOG IN!!!
        </h2>
        <hr size="5" color="#FF99FF">
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <br />
        <center>
        <table width="698" height="313" border="0" align="center">
         <tr>
            	<td colspan="3">&nbsp;</td>
            </tr>
        	<tr bgcolor="#3399CC">
            	<td width="333">
            		<h1>Registration Id</h1>
                </td>
                <td width="22" bgcolor="#FFFFCC">*</td>
            	<td width="319">
                	<input type="text" id="txtRid" name="txtRid" placeholder="Enter your reg. id">
                </td>
            </tr>
             <tr>
            	<td>&nbsp;</td>
                <td>&nbsp;</td>
                <td class="cl"><?php echo $err; ?></td>
            </tr>
            <tr bgcolor="#33CCCC">
    			<td>
                	<h1>Password</h1>
                </td>
                <td bgcolor="#FFFFCC">*</td>
                <td>
            		<input type="password" id="txtPwd" name="txtPwd" placeholder="Enter your password">
            	</td>
            </tr>
      		 <tr>
            	<td>&nbsp;</td>
                <td>&nbsp;</td>
                <td class="cl"><?php echo $errp;?></td>
            </tr>
            <tr bgcolor="#98E2E7">
            	<td width="333">
            		<h1>Aadhar Number</h1>
                </td>
                <td bgcolor="#FFFFCC">*</td>
            	<td width="319">
                	<input type="text" id="txtAn" name="txtAn" placeholder="Enter your Aadhar Number">
                </td>
            </tr>
             <tr>
            	<td>&nbsp;</td>
                <td>&nbsp;</td>
                <td class="cl"><?php echo $ea; ?></td>
            </tr>
            <tr>
            	<td colspan="3" align="center">
                 <input type="submit" id="b1" name="b1" onClick="show();" value="LOG IN" class="btn"/>				            	</td>
            </tr>

            </table> </center>
          </form>
    	<br />
 		<br /><br />
      </div>
    </div>
  </div>
  <!-- footer -->
  <div id="footer">
    <ul class="nav">
      <li><a href="../index.php">Home</a></li>
              <li><a href="../crop.php">Crop Detail</a></li>
              <li><a href="sale_crop_login.php" class="current">Sale Crop</a></li>
              <li><a href="../auctions/farmer_login.php">Crop Auction</a></li>
              <li><a href="../buyer/buyer_login.php">Booking</a></li>
              <li><a href="../about.php">Contact</a></li>
    </ul>
    <div class="wrapper">
      <div class="fleft">Copyright &copy; 2019 <a href="#">Deepak kumar verma</a> All Rights Reserved</div>
      <div class="fright">Designed by Deepak kumar verma- <a href="#">Roll No.BT/CSE/16/023 </a> Semester VII</div>
    </div>
  </div>
</div>
<div align=center> Ranchi Jharkhand, INDIA</div>
</body>
</html>

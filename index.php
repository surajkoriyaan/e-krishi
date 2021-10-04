<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>e-krishi|Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="layout.css" rel="stylesheet" type="text/css" />
<script src="maxheight.js" type="text/javascript"></script>
<script src="jquery.js" type="text/javascript"></script>
<script src="js/jq.js" type="text/javascript"></script>
<script src="js/easyslider.js" type="text/javascript"></script>
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

<style type="text/css">
		.emsg
        {

			color:#900;
			font-size:12px;
		}
</style>
<!--PHP CODE begins-->

        <?php
		$con=mysqli_connect("localhost","root","","ekrishi");
		if(!$con)
		{
			echo "connect failed...";
		}
	//	mysqli_select_db();
		$err="";
		$errp="";
		$ea="";
		$q="select * from log_in_verify";
		$smt=mysqli_query($con,$q);

		while($rs=mysqli_fetch_assoc($smt))
 		{
			if($_SERVER["REQUEST_METHOD"]=="POST")
	 		{
				if($_POST['r']=="")
				{
					$err="Please enter your Reg.Id";
				}
				if($_POST['p']=="")
				{
					$errp="Please enter your Password";
				}
				if($_POST['a']=="")
				{
					$ea="Please enter your Aadhar Number";
				}
      			if($rs['reg_id']==$_POST["r"])
	    		{
   		   			if($rs['pass']!=$_POST["p"] && $rs['aadhar_no']==$_POST["a"])
		      		{
				  		$errp="Password is wrong";
			   		}
					if($rs['aadhar_no']!=$_POST["a"] && $rs['pass']==$_POST["p"])
		       		{
				  		$ea="Aadhar Number is wrong";
			  		}
					if($rs['pass']==$_POST["p"] && $rs['aadhar_no']==$_POST["a"])
					{
						$rg=$rs['reg_id'];
						$pwd=$rs['pass'];
						$an=$rs['aadhar_no'];
						$dt=date("y/m/d");
						$tm=strftime("%X");
						$insrtq="insert into log_in_detail(reg_id,pass,aadhar_no,login_date,login_time) values($rg,'$pwd',$an,'$dt','$tm')";
						mysql_query("$insrtq");
		    			header("location:auctions/auction.php");
	     			}
					if($rs['pass']!=$_POST["p"] && $rs['aadhar_no']!=$_POST["a"])
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
          <a href="login_option.php">LOG IN ! ! !</a></span> </div>
      </div>
    </div>

    <div class="row-2">
      <div class="indent">

        <!-- header-box begin -->
        <div class="header-box">
        <!--SLIDER begin-->
        <div class="slider">
        	<div class="slice1">
      <div class="slice2" id="slider">
        <ul>
          <li class="slide">
            <div>
              <p class="img">
              <img src="images/image31.jpg" width="483" height="272" /></p>
              <h2>Collection of Different crops</h2>
              <p>We sale all kinds of crops, With varieties of seeds and crops.</p>
              <p>
              <img src="images/info4.gif" width="123" height="90" border="0" alt="view" /></p>
            </div>
          </li>
           <li class="slide">
            <div>
              <p class="img">
              <img src="images/image29.jpg" width="483" height="272" /></p>
              <h2>Need help?</h2>
              <p>Easy to access just by clicking on registration part for e-krishi solutions</p>
              <p>
              <img src="images/info5.gif" width="133" height="90" border="0" alt="view" /></p>
            </div>
          </li>
          </ul>
          </div>
          </div>
        </div>
        <!--Slider ends-->
          <div class="inner">
            <ul class="nav">
              <li><a href="index.php" class="current">Home page</a></li>
              <li><a href="crop.php">Crop Detail</a></li>
              <li><a href="sale_crop/sale_crop_login.php">Sale Crop</a></li>
              <li><a href="auctions/farmer_login.php">Crop Auction</a></li>
              <li><a href="buyer/buyer_login.php">Booking</a></li>
              <li><a href="about.php">About Us</a></li>
            </ul>
          </div>
        </div>

        <!-- header-box end -->
      </div>
    </div>
  </div>
  <!-- content -->
  <div id="content">
    <div class="wrapper">
      <div class="aside">
        <!-- box begin -->
        <div class="box maxheight">
          <div class="inner">
          &nbsp; &nbsp; &nbsp;
            <h3 class="t2">Sign In:</h3>
            <br>
            <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" id="signup-form">
              <fieldset>
              <div class="field">
                <label>Registration Id:</label>
                <input type="text" id="r" name="r" placeholder="Please enter your Registration Id">
                 <br /><span class="emsg">*<?php echo $err; ?></span>
              </div>
              &nbsp; &nbsp; &nbsp;
              <div class="field">
                <label>Password:</label>
                <input type="password" id="p" name="p" placeholder="Please enter your password">
                <br /><span class="emsg">*<?php echo $errp; ?></span>
              </div>
              &nbsp; &nbsp; &nbsp;
              <div class="field">
              <label>Aadhar Number:</label>
                <input type="text" id="a" name="a" placeholder="Please enter your Aadhar Number"><br />
                <span class="emsg">*<?php echo $ea; ?></span>
</div>&nbsp; &nbsp; &nbsp;
<br> <br />
<center>
<input type="submit" name="s1" id="s1" value="Log In" class="button"></center>


             <br />
              <h3 class="t2"> &nbsp;&nbsp; &nbsp;New User :</h3>

              <div class="button"><a href="user/ac_create_option.php">Create New Account!!!</a>
            </div>
              </fieldset>
            </form>
          </div>
        </div>
        <!-- box end -->
      </div>
      <div class="content">
        <div class="indent">
          <h2>e-Krishi  is happy to welcome you!</h2>
          <img class="img-indent png" alt="" src="images/slide14.jpg" height="100" width="120" />
          <p class="alt-top">e-krishi is a full-site where Indian farmer's are able to sell their agriculture crop products into different cities in their own price.It is a plateform for poor farmers that guides them which will help farmers from Indian villages to sell their agriculture products, took their crops for auctions to different cities.On the other side, wholesaler from town can also register and buy products as per their needs.</p>
          <span class="alt-top">Feel free to contact us anytime in case you have any questions or concerns.</span>
          <div class="clear"></div>
          <div class="line-hor"></div>
          <div class="wrapper line-ver">
            <div class="col-1">
             <div class="hd1"> <h3>Special Offers</h3></div>
              <ul class="t1">
                <li>Varieties of crops</li>
                <li>20% Discount on purchase of 1000-1500kg crops</li>
                <li>15% Discount on purchase of 500-1000kg crops</li>
                <li>10% Discount on purchase of 100-500kg crops</li>
                <li>FREE online booking</li>
                <li>Exclusive collections of crops</li>
              </ul>
              <div class="button"><span><span><a href="#">Order Now!</a></span></span></div><br />
            </div>
            <div class="col-2">
            <div class="hd1">
              <h3>Location</h3>
              </div>
              <p class="t1">We are located in the kamre Ranchi.</p><br />
              <dl class="contacts-list">
                <dt> </dt>
                <dd>Jharkhand Rai University </dd>
                <dd>Ranchi</dd>
                <dd>&nbsp;</dd>
                <dd>Jharkhand INDIA</dd>
                <dd>&nbsp;</dd>
              </dl>
            </div>
          </div>
          <br />
          <span class="admn">Login as Admin</span>
        </div>
      </div>
    </div>
  </div>
  <!-- footer -->
  <div id="footer">
    <ul class="nav">
       <li><a href="index.php" class="current">Home</a></li>
              <li><a href="crop.php">Crop Detail</a></li>
              <li><a href="sale_crop/sale_crop_login.php">Sale Crop</a></li>
              <li><a href="auctions/farmer_login.php">Crop Auction</a></li>
              <li><a href="buyer/buyer_login.php">Booking</a></li>
      <li><a href="about.php">Contact</a></li>
    </ul>
    <div class="wrapper">
      <div class="fleft">Copyright &copy; 2019 <a href="#">Deepak kumar verma</a> All Rights Reserved</div>
      <div class="fright">Designed by Deepak kumar verma- <a href="#">Enrollment No.BT/CSE/16/023 </a> Semester VII</div>
    </div>
  </div>
</div>
<div align=center>University Department of computer science, Jharkhand Rai University,kamre Ranchi INDIA</div>
</body>
</html>

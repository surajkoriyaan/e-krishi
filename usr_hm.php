<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Log In for Sale</title>
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
          <a href="login_option.php">LOG OUT ! ! !</a></span> </div>                  
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
              <img src="images/2page-img10.jpg" width="483" height="272" /></p>
              <h2>Collection of Different crops</h2>
              <p>We sale all kinds of crops, With varieties of seeds and crops.</p>
              <p>
              <img src="images/info4.gif" width="123" height="90" border="0" alt="view" /></p>
            </div>
          </li>
        </ul>
          </div>
          </div>
        </div>    
        <!--Slider ends-->    
          <div class="inner">
            <ul class="nav">
               <li><a href="index.php">Home page</a></li>
              <li><a href="about.php">About Us</a></li>
            </ul>            
          </div>
        </div>
       
        <!-- header-box end -->
      </div>
    </div>
  </div>
  <!-- content -->
  <div id="ease">
  <div class="usr">
  	<br />      
        <h2 class="txtc">Rabi crops</h2>      
        <br />
        <center>
      <table border="2" bordercolor="#339900" align="center" cellpadding="5" cellspacing="8" class="fnt">
        <tr align="center">
            	<th>Crop Name </th>
                <th> Quantity </th>
                <th>Price (per unit kg)</th>
                <th> Discount</th>
        </tr>
        <?php
			$con=@mysql_connect("localhost","root","");
						if(!$con)
						{
							echo "Connection failed..";	
						}
						mysql_select_db("ekrishi"); 
			$rcrop_q="select *from rabi";
			$rcrop_ex=mysql_query($rcrop_q);
			while($rcrop_rs=mysql_fetch_assoc($rcrop_ex))
			{
		?>  <tr align="center">        	
			<td> <?php  echo $rcrop_rs['crop_nm'];  ?> </td>
            <td> <?php $amt=$rcrop_rs['quantity'];
						if($amt==1)
						{
							echo "1-500kg";
						}
						else if($amt==2)
						{
							echo "500-1000kg";	
						}
						else
						if($amt==3)
						{
							echo "1000-1500kg";	
						}?>
			<td> <?php echo $rcrop_rs['sale_price']; ?> </td>
            <td> <?php echo $rcrop_rs['discount']; ?>%</td></tr>
           <?php  } ?>            
      </table></center>
      <br /> <br /><br />     
        <h2 class="txtc">Kharif crops</h2> 
        <center>
      <table border="2" bordercolor="#339900" align="center" cellpadding="5" cellspacing="8" class="fnts">
        <tr align="center">
            	<th>Crop Name </th>
                <th> Quantity </th>
                <th>Price (per unit kg)</th>
                <th> Discount</th>
        </tr>
        <?php			 
			$kcrop_q="select *from kharif";
			$kcrop_ex=mysql_query($kcrop_q);
			while($kcrop_rs=mysql_fetch_assoc($kcrop_ex))
			{
		?>  <tr align="center">        	
			<td> <?php  echo $kcrop_rs['crop_nm'];  ?> </td>
            <td> <?php $amt=$kcrop_rs['quantity'];
						if($amt==1)
						{
							echo "1-500kg";
						}
						else if($amt==2)
						{
							echo "500-1000kg";	
						}
						else
						if($amt==3)
						{
							echo "1000-1500kg";	
						}?>
			<td> <?php echo $kcrop_rs['sale_price']; ?> </td>
            <td> <?php echo $kcrop_rs['discount']; ?>%</td></tr>
           <?php  } ?>            
      </table></center>  
 		<br /><br />
     <br />      
        <h2 class="txtc">Zaid crops</h2> 
        <center>
      <table border="2" bordercolor="#339900" align="center" cellpadding="5" cellspacing="8" class="fnt">
        <tr align="center">
            	<th>Crop Name </th>
                <th> Quantity </th>
                <th>Price (per unit kg)</th>
                <th> Discount</th>
        </tr>
        <?php			 
			$crop_q="select *from zaid";
			$crop_ex=mysql_query($crop_q);
			while($crop_rs=mysql_fetch_assoc($crop_ex))
			{
		?>  <tr align="center">        	
			<td> <?php  echo $crop_rs['crop_nm'];  ?> </td>
            <td> <?php $amt=$crop_rs['quantity'];
						if($amt==1)
						{
							echo "1-500kg";
						}
						else if($amt==2)
						{
							echo "500-1000kg";	
						}
						else
						if($amt==3)
						{
							echo "1000-1500kg";	
						}?>
			<td> <?php echo $crop_rs['sale_price']; ?> </td>
            <td> <?php echo $crop_rs['discount']; ?>%</td></tr>
           <?php  } ?>            
      </table></center>  
 		<br /><br />
      </div>
    </div>
  </div>
  <!-- footer -->
  <div id="footer">    
    <div class="wrapper">
      <div class="fleft">Copyright &copy; 2019 <a href="#">Deepak kumar verma</a> All Rights Reserved</div>
      <div class="fright">Designed by Deepak kumar verma- <a href="#">Roll No. BT/CSE/16/023</a> Semester VII</div>
    </div>
  </div>
</div>
<div align=center> Ranchi Jharkhand, INDIA</div>
</body>
</html>
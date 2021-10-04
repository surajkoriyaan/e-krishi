<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>e-krishi </title>
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
          <a href="../auctions/farmer_login.php">LOG OUT ! ! !</a></span> </div>                  
      </div>
    </div>
    
    <div class="row-2">
      <div class="indent">
      
        <!-- header-box begin -->
        <div class="header-box" id="bk">
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
              <p><a href="../info.html">
              <img src="../images/info4.gif" width="123" height="90" border="0" alt="view" /></a></p>
            </div>
          </li>
           <li class="slide">
            <div>
              <p class="img">
              <img src="../images/image29.jpg" width="483" height="272" /></p>
              <h2>Need help?</h2>
              <p>Easy to access just by clicking on registration part for e-krishi solutions</p>
              <p><a href="../info.html">
              <img src="../images/info5.gif" width="133" height="90" border="0" alt="view" /></a></p>
            </div>
          </li>
          </ul>
          </div>
          </div>
        </div>    
        <!--Slider ends-->    
          <div class="inner">
            <ul class="nav">
              <ul class="nav">
               <li><a href="../index.php">Home page</a></li>
              <li><a href="../crop.php">Crop Detail</a></li>
              <li><a href="sale_crop_login.php" class="current">Sale Crop</a></li>
              <li><a href="../auctions/farmer_login.php">Crop Auction</a></li>
              <li><a href="../buyer/buyer_login.php">Booking</a></li>
              <li><a href="../about.php">About Us</a></li>
            </ul> 
            </ul>            
          </div>
        </div>
       
        <!-- header-box end -->
      </div>
    </div>
  </div>
  <!-- content -->  
 <div id="ease">
       <center> 
       
       <div class="cnt">
       <br>
         <?php
			 $con=mysql_connect("localhost","root","");
			 if(!$con)
			 {
				echo "Connection failed";	 
			 }
			 mysql_select_db("ekrishi");
			 
            $qry="select * from rabi order by sl_no desc limit 1";
			$smt=mysql_query($qry);
			$result=mysql_fetch_assoc($smt);
			$rd=$result['reg_id'];
			
			$qu="select ac_id from log_in_verify where reg_id=$rd";  
			$csmt=mysql_query($qu);
			$rs=mysql_fetch_assoc($csmt);
			$id=$rs['ac_id'];
			$qn="select name from farmer_ac where reg_id=$id";  
			$nsmt=mysql_query($qn);
			$rsn=mysql_fetch_assoc($nsmt);
			$nam=$rsn['name'];
			
				?><br>
          <center>
          
                <span class="txt2">
            <?php 
				echo "Welcome.. &nbsp;&nbsp;".$nam."</span>"?> 
                <br /><br />
                <span class="txt_cl">
                Your crop is ready for Post...</span>
				<hr size="10" color="#66CC99">
                <hr size="4" color="#0033CC"> 
                <br />
			</center>
                <center>
				<table border="0" width="80%" height="300" class="txt_color">
            <tr>
            	<th colspan="2" bgcolor="#EAFEE7">
                <center>
               Crop details given by you:
                </center></th>
            </tr>
            
             <tr bgcolor="#FFFFCC">
                 <td class="txt_color">   
                     Reg Id:</td>
                 <td class="txt_color">
                  <?php echo $rd;?>
               </td>
             </tr>
             <tr bgcolor="#EAFEE7">
            	<td class="txt_color">
                  Aadhar No
               </td>
                 <td class="txt_color">
                 <?php echo $result['aadhar_no'];?>
               </td>
             </tr>  
             <tr bgcolor="#FFFFCC">
                 <td class="txt_color">   
                     Crop Type:</td>
                 <td class="txt_color">
                  <?php echo $result['crop_typ'];?>
               </td>
             </tr>   
             <tr bgcolor="#EAFEE7">
                 <td class="txt_color">   
                     Crop Name:</td>
                 <td class="txt_color">
                  <?php echo $result['crop_nm'];?>
               </td>
             </tr>
             <tr bgcolor="#FFFFCC">
            	<td class="txt_color">
                  Quantity
               </td>
                 <td class="txt_color">
                 <?php $q=$result['quantity'];
				 		if($q==1)
						{
							echo "1-500kg";
						}
						else if($q==2)
						{
							echo "500-1000kg";
						}
						else if($q==3)
						{
							echo "1000-1500kg";
						}
				 ?>
               </td>
             </tr>    
             <tr bgcolor="#EAFEE7">
                 <td class="txt_color">   
                     Sale Price:</td>
                 <td class="txt_color">
                  <?php echo $result['sale_price'];?>
               </td>
             </tr>
             <tr bgcolor="#FFFFCC">
            	<td class="txt_color">
                  Discount
               </td>
                 <td class="txt_color">
                 <?php echo $result['discount'];?>
               </td>
             </tr>           
         </table>
         <br />
         <hr size="10" color="#66CC99">
         <hr size="4" color="#0033CC"> <br /><br /><br />
         <form action="sale_crp_frm.php" method="post">
        	 <input type="submit" value="Post Another Crop" class="btns" />
         </form>
         <br /><br />
         </center>
       </div>
      </center>
      </div>
      </div>
      
  
  <!-- footer -->
  <div id="footer">
    <ul class="nav">
               <li><a href="../index.php">Home page</a></li>
              <li><a href="../crop.php">Crop Detail</a></li>
              <li><a href="sale_crop_login.php" class="current">Sale Crop</a></li>
              <li><a href="../auctions/farmer_login.php">Crop Auction</a></li>
              <li><a href="../buyer/buyer_login.php">Booking</a></li>
              <li><a href="../about.php">About Us</a></li>
            </ul> 
    <div class="wrapper">
      <div class="fleft">Copyright &copy; 2019 <a href="#">Deepak kumar verma</a> All Rights Reserved</div>
      <div class="fright">Designed by Deepak kumar verma- <a href="http://www.templatemonster.com/">Enrollment No.BT/CSE/16/023 </a> Semester VII</div>
    </div>
  </div>
</div>
<div align=center> Ranchi Jharkhand, INDIA</div>
</body>
</html>
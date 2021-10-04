<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Sale Crop</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../style.css" rel="stylesheet" type="text/css" />
<link href="../layout.css" rel="stylesheet" type="text/css" />
<script src="../maxheight.js" type="text/javascript"></script>
<script src="../jquery.js" type="text/javascript"></script>
<script src="../js/jq.js" type="text/javascript"></script>
<script src="../js/easyslider.js" type="text/javascript"></script>
<script src="../js/crop_list.js" type="text/javascript"></script>
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

	<script type="text/javascript">
	function valid()
	{
		var n=document.forms.sale_crp.dis.value;
		var s=document.forms.sale_crp.sp.value;
		var l=s.length;
		var d=n.length;
		
		if(l!=2)
		{
			alert("Saling price length should be of minimum 2 digit");
			document.forms.sale_crp.sp.focus();
			return false;
		}
		if(d!=2)
		{
			alert("Discount rate length should be of minimum 2 digit");
			document.forms.sale_crp.dis.focus();
			return false;
		}
	}

	</script>
<!--PHP CODE begins-->

        
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
 <?php
	
			 $con=mysql_connect("localhost","root","");
			 if(!$con)
			 {
				echo "Connection failed";	 
			 }
			 mysql_select_db("ekrishi");
			 
            $qry="select * from log_in_detail order by sl_no desc limit 1";
			$smt=mysql_query($qry);
			$result=mysql_fetch_assoc($smt);
			$rd=$result['reg_id'];
			$a=$result['aadhar_no'];
			$dt=$result['login_date'];
			$tm=$result['login_time'];
			
			$lqry="select * from log_in_verify where reg_id=$rd and aadhar_no='$a'";  
			$lsmt=mysql_query($lqry);
			$ls=mysql_fetch_assoc($lsmt);
			$id=$ls['ac_id'];
			
			
			$cqry="select * from farmer_ac where reg_id=$id and aadhar_no=$a";  
			$csmt=mysql_query($cqry);
			$rs=mysql_fetch_assoc($csmt);
			
						

	?>
   	<table border="2" height="436" width="887">
    	<tr>
        	<td width="298" bgcolor="#FFCCFF">
            	<table border="0" class="fnts" height="400">
            <tr> 
            
                <td> 
          
            	<?php echo '<img height="150" width="200" src="../images//'.$rs['photo'].'">';?>
                </td>
          </tr>
         	<td>
             <?php 
			 	echo "<h4 class=fnt>Welcome....". $rs['name']."</h4>"; ?>
              </td>
         </tr>
         <tr> 
         	<td> 
                <?php
			 	echo "<br> Reg. Id :&nbsp;&nbsp;". $rd;?>
             </td>
         </tr>
         <tr> 
         	<td> 
                <?php
				echo "<h4>Login Date:&nbsp;".$dt;?>
             </td>
         </tr>
         <tr> 
         	<td> 
                <?php	
					
					echo"<br>Login Time:&nbsp;&nbsp;".$tm."</h4>";
				?>
            	
               </td>
          </tr>
          
         </table>
    </td>
    <td width="564" bgcolor="#660099">
            <!--Sale Crop form begin -->
            <form id="sale_crp" name="sale_crp" action="sale_crp_action.php" method="post" onsubmit="return valid();">
            <table border="0" height="428" width="575" bgcolor="#FFFFCC" class="fnts">         
                <tr>
                  <td colspan="2"><center>
                    Put your Crop for Sale, Fill up the  Details :
                    <input type="text" id="rid" name="rid" value="<?php echo $ls['reg_id'];?>" hidden/>
                    <input type="text" id="an" name="an" value="<?php echo $rs['aadhar_no'];?>" hidden/>
                     </center></td>
                </tr>
                <tr>
                  <td align="center" width="250"> Crop type:
                </td>
                	<td>
                    	
							<select onChange="showCropList(this.value)" class="fnt" id="ct" name="ct">
								<option value="0">Select a Crop Type:</option>
								<option value="1">Rabi</option>
								<option value="2">Kharif</option>
								<option value="3">Zaid</option>
							</select>
						
                    </td>
            	</tr>
                 <tr>
                  <td align="center">
                	Crop Name:
                </td>
                	<td id="CropList">
                    	<select class="fnts" id="cn"  name="cn">
                        	<option>&nbsp;</option>
                        	<option>&nbsp;</option>
                            <option>&nbsp;</option>
                        </select>
                    </td>
            	</tr>
                <tr>
                  <td align="center"> Saling Price: </td>
                  <td><input type="text" class="fnt" id="sp" name="sp" />
                    /kg </td>
                </tr>
                
                <tr>
                  <td align="center" id="txtQuant">Quantity</td>
                  <td>
                    <select class="fnts" id="qunt" name="qunt" onchange="showDis(this.value)">
                      <option value="1">0-500kg</option>
                      <option value="2">500-1000kg</option>
                      <option value="3">1000-1500kg</option>
                    </select></td>
                 </tr>
                 <tr>
                  <td align="center" id="txtCrop">Discount(In %)</td>
                  <td>
                    <input type="text" class="fnt" id="dis" name="dis" /></td>
                </tr>
                <tr>
                  <td colspan="2" align="center">
                  	<input type="submit" class="btn" value="Submit" />
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="reset" class="btn" /value="Reset" />
                    &nbsp;&nbsp; &nbsp;&nbsp;
                    <input type="button" class="btn" /value="Cancel" /></td>
                </td>
              </tr>
            </table>
            </form>
             <!--Sale Crop form Ends -->
           </td>
            
            
            
      </tr>
    </table> 
    
    
    
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
      <div class="fright">Designed by Deepak kumar verma- <a href="http://www.templatemonster.com/">Roll No. BT/CSE/16/023</a> Semester VII</div>
    </div>
  </div>
</div>
<div align=center> Ranchi Jharkhand, INDIA</div>
</body>
</html>
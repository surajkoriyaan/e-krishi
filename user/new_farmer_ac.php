<html>
	<head>
    	<title>e-krishi </title>
    	<link href="../css/design.css" rel="stylesheet" type="text/css">
        <script src="../js/jquery.js" type="text/javascript"></script>
		<script src="../js/easySlider1.5.js" type="text/javascript"></script>
        <script type="text/javascript" src="../js/toggle_jquery.js"></script>
        <script type="text/javascript" src="../js/jquer_div.js"></script>
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
// ]]>
</script>
<script type="text/javascript">
	function valid()
	{
		var n=document.forms.f_post.nm.value;
		var ph=document.forms.f_post.phn.value;
		var l=ph.length;
		if(n=="")
		{
			alert("Name can not be left blank");
			document.forms.f_post.nm.focus();
			return false;
		}
		if(l!=10)
		{
			alert("phone number should be of 10 digit");
			document.forms.f_post.phn.focus();
			return false;
		}
	}

</script>
    </head>
<body>
	<div class="bk_img"></div>
    <div class="icn">
      
    	<center><span class="txt">
       e-KRISHI </span><span class="blk">a complete farmer's solutions</span></center>
        
    </div>
    <div class="menubar">
    	<div class="down_a">
        <a href="#">
         <img src="../HD/icon-download.gif" height="50" width="70" id="down" name="down">
        </a>
        </div>
		<div class="menu">
		  <ul>
        	<li id="home"> <a href="../index.php">Home</a> </li>
            <li id="about"> <a href="../about.php">About Us</a> </li>
            <li id="crop"> <a href="../crop_list.php">Crops</a> </li>            
            <li id="auction"> <a href="../pst_pdt.php">Auction </a>  </li>
            <li id="sale"> <a href="../sale.php">Sale Crops</a> </li>
            <li id="order"> <a href="../sale.php">Order</a> </li>
            <li id="zone"> <a href="../zone.php">Zone</a> </li>
            <li id="contact"> <a href="../contact.php">Contact Us</a> </li>
            
          </ul>
    	</div>  
  </div> 
  
  <div class="image_slider">
    <div class="slider">
    <div class="slice1">
      <div class="slice2" id="slider">
        <ul>
          <li class="slide">
            <div>
              <p class="img">
              <img src="../images/simple_text_img_1.jpg" width="483" height="272" /></p>
              <h2>Need help?</h2>
              <p>Easy to access just by clicking on registration part for e-krishi solutions</p>
              <p><a href="info.html">
              <img src="../images/info1.gif" width="133" height="90" border="0" alt="view" /></a></p>
            </div>
          </li>
          <li class="slide">
            <div>
              <p class="img"><img src="../images/simple_text_img_2.jpg" alt="screen 2" width="483" height="306" /></p>
    <h2>Collection of Different crops </h2>
              <p>We sale all kinds of crops . With varieties of seeds and crops. </p>
              <p><a href="info.html"><img src="../images/info2.jpg" width="80" height="80" border="0" alt="view" /></a></p>
            </div>
          </li>
          <li class="slide">
            <div>
              <p class="img"><img src="../images/simple_text_img_6.jpg" alt="screen 2" width="483" height="306" /></p>
    <h2>With varieties of seeds and crops </h2>
              <p>We sale all kinds of crops . With varieties of seeds and crops. </p>
              <p><a href="info.html"><img src="../images/info3.jpg" width="80" height="80" border="0" alt="view" /></a></p>
            </div>
          </li>
          <li class="slide">
            <div>
              <p class="img"><img src="../images/simple_text_img_5.jpg" alt="screen 2" width="483" height="306" /></p>
    <h2>Sale and purchase farming equipments and crops </h2>
              <p>We sale all kinds of crops . With varieties of seeds and crops. </p>
              <p><a href="info.html"><img src="../images/info4.gif" width="80" height="80" border="0" alt="view" /></a></p>
            </div>
          </li>
          <li class="slide">
            <div>
              <p class="img"><img src="../images/simple_text_img_4.jpg" alt="screen 2" width="483" height="306" /></p>
    <h2>Different farming equipments  </h2>
              <p>We sale all kinds of crops . With varieties of seeds and crops. </p>
              <p><a href="info.html"><img src="../images/info5.gif" width="133" height="90" border="0" alt="view" /></a></p>
            </div>
          </li>
          <li class="slide">
            <div>
              <p class="img"><img src="../images/simple_text_img_3.png" alt="screen 2" width="483" height="306" /></p>
              <h2>Technology Training for farmers   </h2>
              <p>We provide online training,services and support for e-krishi users</p>
                            <p><a href="info.html"><img src="../images/info5.jpg" width="133" height="130" border="0" alt="view" /></a></p>
            </div>
          </li>
           <li class="slide">
            <div>
              <p class="img"><img src="../images/simple_text_img_7.jpg" alt="screen 2" width="483" height="306" /></p>
              <h2>Services for farmers   </h2>
              <p>We provide online training,services and support for e-krishi users</p>
                            <p><a href="info.html"><img src="../images/info7.gif" width="133" height="100" border="0" alt="view" /></a></p>
            </div>
          </li>
           <li class="slide">
            <div>
              <p class="img"><img src="../images/simple_text_img_8.jpg" alt="screen 2" width="483" height="306" /></p>
              <h2>Support for e-krishi users  </h2>
              <p>We provide online training,services and support for e-krishi users</p>
                            <p><a href="info.html"><img src="../images/info8.jpg" width="133" height="80" border="0" alt="view" /></a></p>
            </div>
          </li>
           <li class="slide">
            <div>
              <p class="img"><img src="../images/simple_text_img_9.jpg" alt="screen 2" width="483" height="306" /></p>
              <h2>Knowledge of Farming Techniques </h2>
              <p>We provide online training,services and support for e-krishi users</p>
                            <p><a href="info.html"><img src="../images/info8.gif" width="133" height="80" border="0" alt="view" /></a></p>
            </div>
          </li>
           <li class="slide">
            <div>
              <p class="img"><img src="../images/slide15.jpg" alt="screen 2" width="483" height="306" /></p>
              <h2>Latest upgraded Farming Technology   </h2>
              <p>We provide online training,services and support for e-krishi users</p>
                            <p><a href="info.html"><img src="../images/info9.gif" width="133" height="80" border="0" alt="view" /></a></p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>   
  </div>
  <div id="kishan_zone">
  	<span class="txt">
  	<ul style="list-style-type:none">
    	<li>&nbsp;</li>
    	<a href="farmer_login.php"><li>Log In</li></a>
        <li>&nbsp;</li>
        <li>&nbsp;</li>
        <li>&nbsp;</li>
        <a href="new_farmer_ac.php"><li>Sign Up</li></a>
    </ul></span>
  </div>
	<div class="info">
      <div class="content">
      <div class="right">
         	<div id="div_cnt">
            	
           <!--Create new Kishan Account-->
           		
               <center> <span class="font_d">*****Create your New Account*****<br>
                   Date:    <?php echo date("d/m/y");?><hr color="#FF9933"></span>
       <form method="post" name="frmr_ac" id="frmr_ac" action="frmr_ac_action.php" onSubmit="return valid();">
         	<table height="90%" width="100%" class="fnt" bgcolor="#CC99FF">
            <tr bgcolor="#999999">
            	<th colspan="3"><center>
                Fill Up your details:</center>
                </th>
            </tr>
               <tr bgcolor="#FFFFFF">      
                  <td>  <label for="text">Enter your name:</label> </td>
                  <td>
                  	<input type="text" id="nm" name="nm">
                  </td> 
                  <td rowspan="4" bgcolor="#CC99FF">Select your photo
                  <input type="file" id="pht" name="pht">
                  </td>
                </tr>
                <tr bgcolor="#CCCCCC">      
                  <td>  <label for="text">Enter your Aadhar number:</label> </td>
                  <td>
                  	<input type="text" id="an" name="an">
                  </td> 
                </tr>
                <tr bgcolor="#FFFFFF">      
                  <td>  <label for="text">Enter your phone number:</label> </td>
                  <td>
                  	<input type="text" id="phn" name="phn">
                  </td> 
                </tr>
                <tr bgcolor="#CCCCCC">      
                   <td>  <label for="text">Enter your village name:</label> </td>
                  <td colspan="2">
                  	<input type="text" id="vn" name="vn">
                  </td> 
                </tr>
                 <tr bgcolor="#FFFFFF"> 
                 <td>  <label for="text">Enter your block name:</label> </td>
                  <td colspan="2">
                  	<input type="text" id="bn" name="bn">
                  </td>     
                  
                </tr>
                <tr bgcolor="#CCCCCC">                                
                  <td>  <label for="block">Select District:</label></td>
                  <td colspan="2">
                  <select id="dn" name="dn">
                    	<option>&nbsp;&nbsp;</option>
                    	<option>Gumla</option>
                        <option>Palamu</option>
                        <option>West singhbhum</option>
                        <option>East singhbhum</option>
                        <option>Godda</option>
                        <option>chatra</option>
                        <option>Hajaribag</option>
                        <option>Kodarma</option>
                        <option>Giridih</option>
                        <option>Deoghar</option>
                        <option>Pakur</option>
                        <option>Sahebganj</option>
                        <option>Dumka</option>
                        <option>Dhanbad</option>
                        <option>Bokaro</option>
                        <option>Ranchi</option>
                        <option>Lohardaga</option>
                        <option>Khunti</option>
                        <option>Ramgarh</option>
                        <option>Saraikela-Kharsawan</option>
                    </select>
                  </td>  
             </tr>
               <tr bgcolor="#FFFFFF">      
                  <td>  <label for="text">Enter Date of Birth:</label> </td>
                  <td colspan="2">
                  	<input type="date" id="dt" name="dt" placeholder="yyyy/mm/dd">
                  </td>
                </tr>                 
                <tr bgcolor="#CCCCCC">
                <td colspan="3">  
                  <input type="checkbox" id="ck" name="ck" class="required input_field" />
                    I agree for post the product and I accept all the terms and conditions</td>
                 </tr>
                 <tr bgcolor="#FFFFFF">
                 <td class="t">
                    <input style="font-weight: bold;" type="submit" class="submit_btn" name="submit" id="submit" value=" SUBMIT " /></td>
                    <td class="t" colspan="2">
                    <input style="font-weight: bold;" type="reset" class="submit_btn" name="reset" id="reset" value=" Reset " /></td>
                 </tr>
              </table>
              </form>    
                             
             </center></div>   
           <!--End of Create new Kishan Account-->     
         </div>
    	 <div class="left">
           <div id="div_cnt">
           	<span class="fnt">e-krishi product sale criteria available here</span>
   		<ul style="list-style-type:none">
        	<span class="font_d">
        	
        	<li id="kishan_ac">Create Kishan Account</li>
            <li>&nbsp;</li>
              <li>Sale crops</li>
              <li>&nbsp;</li>
              
                     <li>Kishan Order</li>
                     <li>&nbsp;</li>
                     <li>Kishan Auction</li> 
                     <li>&nbsp;</li>    
                     <li><img src="../images/new_icon.gif">Kishan Mail</li>
                     <li>&nbsp;</li>        
                     <li id="hy">Hybrid Crops</li>
                     <li>&nbsp;</li>
            <li> <a href="kharif_buyers.php">Log In</a></li>
             	<li>&nbsp;</li>
             <li> <a href="kharif_buyers.php">Booking</a></li>
             	<li>&nbsp;</li>
            <li>
                 <a href="check_status.php">Check status</a>
            </li>
            
           </span>
        </ul>
           </div>
         </div>
        </div>
        <div class="tskbar">
        <marquee>
        <font color="#993333" style="text-shadow:2px #033" size="+2">fields-farmers-planting-rice-in-india and crops of varieties can be of rabi,kharif and zaid</font><br>
        <font color="yellow">Information about latest technology and farming techniques</font>
        </marquee>
        </div>
        <div class="taskbar">     
        Designed by:
         Deepak kumar verma semester-VII
        <hr>
  e-krishi  -A complete krishi solutions&copy; all copyrights reserved 2019
        	<div class="up_a">
            <a href="#"><img src="../images/new.png" id="up" name="up"></a>
            </div>
        
        </div>
    </div> 
</body>
</html>
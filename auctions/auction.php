<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>auction_page</title>
<meta name="keywords" content="wall shelf, free css templates, one page, full site, CSS, HTML" />
<meta name="description" content="Wall Shelf is a free CSS template provided by templatemo.com" />
<link href="bg_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/coda-slider.css" type="text/css" media="screen" title="no title" charset="utf-8" />

<script src="js/jquery-1.2.6.js" type="text/javascript"></script>
<script src="js/jquery.scrollTo-1.3.3.js" type="text/javascript"></script>
<script src="js/jquery.localscroll-1.2.5.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.serialScroll-1.2.1.js" type="text/javascript" charset="utf-8"></script>
<script src="js/coda-slider.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>
<!--Crop List using js-->
<script src="js/crop_qy.js" type="text/javascript"></script>
<script>
		function showUser(str) 
		{
  			if (str=="") 
			{
    		document.getElementById("txtHint").innerHTML="";
    		return;
  		} 
  		if (window.XMLHttpRequest) 
		{
			xmlhttp=new XMLHttpRequest();
  		} 
		else 
		{
    		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  		}
  		xmlhttp.onreadystatechange=function() 
		{
    		if (xmlhttp.readyState==4 && xmlhttp.status==200) 
			{
      			document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    		}
  		}
  		xmlhttp.open("GET","crop_actions.php?q="+str,true);
 		xmlhttp.send();
		}
		</script>

</head>
<body bgcolor="#0033CC">
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
			
			$cqry="select * from farmer_ac where aadhar_no=$a";  
			$csmt=mysql_query($cqry);
			$rs=mysql_fetch_assoc($csmt);
			
			
	?>
    <div id="slider">
    	
        <div id="header_wrapper">
            <div id="header">
           			 <a href="../index.php">
                			<div id="div_lo">Log Out</div>
                     </a>
            
                <a href="../index.php">
                <img src="../images/home-button-icon15.gif" height="120" width="150" />
                </a><br /><h4 class="txt_fn">
                <?php echo "Welcome....". $rs['name']; 	
				echo ".....</h4><h4 class=clr>Login Date:";	
					echo"&nbsp;".$dt;
					echo"&nbsp;&nbsp;".$tm."</h4>";
				?>
            </div>
		</div>
        
        <div id="menu_wrapper">
            <div id="menu">
                <ul class="navigation">
                    <li><a href="#home" class="selected">Crop List<span class="ui_icon home"></span></a></li>
                    <li><a href="#aboutus">Check Mail<span class="ui_icon aboutus"></span></a></li>
                    <li><a href="#services">Auction<span class="ui_icon services"></span></a></li>
                    <li><a href="#gallery">All Sell Info<span class="ui_icon gallery"></span></a></li>
                    <li><a href="#contactus">Profile<span class="ui_icon contactus"></span></a></li>
                    
                </ul>
            </div>
		</div>
                        
		<div id="content_wrapper">
        <div id="content">
        
            <div class="scroll">
                <div class="scrollContainer">
                
                    <div class="panel" id="home">
                    <div class="div_crop">
                    <br /><br /> 
                    <center>
                 <table border="0" height="100" width="400">
            	<tr>
                	<td colspan="2"><center>
                	  You can view all Crop Details :<br />
                      --------------------------------------------
                	</center></td>
                </tr>
                <tr>
                	<td>Crop Type</td>
                	<td align="center">
                    	<form>
							<select name="users" onChange="showUser(this.value)" class="sbtn">
								<option value="0">Select a Crop Type:</option>
								<option value="1">Rabi</option>
								<option value="2">Kharif</option>
								<option value="3">Zaid</option>
							</select>
						</form>
                        
                    </td>
            	</tr>                 
            </table>
            <br /><br />
            <div id="txtHint">
            	<b>Detailed information</b>
            	<br />_________________________________________<br />           
            
            </div>
            
                    </div>	
	</div> <!-- end of home -->
                    
                    <div class="panel" id="aboutus">
                        <h1>Inbox</h1>                        
                 <p><em>Check Mails : &nbsp;&nbsp; <?php echo date('d/m/y'); ?> .</em></p>
      <br> <center>
       <table cellpadding="3" cellspacing="2" bordercolor="#CFF" border="2" class="f1" width="100%">		
            <tr>
                <th>Buyer Id</th>
                <th>Buyer Name</th>               
                <th>Crop Type</th>
                <th>Crop Name</th>
                <th>Quantity</th>              
                <th>Total Price</th>
                <th>Date</th>
                <th>Do you want to approve it?</th>
            </tr>
             <?php $v="select *from booking where f_id=$rd";
				$smt=mysql_query("$v");
				while($rs=mysql_fetch_assoc($smt))
				{?>
                <form id="ap" name="ap" action="aprv.php" method="post">
     <input type="hidden" id="id" name="id"  value="<?php echo $rs['w_id']; ?>" />
     <input type="hidden" id="fid" name="fid"  value="<?php echo $rd; ?>" />
     <input type="hidden" id="cn" name="cn" class="btn" value="<?php echo $rs['crop_nm'];?>">
                   <tr>      		
                   <td><?php echo $rs['w_id']; ?></td>
                   <td><?php echo $rs['w_nm']; ?></td>
                   <td><?php echo $rs['crop_t']; ?></td>        
                   <td><?php echo $rs['crop_nm']; ?></td>                   
                   <td><?php echo $rs['quantity']."&nbsp;&nbsp;kg"; ?></td>
                   <td><?php echo $rs['total_price']."&nbsp;&nbsp;Rs."; ?></td>
                   <td><?php echo $rs['book_date']; ?></td>          
          		   <td><input type="submit" id="y" name="y" class="btn" value="Yes" />
                   <input type="button" id="n" name="n" class="btn" value="No" />
                   </td></tr></form>
                    <?php } ?>
           </table>        
        </center><br />                              
                        <p>Once you approve the buyers demand Then your deal is done </p>
                        <div class="cleaner_h30"></div>
                        <ul id="social_box">
                            <li><a href="#"><img src="images/facebook.png" alt="facebook" /></a></li>
                            <li><a href="#"><img src="images/twitter.png" alt="twitter" /></a></li>
                            <li><a href="#"><img src="images/linkedin.png" alt="linkin" /></a></li>
                            <li><a href="#"><img src="images/technorati.png" alt="technorati" /></a></li>
                            <li><a href="#"><img src="images/myspace.png" alt="myspace" /></a></li>                
                        </ul>
                    </div>
                    
                    <div class="panel" id="services">
                    	<div class="div_cont">
                        <span class="font_d">
                        <form id="auction_form" name="auction_form" method="post" action="auction_form_action.php">
           <input type="hidden" name="reg" id="rd" value="<?php echo $rd;?>" />
           <input type="hidden" name="nam" id="nm" value="<?php echo $rs['name'];?>" />             
                        <table border="0" height="381" width="845">
            	<tr>
                	<td colspan="2"><center>
                	  Put your Crop for Auction, Fill up the  Details :
                 	</center></td>
                </tr>
                <tr align="center">
                <td>
                	Crop type:
                </td>
                	<td align="center">
                    	
							<select onChange="showCropList(this.value)" class="inpt_t" id="ct" name="ct">
								<option value="0">Select a Crop Type:</option>
								<option value="1">Rabi</option>
								<option value="2">Kharif</option>
								<option value="3">Zaid</option>
							</select>
						
                    </td>
            	</tr>
                 <tr align="center">
                  <td>
                	Crop Name:
                </td>
                	<td align="center" id="CropList">
                    	<select class="inpt_t" id="cn"  name="cn">
                        	<option>&nbsp;</option>
                        	<option>&nbsp;</option>
                            <option>&nbsp;</option>
                        </select>
                    </td>
            	</tr>
                <tr align="center">
                  <td>
                	Saling Price:
                </td>
                	<td align="center">
                    	&nbsp;&nbsp;&nbsp;<input type="text" class="inpt_t" id="sp" name="sp">/kg 
                        	
                    </td>
            	</tr>
                <tr>
                  <td colspan="2" align="center">
                	Order value for crop:
                  </td>                	
            	</tr>
                <tr>
                	<td align="center" id="txtQuant">Quantity
                    	<select class="inpt_t" id="qunt" name="qunt" onChange="showDis(this.value)">
                        	<option value="1">0-500kg</option>
                        	<option value="2">500-1000kg</option>
                            <option value="3">1000-1500kg</option>
                        </select>
                    </td>
                    <td align="center" id="txtCrop">Discount(In %)
                    	<input type="text" class="inpt_t" id="dis" name="dis">
                        	
                    </td>
                </tr>
                <tr>
                	<td colspan="2" align="center">                    	<input type="submit" class="sub_btns" value="Submit" />      &nbsp;&nbsp;&nbsp;&nbsp;               
         
                    	<input type="reset" class="sub_btns" /value="Reset">&nbsp;&nbsp; &nbsp;&nbsp;                  
                    	<input type="button" class="sub_btns" /value="Cancel">
                    </td>
                </tr>
            </table></form>
                      </span>  
                        </div>
                    </div>
                
           <div class="panel" id="gallery">
             <h1>All Sell Information</h1>
                        
              <div id="gallery_container">
                <div class="gallery_box">
                  <form id="crpa" name="crpa" action="crop_auct.php" method="post">
                   <input type="hidden" name="reg" id="rd" value="<?php echo $rd;?>" />
                  <input type="hidden" name="nam" id="nm" value="<?php echo $rs['name'];?>"/>                   <a href="../images/image_01.jpg" target="_parent"><img src="../images/image_01.jpg" height="100" width="200" /></a>                             
                                <h4>Crop placed for Auction</h4>
                                <p>View all the details of crops which are placed for auction.You can view the crop type, crop name, quantity of the crops, price opted by you and discount on certain range given by you.</p> 
 <div class="btn_more"><input type="submit" value="Visit&raquo;" class="a_btn"/></div>
                                  </form>
                          <div class="cleaner"></div>
                </div>
               
               <div class="gallery_box">
               <form id="rb" name="rb" action="rabi.php" method="post">
                   <input type="hidden" name="reg" id="reg" value="<?php echo $rd;?>" />
                  <input type="hidden" name="nam" id="nam" value="<?php echo $rs['name'];?>"/>
                                <a href="../images/image_02.jpg" target="_parent"><img src="../images/image_02.jpg" height="100" width="200" /></a>
                                <h4>Rabi Crops</h4>
                                <p>View all the details of Rabi crops which are kept for sell.You can view the crop type, crop name, quantity of the crops, price opted by you and discount on certain range given by you..</p> 
      <div class="btn_more"><input type="submit" value="Visit&raquo;" class="a_btn"/></div>
                             </form>   <div class="cleaner"></div>                      
                            </div>
                            <div class="gallery_box">
                    <form id="rb" name="rb" action="kharif.php" method="post">
                   <input type="hidden" name="reg" id="reg" value="<?php echo $rd;?>" />
                  <input type="hidden" name="nam" id="nam" value="<?php echo $rs['name'];?>"/>
                                <a href="../images/image_02.jpg" target="_parent"><img src="../images/images_01.jpg" height="100" width="200" /></a>
                                <h4>Kharif Crops</h4>
                                <p> View all the details of Kharif crops which are kept for sell.You can view the crop type, crop name, quantity of the crops, price opted by you and discount on certain range given by you...</p> 
        <div class="btn_more"><input type="submit" value="Visit&raquo;" class="a_btn"/></div>
                              </form>  <div class="cleaner"></div>     
                            </div>
                            <div class="gallery_box">
               <form id="rb" name="rb" action="zaid.php" method="post">
                <input type="hidden" name="reg" id="reg" value="<?php echo $rd;?>" />
                <input type="hidden" name="nam" id="nam" value="<?php echo $rs['name'];?>"/>
                                <a href="../images/imagez.jpg" target="_parent"><img src="../images/imagez.jpg" height="100" width="200" /></a>
                                <h4>Zaid Crops</h4>
                                <p> View all the details of Zaid crops which are kept for sell.You can view the crop type, crop name, quantity of the crops, price opted by you and discount on certain range given by you...</p> 
    <div class="btn_more"><input type="submit" value="Visit&raquo;" class="a_btn"/></div>
                           </form>     <div class="cleaner"></div>             
                            </div>
                                    
                           
                        </div>
                
                    </div>
                
              <div class="panel" id="contactus">
                    <div class="div_pro">
                    <br />
                    <br />
                   	<center><font color="#900" size="+3" face="Comic Sans MS, cursive"> &nbsp;Your profile details: </font>
                         <br>
                        <hr width="596" color="#3399FF" size="2">
                    
           <?php                 
            $p_qry="select * from farmer_ac where aadhar_no='$a'";
			$p_smt=mysql_query($p_qry);
			$p_result=mysql_fetch_assoc($p_smt);
			
				?><br>
                
                <center>
				<table border="0" width="70%" class="tc">
             <tr>
                 <td class="t" rowspan="7">   
                     
                  <?php echo '<img height="280" width="180" src="../images//'.$p_result['photo'].'">';?>                  
              
               </td>
             </tr>
             <tr>
                 <td>   
                     Name:</td>
                 <td>
                  <?php echo $p_result['name'];?>
               </td>
             </tr>
             <tr>
            	<td>
                  Aadhar No:
               </td>
                 <td>
                 <?php echo $p_result['aadhar_no'];?>
               </td>
             </tr>
              <tr>
                 <td>   
                     phone number:</td>
                 <td>
                  <?php echo $p_result['ph_no'];?>
                </td>
             </tr>
             
              <tr>
                 <td>   
                     Block Name:</td>
                 <td>
                  <?php echo $p_result['block'];?>
                </td>
             </tr>
              <tr>
                 <td>   
                     Vill Name:</td>
                 <td>
                  <?php echo $p_result['vill'];?>
                </td>
             </tr>
             <tr>
                 <td>   
                     Date of Birth:</td>
                 <td>
                  <?php echo $p_result['dob'];?>
               </td>
             </tr>
          </table> </center>
                      
					</div>
                        
                        
              </div>
                    
         </div>
 </div>
            
            <!-- end of scroll -->
        
        </div> <!-- end of content -->
        </div> <!-- end of content_wrapper -->
        <div id="footer">
        	Copyright © 2019 <a href="#">e-Krishi </a> | Designed by <a href="#" target="_parent">Deepak kumar verma</a>
        </div>
    
    </div> <!-- end of slider -->

</body>
</html>

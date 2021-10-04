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
                    <li><a href="#gallery">confirmOrder<span class="ui_icon gallery"></span></a></li>
                    <li><a href="#contactus">Contact<span class="ui_icon contactus"></span></a></li>
                    
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
                             	<table border="0" height="233" width="400">
            	<tr>
                	<td colspan="2"><center>
                	  You can view all Crop Details :
                	</center></td>
                </tr>
                <tr>
                	<td>Crop Type</td>
                	<td align="center">
                    	<form>
							<select name="users" onChange="showUser(this.value)" class="inp">
								<option value="0">Select a Crop Type:</option>
								<option value="1">Rabi</option>
								<option value="2">Kharif</option>
								<option value="3">Zaid</option>
							</select>
						</form>
                    </td>
            	</tr>
                 <tr>
                 	<td>Crop Name</td>
                	<td align="center" id="txtHint">
                    	<select class="inp" id="opts">
                        	<option>&nbsp;</option>
                        	<option>&nbsp;</option>
                            <option>&nbsp;</option>
                        </select>
                    </td>
            	</tr>
            </table>
                    </div>	
	</div> <!-- end of home -->
                    
                    <div class="panel" id="aboutus">
                        <h1>Inbox</h1>
                        
                        <p><em>Check Mails tincidunt metus.</em></p>
                        
                        <form method="post" name="f_sale" id="f_sale" action=<?php echo $_SERVER["PHP_SELF"];?>>
         	<table height="60" width="70" class="fnt" bgcolor="#CC99FF">
            <tr bgcolor="#999999">
            	<th colspan="2"><center>
                CROP DEATAILS:</center>
                </th>
            </tr>
               
                <tr bgcolor="#CCCCCC">                                
                  <td>  <label for="crop">Select Crops types:</label></td>
                  <td>
                  <select id="crt" name="crt">
                    	<option>&nbsp;&nbsp;</option>
                    	<option value="rabi">Rabi</option>
                        <option value="kharif">Kharif</option>
                  </select>
                  </td>  
             </tr>
               
                 <tr bgcolor="#FFFFFF">
                 <td class="t">
                    <input style="font-weight: bold;" type="submit" class="submit_btn" name="submit" id="submit" value=" SUBMIT " /></td>
                    <td class="t">
                    <input style="font-weight: bold;" type="reset" class="submit_btn" name="reset" id="reset" value=" Reset " /></td>
                 </tr>
              </table>
              </form>
                       
                        <p>Vestibulum tempus porttitor ipsum, ut dictum metus molestie eu. Donec interdum, mi ut facilisis posuere, neque sapien lacinia urna, nec hendrerit dolor arcu sed justo. Aenean rhoncus porttitor dolor non posuere. Nulla eu mi id tellus vehicula pellentesque et vitae magna. </p>
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
                        <h1>Our Gallery</h1>
                        
                        <div id="gallery_container">
                            <div class="gallery_box">
                                <a href="http://www.templatemo.com/page/1" target="_parent"><img src="images/gallery/image_01.jpg" alt="1" /></a>
                                <h4>Project Title 1</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec ligula vitae ipsum blandit condimentum. Nam fringilla luctus mauris, non ornare turpis lobortin.</p> 
                                 <div class="btn_more"><a href="#">Visit <span>&raquo;</span></a></div>
                                <div class="cleaner"></div>
                            </div>
                            <div class="gallery_box">
                                <a href="http://www.templatemo.com/page/2" target="_parent"><img src="images/gallery/image_02.jpg" alt="2" /></a>
                                <h4>Project Title 2</h4>
                                <p>Donec ac eros ac nunc blandit hendrerit. Vestibulum tincidunt, odio at ultricies sollicitudin, ante felis luctus justo, non venenatis quam mauris non tortor.</p> 
                                 <div class="btn_more"><a href="#">Visit <span>&raquo;</span></a></div>
                                <div class="cleaner"></div>                      
                            </div>
                            <div class="gallery_box">
                                <a href="http://www.templatemo.com/page/3" target="_parent"><img src="images/gallery/image_03.jpg" alt="3" /></a>
                                <h4>Project Title 3</h4>
                                <p> Mauris ligula tortor, congue laoreet rutrum eget, suscipit nec augue. In congue consectetur est, sit amet hendrerit velit adipiscing eget.</p> 
                                 <div class="btn_more"><a href="#">Visit <span>&raquo;</span></a></div>
                                <div class="cleaner"></div>     
                            </div>
                            <div class="gallery_box">
                                <img src="images/gallery/image_04.jpg" alt="4" />
                                <h4>Project Title 4</h4>
                                <p> Curabitur iaculis, erat pharetra porttitor sollicitudin, turpis lectus placerat arcu, ac mattis eros sem ut metus. Nunc congue iaculis lectus in interdum.</p> 
                                 <div class="btn_more"><a href="#">Visit <span>&raquo;</span></a></div>
                                <div class="cleaner"></div>             
                            </div>
                            <div class="gallery_box">
                                <img src="images/gallery/image_05.jpg" alt="5" />
                                <h4>Project Title 5</h4>
                                <p> Curabitur iaculis enim dolor. Sed quis augue ligula. Quisque aliquet egestas felis, in egestas turpis sodales et. In ac diam ut orci viverra bibendum. </p> 
                                 <div class="btn_more"><a href="#">Visit <span>&raquo;</span></a></div>
                                <div class="cleaner"></div>          
                            </div>
                            <div class="gallery_box">
                                <img src="images/gallery/image_06.jpg" alt="6" />
                                <h4>Project Title 6</h4>
                                <p>Sed in viverra nulla. Duis rutrum vehicula ligula, non tempor nunc congue et. Nunc sit amet tortor nulla, ut eleifend enim sed condimentum tellus vestibulum in.</p> 
                                 <div class="btn_more"><a href="#">Visit <span>&raquo;</span></a></div>
                                <div class="cleaner"></div>          
                            </div>
                            <div class="cleaner"></div>
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
				<table border="0" width="60%" class="tc">
             <tr>
                 <td class="t">   
                     Image:</td>
                 <td>
                  <?php echo '<img height="100" width="150" src="../images//'.$p_result['photo'].'">';?>                  
              
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
                  Aadhar No
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

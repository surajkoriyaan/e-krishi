<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>buyers_home</title>
<meta name="keywords" content="wall shelf, free css templates, one page, full site, CSS, HTML" />
<meta name="description" content="Wall Shelf is a free CSS template provided by templatemo.com" />
<link href="../css/bg_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../css/coda-slider.css" type="text/css" media="screen" title="no title" charset="utf-8" />

<script src="../js/jquery-1.2.6.js" type="text/javascript"></script>
<script src="../js/jquery.scrollTo-1.3.3.js" type="text/javascript"></script>
<script src="../js/jquery.localscroll-1.2.5.js" type="text/javascript" charset="utf-8"></script>
<script src="../js/jquery.serialScroll-1.2.1.js" type="text/javascript" charset="utf-8"></script>
<script src="../js/coda-slider.js" type="text/javascript" charset="utf-8"></script>
<script src="../js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>
<!--Crop List using js-->
<script src="../js/crop_qy.js" type="text/javascript"></script>
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
  		xmlhttp.open("GET","crop_action.php?q="+str,true);
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
			
			$bqry="select * from wholesaler_ac where aadhar_no=$a";  
			$bsmt=mysql_query($bqry);
			$rs=mysql_fetch_assoc($bsmt);
			$kqry="select * from log_in_verify where reg_id=$rd";  
			$ksmt=mysql_query($kqry);
			$ks=mysql_fetch_assoc($ksmt);
			$k=$ks['ac_id'];
			$fqry="select * from wholesaler_ac where reg_id=$k";  
			$fsmt=mysql_query($fqry);
			$fs=mysql_fetch_assoc($fsmt);
						

	?>
    <div id="slider">
    	
        <div id="header_wrapper">
            <div id="header">
            	<a href="../index.php">
                <div id="div_lo">Log Out</div></a>
                <a href="../index.php"><img src="../images/login_user1.png" alt="Wall Shelf" height="100" width="150" /></a>
                <br /><h4 class="txt_fn">
                <?php echo "Welcome &nbsp;&nbsp;". $fs['name']; 	
					echo "</h4>";
					echo"<span class=clr>Reg Id &nbsp;: &nbsp;".$rd;
					echo "</span><h4 class=clr>Login Date:";	
					echo"&nbsp;".$dt;
					echo"&nbsp;&nbsp;".$tm."</h4>";
					$n=$fs['name'];
				?>
             
            </div>
		</div>
        
        <div id="menu_wrapper">
            <div id="menu">
                <ul class="navigation">
                    <li><a href="#home" class="selected">Search Crop <span class="ui_icon home"></span></a></li>
                    <li><a href="#aboutus">Profile<span class="ui_icon aboutus"></span></a></li>
                    <li><a href="#services">Auction List<span class="ui_icon services"></span></a></li>
                    <li><a href="#gallery">Mail Inbox<span class="ui_icon gallery"></span></a></li>
                    
                    
                </ul>
            </div>
		</div>
                        
		<div id="content_wrapper">
        <div id="content">
        
            <div class="scroll">
                <div class="scrollContainer">
                
                    <div class="panel" id="home">
                    <div class="div_cnt">
                    <br />
                   Crop List   
                   <hr size="4" color="#CC3399" /> <br />
                   <form id="frm_srch_crp" name="frm_srch_crp" action="frm_list.php" method="post">
                             	<table border="0" height="234" width="582" align="center">
            	<tr>
                	<td colspan="2" bgcolor="#FFCC99" valign="middle" align="center">
                	  You can view all Crop Details :
                  <input type="text" value="<?php echo "$n"; ?>" name="wnm" id="wnm" hidden />
                    <input type="text" value="<?php echo $rd ?>" name="wid" id="wid" hidden/>
                	</td>
                </tr>
                <tr>
                <td colspan="2">
                </td>
                </tr>
                <tr>
                <td width="251" bgcolor="#FFFFCC">
                Crop Type:
                </td>
                	<td width="261" align="center" bgcolor="#CCFFCC">
                    	<form>
						<select name="users" id="users" onChange="showUser(this.value)" class="opt">
								<option value="0">Select a Crop Type:</option>
								<option value="1">Rabi</option>
								<option value="2">Kharif</option>
								<option value="3">Zaid</option>
							</select>
						</form>
                    </td>
            	</tr>
                <tr>
                <td colspan="2">
                </td>
                </tr>
                 <tr>
                 <td bgcolor="#CCFFCC">
                Crop Name:
                </td>
                	<td colspan="2" align="center" id="txtHint" bgcolor="#FFFFCC">
                    	<select class="opt" id="opts" name="opts">
                        	<option>&nbsp;</option>
                        	<option>&nbsp;</option>
                            <option>&nbsp;</option>
                        </select>
                    </td>
            	</tr>
                <tr>
                <td colspan="2">
                </td>
                </tr>
                <tr>
                	<td align="center" bgcolor="#FFCC99">
                    	<input type="submit" value="Search" class="sub_bt" />
                    </td>
                    <td align="center" bgcolor="#FFCC99">
                    	<input type="reset" value="Reset" class="sub_bt" />
                    </td>
                </tr>
            </table></form>
            <br />
                    <hr size="4" color="#CC3399" />                
                          
                        
                      </div>  
                        
                    </div> <!-- end of Crop List Search -->
                    
        <div class="panel" id="aboutus">
            <div class="div_crp">
         <br>               
                <center>
				<table border="0" width="95%" cellspacing="8" cellpadding="8" bgcolor="#999966">
            <tr>
            	<th colspan="4" bgcolor="#EAFEE7">
                <center>
                  Your profile details:
                </center></th>
            </tr>
            <tr bgcolor="#FFFFCC">                 
                 <td rowspan="7" colspan="2">
                  <?php echo '<img height="280" width="373" src="../images//'.$fs['photo'].'">';?>                  
              
               </td>
             </tr>
             <tr bgcolor="#FFFFCC">
                 <td class="t" width="190">   
                     Name:</td>
                 <td width="190">
                  <?php echo $fs['name'];?>
               </td>
             </tr>
             <tr bgcolor="#EAFEE7">
            	<td class="t">
                  <span class="txt_color">Aadhar No</span>
               </td>
                 <td><span class="txt_color">
                 <?php echo $fs['aadhar_no'];?></span>
               </td>
             </tr>
            
              <tr bgcolor="#EAFEE7">
                 <td class="t">   
                     phone number:</td>
                 <td>
                  <?php echo $fs['ph_no'];?>
                </td>
             </tr>
             
              <tr bgcolor="#FFFFCC">
                 <td class="t">   
                     Block Name:</td>
                 <td>
                  <?php echo $fs['block'];?>
                </td>
             </tr>
              <tr bgcolor="#EAFEE7">
                 <td class="t">   
                     Vill Name:</td>
                 <td>
                  <?php echo $fs['vill'];?>
                </td>
             </tr>
             <tr  bgcolor="#FFFFCC">
                 <td class="t">   
                     Date of Birth:</td>
                 <td>
                  <?php echo $fs['dob'];?>
               </td>
             </tr>
          </table> </center>	
                        
                    </div>
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
                    	<div class="div_pro"> <br> <br />
                        <center><font color="#FFAA55" size="+3" face="Comic Sans MS, cursive"> &nbsp;These Crops are Placed For Auction </font>
                         <br>
                        <hr width="596" color="#FFFF00" size="2">                  
        <table border="4" bgcolor="#FFFF71" bordercolor="#000000" cellpadding="2" cellspacing="3">
          
         <tr align="center">
                <td>
                	Crop type:
                </td>
                  <td>
                	Crop Name:
                </td>
                	
                  <td>
                	Saling Price:
                </td> 
                <td>
                   Date of	Auction:
                </td>               	
          </tr>
            <?php                 
            $a_qry="select * from farmer_auction";
			$a_smt=mysql_query($a_qry);
			while($a_result=mysql_fetch_assoc($a_smt))
			{
				echo "<tr>";
				echo "<td>".$a_result['c_type']."</td>";
				echo "<td>";
				if($a_result['c_type']==1)
				{
					echo "Kharif";
				}
				else
				if($a_result['c_type']==2)
				{
					echo "Rabi";
				}
				else
				if($a_result['c_type']==3)
				{
					echo "Zaid";
				}
				echo "</td><td>".$a_result['sale_price']."</td>";
				echo "<td>".$a_result['date']."</td>";
				echo "</tr>";
					
			}
				?>				   
            </table></center> 
                        </div>
                    </div>
                
                    <div class="panel" id="gallery">
                    	<div class="div_place">
                        <h1>Place order for crops aproved by farmers:</h1>
          <p><em>Check Mails : &nbsp;&nbsp; <?php echo date('d/m/y'); ?> .</em></p>
      <br> <center>
       <table cellpadding="3" cellspacing="2" bordercolor="#CCCCCC" border="2" class="f1" width="95%">		
            <tr>
                <th>Farmer Id</th>
                <th>Delivery within</th>               
                <th>Crop Type</th>
                <th>Crop Name</th>
                <th>Quantity</th>              
                <th>Total Price</th>
                <th>Date</th>
                <th>Approval Status</th>
            </tr>
             <?php $v="select *from booking where w_id=$rd";
				$smt=mysql_query("$v");
				while($rs=mysql_fetch_assoc($smt))
				{?>
                   <tr>      		
                   <td><?php echo $rs['w_id']; ?></td>
                   <td><?php echo $rs['del_day']; ?></td>
                   <td><?php echo $rs['crop_t']; ?></td>        
                   <td><?php echo $rs['crop_nm']; ?></td>                   
                   <td><?php echo $rs['quantity']."&nbsp;&nbsp;kg"; ?></td>
                   <td><?php echo $rs['total_price']."&nbsp;&nbsp;Rs."; ?></td>
                   <td><?php echo $rs['book_date']; ?></td>
                   <td><?php echo $rs['apr_by_frmr']; ?></td>          
          		  </tr></form>
                    <?php } ?>
           </table>        
        </center>
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

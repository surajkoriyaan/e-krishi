<html>
<head>
<title>All Farmer List</title>
<meta name="keywords" content="wall shelf, free css templates, one page, full site, CSS, HTML" />
<meta name="description" content="Wall Shelf is a free CSS template provided by templatemo.com" />
<link href="../css/bg_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../css/coda-slider.css" type="text/css" media="screen" title="no title" charset="utf-8" />
</head>
<body bgcolor="#0033CC">	
    <div id="slider">    	
        <div id="header_wrapper">
            <div id="header">
            <a href="../index.php">
                <div id="div_lo">Log Out</div></a>
            <br>
               <span class="fnt_sty">&nbsp;&nbsp; Farmer List</span>
	<a href="../index.php">
        <img src="../images/home-button-icon15.gif" height="70" width="80"></a>
        <br><br>
        <?php
			$ac_nm=$_REQUEST['wnm'];
			$wi=$_REQUEST['wid'];
			echo "<h4 class=txt_c>login as&nbsp;:&nbsp;$ac_nm</h4>"; 
			echo "<h4 class=txt_c> Reg ID&nbsp;:&nbsp;$wi</h4>";
		?>
            </div>
		</div>        
        <div id="menu_wrapper">
            <div id="menu">
                <ul class="navigation">
                    <li><a href="buyer_home.php">Back<span class="ui_icon contactus">
                    </span></a></li>
                    <li>           
                </ul>               
            </div>
		</div>                        
		<div id="content_wrapper"> 
        	<div id="content">
           		<div class="detl">
               
                	<?php
						$con=@mysql_connect("localhost","root","");
						if(!$con)
						{
							echo "Connection failed..";	
						}
						mysql_select_db("ekrishi");
						$ct=$_REQUEST['users'];
						$cn=$_REQUEST['cn'];
?>
<br> <br>		
			<center>
				<span class="font_d">View details of crop <?php echo $cn; ?> </span>
			</center>
		<hr size="5" color="#009966">
       		 <br>
					 <center>
                		<table class="clr" cellpadding="8" cellspacing="10" bordercolor="#FFF" border="2">
			
                    		<tr>
                    			<td>Farmer Id</td>
                           		<td>Available Quantity</td>
                           		<td>Sale Price</td>
                          		<td>Discount</td>
                                <td>View Detail</td>
                       		</tr>
<?php						
						if($ct==1)
						{	
							$sl="select * from rabi where crop_nm='$cn'";
							$smt=mysql_query($sl);
							
							while($rst=mysql_fetch_assoc($smt))
							{
								echo "<form id=f_view method=post name=f_name action=view_detail_rabi.php>";
								echo "<input type=text name=reg id=reg value= $rst[reg_id] hidden>";
								echo "<input type=text name=crpn id=crpn value=$rst[crop_nm] hidden>";
								echo "<input type=text value=$rst[aadhar_no] name=an id=an hidden/>";
							?>
                 <input type="text" value="<?php echo "$ac_nm"; ?>" name="fnm" id="fnm" hidden/>
                 <input type="text" value="<?php echo "$wi"; ?>" name="wid" id="wid" hidden/>
						<?php	echo "<tr>";
								echo "<td>".$rst['reg_id']."</td>";											                  				echo "<td>".$rst['quantity']."</td>";
								echo "<td>".$rst['sale_price']."</td>";	
								echo "<td>".$rst['discount']."</td>";
								echo "<td>";
								echo "<input type=submit value=View class=btn> </td>";
								echo "</tr></form>";								
							}					
						}
						else if($ct==2)
						{
							$sl="select * from kharif where crop_nm='$cn'";
							$smt=mysql_query($sl);
							while($rst=mysql_fetch_assoc($smt))
							{
								echo "<form id=f_view method=post name=f_name action=view_detail_kharif.php>";
								echo "<input type=text name=reg id=reg value= $rst[reg_id] hidden>";
								echo "<input type=text name=crpn id=crpn value=$rst[crop_nm] hidden>";
								echo "<input type=text value=$rst[aadhar_no] name=an id=an hidden/>";
							?>
                 <input type="text" value="<?php echo "$ac_nm"; ?>" name="fnm" id="fnm" hidden/>
                 <input type="text" value="<?php echo "$wi"; ?>" name="wid" id="wid" hidden/>
						<?php	echo "<tr>";
								echo "<td>".$rst['reg_id']."</td>";											                  				echo "<td>".$rst['quantity']."</td>";
								echo "<td>".$rst['sale_price']."</td>";	
								echo "<td>".$rst['discount']."</td>";
								echo "<td>";
								echo "<input type=submit value=View class=btn> </td>";
								echo "</tr></form>";
							}	
						}
						else if($ct==3)
						{
							$sl="select * from zaid where crop_nm='$cn'";
							$smt=mysql_query($sl);
							while($rst=mysql_fetch_assoc($smt))
							{
								echo "<form id=f_view method=post name=f_name action=view_detail_zaid.php>";
								echo "<input type=text name=reg id=reg value= $rst[reg_id] hidden>";
								echo "<input type=text name=crpn id=crpn value=$rst[crop_nm] hidden>";
								echo "<input type=text value=$rst[aadhar_no] name=an id=an hidden/>";
							?>
                 <input type="text" value="<?php echo "$ac_nm"; ?>" name="fnm" id="fnm" hidden/>
                 <input type="text" value="<?php echo "$wi"; ?>" name="wid" id="wid" hidden/>
						<?php	echo "<tr>";
								echo "<td>".$rst['reg_id']."</td>";											                  				echo "<td>".$rst['quantity']."</td>";
								echo "<td>".$rst['sale_price']."</td>";	
								echo "<td>".$rst['discount']."</td>";
								echo "<td>";
								echo "<input type=submit value=View class=btn> </td>";
								echo "</tr></form>";
							}		
						}
					?>
		</table>
        </center> 
        <br>
        <hr size="5" color="#009966">
        <br><br>
                </div>
        	</div> <br><!-- end of content -->
        </div>
        <br> <!-- end of content_wrapper -->
        <div id="footer">
        	Copyright &copy; 2019 <a href="#">e-Krishi </a> | Designed by <a href="#" target="_parent">Deepak kumar verma</a>
        </div>    
    </div> <!-- end of slider -->

</body>
</html>

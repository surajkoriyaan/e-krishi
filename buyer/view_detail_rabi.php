<html>
<head>
<title>Farmers details</title>
<meta name="keywords" content="wall shelf, free css templates,one page, full site,CSS,HTML" />
<meta name="description" content="Wall Shelf is a free CSS template provided by templatemo.com" />
<link href="../css/bg_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../css/coda-slider.css" type="text/css" media="screen" title="no title" charset="utf-8" />
<script src="../js/jq.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function() 
	{
    	$("#yes").click(function() 
		{
        	$(".dv1").slideToggle();      
        });
		
		$(".dv_clos").click(function()
		{
        	$(".dv1").hide();    
        });    
    });
</script>
<script type="text/javascript">
	function valid()
	{
		var a=document.forms.form_ordr.c_qty.value;
		if(a=="")
		{
			alert("Please enter the quantity");	
			document.forms.form_ordr.c_qty.focus();
			return false;
		}
	}
</script>
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
				$f_nm=$_REQUEST['fnm'];
        		$wi=$_REQUEST['wid'];
			echo "<h4 class=txt_c>login as&nbsp;:&nbsp;$f_nm</h4>"; 
			echo "<h4 class=txt_c> Reg ID&nbsp;:&nbsp;$wi</h4>";
		?>
            </div>
		</div>
        
        <div id="menu_wrapper">
            <div id="menu">
                <ul class="navigation">
                    <li><a href="buyer_home.php">View Other<span class="ui_icon contactus">
                    </span></a></li>
                </ul>
            </div>
		</div>                        
		<div id="content_wrapper">
        	<div id="content">
           		<div class="mid">
               		<div class="top1">	
                	<?php
						$con=@mysql_connect("localhost","root","");
						if(!$con)
						{
							echo "Connection failed..";	
						}
						mysql_select_db("ekrishi");
						$f_id=$_REQUEST['reg'];
						$fan=$_REQUEST['an'];
						$crp=$_REQUEST['crpn'];						
?>	
			<center>
				View details of farmer Id :<?php echo $f_id;  ?> 				
			</center>          
            </div>		
       		 <br>
             <?php			 	
				$fq="select *from farmer_ac where aadhar_no='$fan'";
				$fq_exct=mysql_query($fq);
				$f_rs=mysql_fetch_assoc($fq_exct);			 
			 ?>
					 <center>
     <form name="form_ordr" id="form_ordr" method="post" action="order.php" onSubmit="return valid();">
     <table width="750" height="167" border="1" cellpadding="2" cellspacing="3" bordercolor="#C63">
							<tr>
                                <td rowspan="5"> <?php echo '<img height="280" width="380" src="../images//'.$f_rs['photo'].'">';?> </td>
                            </tr>                    		
                            <tr>
                                <td width="200">Farmer Name</td>
                                <td width="200"> <?php echo $f_rs['name']; ?> </td>
                             </tr>
                             <tr>
                           		<td>Contact Number</td>
                                <td> <?php echo $f_rs['ph_no']; ?> </td>
                             </tr>
                             <tr>
                           		<td>District</td>
                                <td> <?php echo $f_rs['district']; ?> </td>
                             </tr>                         		
		</table>
        <br>               
        --------------------------
        <br>
        <?php
			$crop_q="select *from rabi where reg_id=$f_id and crop_nm='$crp'";
			$crop_ex=mysql_query($crop_q);
			$crop_rs=mysql_fetch_assoc($crop_ex);
		?>        
        <table border="2" bordercolor="#339900">
        	<tr>
            	<td>Crop Name </td>
				<td> <?php  echo $crop_rs['crop_nm'];  ?> </td>
            </tr>
            <tr>
            	<td> Quantity </td>
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
						}				
					?>
                </td>
            </tr>
            <tr>
            	<td>Price (per unit kg)</td>
                <td> <?php echo $crop_rs['sale_price'] ?> </td>
            </tr>
            <tr>
            	<td> Discount</td>            
            	<td> <?php echo $crop_rs['discount']; ?>%</td>
            </tr>
      </table>  
      <?php
      		echo "<input type=text value=$f_nm name=anm id=anm hidden/>";	
			echo "<input type=text value=$crop_rs[crop_nm] name=cnm id=cnm hidden/>";
			echo "<input type=text value=rabi name=ct id=ct hidden/>";
			echo "<input type=text value=$f_rs[reg_id] name=rid id=rid hidden/>";
			echo "<input type=text value=$crop_rs[sale_price] name=sp id=sp hidden/>";
			echo "<input type=text value=$crop_rs[discount] name=dis id=dis hidden/>";
         	echo "<input type=text value=$wi name=wid id=wid hidden/>";
	  ?> 
        <br>Do you want to Place Order
        <input type="button" value="Yes" class="btn" id="yes" name="yes">
        <a href="buyer_home.php">
        	<input type="button" value="No" class="btn">
         </a>
        <br><br>
        <div class="dv1">
        	<div class="dv_clos"><span class="txt_c">X</span></div>
        	<br>
        <span class="txt_d">
        when will you want the delivery of agriculture product?</span>
        <br><br>
     <table border="2" bordercolor="#0066FF" cellpadding="8" cellspacing="10" class="font_d">   
            <tr>
            	<td>Select delivery day(within) :</td>
            	<td>
                	
                    <select class="opt" name="opt">
                    	<option> 1-2 day </option>
                        <option> 3-4 day </option>
                        <option> 5-6 day </option>
                        <option> 6-7 day </option>
                    </select>
                </td>
            </tr>
            <tr>
            	<td>Enter Quantity</td>
            	<td>
                	<input type="text" id="c_qty" name="c_qty" class="opt">
                </td>
            </tr>
      
            <tr align="center">
            	<td> 
                <input type="submit" id="ordr" name="ordr" value="Order Now" class="btn"> 	
                </td>
                <td>
                	<input type="button" id="not" name="not" value="Not Now" class="btn">
                </td>
            </tr>
       </table>
       
       <br><br>
       </div></form>
        </center>        
        <br><br>
                </div>
        	</div> <!-- end of content -->
        </div> <!-- end of content_wrapper -->
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="tmo_list">
       		<span class="fnt_sty">Deepak kumar verma</span>
        </div>
        <div id="footer">
        	Copyright &copy; 2019 <a href="#">e-Krishi</a> | Designed by <a href="#" target="_parent">Deepak kumar verma</a>
        </div>    
    </div> <!-- end of slider -->
</body>
</html>

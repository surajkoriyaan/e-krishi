<html>
<head>
<title>ORDER</title>
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
        <br><br><br>
        <?php
			$ac_nm=$_REQUEST['anm'];
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
           		<div class="ord">
                <div class="top">
               Your order has been sent to the farmers mail</div>
               <br><br>		
			<center>
				<br> Please check your mail to accept the order after approve by farmer
			</center>
		<?php
			$con=@mysql_connect("localhost","root","");
			if(!$con)
			{
				echo "Connection failed..";	
			}
			mysql_select_db("ekrishi");
			$f_id=$_REQUEST['rid'];
			$c_nm=$_REQUEST['cnm'];
			$ct=$_REQUEST['ct'];
			$dy=$_REQUEST['opt'];
			$r_qty=$_REQUEST['c_qty'];
			$sp=$_REQUEST['sp'];
			$dis=$_REQUEST['dis'];
			
			$cp=$sp*$r_qty;			
			$dp=($cp*$dis)/100;			
			$tp=$cp-$dp;			
			$d=date('d/m/y');
			$sts="No";
			echo "<br>";
			$q="insert into booking(f_id,crop_t,crop_nm,sale_price,discount,w_id,w_nm,del_day,quantity,cprice,dis_price,total_price,book_date,apr_by_frmr)values($f_id,'$ct','$c_nm',$sp,$dis,$wi,'$ac_nm','$dy',$r_qty,$cp,$dp,$tp,'$d','$sts')";		
			mysql_query("$q");
			if(mysql_affected_rows()>0)
			{
				$v="select *from booking order by sl_no desc limit 1";
				$smt=mysql_query("$v");
				$rs=mysql_fetch_assoc($smt);			
		?>
       		 <br> <center>
                		<table class="inpt_t" cellpadding="8" cellspacing="10" bordercolor="#CFF" border="2">		
                    		<tr>
                    			<td>Farmer Id</td>
                                <td><?php echo $rs['f_id']; ?></td>
                            </tr>
                            <tr>
                    			<td>Crop Type</td>
                                <td><?php echo $rs['crop_t']; ?></td>
                            </tr>
                           		<td>Crop Name</td>
                                <td><?php echo $rs['crop_nm']; ?></td>
                            </tr>
                           	<tr>
                            	<td>Sale Price</td>
                                <td><?php echo $rs['sale_price']; ?></td>
                            </tr>
                           	<tr>
                          		<td>Discount</td>
                                <td><?php echo $rs['discount']."%"; ?></td>
                            </tr>
                           	<tr>
                                <td>Quantity</td>
                                <td><?php echo $rs['quantity']; ?></td>
                       		</tr>
                            <tr>
                                <td>Price</td>
                                <td><?php echo $rs['cprice']."Rs."; ?></td>
                       		</tr>
                            <tr>
                                <td>Discount Price</td>
                                <td><?php echo $rs['dis_price']; ?></td>
                       		</tr>
                            <tr>
                                <td>Total Price</td>
                                <td><?php echo $rs['total_price']; ?></td>
                       		</tr>
                		</table>        
        </center> 
        <?php
			}
			else
			{
				echo "ERROR:Could not sent mail";	
			}
			?>
            <br>    </div>
         <br><br> <br>
        	</div><br>
          <br> <!-- end of content -->
        </div><br><br><br>
         <br><br> <br><br><br> <br>  <!-- end of content_wrapper -->
        <div id="footer">
        	Copyright &copy; 2019 <a href="#">e-Krishi </a> | Designed by <a href="#" target="_parent">Deepak kumar verma</a>
        </div>    
    </div> <!-- end of slider -->
</body>
</html>

<html>
	<head>
    	<title>Auction Crops</title>
    	<style>
#dv_ac
{
	position:absolute;
	top:100px;
	height:400px;
	bottom:199px;
	left:200px;
	width:880px;;
	right:200px;;
	font-size:20px;
	font-family:Arial, Helvetica, sans-serif;
	color:#600;
	text-align:center;
	border-width:8px;
	border-color:#FFF;
	border-style:solid;
	background:#CC99CC;
	border-radius:3px;
}
.dv
{
	background:#FFF;
}

.btns
{
	background:#006;
	color:#FFF;
	font-size:18px;
	font-family:"Comic Sans MS", cursive;
	width:300px;
	height:60px;
	border:none;
}
.btns:hover
{
	background:#900;
	color:#FF0;
}
a
{
	text-decoration:none;
}

		</style>
    </head>
<body bgcolor="#CC99FF">	
	<div id="dv_ac">
         <?php 			
			$con=@mysql_connect("localhost","root","");
				if(!$con)
				{
					echo "Connection failed..";	
				}
				mysql_select_db("ekrishi");
				$reg=$_REQUEST['reg'];
				$fnm=$_REQUEST['nam'];
				$ct=$_REQUEST['ct'];
				$cn=$_REQUEST['cn'];
				$sale=$_REQUEST['sp'];
				$qty=$_REQUEST['qunt'];
				$dis=$_REQUEST['dis'];
				$dt=date('d/m/y');
			
			$q="select * from farmer_auction where farmer_id=$reg and c_name='$cn'";
			$smt=mysql_query($q);
			$result=mysql_fetch_assoc($smt);
			$cnm=$result['c_name'];
			
			if(!$result['farmer_id'])
			{	
				$sqry="insert into  farmer_auction(farmer_id,farmer_name,c_type,c_name,sale_price,quantity,discount,date)values($reg,'$fnm','$ct','$cn',$sale,$qty,$dis,'$dt')";
				mysql_query($sqry);	
				if(mysql_affected_rows()>0)
				{
					header("location:auction_confirm_page.php");
				}
				
			}
			else 
			{
				echo "<div class=dv>Your crop Auction is allready exists</div>";
				echo "<h4>--------------------------Auction Details:-----------------------------</h4>";?>
                <center><table width="434" height="180" border="0">
                <tr>
                <td width="290">&nbsp;: &nbsp;Farmer Id &nbsp;: &nbsp;</td>
                <td width="134">
           			 <?php echo $result['farmer_id'];?>
                </td>
                </tr>
                <tr>
                <td>&nbsp;: &nbsp;Crop Name &nbsp;: &nbsp;</td>
                <td>
           			 <?php echo $result['c_name'];?>
                </td>
                </tr>
                <tr>
                <td>&nbsp;: &nbsp;Crop Type &nbsp;: &nbsp;</td>
                <td>
           			 <?php  
					 	if($result['c_type']==1)
					 	{
					 		echo "Rabi";
						}
						else if($result['c_type']==2)
					 	{
					 		echo "Kharif";
						}
						else if($result['c_type']==3)
					 	{
					 		echo "Zaid";
						}
					 ?>
                </td>
                </tr>
                <tr>
                <td>&nbsp;: &nbsp;Post Date &nbsp;: &nbsp;</td>
                <td>
           			 <?php echo $result['date'];?>
                </td>
                </tr>
                
               
           
  </table></center>	
			<?php }
			  ?>
             <br>
             <br>
             <a href="auction.php"><span class="btns">&nbsp;&nbsp; Back To My Account Page &nbsp;&nbsp; </span></a>
                
         </div>
</body>
</html>
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
		 echo "<div class=dv>Approval Status</div>"; 
		 echo "<br><br><br>";				
			$con=mysql_connect("localhost","root","");
				if(!$con)
				{
					echo "Connection failed..";	
				}
				mysql_select_db("ekrishi");
				$rg=$_REQUEST['id'];
				$fd=$_REQUEST['fid'];
				$cn=$_REQUEST['cn'];
				$y=$_REQUEST['y'];
				
	if($y=='Yes')
	{
	   $q="update booking set apr_by_frmr='$y' where crop_nm='$cn' and f_id=$fd";
	   mysql_query($q);
	   if(mysql_affected_rows()>0)			
	   {		
		  echo "<h2> The request order is approved by you</h2>";
	   }
	   else
	   {
		  echo "<h2>ERROR:not succeed<br><br></h2>";
		  echo "<h4>Check the details again, it may be possible that you had allready approve that order</h4>";
	   }	
	}
	else
	{
	   $q="update booking set apr_by_frmr='No' where crop_nm='$cn' and f_id=$fd";
	   mysql_query($q);
	   if(mysql_affected_rows()>0)			
	   {		
		  echo "<h2> The request order is approved by you</h2>";
	   }
	   else
	   {
		  echo "<h2>ERROR:not succeed<br><br></h2>";
		  echo "<h4>Check the details again, it may be possible that you had allready approve that order</h4>";
	   }		
	}
    ?>         
    <br><br>
             <a href="auction.php"><span class="btns">&nbsp;&nbsp; Back To My Account Page &nbsp;&nbsp; </span></a>                
         </div>
</body>
</html>
<html>
	<head>
    <script type="text/javascript">
		
	</script>
    <style type="text/css">
		body
		{
			background:url(../images/image_03.jpg);
			background-size:cover;
		}
		.dv
		{
			background:#FFF;
			color:#006;
			text-align:center;
		}
		.crop1
		{
			position:absolute;
			top:30px;
			height:470px;
			bottom:259px;
			left:0px;
			width:949px;
			right:0px;
			background:none;
			overflow:scroll;
			
			/*display:none;*/
		}
		.mid
		{
			position:absolute;
			top:120px;
			height:500px;
			bottom:259px;
			left:159px;
			width:948px;
			right:0px;
			color:#000;
			font-size:24px;
			background:#AFD8A9;
			border-width:10px;
			border-color:#FFF;
			border-style:solid;
		}
		.crop3
		{
			position:absolute;
			top:0px;
			height:400px;
			left:0px;
			width:378px;
			right:0px;
			background:#C66;
			border-width:5px;
			border-color:#FFF;
			border-style:solid;
			display:none;
		}
		.t1
		{
			color:#000
			font-size:18px;
			font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
			
		}
		.btn
		{
			background:#330;
			text-decoration:none;
			color:#FFF;
			font-size:16px;
			font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
		}
		.btn:hover
		{
			background:#006;
		}
	</style>
    </head>
    <body>
    	<div class="mid">
		<?php 			
			$con=@mysql_connect("localhost","root","");
				if(!$con)
				{
					echo "Connection failed..";	
				}
				mysql_select_db("ekrishi");
				$reg=$_REQUEST['reg'];
				$fnm=$_REQUEST['nam'];

			echo "<div class=dv>-----Hello &nbsp;&nbsp;".$fnm."&nbsp;&nbsp;||&nbsp;&nbsp;Reg Id &nbsp;&nbsp;".$reg. "&nbsp;&nbsp;||-----</div><br>";
				echo "These Crops are placed for the Auction and the details are:";
				?>
        <div class="crop1"><br> 
        <br><br> 
        <center>
        <table width="920" border="2" class="t1" cellpadding="6" cellspacing="4">
        	<tr> 
        		<th>&nbsp;: &nbsp;Crop Type &nbsp;: &nbsp;</th> 
                <th>&nbsp;: &nbsp;Crop Name &nbsp;: &nbsp;</th> 
                <th>&nbsp;: &nbsp;Sale Price &nbsp;: &nbsp;</th>
                <th>&nbsp;: &nbsp;Quantity &nbsp;: &nbsp;</th>
                <th>&nbsp;: &nbsp;Discount &nbsp;: &nbsp;</th>
                <th>&nbsp;: &nbsp;Post Date &nbsp;: &nbsp;</th> 
                <th>&nbsp;: &nbsp;Status  &nbsp;: &nbsp;</th> 
                
            </tr>   
		<?php		
			$q="select * from farmer_auction where farmer_id=$reg";
			$smt=mysql_query($q);
			while($result=mysql_fetch_assoc($smt))
			{		
				  
				if($result['farmer_id'])
				{
				?>
                
                <tr align="center">                               
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
               	<td>
           			 <?php echo $result['c_name'];?>
                </td>
                
                <td>
           			 <?php echo $result['sale_price'];?>
                </td>
                <td>
           			 <?php echo $result['quantity'];?>
                </td>
                <td>
           			 <?php echo $result['discount'];?>
                </td>
                <td>
           			 <?php echo $result['date'];?>
                </td>
                <td>
                	<?php echo "Opted" ?>
                </td>
        <?php 
				}
				
				else
				{
					echo "<td>Not found";	
				}
			}		
			
			?></td></tr>
            </table><br>
           </center>	
			
           
             <br>
             <br>
             <center>
             <a href="auction.php"><span class="btn">&nbsp;&nbsp; Back To My Account Page &nbsp;&nbsp; </span></a>
              </center>  
         </div>
        </div>
    </body>
</html>
<html>
	<head>
    <script type="text/javascript">
		
	</script>
    <style type="text/css">
		body
		{
			background:url(../images/masala1.jpg);
			background-size:cover;
		}
		.dv
		{
			background:#F66;
			color:#FFF;
			text-align:center;
		}
		.crop1
		{
	position: absolute;
	top: 32px;
	height: 470px;
	bottom: 259px;
	left: -1px;
	width: 949px;
	right: 0px;
	background: none;
	overflow: scroll;			
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
			color:#303;
			font-size:24px;
			background:#F7A495;
			border-width:10px;
			border-color:#F66;
			border-style:solid;
		}
		
		.t1
		{
			color:#000
			font-size:18px;
			font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
			
		}
		.btn
		{
			background:#900;
			text-decoration:none;
			color:#FFF;
			font-size:16px;
			font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
		}
		.btn:hover
		{
			background:#903;
		}
		a
		{
			text-decoration:none;
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
				echo "<center>These Rabi Crops are placed for the Sell:";
				?></center>
        <br> 
        <center>
        <table width="920" border="2" class="t1" cellpadding="8" cellspacing="5" bordercolor="#CF0">  <tr> 
        		<th>&nbsp;: &nbsp;Crop Type &nbsp;: &nbsp;</th> 
                <th>&nbsp;: &nbsp;Crop Name &nbsp;: &nbsp;</th> 
                <th>&nbsp;: &nbsp;Sale Price &nbsp;: &nbsp;</th>
                <th>&nbsp;: &nbsp;Quantity &nbsp;: &nbsp;</th>
          <tr>        	        
          <?php		
			$q="select * from rabi where reg_id=$reg";
			$smt=mysql_query($q);
			while($result=mysql_fetch_assoc($smt))
			{
			?>
				<tr align="center">
                 <td><?php echo $result['crop_nm'];?></td>
                
                <td><?php echo $result['sale_price'];?></td>
               
                <td><?php if($result['quantity']==1)
					 		{ echo "1-500kg";}
					 		else if($result['quantity']==2)
							{ echo "500-1000kg";}
							else if($result['quantity']==3)
							{ echo "1000-1500kg";}
					 ?></td>             
                <td><?php echo $result['discount'];?></td></tr>
           <?php }?>
            </table>
            
           </center>		
             <br>
             <center>
             <a href="auction.php"><span class="btn">&nbsp;&nbsp; Back To My Account Page &nbsp;&nbsp; </span></a>
              </center>         
        </div>
    </body>
</html>
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
		</style>
    </head>
	<body bgcolor="#3399CC">
    <div id="#dv_ac">
    <?php
	$con=@mysql_connect("localhost","root","");
				if(!$con)
				{
					echo "Connection failed..";	
				}
				mysql_select_db("ekrishi");
	echo "<div class=dv>";
				echo "you have allready occupied space for auction of this crop";	
				echo "</div>";
				$qa="select * from farmer_auction where farmer_id=$rd ";
				$sa=mysql_query($qa);
				$ra=mysql_fetch_assoc($sa);
				echo "<br><br><center>";
				echo"<table border=2 cellpadding=10 cellspacing=8>";
				echo "<tr><td>Farmer Name</td><td>".$ra['farmer_name']."</td></tr>";
				echo "<tr><td>Farmer Id</td><td>".$ra['farmer_id']."</td></tr>";
				echo "<tr><td>Crop Type</td><td>".$ra['c_type']."</td></tr>";
				echo "<tr><td>Crop Name</td><td>".$ra['c_name']."</td></tr>";
				echo "<tr><td>Date</td><td>".$ra['date']."</td></tr>";
				echo "<table>";
				echo "</center>";
	?>
    </div>
    </body>
</html>
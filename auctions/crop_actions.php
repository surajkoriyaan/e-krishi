<html>
	<head>
		<style type="text/css">
			.dv
			{
				top:0px;
				height:180px;				
				width:480px;
				padding-left:320px;
				font-size:14px;
				background:none;
				overflow:scroll;
				color:#CF9;
				text-transform:capitalize;		
			}
			
		</style>
	</head>
<body>
<?php
 $q = intval($_GET['q']);
 $con = mysql_connect("localhost","root","");
 if (!$con)
  {
   echo "connection failed";
  }

 mysql_select_db("ekrishi");
 $sql="SELECT * FROM c_name WHERE id = '".$q."'";
 $result = mysql_query($sql);
  
   
echo "<table border='0'>
<tr>
<th colspan=2>Types of Crop present in this crop which is choosen by you:</th>
</tr>
<tr><td width=140px>&nbsp;</td>
<td><div class=dv>";  

while($row = mysql_fetch_assoc($result))
 {
  echo "<ul style=list-style-type:none>";
  echo "<li>" .$row['c_name1']."</li>";
  echo "<li>" .$row['c_name2']."</li>";
  echo "<li>" .$row['c_name3']."</li>";
  echo "<li>" .$row['c_name4']."</li>";
  echo "<li>" .$row['c_name5']."</li>";
  echo "<li>" .$row['c_name6']."</li>";
  echo "<li>" .$row['c_name7']."</li>";
  echo "<li>" .$row['c_name8']."</li>";
  echo "<li>" .$row['c_name9']."</li>";
  echo "<li>" .$row['c_name10']."</li>";
  echo "<li>" .$row['c_name11']."</li>";
  echo "<li>" .$row['c_name12']."</li>";
  echo "<li>" .$row['c_name13']."</li>";
  echo "<li>" .$row['c_name14']."</li>";
  echo "<li>" .$row['c_name15']."</li>";
  echo "<li>" .$row['c_name16']."</li>";
  echo "</ul>";
  echo "</div></td>";
  echo "</tr>";
  echo "</table>";
 }

 mysql_close($con);
?>
</body>
</html>
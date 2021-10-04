<html>
<body>

<!--Crop Discount-->
<?php
 $d = intval($_GET['d']);
 $con = mysql_connect("localhost","root","");
 if (!$con)
  {
   echo "connection failed";
  }

 mysql_select_db("ekrishi");
 $sql="SELECT * FROM c_discount WHERE id = '".$d."'";
 $result = mysql_query($sql);
  
while($row = mysql_fetch_assoc($result))
 {?>
 <input type="text" value="<?php echo $row['dis'];?>" class="inpt_t" name="dis" id="dis">
	 
 <?php 
 }
 
 mysql_close($con);
?>
</body>
</html>
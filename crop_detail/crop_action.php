<html>
<body>
<?php
 $q = intval($_GET['q']);
 $con = mysql_connect("localhost","root","");
 if (!$con)
  {
   echo "connection failed";
  }

 mysql_select_db("crop_type");
 $sql="SELECT * FROM c_name WHERE id = '".$q."'";
 $result = mysql_query($sql);
   echo "<select class=inp>";
while($row = mysql_fetch_assoc($result))
 {

  echo "<option>" . $row['c_name1'] . "</option>";
  echo "<option>" . $row['c_name2'] . "</option>";
  echo "<option>" . $row['c_name3'] . "</option>";
  echo "<option>" . $row['c_name4'] . "</option>";
  echo "<option>" . $row['c_name5'] . "</option>";
  echo "<option>" . $row['c_name6'] . "</option>";
  echo "<option>" . $row['c_name7'] . "</option>";
  echo "<option>" . $row['c_name8'] . "</option>";
  echo "<option>" . $row['c_name9'] . "</option>";
  echo "<option>" . $row['c_name10'] . "</option>";
  echo "</select>";
 }
 echo "</table>";
 mysql_close($con);
?>
</body>
</html>
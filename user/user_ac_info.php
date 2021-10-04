<html>
	<head>    	
    <title>Account Info</title>
    <link href="../css/code.css" rel="stylesheet" type="text/css">
    <script src="../js/jq.js" type="text/javascript"></script>
    <script type="text/javascript">
	$(document).ready(function() 
	{
      	$("#shw").click(function() 
		{
            $(".div_ac_info").slideToggle();
        });  
    }); 
	</script>    
	</head>
    <body background="../images/header-bg1.jpg">
    	<div class="div_all">
        <div class="div_inner">     
         <?php
			 $con=mysql_connect("localhost","root","");
			 if(!$con)
			 {
				echo "Connection failed";	 
			 }
			 mysql_select_db("ekrishi");
			 
            $qry="select * from user_ac order by reg_id desc limit 1";
			$smt=mysql_query($qry);
			$result=mysql_fetch_assoc($smt);
			
				?><br>
          <center>
                <span class="font_d">
            <?php echo "Hello $result[name]......<hr size=4 color=#0033CC>"; 
				 
			?> </span></center>
                <center>
				<table border="0" width="80%">
            <tr>
            	<th colspan="2" bgcolor="#EAFEE7">
                <center>
                You Have Entered:
                </center></th>
            </tr>
            
             <tr bgcolor="#FFFFCC">
                 <td class="t">   
                     Name:</td>
                 <td>
                  <?php echo $result['name'];?>
               </td>
             </tr>
             <tr bgcolor="#EAFEE7">
            	<td class="t">
                  <span class="txt_color">Aadhar No</span>
               </td>
                 <td><span class="txt_color">
                 <?php echo $result['aadhar_no'];?></span>
               </td>
             </tr>
             <tr  bgcolor="#FFFFCC">
                 <td class="t">   
                     Image:</td>
                 <td>
                  <?php echo '<img height="40" width="80" src="../images//'.$result['photo'].'">';?>
               </td>
             </tr>
              <tr bgcolor="#EAFEE7">
                 <td class="t">   
                     phone number:</td>
                 <td>
                  <?php echo $result['ph_no'];?>
                </td>
             </tr>
             
              <tr bgcolor="#FFFFCC">
                 <td class="t">   
                     Block Name:</td>
                 <td>
                  <?php echo $result['block'];?>
                </td>
             </tr>
              <tr bgcolor="#EAFEE7">
                 <td class="t">   
                     Vill Name:</td>
                 <td>
                  <?php echo $result['vill'];?>
                </td>
             </tr>
             <tr  bgcolor="#FFFFCC">
                 <td class="t">   
                     Date of Birth:</td>
                 <td>
                  <?php echo $result['dob'];?>
               </td>
             </tr>
          </table> </center>
            <br>
            <hr size="4" color="#0033CC">
            Please Keep your Registration Id and Password for further use......
            <hr size="4" color="#0033CC">
            <input type="button" id="shw" name="shw" value="NEXT" class="inptbtn">
            
           <!--Password provide by admin to the farmer-->
           <?php
            $q="select * from log_in_verify order by reg_id desc limit 1";
			$s=mysql_query($q);
			$rs=mysql_fetch_assoc($s);			
			?>              
       	  </div>
        </div>
        <div class="div_ac_info"> 
        	<br>
              	 <center> LOG In Details</center>
                  <hr size="4" color="#993366">          
                  Registration Id:<?php echo $rs['reg_id'];?>
                  <br><br>
                  <span class="txt_color">Password:
                 <?php echo $rs['pass'];?></span>
                  
                   <br><br>
                  <hr size="4" color="#993366"> 
                 Please Keep your Registration Id and Password for future use...
                 <br>
                 <center>
                 <a href="user_login.php">
                 <img src="../images/info5.gif" height="80" width="80"></a>
                 <a href="../index.php">
                 <img src="../images/info9.gif" height="80" width="70"></a>
                 </center>
              </div>
    </body>
</html>
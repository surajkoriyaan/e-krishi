<html>
	<head>
    	<title>User Log In</title>
        <link href="../css/buyer_style.css" rel="stylesheet" type="text/css">
     <!--PHP CODE BEGINS-->
     <?php
		$con=mysql_connect("localhost","root","");
		if(!$con)
		{
			echo "connect failed...";
		}
		mysql_select_db("ekrishi");
		$err="";
		$errp="";
		$ea="";		
		$q="select * from log_in_verify";
		$smt=mysql_query($q);	
		
		while($rs=mysql_fetch_assoc($smt))
 		{
			if($_SERVER["REQUEST_METHOD"]=="POST")
	 		{
				if($_POST['txtRid']=="")
				{
					$err="Please enter your Reg.Id";	
				}
				if($_POST['txtPwd']=="")
				{
					$errp="Please enter your Password";	
				}
				if($_POST['txtAn']=="")
				{
					$ea="Please enter your Aadhar Number";	
				}
      			if($rs['reg_id']==$_POST["txtRid"])
	    		{
   		   			if($rs['pass']!=$_POST["txtPwd"] && $rs['aadhar_no']==$_POST["txtAn"])
		      		{
				  		$errp="Password is wrong";
			   		}
					if($rs['aadhar_no']!=$_POST["txtAn"] && $rs['pass']==$_POST["txtPwd"])
		       		{
				  		$ea="Aadhar Number is wrong";
			  		}
					if($rs['pass']==$_POST["txtPwd"] && $rs['aadhar_no']==$_POST["txtAn"])
					{
		    			$rg=$rs['reg_id'];
						$pwd=$rs['pass'];
						$an=$rs['aadhar_no'];
						$dt=date("y/m/d");
						
						$tm=date("h:i:sa");
						$insrtq="insert into log_in_detail(reg_id,pass,aadhar_no,login_date,login_time) values($rg,'$pwd',$an,'$dt','$tm')";
						mysql_query("$insrtq");
		    			header("location:../usr_hm.php");
	     			}
					if($rs['pass']!=$_POST["txtPwd"] && $rs['aadhar_no']!=$_POST["txtAn"])
		       		{
				   		$errp="Password is wrong";
				  		$ea="Aadhar Number is wrong";
			   		}	  
				}
			}
		} 
		?>
     <!--PHP CODE ENDS-->
    </head>
    <body>
    <div id="div_mid">
    <h2>&nbsp;&nbsp;
        <a href="../index.php">
        <img src="../images/home-button-icon15.gif" height="70" width="80"></a>
        &nbsp;LOG IN!!!
        </h2>
        <hr size="3" color="#FF99FF">
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <table width="698" height="313" border="0" align="center">
        	<tr>
            	<td width="258">
            		<h1>*Reg. Id</h1>
                </td>
            	<td width="314">
                	<input type="text" id="txtRid" name="txtRid" placeholder="Enter your email id">
                </td>
            </tr>
             <tr>
            	<td>&nbsp;</td>
                <td class="cl">*<?php echo $err; ?></td>
            </tr>
            <tr>
    			<td>
                	<h1>*Password</h1>
                </td>
                <td>                
            		<input type="password" id="txtPwd" name="txtPwd" placeholder="Enter your password">
            	</td>
            </tr>
      		 <tr>
            	<td>&nbsp;</td>
                <td class="cl">*<?php echo $errp;?></td>
            </tr>
            <tr>
            	<td width="258">
            		<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*Aadhar Number</h1>
                </td>
            	<td width="314">
                	<input type="text" id="txtAn" name="txtAn" placeholder="Enter your Aadhar Number">
                </td>
            </tr>
             <tr>
            	<td>&nbsp;</td>
                <td class="cl">*<?php echo $ea; ?></td>
            </tr>
            <tr>
            	<td colspan="2" align="center">             
                 <input type="submit" id="b1" name="b1" onClick="show();" value="LOG IN" class="btn"/>				            	</td>
            </tr> 
            <tr>
            	<td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            </table> 
          </form>         
        </div>       
    </body>
</html>
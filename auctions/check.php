<html>
	<head>
    <link href="../css/code.css" type="text/css" rel="stylesheet">
    	
        <?php
		$con=mysql_connect("localhost","root","");
		if(!$con)
		{
			echo "connect failed...";
		}
		mysql_select_db("ekrishi");
		$err="";
		$eo="";
		$errp="";
		$ea="";		
		$q="select * from farmer_log_in";
		$smt=mysql_query($q);	
		
		while($rs=mysql_fetch_assoc($smt))
 		{
			if($_SERVER["REQUEST_METHOD"]=="POST")
	 		{
				if($_POST['r']=="")
				{
					$err="Please enter your Reg.Id";	
				}
				if($_POST['p']=="")
				{
					$errp="Please enter your Password";	
				}
				if($_POST['a']=="")
				{
					$ea="Please enter your Aadhar Number";	
				}
      			if($rs['reg_id']==$_POST["r"])
	    		{
   		   			if($rs['pass']!=$_POST["p"] && $rs['aadhar_no']==$_POST["a"])
		      		{
				  		$errp="Password is wrong";
			   		}
					if($rs['aadhar_no']!=$_POST["a"] && $rs['pass']==$_POST["p"])
		       		{
				  		$ea="Aadhar Number is wrong";
			  		}
					if($rs['pass']==$_POST["p"] && $rs['aadhar_no']==$_POST["a"])
					{
						
						
						$rg=$rs['reg_id'];
						$pwd=$rs['pass'];
						$an=$rs['aadhar_no'];
						$dt=date("y/m/d");
						$tm=strftime("%X");
						$insrtq="insert into log_in_detail(reg_id,pass,aadhar_no,login_date,login_time) values($rg,'$pwd',$an,'$dt','$tm')";
						mysql_query("$insrtq");
		    			header("location:auctions/auction.php");
	     			}
					if($rs['pass']!=$_POST["p"] && $rs['aadhar_no']!=$_POST["a"])
		       		{
				   		$errp="Password is wrong";
				  		$ea="Aadhar Number is wrong";
			   		}	  
				}
			}
		}
 
		?>
    </head>
<body class="bgclr">

<div id="dv">
    <a href="../index.php">
    <img src="../images/hm.gif" width="85" height="87"></a>
    <img src="../images/info3.jpg" width="80" height="85">
    
    
    </div>
<div id="div_mid">
    	
        	<table border="0" cellpadding="8" cellspacing="12" class="tble">
            	<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            	<tr>
        			<td> Registration Id </td>       
            		<td>
                    	<input type="text" name="r" id="r" class="inpt">
                     </td>
                     <td>
            			<span class="emsg">*<?php echo $err; ?></span>                       
            		</td>
                </tr>
                <tr>
        			<td>Password </td>       
            		<td>
                    	<input type="password" name="p" id="p" class="inpt">
            		</td>
                     <td>
                        <span class="emsg">*<?php echo $errp; ?></span>
            		</td>
                </tr>
                <tr>
        			<td>Aadhar Number </td>       
            		<td>
                    	<input type="text" name="a" id="a" class="inpt">
                    </td>
                     <td>
            			<span class="emsg">*<?php echo $ea; ?></span>
            		</td>
                </tr>
                <tr>
                	<td>&nbsp;
                    
                    </td>
                    <td>&nbsp;
                    
                    </td>
                    <td>&nbsp;
                    </td>
                </tr>
            	<tr>
        			<td>
                   <input type="submit" name="s1" id="s1" value="Log In" class="btn">
					</td>
                    <td>
                   <input type="reset" name="s1" id="s1" value="Reset" class="btn">  </form>
					</td>
                    <form action="../index.php" method="post">
                    <td>
                   <input type="submit" name="s1" id="s1" value="Cancel" class="btn">
					</td></form>
                </tr>
                <tr>
                 <td colspan="3">
            			<span class="emsg">*<?php echo $eo; ?></span>
            		</td>
                </tr>
            </table>	
    
     </div>  
</body>
</html>
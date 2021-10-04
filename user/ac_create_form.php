<html>
	<head>
		<title>Create Account</title>
		<link href="../css/code.css" type="text/css" rel="stylesheet">
        <script type="text/javascript">
	function valid()
	{
		var n=document.forms.frmr_ac.nm.value;
		var ad=document.forms.frmr_ac.an.value;
		var ph=document.forms.frmr_ac.phn.value;
		var vl=document.forms.frmr_ac.vn.value;
		var bl=document.forms.frmr_ac.bn.value;
		
		if(n=="")
		{
			alert("Name can not be left blank");
			document.forms.frmr_ac.nm.focus();
			return false;
		}
		if(ad=="")
		{
			alert("Aadhar number should not be left blank");
			document.forms.frmr_ac.an.focus();
			return false;
		}
		var AadharPattern = new RegExp("[0-9]{12}");
			if(ContactPattern.test(ph) == false)
			{
				alert("Aadhar number should be a number and 12 digit");
				document.forms.frmr_ac.an.focus();
				return false;
			}
		
		if(ph=="")
		{
			alert("phone number should not be left blank");
			document.forms.frmr_ac.phn.focus();
			return false;
		}
		var ContactPattern = new RegExp("[0-9]{10}");
			if(ContactPattern.test(ph) == false)
			{
				alert("phone number should be a number and 10 digit");
				document.forms.frmr_ac.phn.focus();
				return false;
			}
		
		if(vl=="")
		{
			alert("Village Name can not be left blank");
			document.forms.frmr_ac.vn.focus();
			return false;
		}
		if(bl=="")
		{
			alert("Block Name can not be left blank");
			document.forms.frmr_ac.bn.focus();
			return false;
		}
	}

</script>
        
	</head>
    <body class="bgclr">
    <?php 
	$f=$_REQUEST['f']; 
	echo $f;
	$b=$_REQUEST['b']; 
	echo $b;
	$u=$_REQUEST['u']; 
	echo $u;
	?>
	 <div id="dv_opt">
    <a href="../index.php">
    <img src="../images/hm.gif" width="75" height="77"></a>
    <a href="../login_option.php">
    <img src="../images/info3.jpg" width="70" height="75"></a>  
     
    </div> 	
    <div id="dv_ac">
          
           <!--Create new Kishan Account-->
           	<br>
               <center> *****Create your New Account*****<br>
                   Date:    <?php echo date("d/m/y");?><br>
                   <hr color="#663300" size="4">
       <form method="post" name="frmr_ac" id="frmr_ac" action="frmr_ac_action.php" onSubmit="return valid();">
   	   <hr size="5" color="#663300">
   	   <table height="115" width="829" border="0" bordercolor="#FFFF00">
            <tr bgcolor="#33CCFF">
          	<th colspan="3"><center>
                Fill Up your details:</center>
                </th>
            </tr>
               <tr bgcolor="#B76FFF">      
                  <td width="238">  <label for="text">Full name:</label> </td>
                  <td width="343">
                  	<input type="text" id="nm" name="nm" class="ac_inpts">
                  </td> 
                  <td width="237" rowspan="4" bgcolor="#C5F4FE">Select your photo
                  <input type="file" id="pht" name="pht">
                  </td>
              </tr>
                <tr bgcolor="#C5F4FE">      
                  <td>  <label for="text">Aadhar number:</label> </td>
                  <td>
                  	<input type="text" id="an" name="an" class="ac_inpts">
                  </td> 
                </tr>                
         </table>
         <hr size="5" color="#FFFF99">
         	<table width="833" height="73">
              <tr bgcolor="#B76FFF">      
                  <td width="393">  <label for="text">Phone number:</label> </td>
                  <td width="428">
                  	<input type="text" id="phn" name="phn" class="ac_inpts">
                  </td> 
              </tr>
                <tr bgcolor="#C5F4FE">      
                  <td>  <label for="text">Enter Date of Birth:</label> </td>
                  <td colspan="2">
                  	<input type="date" id="dt" name="dt" placeholder="yyyy/mm/dd" class="ac_inpts">
                  </td>
                </tr>                  
    </table>
                <hr size="5" color="#FFFF99">
                <table width="832" height="167">
                <tr bgcolor="#C5F4FE">      
                   <td width="392">  <label for="text">Enter your village name:</label> </td>
                  <td width="429" colspan="2">
                  	<input type="text" id="vn" name="vn" class="ac_inpts">
                  </td> 
                </tr>
                 <tr bgcolor="#B76FFF"> 
                 <td>  <label for="text">Enter your block name:</label> </td>
                  <td colspan="2">
                  	<input type="text" id="bn" name="bn" class="ac_inpts">
                  </td>     
                  
                </tr>
                <tr bgcolor="#C5F4FE">                                
                  <td>  <label for="block">Select District:</label></td>
                  <td colspan="2">
                  <select id="dn" name="dn" class="ac_inpts">
                    	<option>&nbsp;&nbsp;</option>
                    	<option>Gumla</option>
                        <option>Palamu</option>
                        <option>West singhbhum</option>
                        <option>East singhbhum</option>
                        <option>Godda</option>
                        <option>chatra</option>
                        <option>Hajaribag</option>
                        <option>Kodarma</option>
                        <option>Giridih</option>
                        <option>Deoghar</option>
                        <option>Pakur</option>
                        <option>Sahebganj</option>
                        <option>Dumka</option>
                        <option>Dhanbad</option>
                        <option>Bokaro</option>
                        <option>Ranchi</option>
                        <option>Lohardaga</option>
                        <option>Khunti</option>
                        <option>Ramgarh</option>
                        <option>Saraikela-Kharsawan</option>
                    </select>
                  </td>  
             </tr>
                              
                <tr bgcolor="#B76FFF">
                <td colspan="3">  
                  <input type="checkbox" id="ck" name="ck" class="required input_field">
                    I agree to accept all the terms and conditions, Please create my account</td>
                 </tr>
                 <tr>
                 	<td>
                    <input type="hidden" id="usr_f" name="usr_f" value="<?php echo $f;?>">
                    </td>
                    <td>
                    <input type="hidden" id="usr_u" name="usr_u" value="<?php echo $u;?>">
                    </td>
                    <td>
                    <input type="hidden" id="usr_b" name="usr_b" value="<?php echo $b;?>">
                    </td>
                 </tr>
    </table>
   
                <hr size="5" color="#663300">
                <hr size="5" color="#663300">
                  <div id="dv_btn">
                    <input type="submit" name="submit" id="submit" value=" Submit " />
                    <input type="reset" class="bn" name="reset" id="reset" value=" Reset " />
                   <a href="../index.php"> <input type="button" class="bn" name="reset" id="reset" value=" Cancel " /></a>
       </div>
     </center>   </form>      
    </div>
    </body>
</html>   
           
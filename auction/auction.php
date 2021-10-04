<html>
	<head>
    	<title> AJAX </title>
        <link rel="stylesheet" href="../css/code.css" type="text/css">
        <script>
		function showUser(str) 
		{
  			if (str=="") 
			{
    		document.getElementById("txtHint").innerHTML="";
    		return;
  		} 
  		if (window.XMLHttpRequest) 
		{
			xmlhttp=new XMLHttpRequest();
  		} 
		else 
		{
    		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  		}
  		xmlhttp.onreadystatechange=function() 
		{
    		if (xmlhttp.readyState==4 && xmlhttp.status==200) 
			{
      			document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    		}
  		}
  		xmlhttp.open("GET","crop_action.php?q="+str,true);
 		xmlhttp.send();
		}
		</script>
       
    </head>
    <!--<body bgcolor="#99CC99">-->
    <body background="../images/simple_text_img_7.jpg">
    	<a href="../index.php"><div id="dv"></div></a>
    	<div id="div_crp">
        	<table border="0" height="414" width="100" class="tbl">
            	<tr>
                	<td colspan="2"><center>
                	  You can view all Crop Details :
                	</center></td>
                </tr>
                <tr>
                	<td height="85" colspan="2" align="center">
                    	<form>
							<select name="users" onChange="showUser(this.value)" class="inp">
								<option value="0">Select a Crop Type:</option>
								<option value="1">Rabi</option>
								<option value="2">Kharif</option>
								<option value="3">Zaid</option>
							</select>
						</form>
                    </td>
            	</tr>
                 <tr>
                	<td height="95" colspan="2" align="center" id="txtHint">
                    	<select class="inp" id="opts">
                        	<option>&nbsp;</option>
                        	<option>&nbsp;</option>
                            <option>&nbsp;</option>
                        </select>
                    </td>
            	</tr>
                <tr bgcolor="#FFFFFF">      
                  <td>  <label for="text">Enter your name:</label> </td>
                  <td>
                  	<input type="text" id="nm" name="nm">
                  </td> 
                  <td rowspan="4" bgcolor="#CC99FF">Select your photo
                  <input type="file" id="pht" name="pht">
                  </td>
                </tr>
                <tr bgcolor="#CCCCCC">      
                  <td>  <label for="text">Enter your Aadhar number:</label> </td>
                  <td>
                  	<input type="text" id="an" name="an">
                  </td> 
                </tr>
                <tr bgcolor="#FFFFFF">      
                  <td>  <label for="text">Enter your phone number:</label> </td>
                  <td>
                  	<input type="text" id="phn" name="phn">
                  </td> 
                </tr>
                <tr>
                	<td id="log" width="315" align="right">
                   <a href="../user/farmer_login.php">
                    	<img src="../images/info5.gif" height="112" width="139"></a>
                    </td>
                    <td width="287" align="left" id="ld"><img src="../HD/ajax-loader.gif" height="105" width="117"></td>
                </tr>
            </table>
        </div>
    </body>
</html>
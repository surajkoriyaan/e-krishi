// JavaScript Document
//Crop list
		function showCropList(str) 
		{
  			if (str=="") 
			{
    		document.getElementById("CropList").innerHTML="";
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
      			document.getElementById("CropList").innerHTML=xmlhttp.responseText;
    		}
  		}
  		xmlhttp.open("GET","crop_action.php?q="+str,true);
 		xmlhttp.send();
		}
		
		
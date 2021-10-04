<html>
<head>
    	<title>crop insrt</title>
    	<link href="../css/code.css" type="text/css" rel="stylesheet">
    </head>
<body>	

         <?php 			
			$con=@mysql_connect("localhost","root","");
				if(!$con)
				{
					echo "Connection failed..";	
				}
				mysql_select_db("ekrishi");
				$rd=$_REQUEST['rid'];
				$an=$_REQUEST['an'];
				$ct=$_REQUEST['ct'];
				$cn=$_REQUEST['cn'];
				$sale=$_REQUEST['sp'];
				$qty=$_REQUEST['qunt'];
				$dis=$_REQUEST['dis'];
			
				if($ct==1)
				{
					$sqry="insert into rabi(reg_id,aadhar_no,crop_typ,crop_nm,sale_price,quantity,discount)
					values($rd,'$an','rabi','$cn',$sale,$qty,$dis)";
					
					mysql_query($sqry);	
					if(mysql_affected_rows()>0)
					{						
						header("location:sale_confirm_page.php");
					}
					else
					{
						echo "Error:Could not success to sale crops";	
					}	
				}
				
				if($ct==2)
				{
					$sqry="insert into kharif(reg_id,aadhar_no,crop_typ,crop_nm,sale_price,quantity,discount)
					values($rd,'$an','kharif','$cn',$sale,$qty,$dis)";
					
					mysql_query($sqry);	
					if(mysql_affected_rows()>0)
					{						
						header("location:sale_confirm_page_k.php");
					}	
					else
					{
						echo "Error:Could not success to sale crops";	
					}	
				}
				
				if($ct==3)
				{
					$sqry="insert into zaid(reg_id,aadhar_no,crop_typ,crop_nm,sale_price,quantity,discount)
					values($rd,'$an','zaid','$cn',$sale,$qty,$dis)";
					
					mysql_query($sqry);	
					if(mysql_affected_rows()>0)
					{						
						header("location:sale_confirm_page_z.php");
					}
					else
					{
						echo "Error:Could not success to sale crops";	
					}		
				}
				
                ?>
         
</body>
</html>
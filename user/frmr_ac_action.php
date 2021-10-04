<html>
	<head>
    	<title>accuont creation</title>

    </head>
<body>
         <?php
			$con=mysqli_connect("localhost","root","","ekrishi");
				if(!$con)
				{
					echo "Connection failed..";
				}
			//	mysql_select_db();
				$f_n=$_REQUEST['nm'];
				$f_an=$_REQUEST['an'];
				$f_photo=$_REQUEST['pht'];
				$f_pn=$_REQUEST['phn'];
				$blck=$_REQUEST['bn'];
				$vil=$_REQUEST['vn'];
				$dist=$_REQUEST['dn'];
				$dt=$_REQUEST['dt'];
				$usr_typ1=$_REQUEST['usr_f'];
				$usr_typ2=$_REQUEST['usr_b'];
				$usr_typ3=$_REQUEST['usr_u'];
				echo $usr_typ1;
				echo $usr_typ2;
				echo $usr_typ3;
				/*insert into farmer*/
			if($usr_typ1)
			{
				$sqry="insert into farmer_ac(name,aadhar_no,photo,ph_no,block,vill,district,dob)values('$f_n',$f_an,'$f_photo','$f_pn','$blck','$vil','$dist','$dt')";
				mysql_query($con,$sqry);	
				if(mysql_affected_rows()>0)
				{
					header("location:farmer_ac_info.php");
				}
				else
				{
					echo "ERROR:could not insert information";
					echo "<a href=../index.php>BACK</a>";
				}

				/*Password created by admin*/
				$pwd=md5($f_n);
				$pass=substr($pwd,-10,10);
				$l="select reg_id from farmer_ac where aadhar_no='$f_an'";
				$le=mysql_query($l);
				$lrs=mysql_fetch_assoc($le);
				$aid=$lrs['reg_id'];
				$qry="insert into log_in_verify(pass,aadhar_no,type_of_usr,ac_id)values('$pass','$f_an','$usr_typ1',$aid)";
				mysql_query($qry);
			}
            /*insert into buyer or wholesaler*/
         	if($usr_typ2)
			{
				$sqry="insert into wholesaler_ac(name,aadhar_no,photo,ph_no,block,vill,district,dob)values('$f_n',$f_an,'$f_photo','$f_pn','$blck','$vil','$dist','$dt')";
				mysql_query($sqry);
				if(mysql_affected_rows()>0)
				{
						header("location:buyer_ac_info.php");
				}
				else
				{
					echo "ERROR:could not insert information";
					echo "<a href=../index.php>BACK</a>";
				}

				/*Password created by admin*/
				$pwd=md5($f_n);
				$pass=substr($pwd,-10,10);
				$l="select reg_id from wholesaler_ac where aadhar_no='$f_an'";
				$le=mysql_query($l);
				$lrs=mysql_fetch_assoc($le);
				$aid=$lrs['reg_id'];
				$qry="insert into log_in_verify(pass,aadhar_no,type_of_usr,ac_id)values('$pass','$f_an','$usr_typ2',$aid)";
				mysql_query($qry);
			}
			/*insert into user*/
			if($usr_typ3)
			{
				$sqry="insert into user_ac(name,aadhar_no,photo,ph_no,block,vill,district,dob)values('$f_n',$f_an,'$f_photo','$f_pn','$blck','$vil','$dist','$dt')";
				mysql_query($sqry);
				if(mysql_affected_rows()>0)
				{
					header("location:user_ac_info.php");
				}
				else
				{
					echo "ERROR:could not insert information";
					echo "<a href=../index.php>BACK</a>";
				}

				/*Password created by admin*/
				$pwd=md5($f_n);
				$pass=substr($pwd,-10,10);
				$l="select reg_id from user_ac where aadhar_no='$f_an'";
				$le=mysql_query($l);
				$lrs=mysql_fetch_assoc($le);
				$aid=$lrs['reg_id'];
				$qry="insert into log_in_verify(pass,aadhar_no,type_of_usr,ac_id)values('$pass','$f_an','$usr_typ3',$aid)";
				mysql_query($qry);
			}

                ?>
</body>
</html>

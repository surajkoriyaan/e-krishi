<?php
            echo "<input type=hidden id=rid name=rid value=$rd;>";
			echo "<input type=hidden id=rnm name=rnm value=$rs[name];>";			
			?>
			
            
            
            <?php
	
			 $con=mysql_connect("localhost","root","");
			 if(!$con)
			 {
				echo "Connection failed";	 
			 }
			 mysql_select_db("ekrishi");
			 
            $qry="select * from log_in_detail order by sl_no desc limit 1";
			$smt=mysql_query($qry);
			$result=mysql_fetch_assoc($smt);
			$rd=$result['reg_id'];
			$a=$result['aadhar_no'];
			$dt=$result['login_date'];
			$tm=$result['login_time'];
			
			$cqry="select * from farmer_ac where aadhar_no=$a";  
			$csmt=mysql_query($cqry);
			$rs=mysql_fetch_assoc($csmt);
			
			
	?>
    <div id="slider">
    	
        <div id="header_wrapper">
            <div id="header">
                <a href="../index.php"><img src="images/templatemo_logo.png" alt="Wall Shelf" /></a><br /><h4 class="txt_fn">
                <?php echo "Welcome....". $rs['name']; 	
				echo ".....</h4><h4 class=clr>Login Date:";	
					echo"&nbsp;".$dt;
					echo"&nbsp;&nbsp;".$tm."</h4>";
				?>
            </div>
		</div>
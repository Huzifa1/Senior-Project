<?php
				require_once "../connection.php";
				$block = 'A';
				$date = date("Y-m-d");
				
				if(isset($_GET['date'])){
					$date = $_GET['date'];
				}
				if(isset($_GET['block'])){
					$block = $_GET['block'];
				}
				
					$myquery = "SELECT admin_name, text FROM report NATURAL JOIN admin WHERE block='$block' and report_date = '$date'";
					$result=mysqli_query($con, $myquery);
					$row = mysqli_fetch_assoc($result);
					if(mysqli_num_rows($result)!==0){
						echo '<h2 class="animate__animated animate__fadeInDown">Daily Report ('. $block . ')</h2>
							  <p class="animate__animated animate__fadeInUp" align="justify">'.$row['text'].'</p>
							  <p class="animate__animated animate__fadeInUp" align="left">'.$row['admin_name'] . '<span align="right"> '. $date.' </span></p>';
									
					
					}
					else{
						echo '<h2 class="animate__animated animate__fadeInDown">No Reports Yet </h2>';
					}
?>
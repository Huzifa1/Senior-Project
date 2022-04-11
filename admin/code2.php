<?php
	require_once "../connection.php";
	$query="SELECT * FROM visitor WHERE request_status = 'pending'";
	$result=mysqli_query($con, $query);
	$i = 0;
	if(mysqli_num_rows($result)!==0){
		echo'<h1 class="display-6 animate__animated animate__fadeInDown" style="color:white">Vistor\'s Requests:</h1>';
		while($row = mysqli_fetch_assoc($result)){
			$id = $row['prisoner_id'];
			$query2="SELECT  priosner_name FROM prisoner WHERE prisoner_id = $id";
			$result2=mysqli_query($con, $query2);
			$row2 = mysqli_fetch_assoc($result2);
			echo ' <div class="accordion-item">
				<h2 class="accordion-header" id="heading"'.$i.'>
					<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse'.$i.'">Request '.$row['visit_id'].'</button>									
				</h2>
				<div id="collapse'.$i.'" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
					<div class="card-body">
						<p><span style="font-weight:bold">Visitor Name: </span>'.$row['visitor_name'].'</p>
						<p><span style="font-weight:bold">Prisoner Name: </span>'.$row2['priosner_name'].'</p>
						<p><span style="font-weight:bold">Kinship: </span>'.$row['kinship'].'</p>
						<p><span style="font-weight:bold">Email: </span>'.$row['email'].'</p>
						<p><span style="font-weight:bold">Phone Number: </span>'.$row['phone_nb'].'</p>
						<p><span style="font-weight:bold">Requested Date: </span>'.$row['visit_date'].'</p>
						<button type="button" class="btn btn-outline-success">Accept</button>
						<button type="button" class="btn btn-outline-danger">Reject</button>
				   </div>
				</div>
			</div>';
			$i++;
		}
	}
	else{
		echo ' <h1 class="display-6 animate__animated animate__fadeInDown" style="color:white">There are no requests from visitors</h1>';
	}
?>
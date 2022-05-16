<?php
	require_once "../connection.php";
	$query="SELECT * FROM visitor NATURAL JOIN prisoner WHERE request_status = 'pending' AND block = '".$_SESSION['block']."'";
	$result=mysqli_query($con, $query);
	$i = 0;
	$nbofrowsquery="select count(*) FROM visitor NATURAL JOIN prisoner WHERE request_status = 'pending' AND block = '".$_SESSION['block']."'";
	$nbofrowsresult=mysqli_query($con, $nbofrowsquery);
	$nbofrows = mysqli_fetch_assoc($nbofrowsresult);
	if(mysqli_num_rows($result)!==0){
		echo'<h1 class="display-6 animate__animated animate__fadeInDown" >Vistor\'s Requests ('.$nbofrows['count(*)'].'):</h1>';
		while($row = mysqli_fetch_assoc($result)){
			$string1 = "window.location.replace('update.php?id=".$row["visit_id"]."&status=accepted')";
			$string2 = "window.location.replace('update.php?id=".$row["visit_id"]."&status=rejected')";
			echo '<div id="modalCenterA'.$i.'" class="modal fade" tabindex="-1">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Confirmation</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
							</div>
							<div class="modal-body">
								<p>Are you sure, you want to accept?</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary" onclick="'.$string1.'">Yes</button>
							</div>
						</div>
					</div>
				</div>';
				
			echo '<div id="modalCenterB'.$i.'" class="modal fade" tabindex="-1">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Confirmation</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
							</div>
							<div class="modal-body">
								<p>Are you sure, you want to reject?</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary" onclick="'.$string2.'">Yes</button>
							</div>
						</div>
					</div>
				</div>';
			$id = $row['prisoner_id'];
			$query2="SELECT  priosner_name FROM prisoner WHERE prisoner_id = $id";
			$result2=mysqli_query($con, $query2);
			$row2 = mysqli_fetch_assoc($result2);
			echo '<div class="accordion-item">
				<h2 class="accordion-header" id="heading"'.$i.'>
					<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse'.$i.'">From: '.$row['visitor_name'].'</button>									
				</h2>
				<div id="collapse'.$i.'" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
					<div class="card-body">
						<table>
							<tr><th> Request Id: </th><td>'.$row['visit_id'].'</td></tr>
							<tr><th> Prisoner to Visit: </th><td><a href="../manage data (admin)/table/tablePrisoner.php?fromId='.$id.'">'.$row2['priosner_name'].' (Id: '.$id.')</a></td></tr>
							<tr><th> Kinship: </th><td>'.$row['kinship'].'</td></tr>
							<tr><th> Email: </th><td>'.$row['email'].'</td></tr>
							<tr><th> Phone Number: </th><td>'.$row['phone_nb'].'</td></tr>
							<tr><th> Requested Date: </th><td>'.$row['visit_date'].'</td></tr>
						</table>
						<a href="#modalCenterA'.$i.'" role="button" class="btn btn-outline-success" data-bs-toggle="modal">Accept</a>
						<a href="#modalCenterB'.$i.'" role="button" class="btn btn-outline-danger" data-bs-toggle="modal">Reject</a>
						
				   </div>
				</div>
			
			</div>';
			$i++;
			
			
		}
	}
	else{
		echo ' <h1 class="display-6 animate__animated animate__fadeInDown">There are no requests from visitors</h1>';
	}
	
	
	
	
	
?>


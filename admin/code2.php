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
			$id = $row['prisoner_id'];
			$query2="SELECT  priosner_name FROM prisoner WHERE prisoner_id = $id";
			$result2=mysqli_query($con, $query2);
			$row2 = mysqli_fetch_assoc($result2);		 
			$string1 = "if(confirm('Are you sure?')){window.location.replace('index.php?id=".$row["visit_id"]."&status=accepted')}";
			$string2 = "if(confirm('Are you sure?')){window.location.replace('index.php?id=".$row["visit_id"]."&status=accepted')} ";
			echo '<div class="accordion-item">
				<h2 class="accordion-header" id="heading"'.$i.'>
					<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse'.$i.'">From: '.$row['visitor_name'].'</button>									
				</h2>
				<div id="collapse'.$i.'" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
					<div class="card-body">
						<p><span style="font-weight:bold"> Request Id: </span>'.$row['visit_id'].'</p>
						<p><span style="font-weight:bold">Prisoner to Visit: </span>'.$row2['priosner_name'].' (Id: '.$id.')</p>
						<p><span style="font-weight:bold">Kinship: </span>'.$row['kinship'].'</p>
						<p><span style="font-weight:bold">Email: </span>'.$row['email'].'</p>
						<p><span style="font-weight:bold">Phone Number: </span>'.$row['phone_nb'].'</p>
						<p><span style="font-weight:bold">Requested Date: </span>'.$row['visit_date'].'</p>
						<button type="button" class="btn btn-outline-success" onclick="'.$string1 .'">Accept</button>
						<button type="button" class="btn btn-outline-danger" onclick="'.$string2 .'">Reject</button>
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


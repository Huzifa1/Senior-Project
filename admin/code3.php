<?php
	require_once "../connection.php";
	$query="SELECT * FROM request NATURAL JOIN prisoner WHERE status = 'pending' AND block = '".$_SESSION['block']."'";
	$result=mysqli_query($con, $query);
	$i = 1000;
	$nbofrowsquery="select count(*) FROM request NATURAL JOIN prisoner WHERE status = 'pending' AND block = '".$_SESSION['block']."'";
	$nbofrowsresult=mysqli_query($con, $nbofrowsquery);
	$nbofrows = mysqli_fetch_assoc($nbofrowsresult);
	if(mysqli_num_rows($result)!==0){
		echo'<h1 class="display-6 animate__animated animate__fadeInDown" >Prisoner\'s Requests ('.$nbofrows['count(*)'].'):</h1>';
		while($row = mysqli_fetch_assoc($result)){
			$id = $row['prisoner_id'];
			$query2="SELECT  priosner_name FROM prisoner WHERE prisoner_id = $id";
			$result2=mysqli_query($con, $query2);
			$row2 = mysqli_fetch_assoc($result2);
			$string1 = "if(confirm('Are you sure?')){ window.location.replace('index.php?prisoner_id=".$id."&type=".$row['type']."&status=accepted') };";
			$string2 = "if(confirm('Are you sure?')){ window.location.replace('index.php?prisoner_id=".$id."&type=".$row['type']."&status=rejected') };";
			echo ' <div class="accordion-item">
				<h2 class="accordion-header" id="heading"'.$i.'>
					<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse'.$i.'">From: '.$row2['priosner_name'].'</button>									
				</h2>
				<div id="collapse'.$i.'" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
					<div class="card-body">
						<p><span style="font-weight:bold">Prisoner Id: </span>'.$id.'</p>
						<p><span style="font-weight:bold">Request: </span>'.$row['type'].'</p>
						<p><span style="font-weight:bold">Date: </span>'.$row['date'].'</p>

						<button type="button" class="btn btn-outline-success" onclick="'.$string1 .'">Accept</button>
						<button type="button" class="btn btn-outline-danger" onclick="'.$string2 .'">Reject</button>
				   </div>
				</div>
			
			</div>';
			$i++;
			
		}
	}
	else{
		echo ' <h1 class="display-6 animate__animated animate__fadeInDown">There are no requests from prisoners</h1>';
	}
	
	
	
	
	
?>
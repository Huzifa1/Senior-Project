<?php 
		
		require_once "../../connection.php";
		$selectquery="SELECT * FROM cell";
		$result1=mysqli_query($con, $selectquery);
		while($row = mysqli_fetch_assoc($result1)){
			$cell_nb = $row['cell_nb'];
			$selectquery="SELECT count(*) FROM cell NATURAL JOIN prisoner where cell_nb = $cell_nb";
			$resultquery=mysqli_query($con, $selectquery);
			$rowquery = mysqli_fetch_assoc($resultquery);
			$count = $rowquery['count(*)'];
			
			$selectquery="UPDATE cell SET nb_of_prisoners = $count WHERE cell_nb = $cell_nb";
			$result=mysqli_query($con, $selectquery);
			
			$selectquery="SELECT * FROM cell WHERE cell_nb = $cell_nb";
			$resultquery=mysqli_query($con, $selectquery);
			$rowquery = mysqli_fetch_assoc($resultquery);
			if($rowquery['capacity'] == $rowquery['nb_of_prisoners']){
				$selectquery="UPDATE cell SET status = 'Full' WHERE cell_nb = $cell_nb";
				$result=mysqli_query($con, $selectquery);
			}
			else if($rowquery['capacity'] > $rowquery['nb_of_prisoners']){
				$selectquery="UPDATE cell SET status = 'Not Full' WHERE cell_nb = $cell_nb";
				$result=mysqli_query($con, $selectquery);
			}
		}
		
		
		
		
		
		
?>
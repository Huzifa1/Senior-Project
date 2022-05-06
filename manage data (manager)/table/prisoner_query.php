<?php
	require_once "../../connection.php";

    
    $selectquery="SELECT * FROM prisoner";

        $count = 0;
        if(isset($_POST['prisonerNameValue']) || isset($_POST['prisonerIdValue']) || isset($_POST['prisonerCrimeValue']) || isset($_POST['prisonerCellValue']) || isset($_POST['prisonerDurationFromValue']) || isset($_POST['prisonerDurationToValue']) || isset($_POST['prisonerBlockValue']) || isset($_POST['prisonerAgeValue'])){
            $selectquery .= " WHERE";
        }


        if(isset($_POST['prisonerNameValue'])){
            $prisoner_name = $_POST['prisonerNameValue'];
            if($count == 0){
                $selectquery .= " priosner_name LIKE '%$prisoner_name%'";
				$count++;
            }
            else{
				$selectquery .= " and priosner_name LIKE '%$prisoner_name%'";
            }
        }

		if(isset($_POST['prisonerIdValue'])){
            $prisoner_id = $_POST['prisonerIdValue'];
            if($count == 0){
                $selectquery .= " prisoner_id = '$prisoner_id'";
				$count++;
            }
            else{
				$selectquery .= " and prisoner_id = '$prisoner_id'";
            }
        }
		
		if(isset($_POST['prisonerBlockValue'])){
            $block = $_POST['prisonerBlockValue'];
            if($count == 0){
                $selectquery .= " block = '$block'";
				$count++;
            }
            else{
				$selectquery .= " and block = '$block'";
            }
        }

        if(isset($_POST['prisonerCrimeValue'])){
            $crime = $_POST['prisonerCrimeValue'];
            if($count == 0){
                $selectquery .= " crime = '$crime'";
				$count++;
            }
            else{
				$selectquery .= " and crime = '$crime'";
            }
        }

        if(isset($_POST['prisonerCellValue'])){
            $cell_nb = $_POST['prisonerCellValue'];
            if($count == 0){
                $selectquery .= " cell_nb = '$cell_nb'";
				$count++;
            }
            else{
				$selectquery .= " and cell_nb = '$cell_nb'";
            }
        }

        if(isset($_POST['prisonerAgeValue'])){
            $age = $_POST['prisonerAgeValue'];
            if($count == 0){
                $selectquery .= " age = '$age'";
				$count++;
            }
            else{
				$selectquery .= " and age = '$age'";
            }
        }
	
		if(isset($_POST['prisonerDurationFromValue']) || isset($_POST['prisonerDurationToValue'])){
			$from_duration = 0;
			$to_duration = 0;
			if(isset($_POST['prisonerDurationFromValue'])){
				$from_duration = $_POST['prisonerDurationFromValue'];
			}
			if(isset($_POST['prisonerDurationToValue'])){
				$to_duration = $_POST['prisonerDurationToValue'];
			}
			  
            if($count == 0){
                $selectquery .= " duration between $from_duration and $to_duration";
				$count++;
            }
            else{
				$selectquery .= "and duration between $from_duration and $to_duration";
            }
        }

        if(isset($_GET['fromId'])){
            $selectquery = 'SELECT * FROM prisoner WHERE prisoner_id= ';
            $selectquery .= $_GET['fromId'];
        }

		$result=mysqli_query($con, $selectquery);
		$rowcount=mysqli_num_rows($result);
		
		if($rowcount != 0){
			while($row = mysqli_fetch_assoc($result)){

				echo'
				    <tr>
                        <td class="text-center">'.$row['prisoner_id'].'</td>
                        <td>'.$row['priosner_name'].'</td>
                        <td>'.$row['age'].'</td>
                        <td>'.$row['crime'].'</td>
                        <td>'.$row['duration'].' Months</td>
                        <td>'.$row['cell_nb'].'</td>
                        <td class="text-center">'.$row['block'].'</td>
                        <td class="td-actions text-center">
                            <button type="button" rel="tooltip" class="btn btn-success btn-just-icon btn-sm" data-original-title="" title="Edit" onclick="window.location.replace(\'../editprisoner/editprisoner.php?id='.$row['prisoner_id'].'\');">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" class="btn btn-primary btn-just-icon btn-sm" data-original-title="" title="See Location" onclick="window.location.replace(\'edit.php?longitude='.$row['longitude'].'&latitude='.$row['latitude'].'\');">
                                <i class="material-icons">map</i>
                            </button>
                            <button type="button" rel="tooltip" class="btn btn-danger btn-just-icon btn-sm" data-original-title="" title="Delete" onclick="window.location.replace(\'edit.php?id='.$row['prisoner_id'].'\');">
                            <i class="material-icons">close</i>
                            </button>
                        </td>
                    </tr>';



			}
		}
		else{
			echo '<h1>There is no matching for your search. </h1>';
			
		}
	


?>
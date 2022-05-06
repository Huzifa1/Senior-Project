<?php
	require_once "../../connection.php";

    
    $selectquery="SELECT * FROM request";

        $count = 0;
        if(isset($_POST['requestIdValue']) || isset($_POST['requestTypeValue']) || isset($_POST['requestStatusValue']) || (isset($_POST['requestDateValue'])  && $_POST['requestDateValue'] != '')){
            $selectquery .= " WHERE";
        }

		if(isset($_POST['requestIdValue'])){
            $prisoner_id = $_POST['requestIdValue'];
            if($count == 0){
                $selectquery .= " prisoner_id = '$prisoner_id'";
				$count++;
            }
            else{
				$selectquery .= " and prisoner_id = '$prisoner_id'";
            }
        }
		
		if(isset($_POST['requestTypeValue'])){
            $type = $_POST['requestTypeValue'];
            if($count == 0){
                $selectquery .= " type = '$type'";
				$count++;
            }
            else{
				$selectquery .= " and type = '$type'";
            }
        }

        if(isset($_POST['requestStatusValue'])){
            $status = $_POST['requestStatusValue'];
            if($count == 0){
                $selectquery .= " status = '$status'";
				$count++;
            }
            else{
				$selectquery .= " and status = '$status'";
            }
        }

        if(isset($_POST['requestDateValue']) && $_POST['requestDateValue'] != ''){
            $date = $_POST['requestDateValue'];
            if($count == 0){
                $selectquery .= " date = '$date'";
				$count++;
            }
            else{
				$selectquery .= " and date = '$date'";
            }
        }
		$result=mysqli_query($con, $selectquery);
		$rowcount=mysqli_num_rows($result);
		
		if($rowcount != 0){
			while($row = mysqli_fetch_assoc($result)){

				echo'
				    <tr>
                        <td class="text-left"><a href="tablePrisoner.php?fromId='.$row['prisoner_id'].'">'.$row['prisoner_id'].'</a></td>
                        <td>'.$row['type'].'</td>
                        <td>'.$row['status'].'</td>
                        <td class="text-center">'.$row['date'].'</td>
                    </tr>';



			}
		}
		else{
			echo '<h1>There is no matching for your search. </h1>';
			
		}
	


?>
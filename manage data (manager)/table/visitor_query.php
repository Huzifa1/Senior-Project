<?php
	require_once "../../connection.php";

    
    $selectquery="SELECT * FROM visitor";

        $count = 0;
        if(isset($_POST['visitorNameValue']) || isset($_POST['visitorIdValue']) || isset($_POST['visitorEmailValue']) || isset($_POST['visitorNumberValue']) || isset($_POST['visitorPrisonerValue']) || (isset($_POST['visitorDateValue']) && $_POST['visitorDateValue'] != '') ){
            $selectquery .= " WHERE";
        }


        if(isset($_POST['visitorNameValue'])){
            $visitor_name = $_POST['visitorNameValue'];
            if($count == 0){
                $selectquery .= " visitor_name LIKE '%$visitor_name%'";
				$count++;
            }
            else{
				$selectquery .= " and visitor_name LIKE '%$visitor_name%'";
            }
        }

		if(isset($_POST['visitorIdValue'])){
            $visit_id = $_POST['visitorIdValue'];
            if($count == 0){
                $selectquery .= " visit_id = '$visit_id'";
				$count++;
            }
            else{
				$selectquery .= " and visit_id = '$visit_id'";
            }
        }
		
		if(isset($_POST['visitorEmailValue'])){
            $email = $_POST['visitorEmailValue'];
            if($count == 0){
                $selectquery .= " email LIKE '%$email%'";
				$count++;
            }
            else{
				$selectquery .= " and email LIKE '%$email%'";
            }
        }

        if(isset($_POST['visitorNumberValue'])){
            $phone_nb = $_POST['visitorNumberValue'];
            if($count == 0){
                $selectquery .= " phone_nb LIKE '%$phone_nb%'";
				$count++;
            }
            else{
				$selectquery .= " and phone_nb LIKE '%$phone_nb%'";
            }
        }

        if(isset($_POST['visitorPrisonerValue'])){
            $prisoner_id = $_POST['visitorPrisonerValue'];
            if($count == 0){
                $selectquery .= " prisoner_id = '$prisoner_id'";
				$count++;
            }
            else{
				$selectquery .= " and prisoner_id = '$prisoner_id'";
            }
        }

        if(isset($_POST['visitorDateValue']) && $_POST['visitorDateValue'] != ''){
            $visit_date = $_POST['visitorDateValue'];
            if($count == 0){
                $selectquery .= " visit_date = '$visit_date'";
				$count++;
            }
            else{
				$selectquery .= " and visit_date = '$visit_date'";
            }
        }
	
		

		$result=mysqli_query($con, $selectquery);
		$rowcount=mysqli_num_rows($result);
		
		if($rowcount != 0){
			while($row = mysqli_fetch_assoc($result)){

				echo'
				    <tr>
                        <td class="text-center">'.$row['visit_id'].'</td>
                        <td>'.$row['visitor_name'].'</td>
                        <td>'.$row['phone_nb'].'</td>
                        <td>'.$row['email'].'</td>
                        <td>'.$row['visit_date'].' Months</td>
                        <td class="text-center"><a href="tablePrisoner.php?fromId='.$row['prisoner_id'].'">'.$row['prisoner_id'].'</a></td>
                        <td>'.$row['kinship'].'</td>
                        <td>'.$row['request_status'].'</td>
                    </tr>';



			}
		}
		else{
			echo '<h1>There is no matching for your search. </h1>';
			
		}
	


?>
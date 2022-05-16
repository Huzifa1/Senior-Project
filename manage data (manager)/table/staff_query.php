<?php
	require_once "../../connection.php";

    
    $selectquery="SELECT * FROM staff";

        $count = 0;
        if(isset($_POST['staffNameValue']) || isset($_POST['staffIdValue']) || isset($_POST['staffShiftValue']) || isset($_POST['staffJobValue']) || isset($_POST['staffSalaryFromValue']) || isset($_POST['staffSalaryToValue']) || isset($_POST['staffBlockValue'])){
            $selectquery .= " WHERE";
        }


        if(isset($_POST['staffNameValue'])){
            $staff_name = $_POST['staffNameValue'];
            if($count == 0){
                $selectquery .= " staff_name LIKE '%$staff_name%'";
				$count++;
            }
            else{
				$selectquery .= " and staff_name LIKE '%$staff_name%'";
            }
        }

		if(isset($_POST['staffIdValue'])){
            $staff_id = $_POST['staffIdValue'];
            if($count == 0){
                $selectquery .= " staff_id = '$staff_id'";
				$count++;
            }
            else{
				$selectquery .= " and staff_id = '$staff_id'";
            }
        }
		
		if(isset($_POST['staffBlockValue'])){
            $block = $_POST['staffBlockValue'];
            if($count == 0){
                $selectquery .= " block = '$block'";
				$count++;
            }
            else{
				$selectquery .= " and block = '$block'";
            }
        }

        if(isset($_POST['staffShiftValue'])){
            $staff_shift = $_POST['staffShiftValue'];
            if($count == 0){
                $selectquery .= " staff_shift = '$staff_shift'";
				$count++;
            }
            else{
				$selectquery .= " and staff_shift = '$staff_shift'";
            }
        }

        if(isset($_POST['staffJobValue'])){
            $staff_job = $_POST['staffJobValue'];
            if($count == 0){
                $selectquery .= " staff_job = '$staff_job'";
				$count++;
            }
            else{
				$selectquery .= " and staff_job = '$staff_job'";
            }
        }
	
		if(isset($_POST['staffSalaryFromValue']) || isset($_POST['staffSalaryToValue'])){
			$from_salary = 0;
			$to_salary = 0;
			if(isset($_POST['staffSalaryFromValue'])){
				$from_salary = $_POST['staffSalaryFromValue'];
			}
			if(isset($_POST['staffSalaryToValue'])){
				$to_salary = $_POST['staffSalaryToValue'];
			}
			  
            if($count == 0){
                $selectquery .= " staff_salary between $from_salary and $to_salary";
				$count++;
            }
            else{
				$selectquery .= "and staff_salary between $from_salary and $to_salary";
            }
        }


		$result=mysqli_query($con, $selectquery);
		$rowcount=mysqli_num_rows($result);
		$i = 0;
		if($rowcount != 0){
			while($row = mysqli_fetch_assoc($result)){

				$string = "window.location.replace('delete_staff.php?id=".$row["staff_id"]."')";
                echo '<div id="modalCenterA'.$i.'" class="modal fade" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Confirmation</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure, you want to delete?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" onclick="'.$string.'">Yes</button>
                                </div>
                            </div>
                        </div>
                    </div>';
				echo'
				    <tr>
                        <td class="text-center">'.$row['staff_id'].'</td>
                        <td>'.$row['staff_name'].'</td>
                        <td>'.$row['staff_job'].'</td>
                        <td>'.$row['staff_shift'].'</td>
                        <td>'.$row['staff_salary'].'$</td>
                        <td class="text-center">'.$row['block'].'</td>
                        <td class="td-actions text-right">
                            <button type="button" rel="tooltip" class="btn btn-success btn-just-icon btn-sm" data-original-title="" title="Edit" onclick="window.location.replace(\'../editstaff/editstaff.php?id='.$row['staff_id'].'\');">
                                <i class="material-icons">edit</i>
                            </button>
                            <a href="#modalCenterA'.$i.'" role="button" class="btn btn-danger btn-just-icon btn-sm" data-bs-toggle="modal"> <i class="material-icons">close</i></a>
                        </td>
                    </tr>';
                $i++;


			}
		}
		else{
			echo '<h1>There is no matching for your search. </h1>';
			
		}
	


?>
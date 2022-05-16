<?php
	require_once "../../connection.php";

    
    $selectquery="SELECT * FROM admin";

        $count = 0;
        if(isset($_POST['adminNameValue']) || isset($_POST['adminIdValue']) || isset($_POST['adminSalaryFromValue']) || isset($_POST['adminSalaryToValue']) || isset($_POST['adminBlockValue'])){
            $selectquery .= " WHERE";
        }


        if(isset($_POST['adminNameValue'])){
            $admin_name = $_POST['adminNameValue'];
            if($count == 0){
                $selectquery .= " admin_name LIKE '%$admin_name%'";
				$count++;
            }
            else{
				$selectquery .= " and admin_name LIKE '%$admin_name%'";
            }
        }

		if(isset($_POST['adminIdValue'])){
            $admin_id = $_POST['adminIdValue'];
            if($count == 0){
                $selectquery .= " admin_id = '$admin_id'";
				$count++;
            }
            else{
				$selectquery .= " and admin_id = '$admin_id'";
            }
        }
		
		
		if(isset($_POST['adminBlockValue'])){
            $block = $_POST['adminBlockValue'];
            if($count == 0){
                $selectquery .= " block = '$block'";
				$count++;
            }
            else{
				$selectquery .= " and block = '$block'";
            }
        }
		
		if(isset($_POST['adminSalaryFromValue']) || isset($_POST['adminSalaryToValue'])){
			$from_salary = 0;
			$to_salary = 0;
			if(isset($_POST['adminSalaryFromValue'])){
				$from_salary = $_POST['adminSalaryFromValue'];
			}
			if(isset($_POST['adminSalaryToValue'])){
				$to_salary = $_POST['adminSalaryToValue'];
			}
			  
            if($count == 0){
                $selectquery .= " admin_salary between $from_salary and $to_salary";
				$count++;
            }
            else{
				$selectquery .= "and admin_salary between $from_salary and $to_salary";
            }
        }


		$result=mysqli_query($con, $selectquery);
		$rowcount=mysqli_num_rows($result);
		$i = 0;
		if($rowcount != 0){
			while($row = mysqli_fetch_assoc($result)){
				$string = "window.location.replace('delete_admin.php?id=".$row["admin_id"]."')";
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
				<td class="text-center">'.$row['admin_id'].'</td>
				<td>'.$row['admin_name'].'</td>
				<td>'.$row['admin_salary'].'$</td>
				<td class="text-center">'.$row['block'].'</td>
				<td class="td-actions text-right">
					<button type="button" rel="tooltip" class="btn btn-success btn-just-icon btn-sm" data-original-title="" title="Edit" onclick="window.location.replace(\'../editadmin/editadmin.php?id='.$row['admin_id'].'\');">
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
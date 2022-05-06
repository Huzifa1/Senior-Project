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
		
		if($rowcount != 0){
			while($row = mysqli_fetch_assoc($result)){

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
					<button type="button" rel="tooltip" class="btn btn-danger btn-just-icon btn-sm" data-original-title="" title="Delete" onclick="window.location.replace(\'edit.php?id='.$row['admin_id'].'\');">
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
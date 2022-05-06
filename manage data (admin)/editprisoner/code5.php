<?php
	require_once "../../connection.php";
	$id = 0;
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}
	$selectquery1="SELECT block, cell_nb FROM prisoner WHERE prisoner_id ='" . $id."'";
	$result1=mysqli_query($con, $selectquery1);
	$row1 = mysqli_fetch_assoc($result1);
	$block = $row1['block'];
	if(isset($_GET['block'])){
		$block = $_GET['block'];
	}
    $selectquery2="SELECT cell_nb, status FROM cell WHERE block ='" . $block."'";
	$result2=mysqli_query($con, $selectquery2);
	while($row2 = mysqli_fetch_assoc($result2)){
		if($row2['status']!='Full'){
			echo '<option value="'.$row2['cell_nb'].'">'.$row2['cell_nb'].'</option>';

		}
		else{
			if($row1['cell_nb'] == $row2['cell_nb']){
				echo '<option value="'.$row2['cell_nb'].'">'.$row2['cell_nb'].'</option>';
			}
			else{
				echo '<option value="'.$row2['cell_nb'].'" disabled>'.$row2['cell_nb'].' (Full)</option>';
			}
			
		}
        
    }   
?>

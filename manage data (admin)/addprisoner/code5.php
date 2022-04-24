<?php
	require_once "../../connection.php";
    $block = 'A';
    if(isset($_GET['block'])){
        $block = $_GET['block'];
    }
    $selectquery="SELECT cell_nb, status FROM cell WHERE block ='" . $block."'";
	$result=mysqli_query($con, $selectquery);
	while($row = mysqli_fetch_assoc($result)){
		if($row['status']=='Full'){
			echo '<option value="'.$row['cell_nb'].'" disabled>'.$row['cell_nb'].' (Full)</option>';
		}
		else{
			echo '<option value="'.$row['cell_nb'].'">'.$row['cell_nb'].'</option>';
		}
        
    }   
?>
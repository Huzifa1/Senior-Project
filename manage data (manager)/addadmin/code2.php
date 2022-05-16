<?php
	require_once "../../connection.php";
    $selectquery1="SELECT block FROM block";
	$selectquery2 = "SELECT block FROM admin"; 
	$result1=mysqli_query($con, $selectquery1);
	if(mysqli_num_rows($result1)!==0){
	while($row1 = mysqli_fetch_assoc($result1)){
		$result2=mysqli_query($con, $selectquery2);
		$ifExist = false;
		while($row2 = mysqli_fetch_assoc($result2)){
			if($row1['block'] == $row2['block']){
				$ifExist = true;
			}
			
		}
		if($ifExist){
			
			?>
			<option <?php if(isset($block)){ if($block==$row1['block']){echo 'selected="selected"';}}?> value="<?php echo $row1['block']; ?>" disabled><?php echo $row1['block']; ?> (Already Exist)</option>		
		<?php
		}
		else{
			?>
			<option <?php if(isset($block)){ if($block==$row1['block']){echo 'selected="selected"';}}?> value="<?php echo $row1['block']; ?>"><?php echo $row1['block']; ?></option>
			<?php
		}
    }   
	}
	else{
		echo '<h3> Each block has an admin. </h3>';
	}


?>
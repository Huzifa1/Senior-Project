<?php
	require_once "../../connection.php";
	$id = 0;
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    $selectquery1="SELECT block FROM block";// A B C D
	$selectquery2 = "SELECT block FROM admin WHERE admin_id != " . $id ; //A C
	$result1=mysqli_query($con, $selectquery1);
	
	
	while($row1 = mysqli_fetch_assoc($result1)){
		$result2=mysqli_query($con, $selectquery2);
		$ifExist = false;
		while($row2 = mysqli_fetch_assoc($result2)){
			if($row1['block'] == $row2['block']){
				$ifExist = true;
			}
			
		}
		if($ifExist){
			echo '<option value="' .$row1['block'].'" disabled> ' .$row1['block'].' (Already Exist) </option>';
		}
		else{

		

		?>
        <option  <?php $selectrow['block']==$row1['block']?'selected="selected"':'';?> value="<?php  echo $row1['block']; ?>"> <?php  echo $row1['block']; ?> </option>';
		<?php
		}
    }   
	

?>
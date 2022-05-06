<?php
	require_once "../../connection.php";
    $selectquery="SELECT block FROM block";
	$result=mysqli_query($con, $selectquery);
	while($row = mysqli_fetch_assoc($result)){
?>

        <option  <?=$selectrow['block']==$row['block']?'selected="selected"':'';?> value="<?php  echo $row['block']; ?>"> <?php  echo $row['block']; ?> </option>';
<?php
    }   
?>
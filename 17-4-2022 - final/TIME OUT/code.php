<?php 
	

	require_once "../../connection.php";
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		
	$query="select * FROM item WHERE id = $id";
	$result=mysqli_query($con, $query);
	$row = mysqli_fetch_assoc($result);
	

	echo '
		  
		  <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <img src="'.$row['photo_src'].'" alt="">

          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Item information</h3>
              <ul>
                <li><strong>Item ID</strong>: '.$row['id'].'</li>
                <li><strong>Category</strong>: '.$row['category'].'</li>
                <li><strong>Size</strong>: '.$row['size'].' </li>
                <li><strong>Price</strong>: '.$row['price'].'$</li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Item Details:</h2>
              <p>'.$row['details'].'</p>
            </div>
          </div>

        </div>

      </div>
    </section>';
		  
		
	}
	
?>
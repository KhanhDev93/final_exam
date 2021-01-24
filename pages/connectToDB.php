
<?php 
		
  $servername = "localhost";
  $username = "username";
  $password = "";
  $dbname = "productdb";
  
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // get last_id 
  $sql = "SELECT id FROM product ORDER BY id DESC LIMIT 1";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      $last_id = $row['id'] + 1;
    }
  } else {
      $last_id = 1;
  }
  
?>

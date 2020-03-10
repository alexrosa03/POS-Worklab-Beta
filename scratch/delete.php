<html>
  <head>
    <meta http-equiv="Refresh" content="2; url='customer_list.php'" />
  </head>
  <body>
    <h2 style="font-family:arial; color:green;">
  <?php
    $username = "root";
    $password = "";
    $dbname = "worklab";
    $id=$_GET['id'];
    
    // Create connection
    $conn = new mysqli("localhost", $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // sql to delete a record
    $sql = "DELETE FROM Customer WHERE customer_id=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    
    $conn->close();
    ?>

  </h2>
  </body>
  
</html>
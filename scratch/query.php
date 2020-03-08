<html>
  <head>
    <meta http-equiv="Refresh" content="2; url='customer_form.php'" />
  </head>
  <body>
    <h2 style="font-family:arial; color:green;">
  <?php
    $username="root";
    $password="";
    $database="worklab";
    $name=$_POST['custName'];
    $id=$_POST['custId'];
    $time=$_POST['time'];
    $date=$_POST['date'];
    $rateType=$_POST['rateType'];
    $ratePurch=$_POST['ratePurch'];
    $purpose=$_POST['purpose'];
    
    if($rateType=="Student"){
      $rateType="1000001";
    }else if($rateType=="Regular"){
      $rateType="1000002";
    }
    $mysqli = new mysqli("localhost", $username, $password, $database);

    $mysqli->select_db($database) or die( "Unable to select database");
    
    $sql = "INSERT INTO customer (customer_id, customer_name, purpose, rate_code, time_in,date_today)
    VALUES ($id,'$name','$purpose', '$rateType', '$time', '$date');";

    if ($mysqli->query($sql) == TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error creating record";
    }
    
  ?>
  </h2>
  </body>
  
</html>
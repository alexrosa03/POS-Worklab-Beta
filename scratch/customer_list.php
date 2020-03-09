<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CUSTOMER LIST</title>
<link rel="stylesheet" type="text/css" href="../scripts/local/style.css">
</head>
<body>

			  
	<nav class="navbar">
		<a href="LANDING PAGE.html"><img class= "logo" src="../assets/img/output-onlinepngtools.png"></a>
			<a href="#">Customers</a>
			<a href="#">Inventory</a>
			<a href="#">Rates</a>
			<a href="#">Employees</a><br>
		<img class="searchLogo" src="../assets/img/search.png">
		<img class="searchLogo" src="../assets/img/bell.png">
	</nav>
	
			  			
		<div class="content">
			<h1>Customer List View</h1>
		</div>

		<div class="btn">
			<a href="customer form.html"><button>Save</a></button><br>
		</div>
		
		<table>
			<thead >
				<tr>
					<th class="mainHeader" colspan="7">Date</th>
				</tr>
			</thead>
			<thead>
				<tr>
					<th class="tableHeader">ID</th>
					<th class="tableHeader">Name</th>
					<th class="tableHeader">Purpose</th>
					<th class="tableHeader">Rate</th>
					<th class="tableHeader">Discount</th>
					<th class="tableHeader">In</th>
					<th class="tableHeader">Out</th>
				</tr>
			</thead>
			<form id="form" action ="delete.php" method="get">
			<?php
				 $username="root";
				 $password="";
				 $dbname="worklab";

				// Create connection
				$conn = new mysqli("localhost", $username, $password, $dbname);
					// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}

				$sql = "SELECT customer_id, customer_name, purpose, rate_code, discount_status, time_in, time_out FROM Customer";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// output data of each row
					$ctr=0;
					while($row = $result->fetch_assoc()) {
						echo "<tbody><tr>";
						echo "<td><a href='delete.php?id=".$row['customer_id']."'>hallo</a>" . $row["customer_id"]. " </td><td> " . 
						$row["customer_name"]. "</td><td>" . 
						$row["purpose"]. "</td><td>" . 
						$row["rate_code"]. "</td><td>" .
						$row["discount_status"]. "</td><td>" .
						$row["time_in"]. "</td><td>" . 
						$row["time_out"]. "</td></tr></tbody>";
					}
				} else {
					echo "0 results";
				}

				mysqli_close($conn);
			?>
			<tbody>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					</tr>
			</tbody>

			<tbody>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					</tr>
			</tbody>

			<tbody>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					</tr>
			</tbody>			
		</table>
			</form>

		<div class="btn1">
			<button>Edit</button>
		</div>
		<div class="btn2">
			<button>Delete</button>
		</div>

	</div>

    

					
</body>

    <script src="https://code.iconify.design/1/1.0.4/iconify.min.js"></script>
    <script src="../public/js/jquery.min.js"></script>
	<script src="../public/=js/jquery-ui.min.js"></script>


    <script>
		$(document).ready(function () {
			$("#del").click(function(){
		
		}
    </script>
</html>
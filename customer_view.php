<!-- View the list of added customers -->
<!DOCTYPE html>
<html>
<head>
  <title>Customer Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <script src=""></script>
  <script src="./js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Assignment 2</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="customer_view.php">View</a></li>
      <li><a href="customer_add.html">Add</a></li>
    </ul>
  </div>
</nav>
  
<!-- Navbar ended -->

			<div class="container">
				<div class="row" style="margin-top:80px">
					<div class="col-sm-12">
						<h2>View Customer List</h2>
						<!-- create a bootstrap table -->
							<div class="table-responsive">
							  <table class="table table-hover">
							    <tr>
							    	<th>First Name</th>
							    	<th>Last Name</th>
							    	<th>Address</th>
							    	<th>City</th>
							    	<th>State</th>
							    	<th>Zip</th>
							    	<th>Email</th>
							    	<th>Phone</th>
							    </tr>

							 <?php // query.php

										// require_once 'login.php';

										// login.php
										$hn = 'www.it354.com';
										$db = 'it354_students';
										$un = 'it354_students';
										$pw = 'steinway';

										$conn = new mysqli($hn, $un, $pw, $db);
										if ($conn->connect_error) die($conn->connect_error);

										$query = "SELECT * FROM customers";
										$result = $conn->query($query);
										if (!$result) die($conn->error);

										$rows = $result->num_rows;

										for ($j = 0 ; $j < $rows ; ++$j)
										{
										  $result-> data_seek($j);
										  $row = $result->fetch_array(MYSQLI_ASSOC);

										  echo '<tr><td>' . $row['firstName'] . '</td>';
										  echo '<td>' . $row['lastName'] . '</td>';
										  echo '<td>' . $row['address'] . '</td>';
										  echo '<td>' . $row['city'] . '</td>';
										  echo '<td>' . $row['state'] . '</td>';
										  echo '<td>' . $row['zip'] . '</td>';
										  echo '<td>' . $row['email'] . '</td>';
										  echo '<td>' . $row['phone'] . '</td></tr>';
										}

										$result->close();
										$conn->close();
								?>

							 </table>
						</div>
					</div> 
				</div>
			</div> 

		</div>

	<!-- Bootstrap JS -->
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/npm.js"></script>
	<script src="./js/bootstrap.js"></script>
	
	</body>
</html>


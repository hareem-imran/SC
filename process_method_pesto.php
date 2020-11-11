<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet" media="screen">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">
<link rel="icon" href="images/favicon.ico">

</head>

	<div class="container">
<?php
include_once 'database.php';
if(isset($_POST['save_method']))
{	 
	$method_id_1 = $_POST['method_id_1'];
	 $rec_method = $_POST['rec_method'];

	 // $image = $_POST['image'];
	 $sql = "INSERT INTO method (method_id,rec_method)
	 VALUES ('method_id_1','$rec_method')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
	<br>
			<a class="btn btn-default-btn-xs btn-success" href="chapli_kabab_pesto_method.php"><i class="glyphicon glyphicon-chevron-left"></i> Previous</a>
			<a class="btn btn-default-btn-xs btn-primary" href="chapli_kabab_pesto_method.php"><i class="glyphicon glyphicon-refresh"></i> Refresh</a>
			<a class="btn btn-default-btn-xs btn-success" href="#"><i class="glyphicon glyphicon-chevron-right"></i> Next</a>
		</div>


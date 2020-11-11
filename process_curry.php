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
if(isset($_POST['save_curry']))
{	 
	 $ing_name_1 = $_POST['ing_name_1'];
	 $ing_quantity_1 = $_POST['ing_quantity_1'];
	 $ing_name_2 = $_POST['ing_name_2'];
	 $ing_quantity_2 = $_POST['ing_quantity_2'];
	 $ing_name_3 = $_POST['ing_name_3'];
	 $ing_quantity_3 = $_POST['ing_quantity_3'];

	 // $image = $_POST['image'];
	 $sql = "INSERT INTO recipe_curry (ing_name,ing_quantity)
	 VALUES 
	 ('$ing_name_1','$ing_quantity_1'),
	 ('$ing_name_2','$ing_quantity_2'),
	 ('$ing_name_3','$ing_quantity_3')";
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
<a class="btn btn-default-btn-xs btn-primary" href="ingredient_chapli_kabab_curry.php"><i class="glyphicon glyphicon-refresh"></i> Refresh</a>
<a class="btn btn-default-btn-xs btn-success" href="chapli_kabab_curry_method.php"><i class="glyphicon glyphicon-chevron-right"></i> Next</a>
</div>


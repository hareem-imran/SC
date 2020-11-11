<!DOCTYPE html>
<html>
	<head>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet" media="screen">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">
		<link rel="icon" href="images/favicon.ico">
		<title>K&N's Chapli Kabab Recipe Entry</title>
			
		<script language="javascript">
			function SelectRedirect(){
			// ON selection of section this function will work
			//alert( document.getElementById('s1').value);

			switch(document.getElementById('s1').value)
			{
			case "chapli_kabab":
			window.location="ingredient_chapli_kabab_baked.php";
			break;

			case "chapli_kabab_pizza":
			window.location="ingredient_chapli_kabab_pizza.php";
			break;

			case "chapli_kabab_burger":
			window.location="ingredient_chapli_kabab_burger.php";
			break;
			case "chapli_kabab_casserole":
			window.location="ingredient_chapli_kabab_casserole.php";
			break;

			case "chapli_kabab_coconut_curry":
			window.location="ingredient_chapli_kabab_coconut_curry.php";
			break;

			case "chapli_kabab_meuniere":
			window.location="ingredient_chapli_kabab_meuniere.php";
			break;

			case "chapli_kabab_chilli":
			window.location="ingredient_chapli_kabab_chilli.php";
			break;

			case "chapli_kabab_pesto":
			window.location="ingredient_chapli_kabab_pesto.php";
			break;

			case "chapli_kabab_pita":
			window.location="ingredient_chapli_kabab_pita.php";
			break;

			case "chapli_kabab_naan":
			window.location="ingredient_chapli_kabab_naan.php";
			break;

			case "chapli_kabab_roll":
			window.location="ingredient_chapli_kabab_roll.php";
			break;






			/// Can be extended to other different selections of SubCategory //////
			default:
			window.location="../"; // if no selection matches then redirected to home page
			break;
			}// end of switch 
			}
			////////////////// 
		</script>
	</head>

	<body>
		<div class="container">
	        <div class="row">
	            <div class="form-group">
			       <div class="col-md-12">
			       	

						<fieldset>
							<legend><center>Chapli Kabab Recipes</center></legend>
							<div class="form-group">
								<label class="col-md-4 control-label">Select Chapli Kabab Recipe: </label>
								<div class="col-md-4">
								<SELECT id="s1" NAME="section" onChange="SelectRedirect();" class="form-control input-md">
								<Option value="">Select Chapli Kabab Recipe...</option>
								<Option value="chapli_kabab">Baked Chapli Kabab</option>
								<Option value="chapli_kabab_pizza">Chapli Kabab Pizza</option>
								<Option value="chapli_kabab_burger">Chapli Kabab Burger</option>
								<Option value="chapli_kabab_casserole">Chapli Kabab Casserole</option>
								<Option value="chapli_kabab_coconut_curry">Chapli Kabab Coconut Curry</option>
								<Option value="chapli_kabab_meuniere">Chapli Kabab Meuniere</option>
								<Option value="chapli_kabab_chilli">Chapli Kabab with Chilli Sesame</option>
								<Option value="chapli_kabab_pesto">Pesto Chapli Kabab</option>
								<Option value="chapli_kabab_pita">Pita Chapli Kabab</option>
								<Option value="chapli_kabab_naan">Chapli Kabab Naan</option>
								<Option value="chapli_kabab_roll">Chapli Kabab Roll</option>
								</SELECT>
								</div>
							</div>
						</fieldset>
					</div>
				</div>
			</div>
		</div>




				<div class="col-md-4">
					<form action="" method="post" class="form-group">
						<label class="col-md-4 control-label">Create Recipe: </label>
					    <input type="text" name="pageTitle" id="pageTitle" class="form-control input-md" /><br>
					    <!-- <input type="submit" name="sub" value="Submit" /> -->
					    <div class="form-group">
                          <label class="col-md-4 control-label" for="btn-save"></label>
                          <div class="col-md-4">
						    <button id="btn-save" name="sub" class="btn btn-success" 
						    onClick="<?php header("Location: /index.php");?>"
						    >Create Recipe
						    <i class="glyphicon glyphicon-chevron-right"></i>
							</button></div>
						</div>
					</form>
				</div>	

<?php
if(isset($_POST['sub'])) {
    $newpage = '<html><head><title>' . $_POST['pageTitle'] . '</title></head><body><-- Whatever you want to put here --></body></html>';
    file_put_contents($_POST['pageTitle'], $newpage );

}

?>
	</body>

</html>
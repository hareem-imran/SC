<!DOCTYPE html>
<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet" media="screen">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">
<link rel="icon" href="images/favicon.ico">
<title>K&N's Chapli Kabab Roll Method</title>

</head>
  <body>
    <div class="container">
        <div class="row">
            <div class="form-group">

                <!-- FORM  -->      
       <div class="col-md-12">
           
        <form class="form-horizontal" id="form-edit-client" method="post" action="process_method_roll.php">
        <fieldset>

        <!-- Form Name -->
        <legend><center>Chapli Kabab Roll Method</center></legend>



                        <!-- Method -->
                         <div class="form-group">
                          <label class="col-md-4 control-label" for="method_id_1">ID</label>  
                          <div class="col-md-4">
                          <input id="method_id_1" name="method_id_1" type="text" placeholder="enter method id..." class="form-control input-md">
                         <!--  <span class="help-block">Type Ingredient</span>  --> 
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="rec_method">Method</label>  
                          <div class="col-md-4">
                          <textarea id="rec_method" name="rec_method" type="text" placeholder="enter method..." class="form-control input-md"></textarea>
                          <!-- <span class="help-block">Type Ingredient</span>   -->
                          </div>
                        </div>

                     


                        <!-- Button -->

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="btn-save"></label>
                          <div class="col-md-4">
                            <a class="btn btn-default-btn-xs btn-success" href="ingredient_chapli_kabab_roll.php"><i class="glyphicon glyphicon-chevron-left"></i>Previous</a>
                            <button id="btn-save" name="save_method" class="btn btn-success">Save</button>
                          </div>
                        </div>



                    </fieldset>
                </form>
        </div>
    <div>
</div>
  </body>
</html>
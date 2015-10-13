<?php
include_once 'register.inc.php';
include_once 'functions.php'; 
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>


<!--Metas!-->

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<!--Links Boostrap and main css-->

  <title>UbySpace Sign in</title>
      <style class="anchorjs"></style>
      <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css"> 
    <link rel="stylesheet" type="text/css" href="css/signup.css">
    <link rel="shortcut icon" type="png" href="icono.png">

<!-- Basic Js and Boostrap Js -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="js/sha512.js"> </script>
<script src="js/forms.js"> </script>

<script src="js/bug.js"></script>
  </head>

  <body>
    <div class="container">    
        <div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                                    <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>


                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="loginerror.php">Sign In</a></div>
                        </div>  
                        <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" role="form" method="post" <?php echo esc_url($_SERVER['PHP_SELF']); ?> name="registration_form">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>


                                <div class="pull-center">

    <h2>Registration</h2>

</div>
                                                                  
                                <div class="form-group">
                                    <label for="icode" class="col-md-3 control-label">Username</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="username" placeholder="Username" id="username" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="icode" class="col-md-3 control-label">Confirm Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" id="confirmpwd" name="confirmpwd" placeholder="Confirm Password" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email Address" required>
                                    </div>
                                </div>
                                <hr>


  <div class="pull-center" >
    <h2>Character Bazaar</h2>

</div>



                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">EVE API Key ID</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="KeyID" placeholder="Key ID">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">API Vcode</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="Vcode" placeholder="Verification Code">
                                    </div>
                                </div>
   <hr>

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                    <input type='hidden' name='date' value='$date'>
                                        <input id="btn-signup" type="button" class="btn btn-info" onclick="return regformhash(this.form,
                                   this.form.username,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd);" value="Register" />
                                    </div>
                                </div>
                           
                            </form>

                         </div>
                    </div>
      </div>
    </div>
    <p>Return to the <a href="index.php">login page</a>.</p>
  </body>
</html>
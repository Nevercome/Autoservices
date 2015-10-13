<?php
include_once 'db_connect.php';
include_once 'functions.php';
 
sec_session_start();
 
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}

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
    <link rel="stylesheet" type="text/css" href="css/loginerror.css">
    <link rel="shortcut icon" type="png" href="icono.png">

<!-- Basic Js and Boostrap Js -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script> 
<script src="js/bug.js"></script>

  </head>

  <body>
    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form action="loginprocess.php" method="post" class="form-horizontal" role="form" name= "login_form">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input  type="text" class="form-control" name="email" value="" placeholder="Email" required>                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="p" type="password" class="form-control" name="p" placeholder="password" required>
                                    </div>
                                    

                                
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        </label>
                                      </div>
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                    <input type="button" 
                   value="Login" 
                   onclick="formhash(this.form, this.form.p);" />
          

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
 <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
<?php
        if (login_check($mysqli) == true) {
                        echo '<p>Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['username']) . '.</p>';
 
            echo '<p>Do you want to change user? <a href="includes/logout.php">Log out</a>.</p>';
        } else {
                        echo '<p>Currently logged ' . $logged . '.</p>';
                        echo "<p>If you don't have a login, please <a href='register.php'>register</a></p>";
                }
?>   
                                        </div>
                                   </div>
                        </div>   
                    </form>     
                </div>                     
            </div>  
        </div>
	</div>


</body>


</html>
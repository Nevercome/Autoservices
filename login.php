<?php
  session_start();
?>


<!DOCTYPE html>
<html lang="en">
  <head>


<!--Metas!-->

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<!--Links Boostrap and main css-->

  <title>UbySpace</title>
      <style class="anchorjs"> </style>
      <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css"> 
    <link rel="stylesheet" type="text/css" href="css/ubycss.css">
    <link rel="shortcut icon" type="png" href="icono.png">

<!-- Basic Js and Boostrap Js -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

 </head>

  <body>

      <form method="post" action="validar.php">
<div id="Login" class="modal fade" role="dialog" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">

        <h4 class="modal-title">Sign In</h4>
      </div>



  <div class="modal-body" >
            <p>Sign In</p>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="username" class="form-control" placeholder="Email" name= "user">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" placeholder="Password" name="pw">
  </div>

  <div class="checkbox">
             <label>
             <input type="checkbox"> remember me
            </label>
          </div>
          <div class="modal-footer">
          <input type="submit" class="btn btn-default" value="Entrar" name= "login">
          </div>
        </div>
      </div>
    </div>
  </div>
</form>


  </body>
 
  </html>
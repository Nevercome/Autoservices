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




  <div class="modal-body" >
            <p>Sign up</p>
 

<div class="panel panel-default">
  <div class="input-group">
         <span class="input-group-addon" id="basic-addon1">Username</span>
        <input type="text" class="form-control" name="user" autocomplete="off" required><br><br>
        </div>


        <div class="input-group">
         <span class="input-group-addon" id="basic-addon1">Password</span>
        <input type="password" class="form-control" name="pw" autocomplete="off" required><br><br>
        </div>

        <div class="input-group">
         <span class="input-group-addon" id="basic-addon1">Confirm Password</span>
        <input type="password" class="form-control" name="cpw" autocomplete="off" required><br><br>
        </div>

        <div class="input-group">
         <span class="input-group-addon" id="basic-addon1">Email</span>
        <input type="email" class="form-control" name="email" autocomplete="off" required><br><br>
        </div>

             <label>
             <input type="checkbox" required> Option one is this and that&mdash;be sure to include why it's great
            </label>


      <div class="modal-footer">
        <input type="submit" class="btn btn-success" name="submitreg" value="Entrar" id="button">
      </div>

    </div>

</form>
</div>

  </body>
 
  </html>
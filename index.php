<?php
include_once 'db_connect.php';
include_once 'functions.php';
 
sec_session_start();

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
      <style class="anchorjs"></style>
      <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css"> 
    <link rel="stylesheet" type="text/css" href="css/ubycss.css">
    <link rel="shortcut icon" type="png" href="icono.png">

<!-- Basic Js and Boostrap Js -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="js/bug.js"></script>
  </head>

  <body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">UbySpace</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">


          <a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">CCP</a></li>
            <li><a href="#">CSM</a></li>
            <li><a href="#">Upcoming Updates</a></li>
            <li><a href="#">SISI NEWS</a></li>
            <li><a href="#">Null Life</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Third party Software</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">EULA UPdates</a></li>
          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">

      <li data-toggle="modal"><a href=""> 


      <?php  if (login_check($mysqli) == true) {

$name = htmlentities($_SESSION['username']);

        echo $name; } ?> </a></li>

        <?php
        if (login_check($mysqli) == true) {
      echo '<li><a href="#">Your Characters</a></li> ';//  Sign up
       echo '<li data-toggle="modal" data-target="#Logoff"><a href="logout.php">Log Out</a></li>  '; // Log Off
        } else {
             
      echo '<li ><a href="login.php">Log in</a></li>';// Log In

      echo '<li><a href="register.php">Sign up</a></li> ';//  Sign up
                }
?>   

   
        <li><a href="#">Help</a></li>
        <li></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Account Managament</a></li>
            <li><a href="#">Forum</a></li>
            <li><a href="#">ZKillMails</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Planetary Interaction</a></li>
            <li role="separator" class="divider"></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

    <div class="jumbotron">
      <div class="container">
        <h1>Citadeles are under construction!</h1>
        <p>CCP's team are working hard in this proyect.</p>
        <a href="#">Read more</a>
      </div>
    </div> 

<hr>

<div class="row">
  <div class="news" >
    <h2>Character Bazaar</h2>
  </div>
</div>

<hr>

    <div class="learn-more">
<table class="table">
  ...
</table>
    </div>

<hr>



<div class="row">
	<div class="news" >
		<h2>News</h2>
	</div>
</div>
<hr>


<!-- NEWS! -->

<!-- 1 -->

<div class="container">
  <div class="row">

<div class="col-sm-6 col-md-4">
  <div class="thumbnail">
    <a href="und.html" title="null" target="_blank">
      <p><img src="imagen/0.jpg" class="img-responsive" alt="Cinque Terre" /></p>
      </a>
    <div class="caption">
        <a href="#">Citadeles are under construction</a>
    </div>
  </div>
</div>

<!-- 2 -->

<div class="col-sm-6 col-md-4">
 <div class="thumbnail">
    <a href="#" title="null" target="_blank">
      <p><img src="imagen/4.jpg" class="img-responsive" alt="Cinque Terre"/></p>
    </a>
    <div class="caption">
        <a href="#">Amarr empire is preparing their forces</a>
      </div>
    </div>
  </div>

<!-- 3 -->

 <div class="col-sm-6 col-md-4">
  <div class="thumbnail">
    <a href="#" title="null" target="_blank">
      <img src="imagen/2.jpg" class="img-responsive" alt="Cinque Terre" />
    </a>
       <div class="caption">
        <a href="#">Empress Jamyl Sarum death confirmed</a>
      </div>
    </div>
  </div>
</div> <!-- /row -->

<!-- 4 -->

<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <a class="blocknews" href="#" title="null" target="_blank">
        <img src="imagen/10.png" class="img-responsive" alt="Cinque Terre" width="370" height="250"/>
      </a>
     <div class="caption">
        <a href="#">Begins exploitation planets</a>
    </div>
  </div>
</div>

<!-- 5 -->

 <div class="col-sm-6 col-md-4">
   <div class="thumbnail">
      <a class="blocknews" href="#" title="null" target="_blank">
        <img src="imagen/5.jpg" class="img-responsive" alt="Cinque Terre" width="370" height="250"/>
      </a>
    <div class="caption">
        <a href="#">Riot in trade hubs</a>
     </div> 
  </div>
</div>

<!-- 6 -->

<div class="col-sm-6 col-md-4">
  <div class="thumbnail">
    <a class="blocknews" href="#" title="null" target="_blank">
      <img src="imagen/1.jpg" class="img-responsive" alt="Cinque Terre" width="370" height="250"/>
    </a>
      <div class="caption">
        <a href="#">The trade between regions</a>
      </div>   
    </div>
  </div>
</div><!-- /row -->

<!-- 7 -->

<div class="row"> 

<div class="col-sm-6 col-md-4">
  <div class="thumbnail">
      <a class="blocknews" href="#" title="null" target="_blank">
      <img src="imagen/7.jpg" class="img-responsive" alt="Cinque Terre" width="370" height="250"/>
      </a> 
    <div class="caption">
        <a href="#">First battle on the ground</a>
    </div>
  </div>
</div>

<!-- 8 -->

<div class="col-sm-6 col-md-4">
  <div class="thumbnail">
    <a class="blocknews" href="#" title="null" target="_blank">
      <img src="imagen/8.jpg" class="img-responsive" alt="Cinque Terre" width="370" height="250"/>
    </a>
      <div class="caption">
        <a href="#">The rise of a new species</a>
      </div>
    </div>
  </div>

<!-- 9 -->

     <div class="col-sm-6 col-md-4">
 <div class="thumbnail">
    <a class="blocknews" href="#" title="null" target="_blank">
      <img src="imagen/9.jpg" class="img-responsive" alt="Cinque Terre" width="370" height="250"/>

        </a>
        <div class="caption">
          <a href="#">Remains of collapsed Eve Gatee</a>
        </div>
      </div>
    </div>
  </div><!-- /row -->
</div><!-- /.container-->

    <hr>

<div>
 <div class="bottom-w">
    <div class="row">
      <div class="container">
          <div class="col-md-8">
            <p>site design / logo © 2015 UbySpace Inc <a href="#">Get in touch with us</a> </p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div> <!-- -->
</div><!-- -->


<!--
    <div class="feedback left">
      <div class="tooltips">
          <div class="btn-group dropup">
            <button type="button" class="btn btn-primary dropdown-toggle btn-circle btn-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-bug fa-2x" title="Report Bug"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-form">
              <li>
                <div class="report">
                  <h2 class="text-center">Report Bug</h2>
                  <form class="doo" method="post" action="#"><!-- Report.php -->
                  <!--
                    <div class="col-sm-12">
                      <textarea required name="comment" class="form-control" placeholder="Please tell us what bug or issue you've found, provide as much detail as possible."></textarea>
                      <input name="screenshot" type="hidden" class="screen-uri">
                      <span class="screenshot pull-right"><i class="fa fa-camera cam" title="Take Screenshot"></i></span>
                     </div>
                     <div class="col-sm-12 clearfix">
                      <button class="btn btn-primary btn-block">Submit Report</button>
                     </div>
                 </form>
                </div>
                <div class="loading text-center hideme">
                  <h2>Please wait...</h2>
                  <h2><i class="fa fa-refresh fa-spin"></i></h2>
                </div>
                <div class="reported text-center hideme">
                  <h2>Thank you!</h2>
                  <p>Your submission has been received, we will review it shortly.</p>
                   <div class="col-sm-12 clearfix">
                      <button class="btn btn-success btn-block do-close">Close</button>
                   </div>
                </div>
                <div class="failed text-center hideme">
                  <h2>Oh no!</h2>
                  <p>It looks like your submission was not sent.<br><br><a href="mailto:">Try contacting us by the old method.</a></p>
                   <div class="col-sm-12 clearfix">
                      <button class="btn btn-danger btn-block do-close">Close</button>
                   </div>
                </div>
              </li>
            </ul>
          </div>
      </div>
    </div>
    -->


  </body>
</html>
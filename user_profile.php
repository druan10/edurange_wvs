<?php
include 'common.php';
if (!checkLoggedIn()){
  redirect("./index.php");
}
?>

<!DOCTYPE HTML>
<html>
  <head>
    <title>EduRange!</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
  </head>
  <body>
    <?php
      generateNavbar();
    ?>
  	<div class="container main">
      <br>
      <?php 
        throwMessage();
      ?>
      <h2 class="text-center">Temporary user's profile!</h2>
      <!-- <div class="row">
        <div class="col-sm-4" id="profilepic">
          
        </div>
      </div> -->
      <!-- Generate posts -->
      <?php 
        #temporary code
        if (isset($posts)){
          unset($posts);
        }
        #fetchposts user parameter should be dynamic and be retrieved from a user get query after user has been authenticated
        $posts=fetchPosts($_GET["username"]);
        #display user posts
        foreach ($posts as $i){
          $posttext=file_get_contents($i);
          echo "
            <div class='container blogpost'>
              ".$posttext."
            </div>
          ";
        }
      

      ?>
    </div>

    <!--Google JQuery CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>
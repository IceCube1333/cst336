<?php
session_start();
if(!isset($_SESSION['username'])) { // checks if admin is logged in
    header("Location: index.php");
}

?>


<html>
    <head>
        <title>DND Gatcha</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="icon" href="favicon/favicon.ico" type="image/gif" sizes="16x16">
    </head>
    
<body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand"><img src="favicon/favicon.ico"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="grandheroes.php">Grand Heroes</a></li>
            <li><a href="royals.php">Royals</a></li>
            <li><a href="angels&demons.php">Angels & Demons</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="adminLogin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </div>
    </nav> 
    
    <h1> Admin Main </h1>
    <h2> Welcome <?=$_SESSION['adminName']?>!</h2>
    
    <div class="col-sm-3 well">
      <!--<form>-->
        <div class="well">
          <button type="button" class="btn btn-info" onclick="grandHer()">Grand Heroes</button>
          <!--<img src="bird.jpg" class="img-circle" height="65" width="65" alt="Avatar">-->
        </div>
        <div class="well">
          <button type="button" class="btn btn-info">Royals</button>
        </div>
        <div class="well">
          <button type="button" class="btn btn-info">Angels & Demons</button>
        </div>
        <div class="well">
          <button type="button" class="btn btn-primary disabled">Coming Soon</button>
        </div>
        <div class="well">
          <button type="button" class="btn btn-primary disabled">Coming Soon</button>
        </div>
        <div class="well">
          <button type="button" class="btn btn-primary disabled">Coming Soon</button>
        </div>
        <!--<div class="alert alert-success fade in">-->
        <!--  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>-->
          <!--<p><strong>Ey!</strong></p>-->
          <!--People are looking at your profile. Find out who.-->
        </div>
      <!--</form>-->
    </div>
    
    <span id="gatchaInfo">Future gatcha Info to be displayed</span>
    
    <form action="logout.php">
        <input type="submit" value="Logout">
    </form>

    <script>
      function grandHer() {
        // alert("anything?");
        $.ajax({
                    type: "get",
                    url: "functions.php",
                    dataType: "json",
                    data: {
                        // "zip_code": $("#zip").val()
                        'action': 'grandheroes'
                    },
                    success: function(data,status) {
                        
                        
                        // if (data.length > 0) {
                          alert("please work");
                        // }
                        
                    },
                    complete: function(data,status) { //optional, used for debugging purposes
                        //alert(status);
                    }
                });
      }
    </script>

</body>
</html>
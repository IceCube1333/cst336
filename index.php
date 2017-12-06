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
            <li class="active"><a href="index.php">Home</a></li>
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
    
    
    
    <div class="container">
      <h2>Dungeons & Dragons Gatcha</h2>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
    
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
    
          <div class="item active">
            <a href="grandheroes.php"><img src="photos/grandheroes.jpg" alt="grandhereoes" style="width:100%;"></a>
            <div class="carousel-caption">
              <h3>Grand Heroes</h3>
              <p>Roll for an opportunity for grand loot!</p>
            </div>
          </div>
    
          <div class="item">
            <a href="royals.php"><img src="photos/royalty.jpg" alt="royal" style="width:100%;"></a>
            <div class="carousel-caption">
              <h3>Royals</h3>
              <p>Roll for an opportunity for royal loot!</p>
            </div>
          </div>
        
          <div class="item">
            <a href="angels&demons.php"><img src="photos/angels&demons.jpg" alt="angels&demons" style="width:100%;"></a>
            <div class="carousel-caption">
              <h3>Angels & Demons</h3>
              <p>Roll for an opportunity for angelic and demonic loot!</p>
            </div>
          </div>
      
        </div>
    
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>       
    <br>
    <br>
    
    <footer class="container-fluid text-center">
        <p>CST336. 2017&copy; Hutt </p>
    </footer>    
</body>
</html>
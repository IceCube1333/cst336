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
            <li class="active"><a href="admin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </div>
    </nav> 
    
            <h1> Admin Login </h1>
            
            <form method="post" id="login">
                
                Username: <input type="text" name="username"/> <br />
                
                Password: <input type="password" name="password" /> <br />
                
                <input type="submit" name="loginForm" value="Login" id="login"/>
                
            </form>
    
    
    
    
</body>
</html>
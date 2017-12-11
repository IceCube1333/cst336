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
            <li class="active"><a href="gatchaList.php">Gatcha List</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="adminLogin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </div>
    </nav> 
    
         <h2>Dungeons & Dragons Gatcha Event List</h2>
            
              <div class="form-group">
                    Filter By:
                    <button type="button" class="btn btn-info"onclick="ascending()">Ascending</button>
                    <button type="button" class="btn btn-info"onclick="descending()">Descending</button>
              </div>
            <div id="gatchaList">
                <p>Grand Heroes</p>
                <p>Royals</p>
                <p>Angels & Demons</p>  
                <p>Wizardy Might (Coming Soon)</p>  
                <p>Warrior's Fury (Coming Soon)</p>  
                   
                   
                   
                   
            </div>
    
    
        <script>
            function ascending() {
                $("#gatchaList").html("<p>Angels & Demons</p>"+
                "<p>Grand Heroes</p>" +
                "<p>Royals</p>" + 
                "<p>Warrior's Fury (Coming Soon)</p>" +
                "<p>Wizardy Might (Coming Soon)</p>")
            }
            
            function descending() {
                $("#gatchaList").html("<p>Wizardy Might (Coming Soon)</p>"+
                "<p>Warrior's Fury (Coming Soon)</p>" +
                "<p>Royals</p>" + 
                "<p>Grand Heroes</p>" +
                "<p>Angels & Demons</p>")
            }
        </script>
</body>
</html>
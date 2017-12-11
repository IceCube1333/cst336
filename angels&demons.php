<html>
    <head>
        <title>DND Gacha</title>
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
            <li class="active"><a href="angels&demons.php">Angels & Demons</a></li>
            <li><a href="gatchaList.php">Gacha List</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="adminLogin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </div>
    </nav>  
    
    <h2>Angel & Demons Gacha Banner</h2>
    <img src="photos/angels&demons.jpg" id="angDem">
    <h3>Roll for an opportunity to get angelic and demonic loot!</h3>
    
    <form>
        <div id="buttons">
            <button type="button" class="btn btn-info" onclick="oneRollAd()">1 Roll</button>
            <button type="button" class="btn btn-info" onclick="tenRollAd()">10 Roll</button> <br><br>
            <span id="roll1"></span>
        </div>
    </form>   
    
    <script>
      function oneRollAd() {
        $.ajax({
                type: "get",
                url: "functions.php",
                dataType: "json",
                data: {
                    'action': 'oneRollAd'
                },
                success: function(data,status) {
                    // debugger;
                    // alert("please work");
                    if (data.length > 0) {
                      console.log(data);
                        $('#roll1').html("<div>" + data[0].itemName + " " + data[0].rarity +"*" + "<br>" + "Item description: " +data[0].itemDescription + "<br>"+"Sell Value: "+data[0].costIfSold +"</div>"); 
                    }
                  },
                complete: function(data,status) { //optional, used for debugging purposes
                     //alert(status);
                    // alert("pleasework??");
                }
            });
      }
      function tenRollAd() {
        $.ajax({
                type: "get",
                url: "functions.php",
                dataType: "json",
                data: {
                    'action': 'tenRollAd'
                },
                success: function(data,status) {
                    // debugger;
                    // alert("please work");
                    if (data.length > 0) {
                      console.log(data);
                        $('#roll1').html("<div>" + data[0].itemName + " " + data[0].rarity +"*" + "<br>" + "Item description: " +data[0].itemDescription + "<br>"+"Sell Value: "+data[0].costIfSold +"</div>"+"<br>"+ 
                        "<div>" + data[1].itemName + " " + data[1].rarity +"*" + "<br>" + "Item description: " +data[1].itemDescription + "<br>"+"Sell Value: "+data[1].costIfSold +"</div>"+"<br>" + 
                        "<div>" + data[2].itemName + " " + data[2].rarity +"*" + "<br>" + "Item description: " +data[2].itemDescription + "<br>"+"Sell Value: "+data[2].costIfSold +"</div>"+"<br>" + 
                        "<div>" + data[3].itemName + " " + data[3].rarity +"*" + "<br>" + "Item description: " +data[3].itemDescription + "<br>"+"Sell Value: "+data[3].costIfSold +"</div>"+"<br>" +
                        "<div>" + data[4].itemName + " " + data[4].rarity +"*" + "<br>" + "Item description: " +data[4].itemDescription + "<br>"+"Sell Value: "+data[4].costIfSold +"</div>"+"<br>" +
                        "<div>" + data[5].itemName + " " + data[5].rarity +"*" + "<br>" + "Item description: " +data[5].itemDescription + "<br>"+"Sell Value: "+data[5].costIfSold +"</div>"+"<br>" +
                        "<div>" + data[6].itemName + " " + data[6].rarity +"*" + "<br>" + "Item description: " +data[6].itemDescription + "<br>"+"Sell Value: "+data[6].costIfSold +"</div>"+"<br>" +
                        "<div>" + data[7].itemName + " " + data[7].rarity +"*" + "<br>" + "Item description: " +data[7].itemDescription + "<br>"+"Sell Value: "+data[7].costIfSold +"</div>"+"<br>" +
                        "<div>" + data[8].itemName + " " + data[8].rarity +"*" + "<br>" + "Item description: " +data[8].itemDescription + "<br>"+"Sell Value: "+data[8].costIfSold +"</div>"+"<br>" +
                        "<div>" + data[9].itemName + " " + data[9].rarity +"*" + "<br>" + "Item description: " +data[9].itemDescription + "<br>"+"Sell Value: "+data[9].costIfSold +"</div>"+"<br>"); 
                        // $('#roll1').html(data[1].itemName);
                    }
                  },
                complete: function(data,status) { //optional, used for debugging purposes
                     //alert(status);
                    // alert("pleasework??");
                }
            });
      }
    </script>
    
    
    <!--<footer class="container-fluid text-center">-->
    <!--    <p>CST336. 2017&copy; Hutt </p>-->
    <!--</footer>     -->
    
</body>
</html>
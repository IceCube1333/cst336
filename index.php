<html>
    
<head>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--<script src="https://code.jquery.com/jquery-3.1.0.js"></script>-->
    
    <title>Sign-up</title>
    
</head>



<body id="dummybodyid">

   <h1> Sign Up Form </h1>

    <div class="container">
        <form onsubmit="return false;">
            <fieldset>
               <!--<legend>Sign Up</legend>-->
                First Name:  <input type="text" class="form-control"> 
                Last Name:   <input type="text" class="form-control"> <br>
                Email:       <input type="text" class="form-control">
                Phone Number: <input type="text"class="form-control"><br>
                Zip Code:    <input id="zip" onchange="getCityInfo();" type="text" class="form-control"><span id="zip-code-error-msg"></span><br>
                City:  <span id="city"></span>
                <br>
                Latitude: <span id="lon"></span>
                <br>
                Longitude: <span id="lat"></span>
                <br>
                State: 
                <select onchange="getCountyInfo();" id="stateList" name="stateList">
                  <option value="ca">California</option>
                  <option value="nv">Nevada</option>
                  <option value="wa">Washington</option>
                  <option value="or">Oregon</option>
                </select>
                Select a County: <select id="county-list"></select><br><br>
                
                Desired Username: <input onchange="validateUsername();" id='username' type="text" class="form-control"> <span id="username-valid"></span></span><br>
                Password: <input type="password" class="form-control">
                Type Password Again: <input type="password" class="form-control"><br>
                 <button type="button" class="btn btn-info">Sign up!</button>
                <!--<input type="submit" value="Sign up!">-->
            </fieldset>
        </form>
    </div>
    
    <script>
        function getCityInfo() {
        
             $.ajax({
                type: "get",
                url: "http://hosting.otterlabs.org/laramiguel/ajax/zip.php",
                dataType: "json",
                data: {
                    "zip_code": $("#zip").val()
                },
                success: function(data,status) {
                    
                    $("#zip-code-error-msg").html("");
                    if (!data.city) {
                        // alert("city is invalid");
                        $("#zip-code-error-msg").html("Zipcode is invalid");
                        return;
                    }
                    // console.log(data); 
                    $("#city").html(data.city);
                    $("#lon").html(data.longitude);
                    $("#lat").html(data.latitude);
                    
                },
                complete: function(data,status) { //optional, used for debugging purposes
                     //alert(status);
                }
             });
        }
        
        
        function getCountyInfo() {
            // alert("select state changed. Value: " + $("#stateList").val());
            
            $.ajax({
                type: "get",
                url: "http://hosting.otterlabs.org/laramiguel/ajax/countyList.php",
                dataType: "json",
                data: {"state": $("#stateList").val()},
                success: function(data,status) {
                    // alert(data); 
                    $("#county-list").html("");
                    for (var i = 0; i < data.counties.length; i++) {
                        $("#county-list").append("<option>" + data.counties[i].county + "</option>");
                    }
                    
                    
                  },
                complete: function(data,status) { //optional, used for debugging purposes
                     //alert(status);
                }
            });
        }
        
        
        function validateUsername() {
                    
            $.ajax({
                type: "get",
                url: "api.php",
                dataType: "json",
                data: {
                    'username': $('#username').val(),
                    'action': 'validate-username'
                },
                success: function(data,status) {
                    // debugger;
                    
                    $('#username-valid').html("");
                    if (data.length > 0) {
                        $('#username-valid').html("Username is not available"); 
                    } else {
                        $('#username-valid').append("<span id='valid'>Username is available</span>");
                    }
                    
                  },
                complete: function(data,status) { //optional, used for debugging purposes
                     //alert(status);
                }
            });
                }
    </script>
</body>

</html>
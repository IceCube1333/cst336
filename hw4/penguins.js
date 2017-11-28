$("#submit").click(function(e){
                e.preventDefault();               
                
                //error messages
                if (($("input[name=firstname]").val() == "") || ($("input[name=lastname]").val() == "") || ($("input[name=gender]:checked").val() == "") || ($("#num option:selected").val() == "")) {

                  alert("Error please make sure to input all data");
                }
                //male penguins
               else if (($("input[name=gender]:checked").val() == "Male") && ($("#num option:selected").val() == "1")) {
                   $("#Form").hide();
                    let fullname = $("#fname").val() + " " + $("#lname").val();
                    let img="img/maleBabyPenguin1.png";
                    
                    $("#penguins").html("<p>"+fullname+"</p>" + "<img src='"+img+"'/>");
               }
               else if (($("input[name=gender]:checked").val() == "Male") && ($("#num option:selected").val() == "3")) {
                   $("#Form").hide();
                    let fullname = $("#fname").val() + " " + $("#lname").val();
                    let img="img/maleBabyPenguin3.png";
                    
                    $("#penguins").html("<p>"+fullname+"</p>" + "<img src='"+img+"'/>");
               }
               else if (($("input[name=gender]:checked").val() == "Male") && ($("#num option:selected").val() == "2")) {
                   $("#Form").hide();
                    let fullname = $("#fname").val() + " " + $("#lname").val();
                    let img="img/malePenguin2.png";
                    
                    $("#penguins").html("<p>"+fullname+"</p>" + "<img src='"+img+"'/>");
               }
               else if (($("input[name=gender]:checked").val() == "Male") && ($("#num option:selected").val() == "4")) {
                   $("#Form").hide();
                    let fullname = $("#fname").val() + " " + $("#lname").val();
                    let img="img/malePenguin4.png";
                    
                    $("#penguins").html("<p>"+fullname+"</p>" + "<img src='"+img+"'/>");
               }
               
               //female penguins
               else if (($("input[name=gender]:checked").val() == "Female") && ($("#num option:selected").val() == "1")) {
                   $("#Form").hide();
                    let fullname = $("#fname").val() + " " + $("#lname").val();
                    let img="img/femaleBabyPenguin1.png";
                    
                    $("#penguins").html("<p>"+fullname+"</p>" + "<img src='"+img+"'/>");
               }
               else if (($("input[name=gender]:checked").val() == "Female") && ($("#num option:selected").val() == "3")) {
                   $("#Form").hide();
                    let fullname = $("#fname").val() + " " + $("#lname").val();
                    let img="img/femaleBabyPenguin3.png";
                    
                    $("#penguins").html("<p>"+fullname+"</p>" + "<img src='"+img+"'/>");
               }
               else if (($("input[name=gender]:checked").val() == "Female") && ($("#num option:selected").val() == "2")) {
                   $("#Form").hide();
                    let fullname = $("#fname").val() + " " + $("#lname").val();
                    let img="img/femalePenguin2.png";
                    
                    $("#penguins").html("<p>"+fullname+"</p>" + "<img src='"+img+"'/>");
               }
               else if (($("input[name=gender]:checked").val() == "Female") && ($("#num option:selected").val() == "4")) {
                   $("#Form").hide();
                    let fullname = $("#fname").val() + " " + $("#lname").val();
                    let img="img/femalePenguin4.png";
                    
                    $("#penguins").html("<p>"+fullname+"</p>" + "<img src='"+img+"'/>");
               }
               
            });
            
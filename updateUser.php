<?php

    include 'database.php';
    $conn = getDatabaseConnection();

session_start();

    if (!isset($_SESSION['username'])) {
        
        header("Location: index.php");
        
    }



function getUserInfo() {
    global $conn;
    
    $sql = "SELECT *
            FROM User 
            WHERE id=". $_GET['userId'];
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetch(PDO::FETCH_ASSOC);
   
//   print_r($records);
    return $records;
    
}
    
    if(isset($_GET['updateUser'])) {
        // echo "Form has been submitted!";
        $sql = "UPDATE User
                SET firstName = :fName,
                    lastName = :lName,
                    email = :email,
                    phone = :phone,
                    role = :role,
                    deptid = :deptid
                WHERE id = :id";
        
        $np = array();
        $np[':fName'] = $_GET['firstName'];
        $np[':lName'] = $_GET['lastName'];
        $np[':email'] = $_GET['email'];
        $np[':phone'] = $_GET['phone'];
        $np[':role'] = $_GET['role'];
        $np[':deptid'] = $_GET['deptid'];
        $np[':id'] = $_GET['userId'];
        
        
        $stmt = $conn->prepare($sql);
        $stmt->execute($np);
        
        echo "Record has been updated!";
    }
    
    if (isset($_GET['userId'])) {
        $userInfo = getUserInfo();
        
        // echo $userInfo['firstName'] ." ".$userInfo['lastName'];
    }
    
    if (isset($_GET['backButton'])) {
    header("Location: admin.php");
    }

?>



<html>
    <head>
        <title> Update User </title>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>
    
    <body>
        
        <h1> Update User </h1>
    
    <h1> Tech Checkout System: Upating User's Info </h1>
        <form method="GET" id="update-page">
            <input type="hidden" name="userId" value="<?=$userInfo['id']?>" />
            First Name:<input type="text" name="firstName" value="<?=$userInfo['firstName']?>"/>
            <br />
            Last Name:<input type="text" name="lastName" value="<?=$userInfo['lastName']?>"/>
            <br/>
            Email: <input type= "email" name ="email" value="<?=$userInfo['email']?>"/>
            <br/>
            Phone Number: <input type ="text" name= "phone" value="<?=$userInfo['phone']?>"/>
            <br />
           Role: 
           <select name="role">
                <option value=" "> - Select One - </option>
                <option value="staff" <?=($userInfo['role']=='Staff')?" selected":""?>>Staff</option>
                <option value="student" <?=($userInfo['role']=='Student')?" selected":""?>>Student</option>
                <option value="faculty" <?=($userInfo['role']=='Faculty')?" selected":""?>>Faculty</option>
            </select>
            <br />
            Department: 
            <select name="deptid">
                <option value="" > Select One </option>
                <option value="computer science" <?=($userInfo['deptid']=='Computer Science')?" selected":""?>>Computer Science</option>
                <option value="statistics" <?=($userInfo['deptid']=='Statistics')?" selected":""?>>Statistics</option>
                <option value="design" <?=($userInfo['deptid']=='Design')?" selected":""?>>Design</option>
                <option value="economics" <?=($userInfo['deptid']=='Economics')?" selected":""?>>Economics</option>
                <option value="drama" <?=($userInfo['deptid']=='Drama')?" selected":""?>>Drama</option>
                <option value="biology" <?=($userInfo['deptid']=='Biology')?" selected":""?>>Biology</option>
            </select>
            <input type="submit" value="Update User" name="updateUser">
            <input type="submit" name="backButton" value="Back">
        </form>    
        
        <footer>
               <hr>
               CST336 Hutt &copy;2017
        </footer>
            
    </body>
</html>
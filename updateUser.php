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
                WHERE userId = :userId";
        
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
?>



<html>
    <head>
        <title> Update User </title>
    </head>
    
    <body>
        <h1> Update User </h1>
    
    <h1> Tech Checkout System: Upating User's Info </h1>
        <form method="GET">
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
            </select>
            <input type="submit" value="Update User" name="updateUser">
        </form>    
    
    </body>
</html>
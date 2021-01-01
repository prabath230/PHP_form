<?php
$firstname = $_POST['firstname'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$phonenum = $_POST['phonenum'];

//database Connection
$conn = new mysqli('localhost','root','','phpform');
if($conn->connect_error){
    die('Connection Failed : ' .$conn->connect_error);
}else{
        $stmt = $conn->prepare("INSERT INTO registration(firstname, lastName, email, password, gender, phonenum)
        values(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssi",$firstname, $lastName, $email, $password, $gender, $phonenum);
        $stmt->execute();
        echo "Registration Successfully...";
        $stmt->close();
        $conn->close();

    }
?>
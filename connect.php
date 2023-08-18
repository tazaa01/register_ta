<?php
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Gender = $_POST['Gender'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$Numder = $_POST['Numder'];

//Detabase connecction
$conn = new mysqli('localhost','root','','test')
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ".$conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into Registration(FirstName, LastName, Gender, Email, Password, Numder)(?, ?, ?, ?, ?)")
    $stmt->bind_param("sssssi", $FirstName, $LastName, $Gender, $Email, $Password, $Numder)
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration-successfully...";
    $stmt->class();
    $stmt->close();
}
?>

<?php
include 'connection.php';

if(isset($_POST['register'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $address = $_POST['address'];

    // echo $name . '<br>' . $email . '<br>' . $pass . '<br>' . $address;

    $insert = mysqli_query($con, "INSERT into register(Name, Email, Password, Address) VALUES
    ('$name', '$email', '$pass', '$address')");

    if($insert){
        echo "<script>
        alert('Data inserted successfully')
        location.assign('register.php')
        </script>";

        // header("location: register.php");
    }
}
?>
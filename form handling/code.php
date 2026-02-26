<?php
if(isset($_POST['register'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $address = $_POST['address'];

    echo $name . '<br>' . $email . '<br>' . $pass . '<br>' . $address;

}
?>
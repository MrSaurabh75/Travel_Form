<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server,$username,$password);
    if(!$con){
        die("Connection to this database failed due to ".mysqli_connect_error());
    }
    // echo "Succesfully Connected to Database";
    $name= $_POST['name'];
    $age= $_POST['age'];
    $gender= $_POST['gender'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $dec= $_POST['dec'];
    $sql = "INSERT INTO `trip`(`name`, `age`, `gender`, `email`, `phone`, `dec`, `date`) VALUES ('$name','$age','$gender','$email','$phone','$dec',current_timestamp());";
    echo $sql;
?>
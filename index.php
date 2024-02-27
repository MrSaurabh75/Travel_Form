<?php
    $insert=false;
    if(isset($_POST['name'])){
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
        $desc= $_POST['desc'];
        $sql = "INSERT INTO `info`.`trip`(`name`, `age`, `gender`, `email`, `phone`, `desc`, `date`) VALUES ('$name','$age','$gender','$email','$phone','$desc',current_timestamp());";
        // echo $sql;
        if($con->query($sql) == true){
            // echo "Inserted !";
            $insert=true;
        }
        else{
            echo "ERROR: $sql <br> $con->error";
        }
        $con->close();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Travel Form</title>
    <style>
        * {
            font-family: "Poppins";
        }
    </style>
</head>

<body>
    <img class="bg" src="MIBS.jpg" alt="MIBS">
    <div class="con">
        <h1>Welcome to MIBS</h1>
        <p>Enter your details to confirm your seat...</p>
        <?php
            if($insert==true){
                echo "<p class='msg'>Thanks for being part of trip...</p>";
            } 
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your name">
            <input type="text" name="age" id="age" placeholder="Enter Your age">
            <input type="text" name="gender" id="gender" placeholder="Enter Your gender">
            <input type="email" name="email" id="email" placeholder="Enter Your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter Your mobile number">
            <textarea name="desc" id="desc" cols="50" rows="5" placeholder="Enter any other information or ask a question"></textarea>
            <button class="btn">Submit</button>
        </form>
    </div>
    <script src="index.js"></script>
</body>

</html>
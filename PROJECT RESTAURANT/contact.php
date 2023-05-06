<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $number=$_POST['phone'];

    $servername="localhost";
    $usrename="root";
    $password="";
    $database="restaurant";

    $conn= mysqli_connect($servername,$usrename,$password,$database);

    if(!$conn)
    {
        die("Sorry");
    }
    else{
        $sql= "INSERT INTO `contact_us` (`name`, `email`, `address`, `phone_no`) VALUES ('$name', '$email', '$address', '$number')";
    }
    $result = mysqli_query($conn,$sql);
    if($result){
        header('location: index.php');
    }
}
?>








<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>CONTACT US</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <section>
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="categories.php">Categories</a>
                    </li>
                    <li>
                        <a href="foods.php">Foods</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <div class="container d-flex justify-content-centercd style">
        <form class="mt-5 w-50" action="contact.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" name="name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email" name="email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Address</label>
                <input type="text" class="form-control" id="address" name="address">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Phone Number</label>
                <input type="text" class="form-control" id="phoneno" name="phone">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>

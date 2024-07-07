<?php
include_once("database.php");
$model=$_POST["model"];
$state=$_POST["state"]; 
$city=$_POST["city"];
$name=$_POST["name"];
$email=$_POST["email"]; 
$phone=$_POST["phone"];
?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="../css/try.css">
    </head>
    <body class="main">
        <div class="wrapper">
            <div class="confirmation">
                <p>&#10004 Request Confirmed</p>
            </div>
            <div class="thnks">
                <p>THANK YOU!</p>
            </div>
            <div class="text">
                <p>Our team will reach out to you shortly.<br>In the meantime, to support you in your request, you can</p>
            </div>
            <div class="btn_wrapper">
            <div class="link1">
                <form action="../faq.html" class="btn1">
                    <input type="submit" value="FAQ">
                </form>
            </div>
            <div class="link2">
            <form action="../index.html" class="btn1">
                <input type="submit"  value="Homepage">
            </form>
            </div>
            </div>
            <div class="foot_box">
                <div class="inner_box1">
                    <p>Dealer Lab</p>
                </div>
                <div class="inner_box2">
                    <p>CAROPEDIA PRIVATE LIMITED</p>
                </div>
                <div class="inner_box3">
                    <p>&#128222 9417407577</p>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
$query="insert into try(model,state,city,name,email,phone)values('$model','$state','$city','$name','$email','$phone')";
mysqli_query($con,$query);
?>
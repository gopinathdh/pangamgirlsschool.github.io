<?php
include('header.php');
?>



<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="with=device-width ,initial-scale=1.0">

    <title>GOVT(SSD)GIRL'S HIGH SCHOOL PANGAM</title>

    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>

<body>
    <style>
        .contactinfo {
            margin-left: 61px;
    margin-top: 50px;

        }
        .contactinfo  h2{
            font-size:40px;
        }
        .contactinfo  p{
            font-family: fangsong;
    margin-left: 53px;
    margin-right: 351px;

        }
    </style>



    <h1 style="margin-top: 136px;margin-left:550px;">CONTACT US</h1>
    <div class="contactinfo">
    <h2>How to reach our School :-</h2>
    <p>Girls  High school,pangam is in between jeypore and malkangiri by the side of NH-326 Ranchi-vijayawada Highway.
        It is 68 k.m away from jeypore which is well connected to railway station.it is only 38 K.m away from District Headquarter,
    malkangiri and 8 k.m away from Block Headquarter,Mathili.   </p>
</div>
 
    <!------------------------contact us------------------->

    <section class="location" style="display:flex;">


        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d472.9047610377251!2d82.136312!3d18.51814!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc786dce64afffe8d!2sGirls%20High%20school%20%2C!5e0!3m2!1sen!2sin!4v1654321185780!5m2!1sen!2sin"
            width="600" height="450" style="border:1;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>



        <div class="contact-us" style="padding-left: 87px">
            <div class="row">
                <div class="contact-col">
                    <div>
                        <i class="fa fa-home"> </i>
                        <span>
                            <h6 style="font-size: 12px;">Girls High School,Pangam</h6>
                            <P style="font-size: 12px;">NH-326,MALKANGIRI</P>
                        </span>
                    </div>
                    <div>
                        <i class="fa fa-phone"></i>
                        <span>
                            <h6 style="font-size: 16px;">Headmasters Office</h6>
                            <p style="font-size: 12px;">Contact no:<mark> +919692233762</mark><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<mark>+919437912747</mark> </p>

                        </span>
                    </div>
                    <div>
                        <i class="fa fa-envelope-o"></i>
                        <span>
                            <h6 style="font-size: 16px;">pangamghs@gmail.com</h6>
                            <p style="font-size: 12px;">Email us your query</p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
<div class="abc" style=" border: 1px ;
    align-items: center;
    margin-left: 160px;
    padding: 20px 51px 22px 37px;background: beige;
    margin-top: -63px;">
    <?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "contact";

$conn = mysqli_connect($server,$username,$password,$dbname);

if(isset($_POST['submit']))
{
$name= $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$subject= $_POST['subject'];
$message= $_POST['message'];


$query="insert into feedback(name, email, phone, subject, message) values('$name','$email','$phone','$subject','$message')";

$run=mysqli_query($conn,$query) or die(mysqli_error());
if ($run){
    echo "form submitted successfully";

}
else{
    echo "form not submitted";
}
 } 

?>
            <form action="contact.php" method="POST">
                <h5 style="color: deepskyblue;
    padding: 10px;">Any Question ?About School !</h5>
                <!-- <label for="name">Name:</label> -->
                <input type="text" name="name" placeholder="enter your name " required style="padding: 4px;width:100%;
    margin-bottom: 10px; outline-color: cyan;">
       
        <!-- <label for="email">Email:</label> -->
        <input type="email" name="email" placeholder="enter email address" required style="padding: 4px;width:100%;
    margin-bottom: 10px;outline-color: cyan;">
        <!-- <label for="phone">Phone:</label> -->
        <input type="phone" name="phone" placeholder="enter mobile number " required style="padding: 4px;width:100%;
    margin-bottom: 10px;outline-color: cyan;">
        <!-- <label for="subject">Subject:</label> -->
        <input type="text" name="subject" placeholder="enter your subject " required style="padding: 4px;width:100%;
    margin-bottom: 10px;outline-color: cyan;">
        <!-- <label for="message">Message:</label> -->

        <textarea rows="5" name="message" placeholder="Message" required style="padding: 14px;height: 40px;
    margin-bottom: 10px;outline-color: cyan;"></textarea>
        <input type="submit" name="submit" value="SEND" class="hero-btn red-btn" style="height: 39px;
    width: 50%;
    margin-left: 50px;border-radius: 20px;padding: 10px;">

        </form>

</div>


    </section>





    <!--------------------footer------------------------->
    <?php
include('footer.php');
?>
    <!----------javascript for toggle menu-------------->
    <script>
    var nablinks = document.getElementById("nablinks");

    function showMenu() {
        nablinks.style.right = "0";
    }

    function hideMenu() {
        nablinks.style.right = "-200px";
    }
    </script>
</body>
<?php
include('header.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="with=device-width ,initial-scale=1.0">

    <title>pangam girls school</title>

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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet"> -->



</head>
<style>
.notification {
    list-style: none;


}

.notification li {
    color: red;
}

.notification li a {
    list-style: none;
}
</style>

<body>
    <section class="header">
        <!-- <a id="button"></a> -->

        <!-- <span style="color: yellow;">
            <marquee behavior="" direction="">****ADMISSION OPEN FOR VI CLASS ****</marquee>
        </span> -->

        <?php
include('slidehead.php');
?>
        <div class="text-box" style="margin-top: 50px">
            <!-- <h1 style="margin-left: 85px;color: #8cffe4;">Pangam Girls' School ,Malkangiri</h1> -->
            <em style="color: palegoldenrod;">One of the best girls school in malkangiri(Basis of mark & campus)</em>
            <p>Govt. SSD Girls' high school, Pangam(ST & SC Dev. Deptt)</p>
           
            <small style="color:lightgoldenrodyellow;">Sucess is the sum of small efforts,repeated day in and day
                out</small><br>
            <a href="a" class="hero-btn">Visit us to Know more</a>



            <!-- </div> -->
       <div class="scroll">
 
            <div id="scroll-container" style=" margin-left: -53px; margin-top: -85px;
    height: 196px; background: aliceblue;">
                <!-- <h3 style="background:aquamarine;">Notices</h3> -->
                <div id="scroll-text" style="text-align: initial;
    padding: 10px;">
                    <div class="notification">
                        <ul style="padding: revert;
    font-family: serif;
    font-size: 13px;">
                        <li> 10th class Time-Table </li> <br>
                        <li> Exam Schedule for 6th class </li> <br>
                        <li> NOTICE_ 496. The college is remain closed on 12.08.2022. </li> <br>
                        <li> Sargiphool </a></li> <br>
                        <li> Dashera puja vacation 25/09/22 to 10/10/22 </li> <br>
                        <li> Selfdefence training conducted 25th august </li> <br>
                        <li> Parent metting 1september</li> <br>
                        <li>Project Reports</li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!------------about school---------->
    <section class="course">
        <!-- <div> -->
        <table style="margin-left: 150px;">
            <tr>
                <td>
                    <h1 style="margin-left: 73px"> ABOUT SCHOOL </h1>
                    <!-- <p style="margin-left: 13px">Govt. SSD Girls' high school, Pangam,<br> Malkangiri </p> -->

                    <h6 style="margin-left: 86px"> In Malkangiri there are more than 100 high school & ours was established 
                in the year 2014.It is a moment of proud to say that within 7year we achieved the best school award which is not an individual effort
            to reach this milestone But the united effort of teaching staff,support staff & students.</h6>
                </td>
                <td>
                    <h1>ACHIEVMENT</h1>
                    <!-- <p>Govt. SSD Girls' high school, Pangam, Malkangiri </p> -->
                    <h6 style="line-height: 33px">It is a great pleasure to say that our school is awarded the prestigious 
                Best school award in 2020,the other is prakruti Bandhu Award in 2020 and the First ISO certified hostel in mathili Block.</h6>
                    </div>
                </td>
            </tr>
        </table>
        <!-- <div class="image12">-->
        <!-- <div class="achievment">
                <h1>ACHIEVMENT</h1>
                <p>Best school award for 2021 basing on result<br>
                    Prakruti Bandhu Award for 2020</p>
            </div> -->
        <!-- <p style="text-align: center;"> -->
        <!-- <strong" style="font: -webkit-control;">The capcity to learn is a gift the ability to learn is a skill ,the willingness to learn is a 
                choice-->
        <!-- </p style> -->
        <!-- <div style="margin:10px; float:left; width:60px; padding-left:10px; font-size:13px; text-align:justify"> -->

    </section>


    <div class="image12">
        <section class="headmaster">
        
            <h2 style="text-align: center;">
                <FONT COLOR=""> <b>HEADMASTER&#8217;S MESSAGE</b>
            </h2>
            <hr />
            <?php
include('headmaster.php');
?>
           

        </section>
        <div class="image12">
            <!-- <div class="achievment">
                <h1>ACHIEVMENT</h1>
                <p>Best school award for 2021 basing on result<br>
                    Prakruti Bandhu Award for 2020</p>
            </div> -->
            <!--------campus---------->
            <section class="campus">

                <h1>OUR CAMPUS</h1>
                <p>The willingness to learn is a choice</p>
                <div class="row">
                    <div class="full-image" id="fullImgBox">
                        <img src="pangam/img2.jpg" id="fullImg">
                        <span onclick="closefullImg()">X</span>
                    </div>
                    <div class="campus-col">
                        <img src="pangam/CAMPUS 1.jpeg" onclick="openfullImg(this.src)">
                        <p>sky view of the top of roop</p>
                    </div>

                    <div class="row">
                        <div class="campus-col">
                            <img src="pangam/SCHOOLPANGAM.jpeg" onclick="openfullImg(this.src)">
                            <p>Hostel view in front side</p>
                        </div>
                        <div class="row">
                            <div class="campus-col">
                                <img src="pangam/SCHOOLPANGAM.jpeg" onclick="openfullImg(this.src)">
                                <p>Hostel view in front side</p>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="campus-col">
                            <img src="pangam/GARDEN.jpeg" onclick="openfullImg(this.src)">
                            <p>Flower garden view</p>
                        </div>

                        <div class="row">
                            <div class="campus-col">
                                <img src="pangam/CAMPUS 2.jpeg" onclick="openfullImg(this.src)">
                                <p>inner view of the school</p>
                            </div>
                            <div class="row">
                                <div class="campus-col">
                                    <img src="pangam/CAMPUS 2.jpeg" onclick="openfullImg(this.src)">
                                    <p>inner view of the school</p>
                                </div>
                            </div>

            </section>
            <!-----------facilities---------->
            <div class="image12">
                <section class="facilities">
                    <H1>OUR FACILITIES</H1>
                    <p>All are free facilities under goverment of Odisha</p>

                    <div class="row">
                        <div class="facilities-col">
                            <img src="pangam/food1.jpeg">
                            <p>free nutrient food facility</p>
                        </div>
                        <div class="row">
                            <div class="facilities-col">
                                <img src="pangam/CAMPUS GYM 1.jpeg">
                                <p>Open gym</p>
                            </div>
                            <div class="row">
                                <div class="facilities-col">
                                    <img src="pangam/pangam 1.jpeg">
                                    <p>free dressing code</p>
                                </div>
                                <div class="row">
                                    <div class="facilities-col">
                                        <img src="pangam/Book1.jpeg">
                                        <p>free book distribution</p>
                                    </div>

                                </div>
                            </div>


                </section>
                <!----------------------testimonial ----------------->

                <section class="testimonial">
                    <div class="small-container">
                        <h1>WHAT ABOUT OUR SCHOOL SAY </h1>
                        <p>Teaching is the greastest act of optimism</p>

                        <div class="rowdiv">

                            <!-- <div> -->
                            <div class="testimonial-col">
                                <i class="fa fa-quote-left"></i>
                                <p>i am greatful to have teacher in this great school.All the staff are freindlyness
                                    to
                                    student.<br>we hope our trying and hardwork definetely be a great success among
                                    the
                                    student.</p>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <img src="pangam/imagegop.jpg">
                                <h3>Govindachandra Nayak<br>English Teacher </h3>
                            </div>
                            <!-- </div> -->

                            <div class="testimonial-col">

                                <i class="fa fa-quote-left"></i>
                                <p>i am greatful to have teacher in this great school.All the staff are freindlyness to
                                    student.<br>we hope our trying and hardwork definetely be a great success among the
                                    student.</p>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <img src="pangam/imagegop.jpg">
                                <h3>Govindachandra Nayak<br>English Teacher </h3>

                            </div>
                            <div class="testimonial-col">

                                <i class="fa fa-quote-left"></i>
                                <p>i am greatful to have teacher in this great school.All the staff are freindlyness to
                                    student.<br>we hope our trying and hardwork definetely be a great success among the
                                    student.</p>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <img src="pangam/imagegop.jpg">
                                <h3>Govindachandra Nayak<br>English Teacher </h3>

                            </div>

                        </div>

                    </div>
                </section>
            </div>
        </div>


        <!-----------call to action------------>
        <section class="cta ">
            <h1>You can join with our institute anywhere from <br>Odisha</h1>
            <a href="contact.html" class="hero-btn">CONTACT US</a>
        </section>
        <!--------------------footer------------------------->
        <?php
include('footer.php');
?>
        <!-- ------------------back to top---------------------------- -->
        <!-- <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
            <i class="fas fa-arrow-up" style="width: 29px;
 height: 27px;
 padding: 3px;
 background: crimson;
 color: floralwhite;">
  </i>
        </button> -->
        <?php
include('backtotop.php');
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
        <!-- -------------------------image grid-------------------------- -->
        <script>
        var fullImgBox = document.getElementById("fullImgBox");
        var fullImg = document.getElementById("fullImg");

        function openfullImg(pic) {
            fullImgBox.style.display = "flex";
            fullImg.src = pic;

        }

        function closefullImg() {
            fullImgBox.style.display = "none"
        }
        </script>
        
        <!-- ---------------time table scrolling-------------------- -->


</body>
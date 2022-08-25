<?php
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


    <style>
    /* five column GRID STYLES
-----------------------------------------------------------------*/

    .item {
        float: left;
        position: relative;
        line-height: 1em;
    }



    .item {
        width: 20%;
    }

    .item:last-child {
        display: block;
    }


    @media screen and (max-width: 1224px) {
        /* 10 columns for larger screens */

        .item {
            width: 33.33%;
        }

        .item:last-child {
            display: none;
        }

    }

    @media screen and (max-width: 720px) {
        /* 10 columns for larger screens */

        .item {
            width: 50%;
        }

        .item:last-child {
            display: block;
        }
    }

    @media screen and (max-width: 480px) {
        /* 10 columns for larger screens */

        .item {
            width: 100%;
        }

    }

    .image {
        max-width: 100%;
        margin: 0;
        display: block;
    }

    .image:after {
        clear: both;
    }

    .overlay {
        width: 100%;
        height: 100%;
        background-color: rgba(231, 227, 227, 0.5);
        position: absolute;
        top: 0;
        left: 0;
        text-decoration: none;
        color: #fff;
        display: none;
    }

    .overlay .title {
        text-align: center;
        font-size: 30px;
    }

    .overlay .description {
        position: absolute;
        bottom: 0;
        left: 0;
        background-color: rgba(146, 141, 141, 0.8);
        width: 100%;
        margin: 0;
    }

    .overlay .description p {
        margin: 20px;
    }

    .item:hover .overlay {
        display: block;
    }
    </style>
    <body>
        
   
    <section class="imagegallery" style="margin-top: 180px;margin-left:10px;margin-right:10px;margin-bottom:20px;height: 565px;">
        <div class="item">
            <img src="pangam/img1.jpg" class="image">
            <a class="overlay" href="#">
                <h3 class="title">Some title</h3>
                <div class="description">
                    <p>
                        Lorem ipsum dolor sit amet, <br>
                        consectetur adipisicing elit.
                    </p>
                </div>
            </a>
        </div>

        <div class="item">
            <img src="pangam/img2.jpg" class="image">
            <a class="overlay" href="#">
                <h3 class="title">Some title</h3>
                <div class="description">
                    <p>
                        Lorem ipsum dolor sit amet, <br>
                        consectetur adipisicing elit.
                    </p>
                </div>
            </a>
        </div>

        <div class="item">
            <img src="pangam/img3.jpg" class="image">
            <a class="overlay" href="#">
                <h3 class="title">Some title</h3>
                <div class="description">
                    <p>
                        Lorem ipsum dolor sit amet, <br>
                        consectetur adipisicing elit.
                    </p>
                </div>
            </a>
        </div>

        <div class="item">
            <img src="pangam/img1.jpg" class="image">
            <a class="overlay" href="#">
                <h3 class="title">Some title</h3>
                <div class="description">
                    <p>
                        Lorem ipsum dolor sit amet, <br>
                        consectetur adipisicing elit.
                    </p>
                </div>
            </a>
        </div>

        <div class="item">
            <img src="pangam/img2.jpg" class="image">
            <a class="overlay" href="#">
                <h3 class="title">Some title</h3>
                <div class="description">
                    <p>
                        Lorem ipsum dolor sit amet, <br>
                        consectetur adipisicing elit.
                    </p>
                </div>
            </a>
        </div>

        <div class="item">
            <img src="pangam/img3.jpg" class="image">
            <a class="overlay" href="#">
                <h3 class="title">Some title</h3>
                <div class="description">
                    <p>
                        Lorem ipsum dolor sit amet, <br>
                        consectetur adipisicing elit.
                    </p>
                </div>
            </a>
        </div>

        <div class="item">
            <img src="pangam/img1.jpg" class="image">
            <a class="overlay" href="#">
                <h3 class="title">Some title</h3>
                <div class="description">
                    <p>
                        Lorem ipsum dolor sit amet, <br>
                        consectetur adipisicing elit.
                    </p>
                </div>
            </a>
        </div>

        <div class="item">
            <img src="pangam/img2.jpg" class="image">
            <a class="overlay" href="#">
                <h3 class="title">Some title</h3>
                <div class="description">
                    <p>
                        Lorem ipsum dolor sit amet, <br>
                        consectetur adipisicing elit.
                    </p>
                </div>
            </a>
        </div>

        <div class="item">
            <img src="pangam/img3.jpg" class="image">
            <a class="overlay" href="#">
                <h3 class="title">Some title</h3>
                <div class="description">
                    <p>
                        Lorem ipsum dolor sit amet, <br>
                        consectetur adipisicing elit.
                    </p>
                </div>
            </a>
        </div>

        <div class="item">
            <img src="pangam/img1.jpg" class="image">
            <a class="overlay" href="#">
                <h3 class="title">Some title</h3>
                <div class="description">
                    <p>
                        Lorem ipsum dolor sit amet, <br>
                        consectetur adipisicing elit.
                    </p>
                </div>
            </a>
        </div>

    </section>
    <?php
include('footer.php');
?>

</body>

</html>
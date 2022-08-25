
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

<!-- ----------------breadcrumb--------------------------- -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">


</head>
<style>
   
    table { 
 border-collapse: collapse;
 /* align-items: center; */
 margin-left: 80px;
 width: 1144px;
 /* margin-top: 240px; */
 /* /* text-transform: lowercase */
} 

td {
 padding: 10px; 
 border: 1px solid black; 
 text-align: center;
}
</style>

<body>
    <img src="pangam/exam.jpg" style="width: 100%;
    height: 212px;
    margin-top: 116px;">

        <nav aria-label="breadcrumb" style="background: aliceblue;margin-top: -25px;padding-left: 20px;
    margin-bottom: 31px;">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#" style="color: black;">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Exams schedule</li>
                </ul>
            </nav>
                    <!------------about school---------->
        <table style="background: cornsilk;
    border: 1px solid firebrick;
    margin-top: 26px;margin-bottom:50px;">
            <tbody>
            <h1 style="margin-left: 73px;
    margin-top: 47px;">Examination Schedule :- </h1>
                <tr>
                    <th style="text-align:center;">subject</th>
                    <th  style="text-align:center;">6th class</th>
                    <th style="text-align:center;">7th class</th>
                    <th style="text-align:center;">8th class</th>
                    <th style="text-align:center;">9th class</th>
                    <th style="text-align:center;">10th class</th>
                </tr>
                <tr>
                    <td>Odia</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                   
                </tr>
                <tr>
                    <td>English</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Hindi</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Sanskrit</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Mathematics</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Geography</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Science</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>

            </tbody>
        </table>

<!-- ----------------------footer---------------------- -->

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
</body>
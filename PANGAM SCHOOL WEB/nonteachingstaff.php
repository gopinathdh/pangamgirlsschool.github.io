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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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
h1{
    margin-top: 40px; 
    margin-left: 86px;
    padding-bottom: 34px;
}
 </style>

<body>
   
        <!-- <section class="container1">
            <h1>Teaching Staff:</h1>
            <div class="Teach">
             <h1>Home>Teaching:-</h1>
                <p>All Our Teaching Staff :-</p>
            </div>
        </section> -->
        <nav aria-label="breadcrumb" style="background: aliceblue;margin-top: 215px;padding-left: 20px;
    margin-bottom: 31px;">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#" style="color: black;">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Non-Teaching staff</li>
                </ul>
            </nav>
       
        <!-- ----------------------------------tabulation part------------------------ -->
       
        <table style="background:cornsilk ; border:2px solid #3467;">
            <tbody>
                <h1>Non-Teaching Staff :- </h1>
            <tr>
            
                <th rowspan="1"><h5>Department</h5></th>
                <th> Staff Name</th>
                <!-- <th>Qualification</th>
                <th>Total Experience</th> -->
                <!-- <td> -</td> -->
                <th>photo</th>
            </tr>
            <tr>
                <td rowspan="3">Warden </td>
                <td>ABC</td>
                <td>MA</td>
                <!-- <td>5YR</td>
                <td>-</td> -->
            </tr>
            <tr>
                <td rowspan="1"><h5>1234</h5></td>
                <td>MA </td>
                <!-- <td> 3YR </td> 
                <td> - </td> -->
                <!-- <td> - </td> -->
                <!-- <td>RIGHT</td> -->
            </tr>
            <tr>
                <!-- <td>XYZ</td> -->
                <!-- <td>MA</td> -->
                <!-- <td> 10YR </td>
                <td>-</td> -->
                <!-- <td>-</td> -->
            </tr>
            <tr>
                <td rowspan="2"><h5>Sweeper</h5></td>
                <td>ABC</td>
          <td>MA</td>
                    <!--   <td>5YR</td>
                <td> -</td> -->
                <!-- <td rowspan="2">TIME</td> -->
            </tr>
            <tr>
                <td>123</td>
                <td>MA </td>
                <!-- <td>3YR</td>
                <td>-</td> -->
            </tr>
            <tr>
                <td rowspan="2"><h5>office Assistant</h5></td>
                <td>ABC</td>
                <td>MA</td>
                <!-- <td>3YR</td>
                <td> -</td> -->
                <!-- <td rowspan="2">TIME</td> -->
            </tr>
            <tr>
                <td>123</td>
                <td>MA </td>
                <!-- <td>2YR</td>
                <td>-</td> -->
            </tr>
            <tr>
                <td rowspan="2"><h5>PET</h5></td>
                <td>ABC</td>
                <td>MA</td>
                <!-- <td>4YR</td>
                <td> -</td> -->
                <!-- <td rowspan="2">TIME</td> -->
            </tr>
            <tr>
                <td>123</td>
                <td>MA </td>
                <!-- <td>3YR</td>
                <td>-</td> -->
            </tr>
            <tr>
                <td rowspan="2"><h5>Cooker</h5></td>
                <td>ABC</td>
                <td>MA</td>
                <!-- <td>3YR </td>
                <td> -</td> -->
                <!-- <td rowspan="2">TIME</td> -->
            </tr>
            <tr>
                <td>123</td>
                <td>MA</td>
                <!-- <td>4YR</td>
                <td>-</td> -->
            </tr>
            <tr>
                <td rowspan="2"><h5>Security</h5> </td>
                <td> ABC</td>
                <td>MA</td>
                <!-- <td>5YYR </td>
                <td> -</td> -->
                <!-- <td rowspan="2">TIME</td> -->
            </tr>
            <tr>
                <td>123</td>
                <td>MA </td>
                <!-- <td>7YR</td>
                <td>-</td> -->
            </tr>
            </tbody>
        </table>

      
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
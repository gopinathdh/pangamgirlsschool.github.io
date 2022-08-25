<?php
include('header.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="with=device-width ,initial-scale=1.0">

    <title>GOVT(SSD)GIRL'S HIGH SCHOOL PANGAM</title>
    <!-- <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet"> -->



</head>
<style>
/* @import url('https://fonts.googleapis.com/css?family=Montserrat'); */

/* * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
} */
/* body {
  font-family: 'Montserrat', sans-serif;
  background-color: rgb(74, 157, 205);
  color: #fff;
} */

.intro {
    height: 489px;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    letter-spacing: 0.1rem;
}

.intro-slideshow img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    /* relative to nearest positioned ancestor and not nearest block-level ancestor - alternatively: width: 100vw; */
    height: 100%;
    /* relative to nearest positioned ancestor and not nearest block-level ancestor - alternatively: height: 100vh; */
    object-fit: cover;
    z-index: -1;
    /* filter: brightness(50%); */
    /* 0% black, 100% original image, values > 100% are allowed for brighter than original image. */
    /* display: none; */
    opacity: 0;
    transition: opacity 0.75s ease-in-out;
}

/* .intro-slideshow img:first-child {
  display: block;
  opacity: 1;
} */
.intro .intro-header {
    border-radius: 0.5rem;
    padding: 2rem 2.5rem;
    background-color: rgb(2 191 241 / 50%);
}

.intro h1 {
    font-size: 3rem;
    margin-bottom: 0.75rem;
}

.intro p {
    font-size: 0.75rem;
}

@media (max-width: 700px) {
    html {
        font-size: 12px;
    }

    .intro-header {
        padding: 1.5rem 2rem;
    }

    .intro h1 {
        font-size: 2.5rem;
    }

    .intro p {
        font-size: 1.25rem;
    }
}
</style>
<body>
<body>
    <header class="intro" style="margin-top: 59px;height: 453px;">
        <div class="intro-slideshow">
            <img src="pangam/image101.jpeg">
            <img src="pangam/image102.jpeg">
            <img src="pangam/image103.jpeg">
            <img src="pangam/image104.jpeg">
            <img src="pangam/image105.jpeg">
        </div>
        <div class="intro-header" style="margin-right: 138px;
    margin-left: 125px;">
            <h1>Independence Day</h1>
            <p>It's all about the journey</p>
        </div>
        <!-- ------------enquiry--------------- -->
        <div class="orh-form orh-home-text" style="width: 27%;
    padding: 20px;
    border: 1px solid;
    background: khaki;">
        <div id="form-collapse" style="display: none;">-</div>
        <p class="text-center form-head" style="margin-left: -45px;font-size: larger;
        color: darkviolet;margin-bottom: 1px;">Admission Enquiry
            <!--<span id="acdyr" value="2022-23">2022-23</span>-->
            <!-- <select class="" id="acadamicYear" style="width: 86px;">
                <option value="">Select Academic Year</option>
                <option value="2022-23" selected="">2022-23</option>
                <option value="2023-24">2023-24</option>
            </select> -->
        </p>
        <p class="text-center" style="font-size: 12px; margin-bottom: 0px; line-height: 1px;margin-left: -25px;">A
            Journey To A Better
            Future Begins With Us</p>
            <?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "enquiry";

$conn = mysqli_connect($server,$username,$password,$dbname);

if(isset($_POST['submit']))
{
$name= $_POST['name'];
$parent_name= $_POST['parent_name'];
$emailid= $_POST['emailid'];
$phone= $_POST['phone'];
$city= $_POST['city'];
$Secured_mark= $_POST['Secured_mark'];
$district= $_POST['district'];
$class= $_POST['class'];

$query="insert into  admission (name,parent_name,emailid,phone,city,Secured_mark,district,class) values('$name','$parent_name','$emailid','$phone','$city','$Secured_mark','$district','$class')";

$run=mysqli_query($conn,$query) or die(mysqli_error());
if ($run){
    echo "form submitted successfully";

}
else{
    echo "form not submitted";
}
 }  
//  else {
//     echo "all fields required";
//  }

?>

            <form action="admission.php" method="POST">

        <form class="caldera-grid" style="margin-left: 21px;margin-bottom: -35px;">
            <label id="errormsg" class="text-danger"></label>
            <div class="form-group" style="margin-bottom: 6px;" >
                <input placeholder="Student Name *" required="" type="text" class=" form-control" id="name_lead"
                    name="name" value="" data-type="text" aria-r="" equired="true" aria-labelledby="fld_8768091Label"
                    style="
                width:270px; padding: 4px;">
            </div>
            <div class="form-group" style="margin-bottom: 6px;">
                <input placeholder="Parent Name *" required="" type="text" class=" form-control" id="parent_name"
                    name="parent_name" value="" data-type="text" aria-required="true" aria-labelledby="fld_8768091Label"
                    style="
                width: 270px;padding: 4px;">
            </div>
            <div class="form-group" style="margin-bottom: 6px;">
                <div class="phone-wrapper" style="width: 100%; display: flex;">
                </div>
                <div class="phone-num" >
                    <input placeholder="Phone Number*" maxlength="10" required="" type="number"
                        oninput="numberOnly('phone_lead');javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                        class="form-control" id="phone_lead" name="phone" value="" data-type="text" aria-required="true"
                        aria-labelledby="fld_8768091Label" style="
                   width: 270px;padding: 4px;">
                </div>
            </div>

            <!--
              <div class="form-group" id="verify_card" style="background-color:#ebebeb;display:none; padding:10px; border-radius:5px;">
                  <div class="form-group phone-num" style="width: 100%; margin-bottom: 10px;">
                      <input placeholder="Enter OTP*" maxlength="6" type="number" class="form-control" id="otp" name="otp" value="" data-type="text" aria-required="true" aria-labelledby="fld_8768091Label">
                  </div>
                  <div class="phone-wrapper" style="width: 100%;display:flex;">
                      <div style="width: 45%;margin-right:10px;">
                          <button style="height:30px; font-size: 12px;" class="btn btn-primary" id="verify_otp">Verify</button>
                      </div>
                      <div style="width: 50%;">
                          <button style="height:30px; font-size: 12px;" class="btn btn-primary" id="send_otp">Resend</button>
                      </div>
                  </div>
                  <div style="font-size: 14px; color:#c72027;">Time Left: <span id="otp_counter"></span></div>
              </div>
            -->
            <div class="form-group" style="margin-bottom: 6px;">
                <input placeholder="Email ID" type="text" class="form-control" id="emailid" name="emailid" value=""
                    data-type="text" style="
              width: 270px; padding: 4px;">
            </div>
            <div class="form-group" style="margin-bottom: 6px;">
                <input placeholder="City/Town/Village" type="text" class="form-control" id="emailid" name="city"
                    value="" data-type="text" style="
                width: 270px;padding: 4px;">
            </div>
            <div class="form-group" style="margin-bottom: 6px;">
                <input placeholder="Secured mark" type="text" class="form-control" id="emailid" name="Secured_mark" value=""
                    data-type="text" style="
                        width:270px;padding: 4px;">
            </div>
            <div class="form-group" style="
         display: flex;margin-left: 45px;" >
                <select name="district" class="form-control" id="city_lead"
                    aria-labelledby="fld_1475572Label" style="height: 35px;
    width: 142px;">
                    <option value="">Select District*</option>
                    <option value="Angul">Angul</option>
                    <option value="Balangir">Balangir</option>
                    <option value="Balasore">Balasore</option>
                    <option value="Bargarh">Bargarh</option>
                    <option value="Bhadrak">Bhadrak</option>
                    <option value="Boudh">Boudh</option>
                    <option value="Cuttack">Cuttack</option>
                    <option value="Deogarh">Deogarh</option>
                    <option value="Dhenkanal">Dhenkanal</option>
                    <option value="Gajapati">Gajapati</option>
                    <option value="Ganjam">Ganjam</option>
                    <option value="Jagatsinghapur">Jagatsinghapur</option>
                    <option value="Jajpur">Jajpur</option>
                    <option value="Jharsuguda">Jharsuguda</option>
                    <option value="Kalahandi">Kalahandi</option>
                    <option value="Kandhamal">Kandhamal</option>
                    <option value="Kendrapara">Kendrapara</option>
                    <option value="Kendujhar">Kendujhar</option>
                    <option value="Khordha">Khordha</option>
                    <option value="Koraput">Koraput</option>
                    <option value="Malkangiri">Malkangiri</option>
                    <option value="Mayurbhanj">Mayurbhanj</option>
                    <option value="Nabarangpur">Nabarangpur</option>
                    <option value="Nayagarh">Nayagarh</option>
                    <option value="Nuapada">Nuapada</option>
                    <option value="Puri">Puri</option>
                    <option value="Rayagada">Rayagada</option>
                    <option value="Sambalpur">Sambalpur</option>
                    <option value="Sonepur">Sonepur</option>
                    <option value="Sundargarh">Sundargarh</option>
                </select>



                <div class="form-group" >
                    <select name="class" class="form-control" id="grade_lead"
                        aria-labelledby="fld_1475572Label" style="margin-left: 6px; padding:7px;width:100%">
                        <option value="">Select Class*</option>
                        <option value="Class vi">Class vi</option>
                        <option value="Class vii">Class vii</option>
                        <option value="Class viii">Class viii</option>
                        <option value="Class ix">Class ix</option>
                        <option value="Class x">Class x</option>
</select>

                </div>
            </div>

            <!-- <div class="whatsapp-wrapper">
                  <input type="checkbox" id="whatsapp" name="whatsapp" value="whatsapp" checked>
                  <label for="whatsapp"> Receive your appointment details on WhatsApp</label>
              </div> -->
            <div class="form-group" style="
    margin-left: -56px;">
                <p class="text-center" style="
        color: orangered;
        margin-left: 45px;
       ">Totally Free admission</p>
            </div>
            <div class="form-group" style="margin-left: -16px;">
                <button style=" font-weight: 600; font-size: 16px; width: 100px;
        padding: 5px;margin-top: -21px;" type="submit" class="btn btn-primary" id="orchidsform" name="submit" value="Submit">SUBMIT</button>
            </div>
        </form>
    </div>
    </div>

    </header>
    <div class="container-fluid orc-admission-process-cont">
        <div class="row" style="margin-top: 20px;">
            <div class="col-md-12">
                <div class="sub-head text-center">
                    <h1 style="text-align: center;
                margin-top: 65px;">SCHOOL ADMISSION PROCESS: STEP-BY-STEP</h1>
                    <hr style="width: 497px;
    margin-left: 280px;
    height: 7px;
    background: burlywood;">
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 
    60px; margin-bottom: 50px;">
            <div class="col-md-8">
                <div class="orc-content">
                    <p style="padding-bottom: 20px;">The step-by-step process involved in the admission process.</p>
                    <p>As it is a girls high school only girls students are allowed to take admission from class 6th to
                        class 10th ;
                        there is a hostel attached to school where <imp>192 Boarders can stay on 9:1 ratio for ST & SC
                            students.

                        </imp>Though students strenght of each class is 50 hostel admission is taken as per the vacancy
                        .
                        in case of more applicant for the hostel an entrance Test is conducted for the hostel admission.
                        We understand your dilemma of going through a tedious online
                        admission process and have designed a few simple steps to complete the school
                        admission procedure. </p>

                    <p><strong>Step 1:</strong> Parents fill <a
                            href="admission.php"><imp style="color:blue;">the Enquiry Form</imp></a> on
                        our website choosing the
                     fields of their preference. </p>
                    <p><strong>Step 2:</strong> Upon submission of the Enquiry Form then
                        the parents receive
                        communication regarding their location and contact details for the next steps.</p>
                    <p><strong>Step 3:</strong> Our school counselor will connect with the parent over call
                        and share information about the school. virtual counseling or phone
                        counseling, campus visit, etc. </p>
                    <p><strong>Step 4:</strong> offline Entrance will be conduted for the admission .The parent is then requested to come School.
                          </p>
                    <p><strong>Step 5:</strong> if the student pass the exam  then Parents are  requested to come 
                        for their child’s school admission with all necessary documents. </p>
                        <h2>What are the Documents required for admission :-</h2>
                        <ul style="margin-left: 171px;
    margin-top: 20px;
    margin-bottom: 10px;
    color: navy;">
                            <li>Original TC</li>
                            <li>Marksheet</li>
                            <li>Caste Certificate</li>
                            <li>Income Certificate</li>
                            <li>Blood Group Report</li>
                            <li>Aadhar card of student,father & mother</li>
                            <li>Ration Card of the family</li>
                            <li>Front page xerox copy of bank passbook of student</li>
                            <li>Birth certificate is available</li>
                            <li>4nos.passport size photograph of students</li>
                            <li>2nos.passport size photograph of parents</li>
                           
                        </ul>
                  
                    <p><strong>Step 6:</strong> The child enrollment number is generated and the admission
                        process successfully comes to an end.</p>
                </div>
            </div>
        </div>
 <!--------------------footer------------------------->
 <?php
include('footer.php');
?>
        <!-- ------------------back to top-------------------- -->

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
        <!-- ----------------admission slide ------------------- -->
        <script>
        const slideshowImages = document.querySelectorAll(".intro-slideshow img");

        const nextImageDelay = 5000;
        let currentImageCounter = 0; // setting a variable to keep track of the current image (slide)

        // slideshowImages[currentImageCounter].style.display = "block";
        slideshowImages[currentImageCounter].style.opacity = 1;

        setInterval(nextImage, nextImageDelay);

        function nextImage() {
            // slideshowImages[currentImageCounter].style.display = "none";
            slideshowImages[currentImageCounter].style.opacity = 0;

            currentImageCounter = (currentImageCounter + 1) % slideshowImages.length;

            // slideshowImages[currentImageCounter].style.display = "block";
            slideshowImages[currentImageCounter].style.opacity = 1;
        }
        </script>
    </div>
</body>

</html>
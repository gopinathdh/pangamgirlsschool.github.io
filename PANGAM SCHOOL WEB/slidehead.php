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
    height: 480px;
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
    font-size: 4rem;
    margin-bottom: 0.75rem;
}

.intro p {
    font-size: 1.75rem;
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
    <header class="intro" style="margin-top: 106px;">
    <h2 style="margin-left: -1042px;
    margin-bottom: 45px;
    width: 20%;
    background:antiquewhite; ">NOTICES</h2>      
           
        <div class="intro-slideshow">
            <img src="pangam/pangam1.jpg">
            <!-- <img src="pangam/image101.jpeg"> -->
            <img src="pangam/image103.jpeg">
            <img src="pangam/teacher101.jpeg">
            <!-- <img src="pangam/2.jpg"> -->
            <img src="pangam/plant101.jpeg">
            <!-- <img src="pangam/image102.jpeg"> -->
        </div>
        <!-- <div class="intro-header">
            <h1>Independence Day</h1>
            <p>It's all about the journey</p>
        </div> -->
    </header>
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


</body>
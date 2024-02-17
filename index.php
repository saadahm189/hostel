<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Inlcude Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home</title>
</head>

<body class="bg-cover" style="background-image: url(slideImages/bg.jpg)">
    <!-- Navbar -->
    <?php
    include("partials/navbar.php");
    ?>
    <!-- First div -->
    <div class="flex flex-row m-5 p-5 font-poppins">
        <div class="basis-2/3 m-5 p-5">
            <p class="text-6xl m-2 p-2"><b class="text-red-600">Welcome to Taraman Bibi Hall</b></p>
        </div>

        <!-- Right side picture frame  -->
        <div class="basis-2/3 rounded-lg p-5 bg-white/60 shadow-lg">
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <img class="rounded-lg shadow-lg" src="slideImages/1.jpg" style="width:100%">
                </div>
            </div>
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <img class="rounded-lg shadow-lg" src="slideImages/2.jpg" style="width:100%">
                </div>
            </div>
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <img class="rounded-lg shadow-lg" src="slideImages/3.jpg" style="width:100%">
                </div>
            </div>
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <img class="rounded-lg shadow-lg" src="slideImages/4.jpeg" style="width:100%">
                </div>
            </div>
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <img class="rounded-lg shadow-lg" src="slideImages/5.jpg" style="width:100%">
                </div>
            </div>
            <!-- Dots -->
            <div style="text-align:center">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </div>
    <!-- Second div -->
    <div class="flex flex-row m-5 p-5 ">
        <div class="basis-1/3 m-5 rounded-lg bg-white/60 shadow-lg">
            <img class="rounded-lg shadow-xl" src="slideImages/taramna.jpg" alt="not found">
            <div class="text-lg p-5">
                <h1 class="font-bold">Bir Protik</h1>
                <h1 class="text-gray-800 text-3xl">Taramon Bibi</h1>
                <h1 class="text-gray-800 text-md"><br> Bibi (1956 – 1 December 2018) was one of the two female freedom fighters in Bangladesh obtaining the Bir Protik award. She engaged in direct combat during the liberation war of Bangladesh in 1971 as a member of the Mukti Bahini (Liberation Army) which was a guerrilla force that fought against the Pakistan military.</h1>

            </div>
        </div>
        <div class="basis-2/3 m-5 p-5">
            <h1 class="m-5 text-3xl font-bold text-gray-600">Hello </h1>
            <p class="text-lg ml-5"> details will be added here</p>
        </div>
    </div>
    <!-- Image SlideShow -->
    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>
</body>

</html>
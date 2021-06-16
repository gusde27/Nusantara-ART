<!DOCTYPE html>
<html>

<head>
    <title>Nusanta Art</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <header>
        <nav class="Menu-Navigasi">
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Help</a>
                <a href="#">Contact</a>
                <img src="img/NusantaArt.png">
            </div>
        </nav>
        <div class="logo">
            <img src="img/NusantaArt.png">
        </div>
        <div class="find">
            <div class="Search-bar">
                <input type="text" placeholder="Search.." name="find">
            </div>
        </div>
        <div class="profile">
            <a href="login.php">Login</a>
        </div>
    </header>
    <div class="container">
        <div class="content">
            <!-- sliding content -->
            <!-- Slideshow container -->
            <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <div class="numbertext">
                        <h1>TRANDING</h1>
                    </div>
                    <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg">
                    <div class="text">Caption Text</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">
                        <h1>TRANDING</h1>
                    </div>
                    <img src="https://i.insider.com/5f1f1dcc3f73704b7a63d4c4">
                    <div class="text">Caption Two</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">
                        <h1>TRANDING</h1>
                    </div>
                    <img src="https://i.insider.com/5f1f1dcc3f73704b7a63d4c4">
                    <div class="text">Caption Three</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">
                        <h1>TRANDING</h1>
                    </div>
                    <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg">
                    <div class="text">Caption Four</div>
                </div>


                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>

            <!-- The dots/circles -->
            <br>

            <div style="text-align:center; margin-top: 36px;">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
            </div>
            <!-- end of sliding content -->
        </div>
        <ul class="vid-container">
            <li>
                <div class="video">
                    <div class="vid-box">
                        box
                    </div>
                    <div class="judul-profile">
                        <a class="judul" href="#">judul kwafuafajois</a>
                        <div class="profile-img">
                            img
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="video">
                    <div class="vid-box">
                        box
                    </div>
                    <div class="judul-profile">
                        <a class="judul" href="#">judul kwafuafajois</a>
                        <div class="profile-img">
                            img
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="video">
                    <div class="vid-box">
                        box
                    </div>
                    <div class="judul-profile">
                        <a class="judul" href="#">judul kwafuafajois</a>
                        <div class="profile-img">
                            img
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="video">
                    <div class="vid-box">
                        box
                    </div>
                    <div class="judul-profile">
                        <a class="judul" href="#">judul kwafuafajois</a>
                        <div class="profile-img">
                            img
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="video">
                    <div class="vid-box">
                        box
                    </div>
                    <div class="judul-profile">
                        <a class="judul" href="#">judul kwafuafajois</a>
                        <div class="profile-img">
                            img
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="video">
                    <div class="vid-box">
                        box
                    </div>
                    <div class="judul-profile">
                        <a class="judul" href="#">judul kwafuafajois</a>
                        <div class="profile-img">
                            img
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="video">
                    <div class="vid-box">
                        box
                    </div>
                    <div class="judul-profile">
                        <a class="judul" href="#">judul kwafuafajois</a>
                        <div class="profile-img">
                            img
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="video">
                    <div class="vid-box">
                        box
                    </div>
                    <div class="judul-profile">
                        <a class="judul" href="#">judul kwafuafajois</a>
                        <div class="profile-img">
                            img
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="video">
                    <div class="vid-box">
                        box
                    </div>
                    <div class="judul-profile">
                        <a class="judul" href="#">judul kwafuafajois</a>
                        <div class="profile-img">
                            img
                        </div>
                    </div>
                </div>
            </li>

        </ul>

    </div>
    <footer>
        footer
    </footer>

</body>

<!-- JS -->
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}
</script>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>

</html>
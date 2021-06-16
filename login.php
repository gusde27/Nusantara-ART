<!DOCTYPE html>
<html>

<head>
    <title>Nusanta Art</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="SignUpstyle.css">
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
        <div class="profile">
            <a href="#">Login</a>
        </div>
    </header>
    <div class="login-container">
        <form action="/action_page.php" method="post">
            <div class="imgcontainer">
                <img src="img/NusantaArt.png" alt="Avatar" class="avatar">
            </div>

            <div class="log-container">
                <label for="uname"><b style="color: white;">Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>

                <label for="psw"><b style="color: white;">Password</b></label>
                <input type="password" placeholder="Enter Password" name="pass" required>

                <button type="submit">Login</button>
                <div class="sign-up" style="width: 100%; background-color: #ff7f00;">
                    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign
                        Up</button>

                    <div id="id01" class="modal">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close"
                            title="Close Modal">&times;</span>
                        <form class="modal-content" action="/action_page.php">
                            <div class="container">
                                <h1>Sign Up</h1>
                                <p>Please fill in this form to create an account.</p>
                                <hr>
                                <label for="email"><b>Email</b></label>
                                <input type="text" placeholder="Enter Email" name="email" required>

                                <label for="psw"><b>Password</b></label>
                                <input type="password" placeholder="Enter Password" name="pass" required>

                                <label for="psw-repeat"><b>Repeat Password</b></label>
                                <input type="password" placeholder="Repeat Password" name="pass-repeat" required>

                                <label>
                                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px">
                                    Remember me
                                </label>

                                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms &
                                        Privacy</a>.</p>

                                <div class="clearfix">
                                    <button type="button" onclick="document.getElementById('id01').style.display='none'"
                                        class="cancelbtn">Cancel</button>
                                    <button type="submit" class="signupbtn">Sign Up</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <script>
                    // Get the modal
                    var modal = document.getElementById('id01');

                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }
                    </script>
                </div>
                <label>
                    <input type="checkbox" checked="checked" name="remember">
                    <h style="color: white; margin-left: 20px;">Remember me</h>
                </label>
            </div>

            <div class="log-container">
                <span class="psw">Forgot <a href="#" style="color: white; text-decoration: none;">password?</a></span>
            </div>
        </form>
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
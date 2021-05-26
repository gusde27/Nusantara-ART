<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nusantara ART</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar mx-auto navbar-expand-lg navbar-dark mb-5" style="background-color: #680105;">
        <a class="navbar-brand" href="index.php">
            <img src="assets/img/nusa.png" alt="" height="40px" width="100px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto text-center">
                <li class="nav-item">
                    <a class="nav-link" href="#">Menu<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Help</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Main -->
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <img src="assets/img/legong.jpeg" alt="" height="724px" width="610px">
            </div>
            <div class="col-sm-5">
                <center>
                    <h5 style="color: #680105; font-family: rubik;"><b>SIGN IN</b></h5>
                </center>
                <!-- Login Card -->
                <div class="card" style="background-color: #680105;">
                    <div class="card-body m-4">

                        <center>
                            <form action="LoginHendler.php" method="POST">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Username">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                        anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <p style="color: white; font-family: rubik;">Password</p>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Password">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                        anyone else.</small>
                                </div>
                                <button type="submit" style="background-color: #F28928; font-size:small;"
                                    class="btn btn-primary mb-3">Submit</button>
                            </form>

                            <p class="mb-0" style="color: white; font-family: rubik; font-size:small;">Forgot yout
                                password?</p>
                        </center>

                    </div>
                </div>
                <!-- End Login Card -->
            </div>
            <div class="col-sm-4">
                One of three columns
            </div>
        </div>
    </div>
    <!-- Main -->



    <!-- Javascripts -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/bootstrap.bundle"></script>

    <!-- CDN JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>

</html>
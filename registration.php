<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>iParkIt - Registeration</title>
    <link rel="stylesheet" href="./mics/assets/bootstrap/css/bootstrap.min.css?h=fa6b9afdb17a0869520a0875799c5fdf">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="./mics/assets/css/style.min.css">
    <link rel="stylesheet" href="./mics/assets/css/styles.min.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#">iParkIt</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="./CarParkR/features.html">Features</a></li> -->
                    <!-- <li class="nav-item"><a class="nav-link" href="/about-us.html">About Us</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="registration.php">Get Started</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Registration</h2>
                    <!-- <p>New Members are always Welcome!</p> -->
                </div>
                <form action="signup.php" method="GET">
                    <div class="form-group"><label for="firstName">First Name</label><input class="form-control item" type="text" id="name" name="firstName" required></div>
                    <div class="form-group"><label for="lastName">Last Name</label><input class="form-control item" type="text" id="name" name="lastName" required></div>
                    <div class="form-group"><label for="pw">Password</label><input class="form-control item" type="password" id="password" name="pw" required></div>
                    <div class="form-group"><label for="email">Email</label><input class="form-control item" type="email" id="email" name="email" required></div>
                    <button class="btn btn-primary btn-block" type="submit">Sign Up</button>
                </form>
            </div>
        </section>
    </main>
    <!-- Start: Footer Dark -->
    <footer class="page-footer">
        <div class="footer-copyright">
            <p>© 2020 iParkIt</p>
        </div>
    </footer>
    <!-- End: Footer Dark -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="./mics/assets/js/script.min.js?h=037c4117326bceadaedc2681de8afadc"></script>
</body>

</html>
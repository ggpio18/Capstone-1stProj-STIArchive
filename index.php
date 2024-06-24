<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Online thesis archiving system</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+Inscriptional+Pahlavi&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500&amp;subset=cyrillic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/404-NOT-FOUND-animated.css">
    <link rel="stylesheet" href="assets/css/404.css">
    <link rel="stylesheet" href="assets/css/Clean-Button-Scale-Hover-Effect.css">
    <link rel="stylesheet" href="assets/css/Dark-NavBar-Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Dark-NavBar-Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/Dark-NavBar.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean-icons.css">
    <link rel="stylesheet" href="assets/css/Header-Cover01.css">
    <link rel="stylesheet" href="assets/css/Navbar-Right-Links-icons.css">
    <link rel="stylesheet" href="assets/css/Navbar-vmnt.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md sticky-top navigation-clean-button" style="height: 80px;background-color: #014887;color: #ffffff;">
            <div class="container-fluid"><a class="navbar-brand" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-telephone-fill">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>
                    </svg>&nbsp;0999 885 6072</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-3"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-3">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"></li>
                        <li class="nav-item"></li>
                        <li class="nav-item"></li>
                        <li class="nav-item"><a class="nav-link active" style="color:#ffffff;" href="register_form.php"><i class="fa fa-registered"></i>&nbsp;Register</a></li>
                        <li class="nav-item"><a class="nav-link active" style="color:#ffffff;" href="login_form.php"><i class="fa fa-sign-in" style="margin-right: 6px;"></i>Student/Admin Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div></div>
    <header id="fullscreen_cover"></header>
    <nav class="navbar navbar-dark navbar-expand-md sticky-top bg-success d-xl-flex flex-column justify-content-xl-center align-items-xl-start bounce animated navigation-clean-search" style="padding:5px;">
        <div class="container-fluid"><img src="assets/img/download.png" width="40" height="32" style="margin-right: 15px;"><a class="navbar-brand link-dark" style="color:#eeeeee;" href="index.html">STI-PHP</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button><a style="padding-left: 21px;" href="index.html">Home</a><a style="padding-right: 21px;margin-left: 20px;padding-left: 15px;" href="Project.html">Projects</a>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown show"><a class="dropdown-toggle nav-link link-dark" aria-expanded="true" data-bs-toggle="dropdown" href="#">Department</a>
                        <div class="dropdown-menu show" data-bs-popper="none"><a class="dropdown-item" href="Archive%20List%20of%20College%20of%20Computer%20Studies.html">College Of Computer Studies</a><a class="dropdown-item" href="Archive%20List%20of%20College%20of%20Education.html">College Of Education</a><a class="dropdown-item" href="Archive%20List%20of%20College%20of%20Engineering.html">College Of Engineering</a></div>
                    </li>
                    <li class="nav-item dropdown show"><a class="dropdown-toggle nav-link link-dark" aria-expanded="true" data-bs-toggle="dropdown" href="#">Courses</a>
                        <div class="dropdown-menu show" data-bs-popper="none"><a class="dropdown-item" href="Archive%20List%20of%20BSIT.html">BSIT</a><a class="dropdown-item" href="Archive%20List%20of%20BSCS.html">BSCS</a><a class="dropdown-item" href="Archive%20List%20of%20BSCPE.html">BSCPE</a></div>
                    </li>
                    <li class="nav-item"></li>
                </ul><a style="margin-left: 22px;" href="About.html">About Us</a>
                <form class="ms-auto" id="form" target="_self">
                    <div class="form-group mb-3"><label class="form-label" for="search-field"></label><input class="form-control form-control-sm search-field" type="search" id="search-field" name="search-field" placeholder="Search" autocomplete="on" style="color: rgb(8,8,8);"><button class="btn btn-link botao-limpa" id="botao-limpa" type="button" value="Limpa" onClick="limpa()"><i class="fa fa-remove"></i></button></div>
                </form>
            </div>
        </div>
    </nav>
    <section>
        <div></div>
        <div class="d-flex d-xxl-flex flex-column justify-content-center align-items-center justify-content-xxl-center align-items-xxl-center" data-bss-scroll-zoom="true" data-bss-scroll-zoom-speed="1" style="background-image: url(&quot;assets/img/ad%20banner.jpg&quot;);background-position: center;background-size: cover;padding-top: 172px;">
            <h1 class="display-3 font-monospace text-nowrap fw-semibold text-light d-xxl-flex flex-column justify-content-xxl-center align-items-xxl-center" style="padding-top: 0px;padding-bottom: 79px;text-shadow: 5px 7px rgb(0,0,0);">STI COLLGE SAN PABLO</h1><button class="btn btn-primary" type="button" style="margin-top: -64px;margin-bottom: 48px;">Explore Projects</button>
        </div>
    </section>
    <section class="d-flex flex-column justify-content-center align-items-center" style="margin-left: 150px;margin-right: 247px;">
        <div>
            <div>
                <h1 class="text-center d-flex justify-content-center align-items-center pulse animated" style="padding-top: 0px;margin-top: 34px;">Welcome</h1>
                <p class="d-flex flex-column justify-content-center align-items-center pulse animated" style="padding-left: 0px;margin-left: 3px;margin-right: -5px;"><br><span style="font-weight: normal !important; font-style: normal !important;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut aliquam ligula. Cras consequat id orci eget imperdiet. Nulla eu libero purus. Donec dolor ipsum, dictum sit amet convallis quis, blandit ut nibh. Sed gravida molestie augue, et rutrum ipsum gravida at. Sed pulvinar ante ut justo molestie ullamcorper. Etiam lectus mi, maximus a suscipit vitae, sagittis vitae enim.&nbsp;</span><br><br></p>
            </div>
            <p class="d-flex d-xxl-flex flex-column justify-content-xxl-center align-items-xxl-center pulse animated" style="padding-top: 0px;margin-top: -61px;"><br><span style="font-weight: normal !important; font-style: normal !important;">In eu nulla neque. Integer et posuere lorem. Ut cursus lorem sit amet magna consequat auctor. Morbi justo ipsum, semper rhoncus leo non, facilisis mollis lorem. Aliquam erat volutpat. Sed convallis, metus eu auctor porta, metus felis tincidunt neque, nec molestie sapien ante ac purus. Ut bibendum odio in scelerisque molestie.</span><br><span style="font-weight: normal !important; font-style: normal !important;">Etiam convallis vitae nisi scelerisque gravida. Morbi commodo aliquam tellus, ut iaculis velit volutpat eget. Vestibulum bibendum diam nec sapien accumsan, quis convallis tellus sodales. Praesent ex diam, gravida pellentesque dolor id, sagittis rutrum sapien. Mauris pretium enim quis est bibendum auctor. Aliquam bibendum aliquet nisi, nec iaculis tortor commodo et. Nulla facilisi. Proin ultrices, nisi ac lacinia pellentesque, lectus magna sodales ante, vitae porttitor est nisl bibendum neque. Integer at quam sed augue dictum accumsan id et turpis. Donec dignissim erat vitae purus tincidunt, viverra euismod leo luctus. Duis vulputate, nunc a iaculis hendrerit, libero nibh dignissim elit, a pharetra orci ex vehicula arcu.</span><br><br><br><br></p>
        </div>
    </section>
    <footer class="text-center d-flex flex-column align-items-start justify-content-xxl-end align-items-xxl-center py-4" style="background: #ffffff;">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-3">
                <div class="col">
                    <p class="text-muted d-xxl-flex justify-content-xxl-start my-2" style="text-align: left;font-weight: bold;">Copyright&nbsp;© 2023. All rights reserved</p>
                </div>
                <div class="col" style="padding-left: 11px;margin-right: -64px;margin-left: 40px;">
                    <ul class="list-inline my-2">
                        <li class="list-inline-item me-4"></li>
                        <li class="list-inline-item me-4"></li>
                        <li class="list-inline-item"></li>
                    </ul>
                </div>
                <div class="col">
                    <ul class="list-inline d-xxl-flex justify-content-xxl-end my-2" style="text-align: right;">
                        <li class="list-inline-item" style="text-align: right;"><a class="link-secondary" href="#" style="font-weight: bold;">STI-PHP</a></li>
                        <li class="list-inline-item"><a class="link-secondary" href="#" style="text-align: right;font-weight: bold;">{by: Thesis Group} v1.0</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/404.js"></script>
    <script src="assets/js/Navbar-vmnt-1.js"></script>
    <script src="assets/js/Navbar-vmnt-2.js"></script>
    <script src="assets/js/Navbar-vmnt-3.js"></script>
    <script src="assets/js/Navbar-vmnt.js"></script>
</body>

</html>
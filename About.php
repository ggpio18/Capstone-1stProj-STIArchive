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

<body style="border-top-style: solid;">
    <nav class="navbar navbar-light navbar-expand-md sticky-top navigation-clean-button" style="height: 80px;background-color: #014887;color: #ffffff;">
        <div class="container-fluid"><a class="navbar-brand" href="#" style="margin-left: 27px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-telephone-fill">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>
                </svg>&nbsp;0999 885 6072</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" style="color:#ffffff;" href="login_form.php"><i class="fa fa-registered"></i>&nbsp;Register</a></li>
                    <li class="nav-item"><a class="nav-link" style="color:#ffffff;" href="register_form.php"><i class="fa fa-sign-in" style="margin-right: 6px;"></i>Student/Admin Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-dark navbar-expand-md sticky-top bg-success d-xl-flex flex-column justify-content-xl-center align-items-xl-start navigation-clean-search" style="padding:5px;">
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
                    <div class="form-group mb-3"><label class="form-label" for="search-field"></label><input class="form-control form-control-sm search-field" type="search" id="search-field" name="search-field" placeholder="Search" autocomplete="on" style="color: rgb(0,0,0);"><button class="btn btn-link botao-limpa" id="botao-limpa" type="button" value="Limpa" onClick="limpa()"><i class="fa fa-remove"></i></button></div>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="border-top-width: 5px;border-top-color: var(--bs-blue);">
                <div class="card" style="border-top-width: 4px;border-top-color: var(--bs-blue);box-shadow: 4px 3px rgb(126,127,128);">
                    <div class="card-header">
                        <h5 class="mb-0">Contact</h5>
                    </div>
                    <div class="card-body">
                        <div class="col-md-6 col-xxl-11" style="padding-left:20px;padding-right:20px;">
                            <fieldset></fieldset>
                            <legend><i class="fa fa-info"></i>&nbsp;STI Collge San Pablo</legend>
                            <p></p>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr></tr>
                                        <tr>
                                            <td><i class="fa fa-map-marker"></i></td>
                                            <td>4000 Lopez Jaena St, San Pablo City</td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-phone"></i></td>
                                            <td>(049561) - 2104</td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-envelope"></i></td>
                                            <td>stisanpablo.edu@yahoo.com</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="box-shadow: 4px 5px rgb(123,123,123);border-top-width: 4px;border-top-color: var(--bs-blue);">
                    <div class="card-header" style="border-top-color: var(--bs-blue);border-bottom-width: 2px;border-bottom-style: solid;">
                        <h5 class="mb-0" style="text-align: center;box-shadow: 0px 0px;">About</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><br><span style="font-weight: normal !important; font-style: normal !important;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut aliquam ligula. Cras consequat id orci eget imperdiet. Nulla eu libero purus. Donec dolor ipsum, dictum sit amet convallis quis, blandit ut nibh. Sed gravida molestie augue, et rutrum ipsum gravida at. Sed pulvinar ante ut justo molestie ullamcorper. Etiam lectus mi, maximus a suscipit vitae, sagittis vitae enim. Donec ullamcorper laoreet purus at mattis.In eu nulla neque. Integer et posuere lorem. Ut cursus lorem sit amet magna consequat auctor. Morbi justo ipsum, semper rhoncus leo non, facilisis mollis lorem. Aliquam erat volutpat. Sed convallis, metus eu auctor porta, metus felis tincidunt neque, nec molestie sapien ante ac purus. Ut bibendum odio in scelerisque molestie.Etiam convallis vitae nisi scelerisque gravida. Morbi commodo aliquam tellus, ut iaculis velit volutpat eget. Vestibulum bibendum diam nec sapien accumsan, quis convallis tellus sodales. Praesent ex diam, gravida pellentesque dolor id, sagittis rutrum sapien. Mauris pretium enim quis est bibendum auctor. Aliquam bibendum aliquet nisi, nec iaculis tortor commodo et. Nulla facilisi. Proin ultrices, nisi ac lacinia pellentesque, lectus magna sodales ante, vitae porttitor est nisl bibendum neque. Integer at quam sed augue dictum accumsan id et turpis. Donec dignissim erat vitae purus tincidunt, viverra euismod leo luctus. Duis vulputate, nunc a iaculis hendrerit, libero nibh dignissim elit, a pharetra orci ex vehicula arcu.</span><br><br></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="text-center d-flex flex-column align-items-start justify-content-xxl-end align-items-xxl-center py-4">
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
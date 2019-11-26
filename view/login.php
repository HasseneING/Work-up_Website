<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="login.css">
    <script src="Login.js"></script>

</head>

<body style="background: #FFCC33;">

    <div class="container">
        <div class="row">
            <br>
            <a href="index.html"><img src="assets/images/logo.png"></a>
            <h2>Welcome To Work'up Fellas!</h2>

        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="form-body">
                    <ul class="nav nav-tabs final-login">
                        <li class="active"><a data-toggle="tab" href="#sectionA">Sign In</a></li>
                        <li><a data-toggle="tab" href="#sectionB">Join us!</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="sectionA" class="tab-pane fade in active">
                            <div class="innter-form">
                                <form class="sa-innate-form" method="post" action="login3.php">
                                    <label style="color: aliceblue;">Email Address</label>
                                    <input type="text" name="email">
                                    <label style="color: aliceblue;">Password</label>
                                    <input type="password" name="password">
                                    <button type="submit">Sign In</button>
                                    <a href="">Forgot Password?</a>
                                </form>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div id="sectionB" class="tab-pane fade">
                            <div class="innter-form">
                                <form class="sa-innate-form" method="post" action="signup.php">
                                    <label style="color: aliceblue;">Name</label>
                                    <input type="text" name="name">
                                    <label style="color: aliceblue;">Email Address</label>
                                    <input type="text" name="email">
                                    <label style="color: aliceblue;">Password</label>
                                    <input type="password" name="password">
                                    <button type="submit">Join now</button>
                                    <p style="color: aliceblue;">By clicking Join now, you agree to Workup's User Agreement, Privacy Policy, and Cookie Policy.</p>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
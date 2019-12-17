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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="stylesheet" href="login.css">
    <script src="Login.js"></script>


    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

<body style="background: #FFCC33;">

    <div class="container">
        <div class="row">
            <br>
            <a href="index.html"><img src="assets/images/logo.png" height="50" width="150"></a>
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
                                <form class="sa-innate-form" method="post" id="form1" action="login3.php">
                                    <label style="color: aliceblue;">Email Address</label>
                                    <input type="text" name="email">
                                    <label style="color: aliceblue;">Password</label>
                                    <input type="password" name="password">
                                    <button type="button" onsubmit="tlog();">Sign In</button>
                                    <a href="recovery/recuperer.html">Forgot Password?</a>
                                </form>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div id="sectionB" class="tab-pane fade">
                            <div class="innter-form">
                                <form class="sa-innate-form" method="post" id="form2" action="signup.php">
                                    <label style="color: aliceblue;">Name</label>
                                    <input type="text" name="name">
                                    <label style="color: aliceblue;">Email Address</label>
                                    <input type="text" name="email">
                                    <label style="color: aliceblue;">Password</label>
                                    <input type="password" name="password">         

                                    <div class="g-recaptcha" data-sitekey="6LcG08YUAAAAAFA19FKFPMLftz8F86NZN3AVkenQ"></div>

                                    <button type="button" onsubmit="tsign();" >Join now</button>
                                    <p style="color: aliceblue;">By clicking Join now, you agree to Workup's User Agreement, Privacy Policy, and Cookie Policy.</p>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
function tlog() {
    var m = document.forms[0].email.value;
    var p = document.forms[0].password.value;
    var form = document.getElementById('form1');
    var t1 = (m == "" && p == "") || (m == "") || (p == "");
    var c = m.lastIndexOf('.');
    if (t1) {
        swal("Error!", "Remplissez Les Champs SVP!", "error", {
            buttons: false,
            timer: 1729
        });
    } else {
        if ((m.indexOf("@") != -1) && (c > m.indexOf("@"))) {
            form.submit();
        } else
            swal("Error!", "Email Invalid!", "error", {
                buttons: false,
                timer: 1729
            });
    }
}

function tsign() {
    var m = document.forms[1].email.value;
    var p = document.forms[1].password.value;
    var n = document.forms[1].name.value;
    var form = document.getElementById('form2');
    var c = m.lastIndexOf('.');

    var t1 = (m == "" && p == "") || (m == "") || (p == "") || (n == "");
    if (t1) {
        swal("Error!", "Remplissez Les Champs SVP!", "error", {
            buttons: false,
            timer: 1729
        });    } else {
        if ((m.indexOf("@") != -1) && (c > m.indexOf("@"))) {
            form.submit();

        } else
        swal("Error!", "Email Invalid!", "error", {
                buttons: false,
                timer: 1729
            });    }
}

</script>















</body>

</html>
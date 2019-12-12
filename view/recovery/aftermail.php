<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="../assets/js/vendor/jquery-1.11.2.min.js"></script>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="../assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="stylesheet" href="../login.css">
    <script src="../Login.js"></script>

</head>

<body style="background: #FFCC33;">

    <?php
    session_start();
    $email = $_SESSION['rec'];
    $code = $_SESSION['code'];
    ?>

    <div class="container">
        <div class="row">
            <br>
            <a href="../index.php"><img src="../assets/images/logo.png" height="50" width="150"></a>
            <h2>Recover your password !</h2>

        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="form-body">
                    <div class="tab-content">
                        <div id="sectionA" class="tab-pane fade in active">
                            <div class="innter-form">
                                <form class="sa-innate-form" method="POST" action="test.php">
                                    <label style="color: aliceblue;">Enter the code</label>
                                    <input type="text" name="code" placeholder="code">
                                    <input type="hidden" name="email" value="<?php echo $email ?>">
                                    <button type="submit">Enter</button>
                                </form>

                                <script>
                                    Javascript: alert('Email sent !');
                                </script>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
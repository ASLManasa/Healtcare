<?php
session_start();
include('Includes/server.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="icon" href="/Images/favicon-16x16.png">
    <link rel="stylesheet" href="/styles.css">
    <link rel="stylesheet" href="login_register.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <style>
        .showpwd {
            position: relative;
        }
    </style>
</head>

<body>
    <?php
    include('Includes/header.php');
    ?>
    <div class="container cont" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="login.php" method="POST" autocomplete="">
                    <h1 class="text-center" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">User Login</h1><br>
                    <p class="text-center" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:18px">India's leading and one stop HealthCare Appointment platform!</p>
                    <p class="text-center" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:18px">HealthX</p><br>
                    <?php
                    if (count($errors) > 0) {
                    ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach ($errors as $showerror) {
                                echo $showerror;
                            }
                            ?>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" style="padding-left: 40px;" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                        <i class="fa fa-envelope" style="float: left; margin:-28px 0 0 10px;" aria-hidden="true"></i>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" id="password" style="padding-left: 40px;" placeholder="Password" required>
                        <i class="fa fa-key" style="float: left; margin:-28px 0 0 10px;" aria-hidden="true"></i>
                        <i class="fa fa-eye" id="show" style="float: right; margin:-28px 10px 0 0; cursor:pointer;" title="Show password" aria-hidden="true"></i>
                        <i class="fa fa-eye-slash" id="hide" style="float: right; margin:-28px 10px 0 0; cursor:pointer; display:none;" title="Hide password" aria-hidden="true"></i>
                    </div>
                    <div class="link forget-pass text-left"><a class="font-weight-bold" href="#">Forgot password?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Login">
                    </div>
                    <div class="link login-link text-center">Not yet a member? <a class="font-weight-bold" href="register.php">Register here!</a></div>
                </form>
            </div>
        </div>
    </div>

    <!-- Show & Hide Password -->
    <script type='text/javascript'>
        $(document).ready(function() {
            $('#show').click(function() {
                $('#password').attr('type', 'text');
                $('#hide').show();
                $('#show').hide();
            });
            $('#hide').click(function() {
                $('#password').attr('type', 'password');
                $('#show').show();
                $('#hide').hide();
            });
        });
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</body>

</html>
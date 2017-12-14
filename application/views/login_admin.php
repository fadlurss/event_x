<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Log in Admin</title>
        <link rel="stylesheet" href="<?= base_url("assets/") ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
        <style>
            body {
                padding-top: 40px;
                padding-bottom: 40px;
                background-color: #eee;
                font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
                font-size: 14px;
                width: 100%;
                display: block;
                margin: 0;
            }

            .form-signin .form-control {
                width: 100%;
                position: relative;
                height: auto;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                padding: 10px;
                font-size: 16px;
            }

            .btn-block {
                display: block;
                width: 100%;
            }

            .form-signin {
                max-width: 330px;
                padding: 15px;
                margin: 0 auto;
            }
        </style>

    </head>

    <body>
        <div class="container">
            <form action="" class="form-signin" method="post">

                <div class="box-body">
                    <h2 class="form-sigin-heading text-center">Admin</h2><br>
                    <div class="alert alert-info <?= (isset($msg)) ? "" : "hidden" ?>">
                        <p><?= (isset($msg)) ? $msg : "" ?></p>
                    </div>
                    <div class="form-group">
                    </div>
                    <div class="form-group">
                        <label for="inputUsername">Username</label>
                        <input type="text" id="username_admin" name="username_admin" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" id="password_admin" name="password_admin" class="form-control" placeholder="*******" required>
                    </div>
                    <button class="btn btn-lg btn-info btn-block" id="login_admin" name="login_admin" type="login">Log In</button><br>
                </div>        
            </form>
        </div>

    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?= base_url("assets/") ?>dist/js/bootstrap.min.js"></script> 
</body>

</html>
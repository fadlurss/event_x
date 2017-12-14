<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>EventX</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?= base_url("assets/") ?>assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url("assets/") ?>assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= base_url("assets/") ?>assets/css/form-elements.css">
        <link rel="stylesheet" href="<?= base_url("assets/") ?>assets/css/style.css">

        <!-- Javascript -->
        
        <script src="<?= base_url("assets/") ?>assets/js/retina-1.1.0.min.js"></script>
        <script src="<?= base_url("assets/") ?>assets/js/scripts.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.3/jquery.backstretch.min.js"></script>

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="<?= base_url("assets/") ?>assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144"  href="<?= base_url("assets/") ?>assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url("assets/") ?>assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url("assets/") ?>assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url("assets/") ?>assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?= base_url("assets/") ?>assets/ico/apple-touch-icon-57-precomposed.png">
    </head>

    <body>
        <!-- Top menu -->
        <nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">Registration Form</a>  <!-- logo register -->
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="top-navbar-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <span class="li-text">
                                Connect 
                            </span> 
                            <a href="#"><strong>links</strong></a> 
                            <span class="li-text">
                                here, or some icons: 
                            </span> 
                            <span class="li-social">
                                <a href="#"><i class="fa fa-facebook"></i></a> 
                                <a href="#"><i class="fa fa-twitter"></i></a> 
                                <a href="#"><i class="fa fa-envelope"></i></a> 
                                <a href="#"><i class="fa fa-skype"></i></a>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Top content -->
        <div class="top-content">
            
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Event X</strong> Registration Form</h1>
                            <div class="description">
                                <p>
                                    This is a free  registration form made with Event X. 
                                    Come on <a href="http://gopesta.com"><strong>EVENT X</strong></a>, customize and use it as you like!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 phone">
                            <img src="<?= base_url("assets/") ?>assets/img/iphone.png" alt="">

                        </div>
                        <div class="col-sm-5 form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Register to our App</h3>
                                    <p>Have an account? <a href="<?= base_url()."home/login"; ?>">Log in</a></p>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form role="form" action="" method="post" class="registration-form">
                                    <div class="alert alert-info <?= (isset($msg))?"":"hidden" ?>">
                                        <p><?= (isset($msg))?$msg:"" ?></p>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-username">Username</label>
                                        <input type="text" name="username" id="username" placeholder="Username..." class="form-username form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-email">Email</label>
                                        <input type="text" name="email" placeholder="Email..." class="form-email form-control" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-password">Password</label>
                                        <input type="text" name="password" placeholder="Password..." class="form-password form-control" id="password">
                                    </div>
                                    <button type="submit" name="signup" id="signup" class="btn">Sign me up!</button>
                                    <br>
                                </form>
                            </div><br>
                            <div class="social-login">
                                <h3 style="color: white;">...or login with:</h3>
                                <div class="social-login-buttons">
                                    <a class="btn btn-link-1 btn-link-1-facebook" href="#">
                                        <i class="fa fa-facebook"></i> Facebook
                                    </a>
                                    <a class="btn btn-link-1 btn-link-1-twitter" href="#">
                                        <i class="fa fa-twitter"></i> Twitter
                                    </a>
                                    <a class="btn btn-link-1 btn-link-1-google-plus" href="#">
                                        <i class="fa fa-google-plus"></i> Google Plus
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="startslide">
            <script>
                    $.backstretch([
                                "https://images.unsplash.com/photo-1470229722913-7c0e2dbbafd3?auto=format&fit=crop&w=1500&q=80&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D"
                                ,"https://images.unsplash.com/photo-1501386761578-eac5c94b800a?auto=format&fit=crop&w=1500&q=80&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D"
                                ,"https://images.unsplash.com/photo-1429962714451-bb934ecdc4ec?auto=format&fit=crop&w=750&q=80&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D"
                                 ], {duration: 3000, fade: 750});
            </script>
        </div>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>EventX</title>
       
        <link rel="stylesheet" href="<?= base_url("assets/") ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url("assets/") ?>bower_components/font-awesome/css/font-awesome.min.css"><link rel="stylesheet" href="<?= base_url("assets/") ?>bower_components/bootstrap/dist/css/style.css">
        <link rel="stylesheet" href="<?= base_url("assets/") ?>bower_components/bootstrap/dist/css/summernote.css">
        <link rel="stylesheet" href="<?= base_url("assets/") ?>dist/css/bootstrap-datetimepicker.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="<?= base_url("assets/") ?>assets/ico/favicon.png">
        
        
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
 

        <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto:300,400');
        </style>
        
        
    </head>
    <body>
        <header>
        
            <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
            <div class="container">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" style="color: #ffffff;" href="<?= base_url() ?>">Event X</a><span class="navbar-text">be connecting people</span></div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">  <!-- bagian navbar kiri -->
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <form class="navbar-form navbar-left">
                                    <div class="form-group">
                                        <input class="typeahead form-control" id="name">
                                    </div>
                                </form> 
                            </li>
                            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Explore <i class="fa fa-angle-double-down"></i></a>
                            <ul class="dropdown-menu">
                                    <?php foreach ($category->result() as $key => $value) { ?>
                                        <li><a href="<?= base_url("home/category/" . $value->id_category) ?>"><?= $value->name_category ?></a></li>
                                    <?php } ?>
                                </ul>
<!--
                               <ul class="dropdown-menu">
                                <li><a href="./index.php?kategori=seminar">Event</a></li>
                                <li><a href="./index.php?kategori=event">Seminar</a></li>
                            </ul>
-->
                            </li> 
                            <li class="dropdown"> <a href="#" class="dropdown-toggle" style="color: #ffffff;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Add Event</a>
                            <ul class="dropdown-menu">
                                   
                                
                            <?php if($this->session->nama != null){ ?>
                            <li><a href="<?= base_url("home/form") ?>">Add Event</a></li>
                            <?php } ?>
                            <?php if($this->session->nama == null){ ?>
                            <li><a href="<?= base_url("home/login")?>"><i class="fa fa-paper-plane"></i> Login</a></li>
                            <?php } ?>
                           
                            <?php if($this->session->nama != null){ ?>
                            <li><a href="<?= base_url("home/logout") ?>">Log Out</a></li>
                            <?php } ?>
                            </ul>
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>
            </nav>
        </header>
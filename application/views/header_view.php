<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ISRP:Home</title>
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/custom.css" rel="stylesheet">

</head>
<body>
    <nav class="navbar navbar-inverse navbar-static-top">

        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" style="font-size: 40px; font-weight: bold; color: #EC2027;">ICT Standards</a>
        </div>


    <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
            <form class="navbar-form navbar-left">
                <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-success">Search</button>
            </form>
                <li class="active"><a href="#">HOME<span class="sr-only">(current)</span></a></li>
                <li><a href="#">BLOG</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">CONTACT</a></li>

                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <?php echo $_SESSION['username'];?><span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li role="separator" class="divider"></li>
                    <li><a href='#'>Profile</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href='<?php echo base_url(); ?>index.php/Login/logoutUser'>Logout</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->


        </div><!-- /.container-fluid -->
    </nav>
   <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
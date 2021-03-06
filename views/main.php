<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shareboard</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/main.css">
</head>
<body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Shareboard</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo ROOT_URL; ?>">Home</a></li>
            <li><a href="<?php echo ROOT_URL; ?>shares">Shares</a></li>
          </ul>
          <?php if(isset($_SESSION['is_logged_in'])) : ?>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="<?php echo ROOT_URL; ?>">Welcome <?php echo $_SESSION['user_data']['name']; ?></a></li>
              <li><a href="<?php echo ROOT_URL; ?>users/logout">Logout</a></li>
            </ul>
          <?php else : ?>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="<?php echo ROOT_URL; ?>users/login">Login</a></li>
              <li><a href="<?php echo ROOT_URL; ?>users/register">Register</a></li>
            </ul>
          <?php endif; ?>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

    <div class="row">
        <?php Messages::display(); ?>
        <?php require($view); ?>
    </div>

    </div><!-- /.container -->

    
    <script src="<?php echo ROOT_PATH; ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo ROOT_PATH; ?>assets/js/bootstrap.min.js"></script>

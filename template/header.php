<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font Awesome -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
rel="stylesheet"
/>
<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>
<!-- MDB -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css"
rel="stylesheet"
/>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


<link rel="stylesheet" href="styleFooterHeader.css">

<?php 
  $active = 0;
  if($_SERVER['PHP_SELF'] == '/MulmedWithBackend/index.php'){
    echo '<link rel="stylesheet" href="css/style.css">';
  }else if($_SERVER['PHP_SELF'] == '/MulmedWithBackend/ourupdates.php'){
    echo '<link rel="stylesheet" href="css/ourupdates.css">';
    $active = 1;
  }else if($_SERVER['PHP_SELF'] == '/MulmedWithBackend/latestseries.php'){
    echo '<link rel="stylesheet" href="css/latestseries.css">';
    $active = 2;
  }else if($_SERVER['PHP_SELF'] == '/MulmedWithBackend/FAQ.php'){
    echo '<link rel="stylesheet" href="css/FAQ.css">';
    $active = 3;
  }else if($_SERVER['PHP_SELF'] == '/MulmedWithBackend/join us.php'){
    echo '<link rel="stylesheet" href="css/joinOurTeam.css">';
    $active = 4;
  }

?>



  <title>Erigo Infos</title>
</head>
<body>
  <header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light ">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-mdb-toggle="collapse"
          data-mdb-target="#navbarExample01"
          aria-controls="navbarExample01"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item <?php if($active == 1) {echo 'active';} ?>">
              <a class="nav-link" aria-current="page" href="ourupdates.php">Our Updates</a>
            </li>
            <li class="nav-item <?php if($active == 2) {echo 'active';} ?>">
              <a class="nav-link" href="latestseries.php">Latest Series</a>
            </li>
            <li class="nav-item <?php if($active == 3) {echo 'active';} ?>">
              <a class="nav-link" href="FAQ.php">FAQ</a>
            </li>
            <li class="nav-item <?php if($active == 4) {echo 'active';} ?>">
              <a class="nav-link" href="join us.php">Join Us</a>
            </li>
          </ul>
        </div>

        <a href="index.php"><img class="logo-navbar" src="assets/erigo1.png" alt=""></a>

        <a href="https://erigostore.co.id/"><button type="button" class="btn btn-warning shopNow">SHOP NOW</button></a>
      </div>
    </nav>
    <!-- Navbar -->
  
   
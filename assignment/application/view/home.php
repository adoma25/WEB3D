<!DOCTYPE html>
<html lang="en">
<head>
  <title>Coca-Cola 3D Apps Lab1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assignment/application/view/css/custom.css">
  <script src="../assignment/application/view/js/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/ae539871ec.js" crossorigin="anonymous"></script>
</head>
<body>
<!-- Logo and Navigation Bar-->
<nav class="navbar sticky-top navbar-expand-sm navbar_coca_cola">  <div class="container">
    <!-- Brand -->
    <div class="logo">
      <a class="navbar-brand" href="./index.php?home">
      <h1>1</h1>
      <h1>oca</h1>
      <h2>Cola</h2>
      <h3>Journey</h3>
      <p>Refreshing the world, one story at a time</p>
      </a>
      </div>
      
  <!-- Collapsable More Icon -->
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse ">
      <span class="navbar-toggler-icon"></span>
    </button>

  <!-- Link Menu item button to the links class navbar-collapse selector -->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- Links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link active" href="./index.php?home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>

      

      <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Drinks
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="./index.php?fanta"><?php echo $data[2][0]['brandTitle'] ?></a>
          <a class="dropdown-item" href="./index.php?cocaEnergy"><?php echo $data[2][1]['brandTitle'] ?></a>
          <a class="dropdown-item" href="./index.php?schweppes"><?php echo $data[2][1]['brandTitle'] ?></a>
        </div>
      </li>
    </ul>
  </div>
</div>
</nav>
<br>
<!-- Main Body -->
<!-- Main content of the page -->
<div class="container main_contents">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div id="main_3d_image">
          <div id="main_text" class="col-xs-12 col-sm-4">
            <div id="homeMainTitle"><h2><?php echo $data[1][0]['mainTitle'] ?></h2></div>
            <div id="homeMainSubtitle"><h3><?php echo $data[1][0]['mainSubtitle'] ?></h3></div>
            <div id="homeMainDescription"><p><?php echo $data[1][0]['mainDescription'] ?><p></div>
          </div> 
        </div>
        
      </div>
    </div>
    <br>
    <!-- Cards Row -->
    <div class="row">
      <!--Fanta-->
      <div class="col-sm-4">
        <div class="card">
          <div class="bg-image hover-zoom">
            <a href="#">
              <img src="../assignment/application/view/assets/images/fantaOrangeMain.png" class="card-img-top img-fluid img-thumbnail" alt="Fanta">
            </a>
          </div>
          
          <div id="card_style" class="card-body">
            <div class="card_title "><h2><?php echo $data[2][0]['brandTitle'] ?></h2></div>
            <div class="card_subtitle"><h3><?php echo $data[2][0]['brandSubtitle'] ?></h3></div>
            <!--<div class="card-text"><p><?php echo $data[2][0]['brandDescription'] ?></p></div>-->
            <a href="./index.php?fanta" class="btn btn-primary">Find out more..</a>
          </div>
        </div>
      </div>

      <!-- Coca‑Cola Energy-->
      <div class="col-sm-4">
        <div class="card">
          <a href="#">
            <img src="../assignment/application/view/assets/images/cokeEnergyMain.png" class="card-img-top img-fluid img-thumbnail" alt="Coca‑Cola Energy">
          </a>
          <div id="card_style" class="card-body">
            <div class="card_title "><h2><?php echo $data[2][1]['brandTitle'] ?></h2></div>
            <div class="card_subtitle"><h3><?php echo $data[2][1]['brandSubtitle'] ?></h3></div>
            <!--<div class="card-text"><p><?php echo $data[2][1]['brandDescription'] ?></p></div>-->
            <a href="./index.php?cocaEnergy" class="btn btn-primary">Find out more..</a>
          </div>
        </div>
      </div>
      <!-- Schweppes Classic -->
      <div class="col-sm-4">
        <div class="card">
          <a href="#">
            <img src="../assignment/application/view/assets/images/schweppesIndianMain.png" class="card-img-top img-fluid img-thumbnail" alt="Schweppes Classic">
          </a>
          <div id="card_style" class="card-body">
            <div class="card_title "><h2><?php echo $data[2][2]['brandTitle'] ?></h2></div>
            <div class="card_subtitle"><h3><?php echo $data[2][2]['brandSubtitle'] ?></h3></div>
            <!--<div class="card-text"><p><?php echo $data[2][2]['brandDescription'] ?></p></div>-->
            <a href="./index.php?schweppes" class="btn btn-primary">Find out more..</a>
          </div>
        </div>
      </div>
      
    </div>
    <br>
  </div>

</div>


<!-- Footer-->
<nav class="navbar navbar-expand-sm footer">
  <div class="container">
    <div class="navbar-text float-left copyright">
      <p><span class="align-baseline">&copy 2021 Mobile Web 3D Applications - Adem Bencheikh</span></p>
    </div>
    <div class="navbar-text float-right social">
      <a href="https://github.com/adoma25/WEB3D"><i class="fab fa-github fa-2x"></i></a>
    </div>
  </div>
</nav>


  <!--JS Scripts-->
  <!--Home Page Data Fetcher-->
  <script src="../assignment/application/view/scripts/getJsonData.js"></script>
</body>
</html>

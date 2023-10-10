<!DOCTYPE html>
<html>
  <head>
    <title>Coca-Cola 3D Apps Lab1</title>
    <meta http-equiv='Content-Type' content='text/html;charset=utf-8'></meta>
    <link rel='stylesheet' type='text/css' href='http://www.x3dom.org/x3dom/release/x3dom.css'></link>
    <script type='text/javascript' src='http://www.x3dom.org/x3dom/release/x3dom.js'></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assignment/application/view/css/custom.css">
    <link rel="stylesheet" href="../assignment/application/view/css/brand.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/ae539871ec.js" crossorigin="anonymous"></script>
  </head>
  <body>
      
    
    <!-- Logo and Navigation Bar-->
<nav class="navbar sticky-top navbar-expand-sm navbar_coca_cola">  <div class="container">
    <!-- Brand -->
    <div class="logo">
      <a class="navbar-brand" href="<?php echo $data[0][0]['homeLink'] ?>">
      <h1>1</h1>
      <h1>oca</h1>
      <h2>Cola</h2>
      <h3>Journey</h3>
      <p><?php echo $data[0][0]['slogan'] ?></p>
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
        <a class="nav-link" href="#"><?php echo $data[0][0]['homeText'] ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><?php echo $data[0][0]['aboutText'] ?></a>
      </li>

      <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle active" href="#" id="navbardrop" data-toggle="dropdown">
          Drinks
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item active" href="./index.php?fanta"><?php echo $data[2][0]['brandTitle'] ?></a>
          <a class="dropdown-item" href="./index.php?cocaEnergy"><?php echo $data[2][1]['brandTitle'] ?></a>
          <a class="dropdown-item" href="./index.php?schweppes"><?php echo $data[2][2]['brandTitle'] ?></a>
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
    
    
    <!-- 3D Model Row -->
    <div class="row">
        <div class="col-sm-12 mx-auto">
          <div class="card defaultBackground ">
            <div class="card-body d-flex justify-content-center">

              <!-- 3D Viewer -->
              <div>
                <x3d width='1200px' height='600px'>
                  <scene>
                    <inline url="./application/view/assets/x3d/fanta.X3D" namespacename='nikmok'> </inline>
                  </scene>
                </x3d>
              </div>

            </div>
          </div>
        </div>
      </div>

      <br />
      

      <div class="row">
        <!-- Fanta -->
        <div class="col-sm-3 mx-auto">
          <div class="card">
            <!-- Camera Controls -->
            <div class="card text-left">
              <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                  <!-- Dropdown nav-tab -->
                  <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"><?php echo $data[3][0]['controlName'] ?></a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#" onclick="cameraFront();"><?php echo $data[3][0]['firstButtonText'] ?></a>
                      <a class="dropdown-item" href="#" onclick="cameraBack();"><?php echo $data[3][0]['secondButtonText'] ?></a>
                      <a class="dropdown-item" href="#" onclick="cameraLeft();"><?php echo $data[3][0]['thirdButtonText'] ?></a>
                      <a class="dropdown-item" href="#" onclick="cameraRight();"><?php echo $data[3][0]['fourthButtonText'] ?></a>
                      <a class="dropdown-item" href="#" onclick="cameraTop();">Top</a>
                      <a class="dropdown-item" href="#" onclick="cameraBottom();">Bottom</a>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="card-Title x3dCamera_Subtitle drinksText">
                  <h5><?php echo $data[3][0]['controlTitle'] ?></h5>
                </div>
                <a href="#" class="btn btn-success btn-responsive" onclick="cameraFront();"><?php echo $data[3][0]['firstButtonText'] ?></a>
                <a href="#" class="btn btn-primary btn-responsive" onclick="cameraBack();"><?php echo $data[3][0]['secondButtonText'] ?></a>
                <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraLeft();"><?php echo $data[3][0]['thirdButtonText'] ?></a>
                <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraRight();"><?php echo $data[3][0]['fourthButtonText'] ?></a>
                <a href="#" class="btn btn-outline-dark disabled btn-responsive"><?php echo $data[3][0]['fifthButtonText'] ?></a>
                <div class="card-text x3dCameraDescription drinksText">
                  <!--<p><?php echo $data[3][0]['controlDescription'] ?></p>-->
                </div>
              </div>
            </div>
          </div>

        </div>



        <div class="col-sm-4 mx-auto">
          <!-- Controls -->
          <div class="card">
            <!-- Light Controls -->
            <div class="card text-left">
              <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                  <!-- Dropdown nav-tab -->
                  <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Lights</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#" onclick="cameraFront();"><?php echo $data[3][1]['firstButtonText'] ?></a>
                      <a class="dropdown-item" href="#" onclick="wireframe();"><?php echo $data[3][1]['secondButtonText'] ?></a>
                      <a class="dropdown-item" href="#" onclick="cameraLeft();"><?php echo $data[3][1]['thirdButtonText'] ?></a>
                      <a class="dropdown-item" href="#" onclick="cameraRight();"><?php echo $data[3][1]['fourthButtonText'] ?></a>
                      <a class="dropdown-item" href="#" onclick="cameraTop();">Top</a>
                      <a class="dropdown-item" href="#" onclick="cameraBottom();">Bottom</a>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="card-Title x3dCamera_Subtitle drinksText">
                  <h5><?php echo $data[3][1]['controlTitle'] ?></h5>
                </div>
                <a href="#" class="btn btn-success btn-responsive" onclick="cameraFront();"><?php echo $data[3][1]['firstButtonText'] ?></a>
                <a href="#" class="btn btn-primary btn-responsive" onclick="wireframe();"><?php echo $data[3][1]['secondButtonText'] ?></a>
                <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraLeft();"><?php echo $data[3][1]['thirdButtonText'] ?></a>
                <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraRight();"><?php echo $data[3][1]['fourthButtonText'] ?></a>
                <a href="#" class="btn btn-outline-dark disabled btn-responsive"><?php echo $data[3][1]['fifthButtonText'] ?></a>
                <div class="card-text x3dCameraDescription drinksText">
                  <!--<p><?php echo $data[3][1]['controlDescription'] ?></p>-->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4 mx-auto">
          <div class="card">
              <!-- Animation Controls -->
              <div class="card text-left">
                <div class="card-header">



                  <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Animation</a>


                </div>
                <div class="card-body">
                  <div class="card-Title x3dCamera_Subtitle drinksText">
                    <h5><?php echo $data[3][2]['controlTitle'] ?></h5>
                  </div>
                  <a href="#" class="btn btn-success btn-responsive" onclick="cameraFront();"><?php echo $data[3][2]['firstButtonText'] ?></a>
                  <a href="#" class="btn btn-primary btn-responsive" onclick="cameraBack();"><?php echo $data[3][2]['secondButtonText'] ?></a>
                  <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraLeft();"><?php echo $data[3][2]['thirdButtonText'] ?></a>
                  <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraRight();"><?php echo $data[3][2]['fourthButtonText'] ?></a>
                  <a href="#" class="btn btn-outline-dark disabled btn-responsive"><?php echo $data[3][2]['fifthButtonText'] ?></a>
                  <div class="card-text x3dCameraDescription drinksText">
                    <!--<p><?php echo $data[3][2]['controlDescription'] ?></p>-->
                  </div>
                </div>
              </div>
            </div>
      
          
          </div>
      </div>

      <!-- Divider Row -->
      <div class="row">
        <hr class="hr-text" data-content="AND">
      </div>
    
      <!-- Texture/Description Row-->
    <div class="row">
      
      <!-- Flavour Slider -->
    <div class="col-sm-4">
      <!--<h5 class="card-title text-center"> Choose your flavour</h5>-->
      <div class="card defaultBackground border-0">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-interval="false">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../assignment/application/view/assets/renderedImages/fanta/fantaOrange.png" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
              </div>
            </div>
            <div class="carousel-item">
              <img src="../assignment/application/view/assets/renderedImages/fanta/fantaApple.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../assignment/application/view/assets/renderedImages/fanta/fantaStrawberry.png" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" onclick="changeTexture('../textures/fanta/fantaOrange.png');" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" onclick="changeTexture2('../textures/fanta/fantaAPPLE.png');" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    <!-- Description column-->
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title"><?php echo $data[2][0]['brandTitle'] ?></h2>
          <h3 class="card-title"><?php echo $data[2][0]['brandSubtitle'] ?></h3>
          <p class="card-text"><?php echo $data[2][0]['brandDescription'] ?></p>
        </div>
      </div>
    </div>
    </div>
      
    </div>
  </div>
      
    </div>

    

</div>
<br> <!-- Temporary break until the template is styled-->
<!-- Footer-->
<nav class="navbar navbar-expand-sm footer">
  <div class="container">
    <div class="navbar-text float-left copyright">
      <p><span class="align-baseline"><?php echo $data[4][0]['mainCopyRights'] ?></span></p>
    </div>
    <div class="navbar-text float-right social">
      <a href="https://github.com/adoma25/WEB3D"><i class="fab fa-github fa-2x"></i></a>
    </div>
  </div>
</nav>

<script src="../assignment/application/view/scripts/modelInteractions.js"></script>
  </body>
</html>

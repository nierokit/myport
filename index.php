<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en" id="home">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Taufik Saputra</title>
    <link href="css/fontawesome-all.css" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.css" rel="stylesheet" type="text/css"/>
    <link href="fontawesome-free-5.0.13/svg-with-js/css/fa-svg-with-js.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <!--Navbar-->
      <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container-fluid">
              <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>                  
                  <a href="#home" class="navbar-brand page-scroll text-brand" style="margin-left: 50px; color: #ffcc33">Taufik Saputra</a>
              </div>
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right text-nav" style="margin-right: 50px;">
                      <li><a href="#home" class="page-scroll" style="color: #ffcc33">Home</a></li>
                      <li><a href="#about" class="page-scroll" style="color: #ffcc33">About</a></li>
                      <li><a href="#portfolio" class="page-scroll" style="color: #ffcc33">Portfolio</a></li>
                      <li><a href="#contact" class="page-scroll" style="color: #ffcc33;">Contact</a></li>
                  </ul>
              </div>
          </div>
      </nav>
      <!--Akhir Navbar-->
      
      
      <!--Jumbotron-->
      <div class="jumbotron text-center">
          <img src="img/profil-pic.jpg" alt="" class="img-circle">
          <h1>Taufik Saputra</h1>
          <p>Web Developer | Political Observer</p>
      </div>
      <!--Akhir Jumbotron-->
      
      
      <!--About-->
      <section class="about" id="about">
          <div class="container">
              <div class="row">
                  <div class="col-sm-12">
                      <h2 class="text-center">About</h2>
                      <hr>
                  </div>
              </div>
              
              <div class="row">
                  <div class="col-sm-5 col-sm-offset-1">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, ipsum, ab, temporibus nesciunt ut illum inventore eum amet sapiente qui sed consectetur eaque nam veniam possimus! Fuga fugiat fugit quam!</p>
                  </div>
                  <div class="col-sm-5">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, ipsum, ab, temporibus nesciunt ut illum inventore eum amet sapiente qui sed consectetur eaque nam veniam possimus! Fuga fugiat fugit quam!</p>
                  </div>
              </div>
          </div>
      </section>
      <!--Akhir About-->
      
      
      <!--Portfolio-->
      <section class="portfolio" id="portfolio">
          <div class="container">
              <div class="row">
                  <div class="col-sm-12 text-center">
                      <h2>Portfolio</h2>
                      <hr>
                  </div>
              </div>
              
              <div class="row">
                  <div class="col-sm-4">
                      <a href="" class="thumbnail">
                          <img src="img/portfolio/1.jpg" alt="pt1"/>
                      </a>
                  </div>
                  <div class="col-sm-4">
                      <a href="" class="thumbnail">
                          <img src="img/portfolio/2.jpg" alt="pt2"/>
                      </a>
                  </div>
                  <div class="col-sm-4">
                      <a href="" class="thumbnail">
                          <img src="img/portfolio/3.jpg" alt="pt3"/>
                      </a>
                  </div>
                  <div class="col-sm-4">
                      <a href="" class="thumbnail">
                          <img src="img/portfolio/4.jpg" alt="pt4"/>
                      </a>
                  </div>
                  <div class="col-sm-4">
                      <a href="" class="thumbnail">
                          <img src="img/portfolio/5.jpg" alt="pt5"/>
                      </a>
                  </div>
                  <div class="col-sm-4">
                      <a href="" class="thumbnail">
                          <img src="img/portfolio/6.jpg" alt="pt6"/>
                      </a>
                  </div>
              </div>
          </div>
      </section>
      <!--Akhir Portfolio-->
      
      
      <!--Kontak-->
      <section class="contact" id="contact">
          <div class="container">
              <div class="row">
                  <div class="col-sm-12 text-center">
                      <h2>Contact</h2>
                      <hr>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-8 col-sm-offset-2">
                      <form action="">
                          <div class="form-group">
                              <label for="nama">Nama</label>
                              <input type="text" id="nama" class="form-control" placeholder="Masukan Nama">
                          </div>
                          <div class="form-group">
                              <label for="email">Email</label>
                              <input type="email" id="email" class="form-control" placeholder="Masukan Email">
                          </div>
                          <div class="form-group">
                              <label for="pesan">Pesan</label>
                              <textarea class="form-control" rows="10" placeholder="Masukan Pesan"></textarea>
                          </div>
                          <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                      </form>
                  </div>
              </div>
          </div>
      </section>
      <!--Akhir Kontak-->
      
      
      <!--Footer-->
      <footer>
          <div class="container">
              <div class="row">
                  <div class="col-sm-5 col-lg-offset-1">
                      <p>Created by | <a href="https://bit.ly/2ykFKUn">Taufik Saputra</a>.</p>
                  </div>
                  <div class="col-sm-5 text-right">
                      <a class="btn" href="https://bit.ly/2ykFKUn"><i class="fas fa-camera-retro"></i></a>
                      <a class="btn" href="https://bit.ly/2KuQDEF"><i class="fab fa-github"></i></a>
                      <a class="btn" href="https://bit.ly/2tkyvpF"><i class="fab fa-whatsapp"></i></a>
                  </div>
              </div>
          </div>
          </div>
      </footer>
      <!--Akhir Footer-->     
     

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js" type="text/javascript"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <script src="fontawesome-free-5.0.13/svg-with-js/js/fontawesome-all.js" type="text/javascript"></script>
    
  </body>
</html>

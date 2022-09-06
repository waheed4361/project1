<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  
    <title>responsive website</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ABUL WAHEED</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">ABOUT</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            SERVICES
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="web.php">WB DEVELPMENT</a></li>
            <li><a class="dropdown-item" href="app.php">APP DEVELPMENT</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="wordpress.php">WORD PRESS</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">CONTACT US</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
 
<!--navbar end-->
<!--slider start-->
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/s1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/s2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/s3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<!--slider end-->
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">ABOUT US</h2>
    </div>
    <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
              <img src="images/s4.jpg" alt="image not found" class="img-fluid aboutimg" >
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                 <h2 class="display-4">I Am Abdul Waheed</h2>
                 <p class="py-3">Lorem ipsum dolor sit
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio sed magni est ullam beatae dolor, 
                  doloribus libero temporibus esse ipsum iste reprehenderit non
                   deleniti tenetur officia laborum amet voluptatem consequuntur?
                 </p>
                 <a href="about.php" class="btn btn-success">See More</a>
             </div>
          </div>
    </div>
</section>
<!--about section end-->
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">OUR Services</h2>
    </div>
    <div class="container-fluid">
          <div class="row">
             <div class="col-lg-4 col-md-4 col-12">
                 <div class="card">
                       <img class="card-img-top" src="images/img2.jpg" alt="Card image">
                       <div class="card-body">
                         <h4 class="card-title">beutifull nature</h4>
                         <p class="card-text">Lorem ipsum dolor sit amet.</p>
                         <a href="#" class="btn btn-primary">See Profile</a>
                       </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-4 col-12">
                 <div class="card">
                       <img class="card-img-top" src="images/img2.jpg" alt="Card image">
                       <div class="card-body">
                         <h4 class="card-title">beutifull nature</h4>
                         <p class="card-text">Lorem ipsum dolor sit amet.</p>
                         <a href="#" class="btn btn-primary">See Profile</a>
                       </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-4 col-12">
                 <div class="card">
                       <img class="card-img-top" src="images/img2.jpg" alt="Card image">
                       <div class="card-body">
                         <h4 class="card-title">beutifull nature</h4>
                         <p class="card-text">Lorem ipsum dolor sit amet.</p>
                         <a href="#" class="btn btn-primary">See Profile</a>
                       </div>
                  </div>
              </div>
          </div>
    </div>
</section>
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">GALLARY</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/img2.jpg" class="image-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/img2.jpg" class="image-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/img2.jpg" class="image-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/img2.jpg" class="image-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/img2.jpg" class="image-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/img2.jpg" class="image-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/img2.jpg" class="image-fluid pb-4">
        </div>
      </div>
    </div>
</section>
<!-- form-->
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">CONTACT US</h2>
    </div>
    <div class="w-50 m-auto">
      <form action="userinfo.php" method="post">
        <div class="form-group">
          <label>User Name</label>
          <input type="text" name="user" class="form-control">
        </div>
        <div class="form-group">
          <label>E mail</label>
          <input type="text" name="email" class="form-control">
        </div>
        <div class="form-group">
          <label>Mobile No</label>
          <input type="text" name="mobileno" class="form-control">
        </div>
        <div class="form-group">
          <label>Comment</label>
          <input type="text" name="coment" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
</section>
<footer>
  <h3 class="p-3 bg-dark text-white text-center">Abdul waheed</h3>
</footer>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
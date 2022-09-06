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
<div class="jumbotron">
  <h1>Abdul waheed</h1>
  <p>Bootstrap is the most popular HTML, CSS...</p>
</div>
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
</boody>
</html>
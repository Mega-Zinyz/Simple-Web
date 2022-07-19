<!doctype html>
<html lang="en">

<?php
    include 'Admin/config.php';
    $query="select * from tb_identity";
    $result=$connection->query($query); 
    $baris=mysqli_fetch_row($result);
?>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icon -->
    <link href="icons/font/bootstrap-icons.css" rel="stylesheet">

    <title>X-Nano</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class="container">
        <img class="rounded-circle img-thumbnail img-responsive" alt="Logo" height="50" width="50" src="Logo/<?php echo $baris[10];?>" role="img">
            <a class="navbar-brand" href="index.php"><?php echo $baris[1];?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="aboutus.php">About Us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="ouractivty.php">Our Activty</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page"  href="FAQ.php">FAQ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Organisation
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="organisation.php">Structure Organisation</a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="Admin/index.php">Login</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <section id="FAQlist" class="p-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col">
                <h2>Frequently Asked Question</h2>
            </div>
        </div>
        <ul class="list-group">
            <li class="list-group-item ">Who Founder Of This Company</li>
            <li class="list-group-item">What Make Us Start</li>
            <li class="list-group-item">When We Start</li>
            <li class="list-group-item">Our Production</li>
            <li class="list-group-item">Our Patern</li>
            <li class="list-group-item">Our Synergy</li>
            <li class="list-group-item">Our Job</li>
            <li class="list-group-item">What Make Us Still Stand</li>
            <li class="list-group-item">Our Connection</li>
            <li class="list-group-item">Our Superior</li>
            <li class="list-group-item">Our Location</li>
            <li class="list-group-item">Our Handicap</li>
        </ul>
    </div>
    </section>
    <nav aria-label="Page navigation example text-center">
            <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
            <a class="page-link" href="#">Next</a>
            </ul>
        </nav>
    <div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-muted">&copy; 2022 X-Nano, Inc</p>

        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-md-4 justify-content-end">
          <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Product</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Costumer Service</a></li>
        </ul>
      </footer>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
  
  </body>

</html>
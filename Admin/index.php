<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    
    <!-- Bootstrap CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">


<style>
        body{
            background-image: url(../img/Headquater.jpg.);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            height: 100%;
        }
        .title{
            text-align: center;
            font-size: 2.5em;
            color: #000;
        }
 
         
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
    <main class="form-signin">
      <form action="check.php" method="post">
        <img src="../img/Logo.png" width="250" alt="Logo.png" class="mb-4 rounded-circle img-thumbnail img-responded">
        <h1 class="h3 mb-3 fw-normal text-light">Login</h1>

        <div class="form-floating">
          <input type="username" class="form-control" name="username" placeholder="Username">
          <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <label for="Password">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        <p class="mt-5 mb-3 text-light">X-Nano &copy; <?php echo date('Y'); ?> <a href="../index.php" class="nav-link px-2 text-light">Home</a></p>

      </form>
    </main>
  </body>
</html>

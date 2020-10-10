<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/examples/sign-in/signin.css">

    <!-- local host file -->

    <!-- <link rel="stylesheet" href="assets/js/bootstrap.min.css">
    <link rel="stylesheet" href="assets/js/bootstrap.min.css">
    <link rel="stylesheet" href="assets/js/signin.css"> -->
   
    <title>Login!</title>
  </head>
  <body>
  <form class="form-signin" action="<?= base_url().'admin/login/login_post'?>" method="post">
  <?php

if($error !="no_error")
{
    echo '<div class="alert alert-primary" role="alert">';
    echo "Invalid credentials";
    echo '</div>';
}

?>
      <img class=" ml-5" src="<?php echo base_url().'assets/logo.png';?> " alt="BlogHere" width="200" height="100">

      <h1 class="h3 ml-5 font-weight-normal">Please sign in</h1>
      <label for="Email" class="sr-only">Email address</label>
      <input type="text" id="inputText" name="email" class="form-control mb-3" placeholder="Email Address" required autofocus>
      <label for="inputPassword"  class="sr-only">Password</label>
      <input type="password"  name="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <!-- <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div> -->

      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

      <p class="mt-3 ml-4 ">Have no account <a href="<?= base_url().'admin/login/signup'?>">Sign up</a> here.</p>
    
      <p class="mt-1 ml-4 ">OR <a href="<?= base_url().'admin/login/signup'?>">Forgot Password</a></p>
      <p class="mt-5 ml-4 text-muted">&copy; 2019-2020</p>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 
 <!-- local Host -->
 <script src="assets/js/jquery-3.4.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js" ></script>
    <script src="assets/js/bootstrap.min.js" ></script>
  
 
 
      </body>
</html>
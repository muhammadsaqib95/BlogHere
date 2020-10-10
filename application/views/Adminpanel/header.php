<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/examples/dashboard/dashboard.css">

<!-- Local Host  Files-->

    <!-- <link rel="stylesheet" href="assets/js/bootstrap.min.css">
    <link rel="stylesheet" href="assets/js/dashboard.css">
     -->
    <title>Dashboard</title>
    <nav class="navbar navbar-light fixed-top bg-light flex-md-nowrap p-0 shadow">
      <a class="navbar-brand bg-light col-sm-3 col-md-3 col-lg-2 mr-0" style="margin-bottom :5px" href="<?= base_url().'admin/dashboard' ?>">
      <img src="<?php echo base_url("assets/logo_cop.png");?> " alt="BlogHere" width="150" height="30">
</a>
      <!-- <input class="form-control w-100" type="text" placeholder="Search" aria-label="Search" style="MARGIN-LEFT: 20PX;"> -->
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="<?= base_url().'admin/login/logout' ?>">
          <button type="button" class="btn btn-outline-secondary">Sign out</button></a>
        </li>
      </ul>
    </nav>
  </head>
  <div class="container-fluid">
      <div class="row">
        <nav class="col-md-3 col-lg-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link " href="<?= base_url().'admin/dashboard' ?>">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only"></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url().'admin/blog/addblog' ?>">
                  <span data-feather="edit"></span>
                  Add Blog
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url().'admin/blog' ?>">
                  <span data-feather="coffee"></span>
                  View Blog
                </a>
              </li>

    

          </div>
        </nav>


      </div>
    </div>
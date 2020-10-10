
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>BlogHere</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/blog/">

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="assets/fevicon.png" sizes="180x180">
<link rel="icon" href="assets/fevicon.png" sizes="32x32" type="image/png">
<link rel="icon" href="assets/fevicon.png" sizes="16x16" type="image/png">
<link rel="manifest" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.4/examples/blog/blog.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="btn btn-sm btn-outline-secondary" href="#">Log In</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#">BlogHere</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="text-muted" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
           stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img"
            viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" 
            cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
      </div>
    </div>
  </header>

  <!-- <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 text-muted" href="#">World</a>
      <a class="p-2 text-muted" href="#">Pakistan</a>
      <a class="p-2 text-muted" href="#">Technology</a>
      <a class="p-2 text-muted" href="#">Design</a>
      <a class="p-2 text-muted" href="#">Culture</a>
      <a class="p-2 text-muted" href="#">Business</a>
      <a class="p-2 text-muted" href="#">Politics</a>
      <a class="p-2 text-muted" href="#">Opinion</a>
      <a class="p-2 text-muted" href="#">Science</a>
      <a class="p-2 text-muted" href="#">Health</a>
      <a class="p-2 text-muted" href="#">Style</a>
      <a class="p-2 text-muted" href="#">Travel</a>
    </nav>
  </div> -->

  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark" style ="background-image : url('<?= $blogs[0]['b_Img']?>');
   background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic"><?= $blogs[0]['b_Title']?></h1>
      <p class="lead my-3 " style="color : black; background-color: #e2dddd8f"><?php echo substr($blogs[0]['b-Discription'],0,150)?></p>
      <p class="lead mb-0"><a href="<?= base_url().'home/blogview/'.$blogs[0]['b_Id']?>" class="text-white font-weight-bold">Continue reading...</a></p>
    </div>
  </div>
  <?php 
 $len=sizeof($blogs);
for($i = 1; $i <$len ; $i++){
  echo '<div class="row mb-2">';
   echo  '<div class="col-md-6">';
     echo    '<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" >';
      echo    '<div class="col p-4 d-flex flex-column position-static">';
      echo     '<strong class="d-inline-block mb-2 text-primary">World</strong>';
      echo   '<h3 class="mb-0">'.$blogs[$i]['b_Title'].'</h3>';
      echo     '<div class="mb-1 text-muted">'.substr($blogs[$i]['b_Create_on'],0,10).'</div>';
      echo    '<p class="card-text mb-auto">'.substr($blogs[$i]['b-Discription'],0,100).'.....</p>';
      echo  '<a href="'.base_url().'home/blogview/'.$blogs[$i]['b_Id'].'" class="stretched-link " post ="'.$blogs[$i]['b_Id'].'">Continue reading</a>';
    echo '</div>';
        echo '<div class="col-auto d-none d-lg-block">';
         // <!-- <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" 
          // preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
          // <title>Placeholder</title>
          // <rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">
              // Thumbnail</text></svg>  -->
          echo    '<img src="'.$blogs[$i]['b_Img'].'" width="200" height="250" >';
       echo '</div>';
       echo  '</div>';
       echo  '</div>';
  echo '<div class="col-md-6">';
  $i++;
      echo '<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">';
        echo '<div class="col p-4 d-flex flex-column position-static">';
          echo '<strong class="d-inline-block mb-2 text-success">Design</strong>';
          echo '<h3 class="mb-0">'.$blogs[$i]['b_Title'].'</h3>';
          echo '<div class="mb-1 text-muted">'.substr($blogs[$i]['b_Create_on'],0,10).'</div>';
          echo '<p class="mb-auto">'.substr($blogs[$i]['b-Discription'],0,100).'</p>';
          echo '<a href="'.base_url().'home/blogview/'.$blogs[$i]['b_Id'].'"class="stretched-link">Continue reading</a>';
        echo '</div>';
        echo '<div class="col-auto d-none d-lg-block">';
        echo '<img src="'.$blogs[$i]['b_Img'].'" width="200" height="250" >';
          // <!-- <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
          //  preserveAspectRatio="xMidYMid slice" focusable="false" role="img" 
          //  aria-label="Placeholder: Thumbnail"><title>Placeholder</title>
          //  <rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef"
          //   dy=".3em">Thumbnail</text></svg> -->
        echo '</div>';
      echo '</div>';
    echo '</div>';
  echo '</div>';
}?>
</div>


<footer class="blog-footer">
    <a href="#">Back to top</a>
  </p>
</footer>
</body>
</html>

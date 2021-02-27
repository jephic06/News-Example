<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>

  <style>
  .nav-item {
    padding-right: .5rem;
    padding-left: .5rem;
  }
  .col-md-4 {
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
}
.col-md-8 {
    flex: 0 0 66.666667%;
    max-width: 66.666667%;
}
  </style>

  <body class="antialiased">

    <div class="container-fluid bg-dark">
      <img src="http://mat1.gtimg.com/www/mobi/2017/image/logo-text-whitetext_v2.svg"/>
    </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top justify-content-center">
      <ul class="navbar-nav" style="flex-direction: row;">
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid" style="padding:20px">

      <div style="border:1px solid #dedede;min-height:50px;border-radius:15px;box-shadow: 1px 1px 5px #bebebe;margin:2%;flex-direction:row">

        <div class="row">

          <div class="col-md-8" style="margin: auto;padding-left:10px">
            <p style="font-size:2vw">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p style="margin-top:20px;font-size:1vw"><small>Newsletter</small> <small>Comments</small> <small>2021-02-02</small></p>
          </div>

          <div class="col-md-4">
            <img src="https://www.w3schools.com/w3css/img_lights.jpg" width="100%" height="100%" style="" />

          </div>

        </div>

      </div>

    </div>

  </body>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>

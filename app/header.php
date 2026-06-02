<?php require_once "app/database.php"; ?>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo @$title ? $title . " - " : "" ?> Ali Gürkan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

  <nav class="shadow-sm navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="/../blog">Ali Gürkan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/../blog">home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="https://www.github.com/aggbhh20">github</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="https://donkemonke.itch.io">itch.io</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="contact">contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="hakkinda">about</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/../blog"></a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Ara" aria-label="Arama">
          <button class="btn btn-outline-success" type="submit">Ara</button>
        </form>
      </div>
    </div>
  </nav>
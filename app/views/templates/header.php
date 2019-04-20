<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halaman <?= $data['judul']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= BASEURL;?>/css/bootstrap.css">
    <script src="main.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
  <a class="navbar-brand" href="<?= BASEURL?>">PHPMVC BELAJAR</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= BASEURL?>">HOME<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= BASEURL?>/about ">ABOUT</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="<?= BASEURL?>/mahasiswa ">MAHASISWA</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          PILIHAN
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Satu</a>
          <a class="dropdown-item" href="#">Dua</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Satu Satu</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="<?= BASEURL;?>/mahasiswa/cari" method="post">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="keyword" id="keyword" autocomplete="off">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="tombolCari">Search</button>
    </form>
  </div>
  </div>
</nav>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" type="text/css" rel="stylesheet" />

    <!-- My Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Viga&display=swap"
      rel="stylesheet"
    />

      <!-- font awesome cdn link  -->
      <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      />


    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/') ?><?= $css; ?>" />

    <title><?= $judul; ?></title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">GuitarProject</a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="<?= base_url() ?>">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="<?= base_url('produk/gitar') ?>">Gitar</a>
            <a class="nav-item nav-link" href="<?= base_url('produk/bass') ?>">Bass</a>
            <a class="nav-item nav-link" href="<?= base_url('produk/amplifier') ?>">Amplifier</a>
            <a class="nav-item nav-link" href="<?= base_url('produk/drum') ?>">Drum</a>
            <?php if(!$is_login) : ?>
              <a class="nav-item btn btn-primary tombol" href="<?= base_url('user/login') ?>">JOIN US</a>
            <?php else : ?>
              <div class="ms-auto p-2">
                <a nav-link href="<?= base_url('user/keranjang') ?>" style="text-decoration: none">
                  <i class="fa-solid fa-cart-shopping fa-xl mx-4" style="color: #fff"></i>
                </a>
                <a nav-link href="<?= base_url('user') ?>" style="text-decoration: none">
                  <i class="fa-regular fa-user fa-xl mx-1" height="40px" style="color: white"></i>
                </a>
              </div>
            <?php endif; ?>

          </div>
        </div>
      </div>
    </nav>
    <!-- akhir Navbar -->
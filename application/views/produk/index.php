<!-- about section starts  -->

<section class="about" id="about">
  <h1 class="heading"><span><?= $heading ?></span></h1>

  <div class="row">
  <?php $i=0; foreach($produk as $pd) : ?>
    <?php if($i % 2 == 0) : ?>
      <div class="image">
        <img src="<?= base_url('assets/img/') ?><?= $pd['foto_produk']; ?>"/>
      </div>

      <div class="content">
        <h3><?= $pd["nama_produk"]; ?></h3>
        <p><?= $pd["deskripsi_produk"]; ?></p>
      </div>
    <?php else : ?>
      <div class="content">
        <h3><?= $pd["nama_produk"]; ?></h3>
        <p><?= $pd["deskripsi_produk"]; ?></p>
      </div>

      <div class="image">
        <img src="<?= base_url('assets/img/') ?><?= $pd['foto_produk']; ?>"/>
      </div>
    <?php endif; ?>
    <?php $i++; ?>
  <?php endforeach; ?>
  </div>
</section>

<!-- about section ends -->

<!-- menu section starts  -->

<section class="menu" id="menu">
  <h1 class="heading">our <span><?= $heading ?></span></h1>
  
  <div class="box-container">
  <?php $i=0; foreach( $produk as $pd) : ?>

    <?php if($i == 3) : ?>
      </div>
        <br/>
      <div class="box-container">
    <?php endif; ?>

    <div class="box">
      <img src="<?= base_url('assets/img/') ?><?= $pd['foto_produk'] ?>"/>
      <h3><?= $pd['nama_produk']; ?></h3>
      <div class="price">Rp <?= number_format($pd['harga_produk']); ?> <span>Rp <?= number_format($pd['harga_produk']+700000); ?></span></div>
      <?php if($is_login) : ?>
        <a href="<?= base_url('produk/addToCart?') ?>id_produk=<?= $pd['id_produk']; ?>&nama_produk=<?= $pd['nama_produk']; ?>&harga_produk=<?= $pd['harga_produk']; ?>" class="btnn">add to cart</a>
      <?php endif; ?>
    </div>

    <?php $i++; ?>

  <?php endforeach; ?>
  </div>
  
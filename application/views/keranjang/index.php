<div class="container mt-4">
    <table class="table table-sm table-light">
    <thead>
        <tr>
        <th scope="col">Nama Produk</th>
        <th scope="col">Jumlah Produk</th>
        <th scope="col">Total Harga</th>
        </tr>
    </thead>
    <tbody>
        <?php $sum=0; foreach($keranjang as $kr) : ?>
            <tr>
            <td><?= $kr['nama_produk'] ?></td>
            <td><?= $kr['jumlah_produk'] ?></td>
            <td>Rp <?= number_format($kr['total_harga']) ?></td>
            </tr>
            <?php $sum += $kr['total_harga']; ?>
        <?php endforeach; ?>
    </tbody>
    </table>
    <h1 style="margin-top: 100px; color: #fff">Total: Rp <?= number_format($sum) ?></h1>
    <a href="<?= base_url('user/checkout') ?>?total=<?= $sum ?>" class="btn btn-block btn-primary">Checkout</a>
</div>
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
    <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#exampleModal">
        Checkout
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Pemesanan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
                <label for="exampleFormControlInput1">Nama Pemesan</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" disabled placeholder="<?= $this->session->userdata('nama') ?>">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Alamat Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" disabled placeholder="<?= $this->session->userdata('email') ?>">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">No Telepon</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="No Telepon">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Jenis Pembayaran</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" disabled placeholder="COD">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Jasa Pengiriman</label>
                <select class="form-control" id="exampleFormControlSelect1">
                <option>JNE</option>
                <option>J&T</option>
                <option>Tiki</option>
                <option>Pos Indonesia</option>
                <option>Sicepat Express</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Alamat Lengkap</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Total Pembayaran</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" disabled placeholder="Rp <?= number_format($sum) ?>">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="<?= base_url('user/checkout') ?>?total=<?= $sum ?>" class="btn btn-primary">Checkout</a>
      </div>
    </div>
  </div>
</div>
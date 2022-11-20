<div class="container mt-4">
    <div class="card bg-dark text-white">
    <div class="card-header">
        Info Akun
    </div>
    <div class="card-body">

        <form action="<?= base_url('user/logout') ?>">
        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" disabled placeholder="<?= $this->session->userdata('nama') ?>">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" disabled placeholder="<?= $this->session->userdata('email') ?>">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" name="password" disabled placeholder="<?= $this->session->userdata('password') ?>">
        </div>
        <button type="submit" class="btn btn-block btn-danger">Logout</button>
        </form>
    </div>
    </div>
</div> 

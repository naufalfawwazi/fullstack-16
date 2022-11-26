<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= base_url('assets/css/join_style.css') ?>" />
    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    />
    <title>Halaman Login</title>


    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= base_url('assets/css/join_style.css') ?>" />
    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    />
    <title>Halaman Register</title>
  </head>
  <body>
    <div class="box register">
      <div class="back">
        <a href="<?= base_url('user/login_view') ?>">
          <i class="fa-solid fa-left-long fa-xl"></i>
        </a>
      </div>
      
      <form action="register" method="POST">
        <div class="form">
          <h2>Register</h2>
          <?php if ($this->session->flashdata('error')) : ?>
        <div class="alert alert-danger" role="alert">
          <?= $this->session->flashdata('error') ?>
        </div>
      <?php endif; ?>
          <div class="inputBox">
            <input type="text" name="nama" required />
            <span>Full Name</span> <i></i>
          </div>
          <div class="inputBox">
            <input type="email" name="email" required /> 
            <span>Email</span>
            <i></i>
          </div>
          <div class="inputBox">
            <input type="password" name="password" required />
            <span>Password</span> <i></i>
          </div>
          <div class="inputBox">
            <input  type="password" name="confirm_password" required /> 
            <span>Confirm Password</span>
            <i></i>
          </div>
          <input type="submit" value="Sign up" class="c" />
        </div>
      </form>
    </div>
  </body>
</html>

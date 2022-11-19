<!DOCTYPE html>
<html lang="en">
  <head>
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
  </head>
  <body>
      </div>
    <div class="box login">
      <div class="back">
        <a href="<?= base_url() ?>">
          <i class="fa-solid fa-left-long fa-xl"></i>
        </a>
      </div>
      <!-- show error caution when email or password wrong -->
      <?php if ($this->session->flashdata('error')) : ?>
        <div class="alert alert-danger" role="alert">
          <?= $this->session->flashdata('error') ?>
        </div>
      <?php endif; ?>
      <form method="post" action="">   
        <div class="form">
          <h2>Sign In</h2>
          <div class="inputBox">
            <input type="email" name="email" required />
            <span>Email</span> <i></i>
          </div>
          <div class="inputBox">
            <input type="password" name="password" required /> 
            <span>Password</span>
            <i></i>
          </div>
          <div class="links">
            <a href="<?= base_url('user/register') ?>">Sign Up</a>
          </div>

          <input type="submit" value="Login" class="c" />
        </div>

      </form>


    </div>
  </body>
</html>

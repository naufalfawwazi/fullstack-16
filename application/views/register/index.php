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
    <title>Halaman Register</title>
  </head>
  <body>
    <div class="box register">
      <div class="back">
        <a href="<?= base_url('user/login') ?>">
          <i class="fa-solid fa-left-long fa-xl"></i>
        </a>
      </div>
      <form action="" method="POST">
        <div class="form">
          <h2>Register</h2>
          
          <?php if(validation_errors()) : ?>

            <?php
              echo '<script language="javascript">';
              echo 'alert("Konfirmasi password tidak sama");';
              echo '</script>';
            ?>

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

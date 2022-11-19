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
  </head>
  <body>
    
   
    
    <div class="box login">
    
      <div class="back">
        <a href="<?= base_url() ?>">
          <i class="fa-solid fa-left-long fa-xl"></i>
        </a>
      </div>
      
      <form method="post" action="login">
      
        <div class="form">
          <h2>Sign In</h2>
          <?php if ($this->session->flashdata('error')) : ?>
      <div class="alert alert-danger" role="alert">
        <?= $this->session->flashdata('error') ?>
      </div>  
    <?php endif; ?>
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
            <a href="<?= base_url('user/register_view') ?>">Sign Up</a>
          </div>

          <input type="submit" value="Login" class="c" />
        </div>

      </form>


    </div>
  </body>
</html>

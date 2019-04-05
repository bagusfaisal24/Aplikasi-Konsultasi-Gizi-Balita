<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>LOGIN</title>
      <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>


<body>
 <?php echo $this->session->flashdata('msg');?>
  <div class="login-page">
  <div class="form">
    <form class="login-form" method="post" action="<?php echo base_url('auth/login'); ?>">
      <input type="text" name="username" placeholder="username"/>
      <input type="password" name="password" placeholder="password"/>
      <button type="submit" name="submit" value="login">login</button>
    </form>
    <?php $notifikasi = $this->session->flashdata('notif');
        if(!empty($notifikasi)) : ?>

                    <?php echo $notifikasi; ?>

        <?php endif; ?>
  </div>
<p style="float:right;">Desain template By <a href="https://dcrazed.net/css-html-login-form-templates/" target"_blank" >dcrazed.net</a></p>
</div>
</body>

</html>

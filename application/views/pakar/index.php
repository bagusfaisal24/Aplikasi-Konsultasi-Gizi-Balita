<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Aplikasi Konsultasi Gizi</title>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
     crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/white/pace-theme-minimal.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/css/bootstrap-notify.min.css">


  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg mb-4">
        <a class="navbar-brand" href="#">BabyConsult</a>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo site_url('pakar/Antropometri/v_anthropometri')?>">Data Anthropometri <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('pakar/Gejala/kriteria')?>">Data Gejala</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('pakar/Kasus/kasusuji')?>">Kasus Uji</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('pakar/Kasus/kasusbaru')?>">Kasus Baru</a>
                </li>
            </ul>
              <a href="<?php echo base_url('auth/logout');?>" style="color:#ffffff">
              <span class="fa fa-power-off"></span> Keluar</a>

        </div>
    </nav>
    <style rel="stylesheet">
    .bg{background-color: #54cc7e;}
    .a{color: #ffffff;}
    .a{text-emphasis-color: :#ffffff;}
    </style>
  </body>
</html>

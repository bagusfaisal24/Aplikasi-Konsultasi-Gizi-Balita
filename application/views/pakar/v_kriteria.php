<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="<?php echo base_url()?>/assets/js/data_tables.js"></script>
    <link href="<?php echo base_url()?>/assets/css/data_tables.css" type="text/css" rel="stylesheet"/>
  </head>
  <body>
    <?php
          $no = 1;
    ?>
    <div class="container">
      <div class="row">
        <div class="col-md-9">

        </div>
      </div>
        <hr>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Kriteria</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($kriteria as $row){ ?>
                <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td><?php echo $row['nama_kriteria']; ?></td>
                    <td>
                    <a href="<?php echo site_url('pakar/Gejala/v_gejala/'.$row['id_kriteria']);?>" class="btn btn-sm btn-primary"><i class="fa fa-list" aria-hidden="true"></i> Lihat </a>
                  </td>
                </tr>
            <?php $no++; } ?>
            </tbody>
        </table>
    </div>
  </body>
</html>

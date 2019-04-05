<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
  </head>
  <body>
    <?php
          $no = 1;
    ?>
      <div class="container">
      <div class="row">
        <div class="col-md-9">

        </div>

        <div class="col-md-3">
            <a href="<?php echo site_url('administrator/Index/tambahPengguna')?>" class="btn btn-success pull-right" ><i class="fa fa-plus"></i> Tambah data </a>
        </div>
      </div>
        <hr>
        <table class="table table-striped table-hover " id="pengguna">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Username</th>
                    <th scope="col">Level</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($pengguna->result_array() as $row){ ?>
                <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['alamat']; ?></td>
                    <td><?php echo $row['jenis_kelamin']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['level']; ?></td>
                    <td>
                    <a href="<?php echo site_url('administrator/index/hapusPengguna/'.$row['id_pengguna']);?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin Ingin Menghapus ?')"><i class="fa fa-trash"></i> Hapus </a>

                    </td>
                </tr>
            <?php $no++; } ?>
            </tbody>
        </table>
    </div>
  </body>
  <script type="text/javascript">
    $(document).ready(function () {
        $('#pengguna').DataTable();
    });
  </script>
</html>

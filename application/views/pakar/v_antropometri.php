<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-9">

        </div>
        <div class="col-md-3">
            <a href="<?php echo site_url('pakar/Antropometri/addantro/')?>" class="btn btn-success pull-right" ><i class="fa fa-plus"></i> Tambah data </a>
        </div>
      </div>
        <hr>
        <table class="table table-striped table-hover" id="data">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Balita</th>
                    <th>Tinggi Badan(Cm)</th>
                    <th>Berat Badan(Cm)</th>
                    <th>Umur (Bulan)</th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($antro as $row){ ?>
                <tr>
                    <th><?php echo $row['id_master'] ?></th>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['tinggi_badan']; ?></td>
                    <td><?php echo $row['berat_badan']; ?></td>
                    <td><?php echo $row['umur']; ?></td>
                    <td><?php echo $row['jenis_kelamin']; ?></td>
                    <td>
                    <a href="<?php echo site_url('pakar/Antropometri/delete/'.$row['id_master']);?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin Ingin Menghapus ?')"><i class="fa fa-trash"></i> Hapus </a>
                    <a href="<?php echo site_url('pakar/Antropometri/update/'.$row['id_master']);?>" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Ubah </a>
                  </td>
                </tr>
            <?php  } ?>
            </tbody>
        </table>
    </div>
  </body>
  <script type="text/javascript">
  $(document).ready(function(){
    $('#data').DataTable();
  });
</script>
</html>

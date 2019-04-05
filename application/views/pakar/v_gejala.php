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

          <?php 
          if ($gejala == null) {
            
              foreach ($gejala as $row) {
                  
              }
          }else{
             foreach ($gejala as $row) {
                  
              }
            }
          
          
           ?>
         <a href="<?php echo site_url('pakar/Gejala/fgejala/'.$row['fk_id_kriteria']);?>" class="btn btn-success pull-right" ><i class="fa fa-plus"></i> Tambah data </a>
           

        </div>
      </div>



        <hr>
        <table class="table table-striped table-hover" id="gejala">
            <thead>
                <tr>
                    <th scope="col">ID Gejala</th>
                    <th scope="col">Gejala</th>
                    <th scope="col">Klasifikasi</th>
                    <th scope="col">Bobot</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($gejala as $row){ ?>
                <tr>
                    <th scope="row"><?php echo $row['id_gejala'] ?></th>
                    <td><?php echo $row['gejala']; ?></td>
                    <td><?php echo $row['klasifikasi']; ?></td>
                    <td><?php echo $row['Bobot']; ?></td>
                    <td>
                    <a href="<?php echo site_url('pakar/Gejala/deleteGejala/'.$row['id_gejala']);?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin Ingin Menghapus ?')"><i class="fa fa-trash"></i> Hapus </a>
                    <a href="<?php echo site_url('pakar/Gejala/updategejala/'.$row['id_gejala']);?>" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Ubah </a>
                  </td>
                </tr>
            <?php  } ?>
            </tbody>
        </table>

  </body>
  <script type="text/javascript">
  $(document).ready(function(){
    $('#gejala').DataTable();
  });
</script>
</html>

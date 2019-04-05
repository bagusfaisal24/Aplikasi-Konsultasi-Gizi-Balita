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
            <a href="<?php echo site_url('pakar/Kasus/addKasus/')?>" class="btn btn-success pull-right" ><i class="fa fa-plus"></i> Tambah data </a>
        </div>
      </div>
  <br>
        <table class="table table-striped table-hover " id="tablekasus">
            <thead>
                <tr>
                    <th >No</th>
                    <th >Tinggi Badan</th>
                    <th >Berat Badan</th>
                    <th >Umur</th>
                    <th >Jenis Kelamin</th>
                    <th >Kode Gejala</th>
                    <th >Gejala</th>
                    <th >Status Gizi</th>
                    <th >Rekomendasi</th>
                    <th >Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            

            foreach($kasus as $row){ 
              $tempvalgejala = array();
                
              if(strlen($row['id_gejala'])>4){
                $tempkode = explode(',', $row['id_gejala']);
               

                foreach ($tempkode as $value2) {
                  $tempvalgejala[] = $gejala[$value2];
                }
                
                $valgejala = implode(',', $tempvalgejala);
              }else{
                $valgejala = $gejala[$row['id_gejala']];
              }
              ?>

                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row['tinggi_badan']; ?></td>
                    <td><?php echo $row['berat_badan']; ?></td>
                    <td><?php echo $row['umur']; ?></td>
                    <td><?php echo $row['jenis_kelamin']; ?></td>
                    <td><?php echo $row['id_gejala']; ?></td>
                    <td><?php echo $valgejala; ?></td> 
                    <td><?php echo $row['status_gizi']; ?></td>
                    <td><?php echo $row['rekomendasi']; ?></td>
                    <td>

                    <a href="<?php echo site_url('pakar/Kasus/delete/'.$row['id_case']);?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin Ingin Menghapus ?')"><i class="fa fa-trash"></i> Hapus </a>
                    <a href="<?php echo site_url('pakar/Kasus/updatekasus/'.$row['id_case']);?>" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Ubah </a>
                  </td>
                </tr>
            <?php $no++; } ?>
            </tbody>
        </table>
    </div>
  </body>
  <script type="text/javascript">
  $(document).ready(function(){
    $('#tablekasus').DataTable();
  });
</script>
</html>

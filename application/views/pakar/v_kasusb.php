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
                    <th >ID Gejala</th>
                    <th >Gejala</th>
                    <!-- <th >Gejala</th> -->

                </tr>
            </thead>
            <tbody>
            <?php foreach($data as $row){ 

              $tempvalgejala = array();

              if(strlen($row['fk_id_gejala'])>4){
                $tempkode = explode(',', $row['fk_id_gejala']);
                foreach ($tempkode as $value2) {
                  $tempvalgejala[] = $gejala[$value2];
                }

                $valgejala = implode(',', $tempvalgejala);

              }else if (empty($row['fk_id_gejala'])) {
                 $valgejala = " ";
              }else{
                 $valgejala = $gejala[$row['fk_id_gejala']];
              }
              ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row['tinggi_badan']; ?></td>
                    <td><?php echo $row['berat_badan']; ?></td>
                    <td><?php echo $row['umur']; ?></td>
                    <td><?php echo $row['jenis_kelamin']; ?></td>
                    <td><?php echo $row['fk_id_gejala']; ?></td>
                    <td><?php echo $valgejala; ?></td>
                    <!-- <td><?php echo $valgejala; ?></td>  -->
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

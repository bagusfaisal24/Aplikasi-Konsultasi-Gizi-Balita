<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
     crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
  </head>
  <body>
    <?php
          $no = 1;
    ?>
      <div class="container">


        <table class="table table-striped table-hover " id="histori">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Tinggi Badan</th>
                    <th scope="col">Berat Badan</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Kriteria</th>
                    <th scope="col">Gejala</th>
                    <th scope="col">Status Gizi</th>
                    <th scope="col">Rekomendasi</th>

                </tr>
            </thead>
            <tbody>
            <?php 

            function conjunto($dados)
            {
              return array_map("unserialize", array_unique(array_map("serialize", $dados)));
            }

            $tempkriteria = array();
            foreach($kriteria as $value){
              $tempkriteria[] = $value;
            }
            $setkriteria = conjunto($tempkriteria);
            
            $newkriteria = array();
            foreach ($setkriteria as $value) {
                     $newkriteria[$value] = array();
            }                

            foreach($kriteria as $key => $value){
              foreach ($setkriteria as $value1) {
                if($value==$value1) $newkriteria[$value][] = $key;
              }
            }


            // var_dump($newkriteria);
            $newgejala = array();
            $valgejala = array();
            $u = 0;
                    foreach($histori as $row){ 
                      $tempvalgejala = array();
                      $tempvalgejala2 = array();
                      if(strlen($row['fk_id_gejala'])>4){
                        $tempkode = explode(',', $row['fk_id_gejala']);
                        foreach ($tempkode as $value2) {
                          $tempvalgejala[] = $gejala[$value2];
                          $tempvalgejala2[] = $value2;
                        }
                        $newgejala[] = $tempvalgejala2;
                        $valgejala[$u] = implode(',', $tempvalgejala);                       
                      }else if (empty($row['fk_id_gejala'])) {
                        $valgejala[$u] = " ";
                        $newgejala[] = array();
                      }else{
                        $valgejala[$u] = $gejala[$row['fk_id_gejala']];
                        $newgejala[] = array($row['fk_id_gejala']);
                      }
                      $u++;
                    }
                    $i = 0;



            $countkriteria = array();
            foreach ($newkriteria as $key=>$p2gejala) {                    
                    $countkriteria[] = count($p2gejala);
            } 
            
            // var_dump($countkriteria);
            $outkriteria = array();
            // var_dump($newgejala);
            foreach ($newgejala as $value) {
              if(count($value)==0){
                $outkriteria[] = " ";
              }else{
              // var_dump($value);

                  $set2kriteria = $newkriteria;

                  $y = 0;
                  foreach ($newkriteria as $key=>$p2gejala) {                    
                    $set2kriteria[$key] = abs(count(array_diff($p2gejala, $value))-$countkriteria[$y]);
                    $y++;
                  } 
                  $outkriteria[] = array_keys($set2kriteria, max($set2kriteria))[0];
              }
            }
              $i = 0;
                    foreach($histori as $row){ 
                    
              ?>
                <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['tinggi_badan']; ?></td>
                    <td><?php echo $row['berat_badan']; ?></td>
                    <td><?php echo $row['umur']; ?></td>
                    <td><?php echo $row['jenis_kelamin']; ?></td>
                    <td><?php echo $outkriteria[$i]; ?></td> 
                    <td><?php echo $valgejala[$i]; ?></td> 
                    <td><?php echo $row['status_gizi']; ?></td>
                    <td><?php echo $row['rekomendasi']; ?></td>
                </tr>
            <?php $no++; $i++; } ?>
            </tbody>
        </table>
    </div>
  </body>
  <script type="text/javascript">
    $(document).ready(function () {
        $('#histori').DataTable();
    });
  </script>
</html>

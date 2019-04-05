<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Api extends CI_Controller
{
  public function __construct(){
      parent::__construct();
      $this->load->model('m_kasus');
  }
    public function auth(){

        if(!empty($_POST)){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
         
            $num = $this->m_pengguna->getAuth($username,$password);
            if($num!=0){
              $account = $this->m_pengguna->getAccountData($username,$password)[0];

              if ($account['level']=='2') {
                echo json_encode(array("login"=>"success","id_pengguna"=>$account['id_pengguna']));
              }else{
                  echo json_encode(array("login"=>"fail"));
              }
            }else echo json_encode(array("login"=>"fail"));
        }else{
            echo json_encode(array("login"=>"fail"));
        }
    }

  public function getKriteria(){
  $data = $this->m_kasus->kriteria();
  echo json_encode($data);
  }

  public function getGejala($id=""){

    $data = $this->m_kasus->gejala($id);
    echo json_encode($data);
  }

  public function getallGejala(){

    $data = $this->m_gejala->getallgejala();
    echo json_encode($data);
    }

public function getBasis($id=""){
  
  if(!empty($_POST)){
  $tinggi_badan = $_POST['tinggi_badan'];
  $berat_badan = $_POST['berat_badan'];
  $umur = $_POST['umur'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $gejala = $_POST['id_gejala'];

   $gejala = str_replace('"', '', $_POST['id_gejala']); 
              $gejala = str_replace(' ', '', $gejala);  
              $gejala = str_replace('[', '', $gejala);
              $gejala = str_replace(']', '', $gejala);   

  $data = $this->m_kasus->data();
  for($i=0;$i<count($data);$i++){
    $point[$i] = 0;
  }

  $i = 0;
  
  if (empty($gejala)) {
        foreach ($data as $row) {
        if($row['tinggi_badan'] == $tinggi_badan)$point[$i]++;
        if($row['berat_badan'] == $berat_badan) $point[$i]++;
        if($row['umur'] == $umur) $point[$i]++;
        if($row['jenis_kelamin'] == $jenis_kelamin) $point[$i]++;

        $point[$i] = ($point[$i]/5);

      $i++;
      }
  }else{

      foreach ($data as $row) {
        if($row['tinggi_badan'] == $tinggi_badan)$point[$i]++;
        if($row['berat_badan'] == $berat_badan) $point[$i]++;
        if($row['umur'] == $umur) $point[$i]++;
        if($row['jenis_kelamin'] == $jenis_kelamin) $point[$i]++;

        if (strpos($row['id_gejala'], $gejala) !== false) {
          $point[$i]++;
          }

        $point[$i] = ($point[$i]/5);

      $i++;
      }
  }

// echo json_encode($point);
  $max = array_keys($point, max($point));
	$hasil['status'] = $data[$max[0]]['gizi'];
	$hasil['rekomendasi'] = $data[$max[0]]['rekomendasi'];
  
	if(max($point)>0.7) {
    $hasil['stat'] = 'ada';
    echo json_encode($hasil);

    $status_gizi = $hasil['status'];
    $rekomendasi = $hasil['rekomendasi'];
    $data['fk_id_pengguna'] = $id;
    $data['fk_id_gejala'] = $gejala;
    $data['tinggi_badan'] = $tinggi_badan;
    $data['berat_badan'] = $berat_badan;
    $data['umur'] = $umur;
    $data['jenis_kelamin'] = $jenis_kelamin;
    $data['status_gizi'] = $status_gizi;
    $data['rekomendasi'] = $rekomendasi;

    $sql= "INSERT INTO histori(fk_id_pengguna, fk_id_gejala, tinggi_badan, berat_badan, umur, jenis_kelamin,status_gizi, rekomendasi) VALUES ('$id','$gejala','$tinggi_badan','$berat_badan','$umur','$jenis_kelamin','$status_gizi','$rekomendasi')";
      return $query = $this->db->query($sql);
      
  
	}else{
    $data1['stat'] = 'kosong';
    echo json_encode($data1);
    

    $data['fk_id_gejala'] = $gejala;
    $data['tinggi_badan'] = $tinggi_badan;
    $data['berat_badan'] = $berat_badan;
    $data['umur'] = $umur;
    $data['jenis_kelamin'] = $jenis_kelamin;
    
    $sql= "INSERT INTO new_case(fk_id_gejala, tinggi_badan, berat_badan, umur, jenis_kelamin) VALUES ('$gejala','$tinggi_badan','$berat_badan','$umur','$jenis_kelamin')";
    return $query = $this->db->query($sql);

	}

    }else{
        echo json_encode(array("Respon"=>"fail","status"=>"invalid input"));
    }

  }

  function histori($id="")
  {
              $data['histori'] = $this->m_kasus->history($id);
              $gejala = $this->m_kasus->getGejala();
              $kriteria = $this->m_kasus->getkriteria();
              
              $row = array(); 
              $row2 = array();
              foreach ($gejala as $value) {
                $row[$value['id_gejala']] = $value['gejala'];
               
              }

              

              foreach ($kriteria as $value1) {
 
                  $row2[$value1['id_gejala']] = $value1['nama_kriteria'];
               } 
                

              
              $data['gejala'] = $row;
              $data['kriteria'] = $row2;
              // var_dump($row2);
              $this->load->view('histori',$data);
  }

  public function adduser(){
      if(!empty($_POST)){
          $nama = $_POST['nama'];
          $alamat = $_POST['alamat'];
          $jenis_kelamin = $_POST['jenis_kelamin'];
          $username = $_POST['username'];
          $password = md5($_POST['password']);

          $data['nama'] = $nama;
          $data['alamat'] = $alamat;
          $data['jenis_kelamin'] = $jenis_kelamin;
          $data['username'] = $username;
          $data['password'] = $password;

          $hasil = $this->m_pengguna->addPengguna($data);
          if($hasil) echo json_encode(array("app_name"=>"Babyconsult","insert"=>"success"));
          else echo json_encode(array("app_name"=>"Babyconsult","insert"=>"fail"));
      } else echo json_encode(array("add_user"=>"fail","status"=>"invalid input"));
  }


}

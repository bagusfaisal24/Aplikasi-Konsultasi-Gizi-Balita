<?php
class M_kasus extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    function getkasus(){
      $data = $this->db->query("SELECT a.tinggi_badan, a.berat_badan, a.umur, a.jenis_kelamin, c.fk_id_gejala as id_gejala, c.status_gizi, c.rekomendasi, c.id_case FROM master_databayi a, tb_case c where a.id_master = c.fk_id_master");
      return $data->result_array();
    }

    function addKasus($data){
        $this->db->insert('tb_case',$data);
    }

    function data(){
      $data = $this->db->query("SELECT a.tinggi_badan as tinggi_badan, a.berat_badan as berat_badan, a.umur as umur, a.jenis_kelamin as jenis_kelamin, c.fk_id_gejala as id_gejala, c.status_gizi as gizi, c.rekomendasi as rekomendasi, c.id_case FROM master_databayi a, tb_case c where a.id_master = c.fk_id_master");
      return $data->result_array();
    }


    function kriteria(){
        $data = $this->db->query("SELECT * from kriteria");
        return $data->result_array();
      }

    function gejala($id){
      $query =  $this->db->query("SELECT * FROM gejala  where fk_id_kriteria = $id");
      return $query->result_array();
    }

    function getGejala(){
      $query =  $this->db->query("SELECT id_gejala, gejala FROM  gejala ");
            return $query->result_array();
    }

    function getkriteria(){
      $query =  $this->db->query("SELECT nama_kriteria, id_gejala, gejala from kriteria inner join gejala on 
      gejala.fk_id_kriteria = kriteria.id_kriteria ");
            return $query->result_array();
    }

    function v_case(){
      $query = $this->db->query("SELECT * from new_case");
      return $query->result_array();
    }

    function newCase($data){

      $this->db->insert("INSERT INTO new_case(fk_id_gejala, tinggi_badan, berat_badan, umur, jenis_kelamin) VALUES ('$id_gejala','$tinggi_badan','$berat_badan','$umur','$jenis_kelamin')",$data);
        return $data;
    }

    function likeBuruk(){
      $query = $this->db->query("SELECT * from histori where status_gizi like '%Buruk%'");
      return $query->result_array();
    }
    function likeBaik(){
      $query = $this->db->query("SELECT * from histori where status_gizi like '%Baik%'");
      return $query->result_array();
    }

    function likeKurang(){
      $query = $this->db->query("SELECT * from histori where status_gizi like '%Kurang%'");
      return $query->result_array();
    }

    function likeLebih(){
      $query = $this->db->query("SELECT * from histori where status_gizi like '%Lebih%'");
      return $query->result_array();
    }

    function getHistory(){
      $query = $this->db->query("SELECT * from histori");  
      return $query->result_array();
    }

    function history($id){
      $query = $this->db->query("SELECT * from histori where fk_id_pengguna=$id");
      return $query->result_array();
    }
    function delete($id){
        $this->db->where('id_case',$id);
        $this->db->delete('tb_case');
    }
    function update($id) {
              $status_gizi= $_POST['status_gizi'];
              $rekomendasi = $_POST['rekomendasi'];
           
              $gejala = str_replace('"', '', $_POST['fk_id_gejala']);   
              $gejala = str_replace('[', '', $gejala);
              $gejala = str_replace(']', '', $gejala);   

              $data['fk_id_gejala'] = $gejala;
              $data['status_gizi'] = $status_gizi;
              $data['rekomendasi'] = $rekomendasi;
        $this->db->where('id_case', $id);
        $this->db->update('tb_case', $data);
    }
    function getById($id) {
      $sql = "SELECT * FROM `tb_case` WHERE `id_case` = '".$id."'";
      $data = $this->db->query($sql);
      return $data->result_array();
   }

}

<?php
class M_gejala extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    function getgejala($id){

      $sql = "SELECT * FROM gejala  where fk_id_kriteria = $id";
      $data = $this->db->query($sql);

      if (isset($data)) {
        return $data->result_array();
      }else{
        return null;
      }
    }

    function getallgejala() {
      $sql = "SELECT * FROM gejala";
      $data = $this->db->query($sql);

      return $data->result_array();

   }

    function getkriteria(){
      $data = $this->db->query("SELECT * FROM kriteria");
      return $data->result_array();
    }

    function getById($id) {
      $sql = "SELECT * FROM `gejala` WHERE `id_gejala` = '".$id."'";
      $data = $this->db->query($sql);
      return $data->result_array();
   }

   function update($id) {
       $gejala= $this->input->post('gejala');
       $klasifikasi= $this->input->post('klasifikasi');
       $Bobot= $this->input->post('Bobot');
       $data = array (
           'gejala' => $gejala,
           'klasifikasi'=>$klasifikasi,
           'Bobot'=>$Bobot,
       );
       $this->db->where('id_gejala', $id);
       $this->db->update('gejala', $data);
   }

   function addGejala($data){
       $this->db->insert('gejala',$data);
       return $data;
   }

   function delete($id){
       $this->db->where('id_gejala',$id);
       $this->db->delete('gejala');
   }

   function addKriteria($data){
       $this->db->insert('kriteria',$data);
       return $data;
   }

}

?>

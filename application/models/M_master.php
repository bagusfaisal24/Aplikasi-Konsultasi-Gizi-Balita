<?php
class M_master extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    function getantro(){
      $sql = "SELECT * FROM `master_databayi` ";
      $data = $this->db->query($sql);
      return $data->result_array();
    }

    function update($id) {
        $nama_balita= $this->input->post('nama');
        $tinggi_badan= $this->input->post('tinggi_badan');
        $berat_badan= $this->input->post('berat_badan');
        $umur= $this->input->post('umur');
        $jenis_kelamin= $this->input->post('jenis_kelamin');
        $data = array (
            'nama' => $nama_balita,
            'tinggi_badan'=>$tinggi_badan,
            'berat_badan'=>$berat_badan,
            'umur'=>$umur,
            'jenis_kelamin'=>$jenis_kelamin
        );
        $this->db->where('id_master', $id);
        $this->db->update('master_databayi', $data);
    }
    function getById($id) {
      $sql = "SELECT * FROM `master_databayi` WHERE `id_master` = '".$id."'";
      $data = $this->db->query($sql);
      return $data->result_array();
   }

   function addAntro($data){
       $this->db->insert('master_databayi',$data);
   }

   function delete($id){
       $this->db->where('id_master',$id);
       $this->db->delete('master_databayi');
   }

}
?>

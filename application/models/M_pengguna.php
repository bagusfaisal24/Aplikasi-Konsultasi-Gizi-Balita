<?php
class M_pengguna extends CI_Model{
    public function __construct(){
        parent::__construct();
    }


    function getpengguna(){
      $data = $this->db->query("SELECT * FROM pengguna ");
      return $data;
    }

    function delete($id){
        $this->db->where('id_pengguna',$id);
        $this->db->delete('pengguna');
    }

    function addPengguna($data){
        $this->db->insert('pengguna',$data);
        return $data;
    }

    function getById($id) {
      $sql = "SELECT * FROM `pengguna` WHERE `id_pengguna` = '".$id."'";
      $data = $this->db->query($sql);
      return $data->result_array();
    }

    function update($id) {
        $nama= $this->input->post('nama');
        $alamat= $this->input->post('alamat');
        $username= $this->input->post('username');
        $password= md5($this->input->post('password'));
        $data = array (
            'nama' => $nama,
            'alamat'=>$alamat,
            'username'=>$username,
            'password'=>$username
        );
        $this->db->where('id_pengguna', $id);
        $this->db->update('pengguna', $data);
    }

    function auth($user,$pass){
         $query = $this->db->get_where('pengguna', array('username' => $user, 'password' => $pass), 1, 0);

        if ($query->num_rows() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }

    }
    function set($user,$pass){
        $query = $this->db->get_where('pengguna', array('username' => $user, 'password' => $pass), 1, 0);
        return $query;
    }

    public function getAuth($username,$password){
  		$data = $this->db->query("SELECT * FROM `pengguna` WHERE `username` = '$username' AND `password` = '".md5($password)."' LIMIT 1");
          return $data->num_rows();
      }

    public function getAccountData($username,$password){
          $data = $this->db->query("SELECT username, nama, id_pengguna, level FROM `pengguna` WHERE `username` = '$username' AND `password` = '".md5($password)."' LIMIT 1");
          return $data->result_array();

      }
}

?>

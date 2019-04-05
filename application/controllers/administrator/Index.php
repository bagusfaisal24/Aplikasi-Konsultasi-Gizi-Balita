<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller
{
  function __construct()
     {
         parent::__construct();
             $this->load->helper('url');
             $this->load->view('admin/Index');
             if ($this->session->userdata('auth_admin') != true) {
                 redirect('auth');
             }
     }

  function pengguna()
  {
    $data['pengguna'] = $this->m_pengguna->getpengguna();
    $this->load->view('admin/v_pengguna',$data);
  }

  function hapusPengguna($id){
    $this->m_pengguna->delete($id);
    redirect('administrator/Index/pengguna');
  }

  public function tambahPengguna()
  {
    if($this->input->post('submit')){
      $nama = ($this->input->post('nama'));
      $alamat = ($this->input->post('alamat'));
      $jenis_kelamin = ($this->input->post('jenis_kelamin'));
      $username = ($this->input->post('username'));
      $password = md5($this->input->post('password'));
      $level = ($this->input->post('level'));

      $data['nama'] = $nama;
      $data['alamat'] = $alamat;
      $data['jenis_kelamin'] = $jenis_kelamin;
      $data['username'] = $username;
      $data['password'] = $password;
      $data['level'] = $level;

      $this->m_pengguna->addPengguna($data);
      redirect('administrator/Index/pengguna');
    }
    $this->load->view('admin/addPengguna');
  }


    public function rekap($param=""){
      if($param==0){
        $data['data'] = $this->m_kasus->likeBaik();
      }else if($param==1){
        $data['data'] = $this->m_kasus->likeKurang();
      }else if($param==2){
        $data['data'] = $this->m_kasus->likeLebih();
      }else if($param==3){
        $data['data'] = $this->m_kasus->likeBuruk();
      }else{
        $data['data'] = $this->m_kasus->getHistory();
      }   


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

      $this->load->view('admin/rekap',$data);


    }
}
?>

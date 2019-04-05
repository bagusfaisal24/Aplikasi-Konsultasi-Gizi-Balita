<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Antropometri extends CI_Controller
{
  function __construct()
     {
         parent::__construct();
             $this->load->helper('url');
             $this->load->view('pakar/Index');

             if ($this->session->userdata('auth_pakar') != true) {
                 redirect('auth');
             }
     }

  public function v_anthropometri()
      {
            $data['antro'] = $this->m_master->getantro();
            $this->load->view('pakar/v_antropometri.php',$data);
      }

  public function update($id){
    if($this->input->post('submit')){
        $this->m_master->update($id);

        redirect('pakar/Antropometri/v_anthropometri');
    }
    $data['antro'] = $this->m_master->getById($id)[0];
    $data['id'] = $id;
    $this->load->view('pakar/up_antro',$data);
  }

  public function addantro()
  {
    if($this->input->post('submit')){
      $nama = $_POST['nama'];
      $tinggi_badan = $_POST['tinggi_badan'];
      $berat_badan= $_POST['berat_badan'];
      $umur = $_POST['umur'];
      $jenis_kelamin= $_POST['jenis_kelamin'];

      $data['nama'] = $nama;
      $data['tinggi_badan'] = $tinggi_badan;
      $data['berat_badan'] = $berat_badan;
      $data['umur'] = $umur;
      $data['jenis_kelamin'] = $jenis_kelamin;

      $this->m_master->addAntro($data);
      redirect('pakar/Antropometri/v_anthropometri');
    }
    $this->load->view('pakar/addAntro');
  }

  public function delete($id)
  {
      $this->m_master->delete($id);
      redirect('pakar/Antropometri/v_anthropometri');

  }






}
?>

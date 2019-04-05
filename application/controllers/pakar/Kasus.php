<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasus extends CI_Controller
{
  function __construct()
     {
         parent::__construct();
             $this->load->helper('url');
             $this->load->model('m_kasus');
             $this->load->view('pakar/Index');
             if ($this->session->userdata('auth_pakar') != true) {
                 redirect('auth');
             }
     }

     public function kasusuji()
        {   
            $data['kasus'] = $this->m_kasus->getkasus();
            $gejala = $this->m_kasus->getGejala();
    
            $row = array();
            foreach ($gejala as $value) {

              $row[$value['id_gejala']] = $value['gejala'];
             
            }

            $data['gejala'] = $row;
            $this->load->view('pakar/v_kasus.php',$data);
        }


     public function addKasus()
          {
            if($this->input->post('submit')){

              $fk_id_master = str_replace('"', '', $_POST['fk_id_master']);   
              $fk_id_master = str_replace('[', '', $fk_id_master);
              $fk_id_master = str_replace(']', '', $fk_id_master);

              $gejala = str_replace('"', '', $_POST['fk_id_gejala']);   
              $gejala = str_replace('[', '', $gejala);
              $gejala = str_replace(']', '', $gejala);   

              
                $status_gizi= $_POST['status_gizi'];
                $rekomendasi = $_POST['rekomendasi'];
            
                
                $data['fk_id_master'] = $fk_id_master;
                $data['fk_id_gejala'] = $gejala;
                $data['status_gizi'] = $status_gizi;
                $data['rekomendasi'] = $rekomendasi;

                $this->m_kasus->addKasus($data);
                redirect('pakar/Kasus/kasusuji');
              

              // $id_gejala = $_POST['fk_id_gejala'];
               
            }
            $data['kodeantro'] = $this->m_master->getantro();
            $data['kodegejala'] = $this->m_gejala->getallgejala();
             $this->load->view('pakar/addKasus',$data);
            
           
          }

      public function kasusbaru()
             {
                 $data['data'] = $this->m_kasus->v_case();
                 $gejala = $this->m_kasus->getGejala();
                 $row = array();
                 foreach ($gejala as $value) {

                    $row[$value['id_gejala']] = $value['gejala'];

                  }
               
                 $data['gejala'] = $row;
                 $this->load->view('pakar/v_kasusb.php',$data);

             }

      public function delete($id)
             {
                 $this->m_kasus->delete($id);
                 redirect('pakar/Kasus/kasusuji');

             }
      public function updatekasus($id)
                 {
                   if($this->input->post('submit')){
                       $this->m_kasus->update($id);

                       redirect('pakar/Kasus/kasusuji');
                   }
                   $data['kasus'] = $this->m_kasus->getById($id)[0];
                   $data['id'] = $id;
                   $data['kodeantro'] = $this->m_master->getantro();
                   $data['kodegejala'] = $this->m_gejala->getallgejala();
                   $this->load->view('pakar/up_kasus',$data);
                 }
}
?>

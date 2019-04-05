<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gejala extends CI_Controller
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

     public function kriteria()
        {
              $data['kriteria'] = $this->m_gejala->getkriteria();
              $this->load->view('pakar/v_kriteria.php',$data);
         }

     public function v_gejala($id)
         {
              $data['gejala'] = $this->m_gejala->getgejala($id);

              $this->load->view('pakar/v_gejala.php',$data);
              
         }

         public function fgejala($id){
         $data['data'] = $this->m_gejala->getgejala($id);
         $this->load->view('pakar/addGejala', $data);

         }

           public function add(){

               if($this->input->post('submit')){
                 $id_gejala= $this->input->post('id_gejala');
                 $id_kriteria = $this->input->post('fk_id_kriteria');
                 $gejala = $this->input->post('gejala');
                 $klasifikasi = $this->input->post('klasifikasi');
                 $bobot = $this->input->post('Bobot');

                 $data = array(
                 'id_gejala' =>$id_gejala,
                 'fk_id_kriteria' =>$id_kriteria,
                 'gejala' => $gejala,
                 'klasifikasi' => $klasifikasi,
                 'Bobot' => $bobot
                    );

                 $this->m_gejala->addGejala($data);
                  redirect('pakar/Gejala/kriteria');

               }

           }
           public function updategejala($id)
               {
                 if($this->input->post('submit')){
                     $this->m_gejala->update($id);

                     redirect('pakar/Gejala/kriteria');
                 }
                 $data['gejala'] = $this->m_gejala->getById($id)[0];
                 $data['id'] = $id;
                 $this->load->view('pakar/up_gejala',$data);
               }

           public function deleteGejala($id)
           {
               $this->m_gejala->delete($id);
               redirect('pakar/Gejala/kriteria');

           }

           public function addkriteria(){

               if($this->input->post('submit')){
                 $nama= $this->input->post('nama_kriteria');


                 $data = array(
                 'nama_kriteria' =>$nama,
                    );

                 $this->m_gejala->addkriteria($data);
                  redirect('pakar/Gejala/kriteria');

               }
                $this->load->view('pakar/addKriteria');

           }
}

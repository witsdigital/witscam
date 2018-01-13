<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class portal extends CI_Controller {


    public function index() {

       

        $this->load->view('portal/includes/imports');
        $this->load->view('portal/includes/header');
        $this->load->view('portal/index');
         $this->load->view('portal/includes/footer');
     
    }
    public function quemsomos(){
         $this->load->view('portal/includes/imports');
        $this->load->view('portal/includes/header');
        $this->load->view('portal/quemsomos');
         $this->load->view('portal/includes/footer');
        
    }
     public function sistemas(){
         $this->load->view('portal/includes/imports');
        $this->load->view('portal/includes/header');
        $this->load->view('portal/sistemas');
         $this->load->view('portal/includes/footer');
        
    }
     public function equipe(){
         $this->load->view('portal/includes/imports');
        $this->load->view('portal/includes/header');
        $this->load->view('portal/equipe');
         $this->load->view('portal/includes/footer');
        
    }
      public function camaras(){
          $this->load->model('entidade_model');
          $data['entidades'] = $this->entidade_model->getentidade();
          
         $this->load->view('portal/includes/imports');
        $this->load->view('portal/includes/header');
        $this->load->view('portal/camaras',$data);
         $this->load->view('portal/includes/footer');
        
    }
    public function prefeituras(){
         $this->load->view('portal/includes/imports');
        $this->load->view('portal/includes/header');
        $this->load->view('portal/camaras');
         $this->load->view('portal/includes/footer');
        
    }public function autarquias(){
         $this->load->view('portal/includes/imports');
        $this->load->view('portal/includes/header');
        $this->load->view('portal/camaras');
         $this->load->view('portal/includes/footer');
        
    }

}

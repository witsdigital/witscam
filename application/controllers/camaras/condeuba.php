<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Condeuba extends CI_Controller {

    public function index() {

        $this->load->view('cidades/includes/imports');
        $this->load->view('cidades/includes/header');
        $this->load->view('cidades/home');
        $this->load->view('cidades/includes/footer');
    }

    public function publicacoes() {
        
         $entidade = "7";
        $this->load->model('publicacoes_portal');
        $data['publicadas']=$this->publicacoes_portal->getpublicadas($entidade);
        
        $this->load->view('cidades/includes/imports');
        $this->load->view('/cidades/includes/header');
        $this->load->view('cidades/publicacoes',$data);
        $this->load->view('cidades/includes/footer');
    }
     public function get($tipo) {
           $entidade = "7";
        $this->load->model('publicacoes_portal');
        $data['publicadas'] = $this->publicacoes_portal->getpublicadas_tipo($entidade,$tipo);
        $this->load->view('cidades/includes/imports');
        $this->load->view('/cidades/includes/header');
        $this->load->view('cidades/publicacoes',$data);
        $this->load->view('cidades/includes/footer');
        
      
    }
  
      public function getbusca($tipo = NULL,$dado) {
     $entidade = "7";
     
        
        $this->load->model('publicacoes_portal');
        $data['publicadas'] = $this->publicacoes_portal->getpublicadas_busca($entidade,$tipo,$dado);
        $this->load->view('cidades/includes/imports');
        $this->load->view('/cidades/includes/header');
        $this->load->view('cidades/publicacoes',$data);
        $this->load->view('cidades/includes/footer');
    }
     public function buscatitulo($titulo = NULL) {
     $entidade = "7";
     
        
        $this->load->model('publicacoes_portal');
        $data['publicadas'] = $this->publicacoes_portal->getpublicadas_titulo($entidade,$titulo);
        $this->load->view('cidades/includes/imports');
        $this->load->view('/cidades/includes/header');
        $this->load->view('cidades/publicacoes',$data);
        $this->load->view('cidades/includes/footer');
    }
    
     public function buscadata($dia,$mes,$ano) {
     $entidade = "7";
    $date= $dia."/".$mes."/".$ano;
          $date = date("Y-m-d", strtotime(str_replace('/', '-', $date)));
          echo $date;
          
           $this->load->model('publicacoes_portal');
        $data['publicadas'] = $this->publicacoes_portal->getpublicadas_data($entidade,$date);
        $this->load->view('cidades/includes/imports');
        $this->load->view('/cidades/includes/header');
        $this->load->view('cidades/publicacoes',$data);
        $this->load->view('cidades/includes/footer');
       
       
    }
    
    
  
    
    
    
    public function busca( $key = NULL) {
        $entidade = "7";
        $tipo = "leis";
         $key =  $key;
        $this->load->model('publicacoes_portal');
        $data['publicadas']=$this->publicacoes_portal->getpublicadas_key($entidade, $key);
        $this->load->view('cidades/includes/imports');
        $this->load->view('/cidades/includes/header');
        $this->load->view('cidades/publicacoes',$data);
        $this->load->view('cidades/includes/footer');
    }
    
    
        public function documento( $key) {
           $entidade = "7";
       
        $this->load->model('publicacoes_portal');
        $data['publicadas']=$this->publicacoes_portal->getpublicadas_file($entidade, $key);
        $this->load->view('cidades/includes/imports');
       
        $this->load->view('cidades/arquivo',$data);
       
    }
    
   
    
    public function view_publica($chave = NULL) {
        
        $this->load->model('publicacoes_portal');
        $data['arquivo']=$this->publicacoes_portal->getfiles($chave);
        
        $this->load->view('cidades/includes/imports');
        $this->load->view('/cidades/includes/header');
        $this->load->view('cidades/view',$data);
        $this->load->view('cidades/includes/footer');
    }
      public function noticia($id = NULL) {
           $entidade = "7";
        
        $this->load->model('noticia_model');
        $this->db->where('id', $id);
       $query = $this->db->get('noticias');

      $data['noticia']=$query->result();
        $this->load->view('cidades/includes/imports');
        $this->load->view('/cidades/includes/header');
        $this->load->view('cidades/noticia',$data);
        $this->load->view('cidades/includes/footer');
    }

}

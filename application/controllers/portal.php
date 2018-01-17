<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class portal extends CI_Controller {


    public function index() {

       
$data['entidade'] = 'condeuba';
      $this->load->view('cidades/includes/imports');
        $this->load->view('cidades/includes/header',$data);
        $this->load->view('cidades/home');
        $this->load->view('cidades/includes/footer');
     
    }
    
    
    
        public function publicacoes() {
        $data['entidade'] = 'condeuba';
         $entidade = "7";
        $this->load->model('publicacoes_portal');
        $data['publicadas']=$this->publicacoes_portal->getpublicadas($entidade);
        
        $this->load->view('cidades/includes/imports');
        $this->load->view('/cidades/includes/header',$data);
        $this->load->view('cidades/publicacoes',$data);
        $this->load->view('cidades/includes/footer');
    }

    public function noticias() {
        $data['entidade'] = 'condeuba';
         $entidade = "7";
        $this->load->model('noticias_portal');
        $data['noticias']=$this->noticias_portal->getpublicadas($entidade);
        
        $this->load->view('cidades/includes/imports');
        $this->load->view('/cidades/includes/header',$data);
        $this->load->view('cidades/noticias',$data);
        $this->load->view('cidades/includes/footer');
    }
    

    public function contato() {
        $data['entidade'] = 'condeuba';
        $data['enviado'] = '';
        
        $this->load->view('cidades/includes/imports');
        $this->load->view('/cidades/includes/header',$data);
        $this->load->view('cidades/contato', $data);
        $this->load->view('cidades/includes/footer');
    }


    public function tvcamara() {

        $data['entidade'] = 'condeuba';
        $this->load->model('tv_camara_model');

        $data['video'] = $this->tv_camara_model->getall();
        $this->load->view('cidades/includes/imports');
        $this->load->view('/cidades/includes/header',$data);

        $this->load->view('cidades/tv_camara',$data);

        $this->load->view('cidades/includes/footer');
    }

    public function galerias() {
        $data['entidade'] = 'condeuba';
        $data['enviado'] = '';


        $this->load->model('galeria_model');

        $data['eventos'] = $this->galeria_model->getall2();
        
        $this->load->view('cidades/includes/imports');
        $this->load->view('/cidades/includes/header',$data);
        $this->load->view('cidades/galerias',$data);
        $this->load->view('cidades/includes/footer');
    }

    public function galeria($id = null) {
        $data['entidade'] = 'condeuba';
        $data['enviado'] = '';


        $this->load->model('galeria_model');

        $data['eventos'] = $this->galeria_model->getimgid($id);
        
        $this->load->view('cidades/includes/imports');
        $this->load->view('/cidades/includes/header',$data);
        $this->load->view('cidades/galeria',$data);
        $this->load->view('cidades/includes/footer');
    }





public function enviarcontato() {

    

    $nome = $_POST['name'];

    $email = $_POST['email'];
    
    $telefone = $_POST['telefone'];



    $assuntomensagem = $_POST['assunto'];

    $mensagem = $_POST['mensagem'];

    $data_envio = date('d/m/Y');

    $hora_envio = date('H:i:s');



    $arquivo = '

<html lang="en">



<head>



<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body> 



<div class="container">

<h2>Contato do site Sudoeste Leilões</h2>

<div class="well well-sm">Formulário gerado no dia ' . $data_envio . ' às ' . $hora_envio . ' </div>

  <hr>

  <b>Nome do usuário:</b> ' . $nome . '<br>

      <b>E-mail:</b> ' . $email . '<br>
      
      <b>E-Telefone:</b> ' . $telefone . '<br>

            <b>Assunto:</b> ' . $assuntomensagem . '<br>

             <b>Mensagem:</b> <br>' . $mensagem . '<br>

      

      <br><div style="font-size: 10px" align="center" class="small"><strong>Formulário criado e mantido por <a href="http://www.witsdigital.com.br">Wits</a></strong></div>

</div>



</body>

</html>

';



    require_once('class.phpmailer.php');



    $mail = new PHPMailer();

    $mail->IsSMTP();

    $mail->IsHTML(true);

    $mail->CharSet = 'UTF-8';



    $mail->SMTPDebug = 1;

    $mail->SMTPAuth = true;

    $mail->SMTPSecure = "ssl";

    $mail->Port = 465;

    $mail->Host = "smtp.gmail.com";

    $mail->Username = "witsdigital@gmail.com";

    $mail->Password = "thiago2828";

    $mail->SetFrom("contato@teste.com.br", "Camara de vereadores - contato");

    $mail->AddAddress("contato@teste.com.br");

    $mail->Subject = ("contato do site");

    $mail->MsgHTML($arquivo);

    $enviarEmail = $mail->Send();

    if ($enviarEmail){
        $data['enviado'] = '<font color="green">Mensagem enviada</font>';
    } else {
        $data['enviado'] = '<font color="red">Erro ao enviar mensagem, tente novamente mais tarde</font>';
    }
        


    $data['entidade'] = 'condeuba';
    
        
    $this->load->view('cidades/includes/imports');
    $this->load->view('/cidades/includes/header',$data);
    $this->load->view('cidades/contato', $data);
    $this->load->view('cidades/includes/footer');

}

    


    
    
      public function get($tipo) {
          $data['entidade'] = 'condeuba';
      
           $entidade = "7";
        $this->load->model('publicacoes_portal');
        $data['publicadas'] = $this->publicacoes_portal->getpublicadas_tipo($entidade,$tipo);
        $this->load->view('cidades/includes/imports');
        $this->load->view('/cidades/includes/header',$data);
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
    
    public function buscatitulo($titulo = NULL) {
     $entidade = "7";
     
        
        $this->load->model('publicacoes_portal');
        $data['publicadas'] = $this->publicacoes_portal->getpublicadas_titulo($entidade,$titulo);
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

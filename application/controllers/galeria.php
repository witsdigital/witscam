<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Galeria extends CI_Controller {

    public function index($indice = NULL) {


        $this->load->view('includes/import');
        $this->load->view('includes/header');
        if ($this->session->userdata('permissao') == 'administrador') {
            $this->load->view('includes/menu_admin');
        } else {
            $this->load->view('includes/menu');
        }
        if ($indice == 1) {
            $data['msg'] = "Dados cadastrados com sucesso!";
            $this->load->view('includes/msg_success', $data);
        }
        if ($indice == 2) {
            $data['msg'] = "Dados Alterados com sucesso!";
            $this->load->view('includes/msg_success', $data);
        }

        if ($indice == 3) {
            $data['msg'] = "Dados Apagados com sucesso!";
            $this->load->view('includes/msg_success', $data);
        }
        if ($indice == 6) {
            $data['msg'] = "usuario ja existe!";
            $this->load->view('includes/msg_danger', $data);
        }

        $this->load->model('galeria_model');
        $dados['data'] = $this->galeria_model->getall();

        $this->load->view('galeria/view', $dados);
        $this->load->view('includes/footer');
    }

    public function cadastro() {
        $this->load->view('includes/import');
        $this->load->view('includes/header');
           if($this->session->userdata('permissao') == 'administrador'){
             $this->load->view('includes/menu_admin');  
      }else{
              $this->load->view('includes/menu'); 
        }
        $this->load->view('galeria/cadastro');
        $this->load->view('includes/footer');
    }

    public function salvar() {
        session_start();

        date_default_timezone_set('America/Sao_Paulo');
        $data['data'] = date('y-m-d');
        $data['titulo'] = $this->input->post('titulo');

        $data['conteudo'] = $this->input->post('descricao');
        if (isset($_POST['destaque'])) {
            $d = "1";
        } else {
            $d = "0";
        }
        $data['destaque'] = $d;
        $key = date("dmHi") . date("y") + 1;
        $data['key'] = $key;


        $this->load->model('galeria_model');
        if ($this->galeria_model->set($data)) {
            $categoria = 'galeria';

            $this->up_multi_img($categoria, $key);

            redirect('galeria/');
        } else {
            redirect('galeria/');
        }
    }

    public function salvarimg() {


        $key = $this->input->post('chave');
        $categoria = 'galeria';
        if ($this->up_multi_img_up($categoria, $key)) {

            redirect('galeria/alterarimg/' . $key);
        } else {
            redirect('galeria/');
        }
    }

    public function apagar($id) {

        if ($this->db->delete('galeria', array('id' => $id))) {
            redirect('galeria/');
        }
    }

    public function apagarimg($id, $key) {

        $pastafotos = 'uploads/galeria/';
        $this->load->model('galeria_model');
        $data['arquivo'] = $this->galeria_model->getimgid2($id);
        $apagarfoto = $data['arquivo'][0]->arquivo;

        if (unlink($pastafotos . $apagarfoto)) {
            if ($this->db->delete('img_galeria', array('id' => $id))) {
                redirect('galeria/alterarimg/' . $key);
            }
        }
    }

    public function alterar($id) {
        $this->load->view('includes/import');
        $this->load->view('includes/header');
        $this->load->model('galeria_model');
        $data['evento'] = $this->galeria_model->getid($id);



        if ($this->session->userdata('permissao') == 'administrador') {
            $this->load->view('includes/menu_admin');
        }

        $this->load->view('galeria/alterar', $data);
        $this->load->view('includes/footer');
    }

    public function alterarimg($key) {
        $this->load->view('includes/import');
        $this->load->view('includes/header');
        $this->load->model('galeria_model');
        $data['chave'] = $key;
        $data['imgevento'] = $this->galeria_model->getimgid($key);



        if ($this->session->userdata('permissao') == 'administrador') {
            $this->load->view('includes/menu_admin');


            $this->load->view('galeria/alterarimg', $data);
            $this->load->view('includes/footer');
        } else {
            redirect('login');
        }
    }

    public function update() {

        $data['titulo'] = $this->input->post('titulo');
        $data['conteudo'] = $this->input->post('descricao');
        if (isset($_POST['destaque'])) {
            $d = "1";
        } else {
            $d = "0";
        }
        $data['destaque'] = $d;



        $this->load->model('galeria_model');

        if ($this->galeria_model->update($data, $this->input->post('iduser'))) {
            redirect('galeria/');
        } else {
            echo $this->input->post('iduser');
        }
    }

    public function updateimg() {

        $this->load->model('especialidade_model');
        if ($this->especialidade_model->update_img($this->input->post('iduser'))) {
            redirect('especialidade/');
        } else {
            echo $this->input->post('iduser');
        }
    }

    public function up_multi_img($categoria, $key) {


        $file = $_FILES['ar'];
        $numFile = count(array_filter($file['name']));




        if (is_dir("uploads/$categoria")) {
            $dir = 'uploads/' . $categoria;
        } else {
            mkdir("uploads/$categoria", 0777, true);
            $dir = 'uploads/' . $categoria;
        }



        // fim diretorio

        if ($numFile <= 0) {
            echo "<script>alert('Selecione uma imagem')</script>";
            echo "<script type=\"text/javascript\">
		  window.setTimeout(\"location.href='index.php?pg=envio';\", 2000);
		</script>";
        } else {

            for ($i = 0; $i < $numFile; $i++) {

                $name = $file['name'][$i];
                $type = $file['type'][$i];
                $size = $file['size'][$i];
                $error = $file['error'][$i];
                $tmp = $file['tmp_name'][$i];
                //$tiposPermitidos = array('application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/pdf');
                $tiposPermitidos = array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/png');

                if ($error != 0) {
                    $msg[] = "<b> $name : </b>" . $error[$erromsg];
                }
                if (array_search($type, $tiposPermitidos) === false) {

                    redirect('index.php/publicacoes/cadastro/5');
                    // Não houveram erros, move o arquivo
                } else {

                    if (move_uploaded_file($tmp, $dir . "/" . $name)) {


                        $obj['arquivo'] = $name;
                        $obj['key'] = $key;
                        $this->db->insert('img_galeria', $obj);
                    } else {
                        $msg[] = "<b> $name : </b> ocorreu erro";
                    }
                }
            }return $key;
        }
    }

    public function up_multi_img_up($categoria, $key) {


        $file = $_FILES['ar'];
        $numFile = count(array_filter($file['name']));




        if (is_dir("uploads/$categoria")) {
            $dir = 'uploads/' . $categoria;
        } else {
            mkdir("uploads/$categoria", 0777, true);
            $dir = 'uploads/' . $categoria;
        }



        // fim diretorio

        if ($numFile <= 0) {
            echo "<script>alert('Selecione uma imagem')</script>";
            echo "<script type=\"text/javascript\">
		  window.setTimeout(\"location.href='index.php?pg=envio';\", 2000);
		</script>";
        } else {

            for ($i = 0; $i < $numFile; $i++) {

                $name = $file['name'][$i];
                $type = $file['type'][$i];
                $size = $file['size'][$i];
                $error = $file['error'][$i];
                $tmp = $file['tmp_name'][$i];
                //$tiposPermitidos = array('application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/pdf');
                $tiposPermitidos = array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/png');

                if ($error != 0) {
                    $msg[] = "<b> $name : </b>" . $error[$erromsg];
                }
                if (array_search($type, $tiposPermitidos) === false) {

                    redirect('index.php/publicacoes/cadastro/5');
                    // Não houveram erros, move o arquivo
                } else {

                    if (move_uploaded_file($tmp, $dir . "/" . $name)) {


                        $obj['arquivo'] = $name;
                        $obj['key'] = $key;
                        $this->db->insert('img_galeria', $obj);
                    } else {
                        $msg[] = "<b> $name : </b> ocorreu erro";
                    }
                }
            }return $key;
        }
    }




}

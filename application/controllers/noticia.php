<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Noticia extends CI_Controller {

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

        $this->load->model('noticia_model');
        $dados['data'] = $this->noticia_model->getall();

        $this->load->view('noticia/view', $dados);
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
        $this->load->view('noticia/cadastro');
        $this->load->view('includes/footer');
    }

    public function salvar() {
        if (isset($_POST['destaque'])) {
            $d = "1";
        } else {
            $d = "0";
        }


        $data['titulo'] = $this->input->post('titulo');
        $data['conteudo'] = $this->input->post('descricao');
        $data['destaque'] = $d;
        $data['entidade'] = $this->session->userdata('entidade');


        $this->load->model('noticia_model');
        if ($this->noticia_model->set($data)) {

            redirect('noticia/1');
        } else {
            redirect('noticia/6');
        }
    }

    public function apagar($id) {
        $cat = "noticias";
        $query = $this->db->get_where($cat, array('id' => $id));
        foreach ($query->result() as $row) {
            $file = "uploads/$cat/" . $row->img;
            if (is_file($file)) {
                if (is_readable($file) && unlink($file)) {
                    if ($this->db->delete($cat, array('id' => $id))) {
                        redirect('noticia/3');
                    }
                } else {
                    redirect('noticia/3');
                }
            } else {
                if ($this->db->delete($cat, array('id' => $id))) {
                    redirect('noticia/3');
                }
            }
        }
    }

    public function alterar($id) {
        $this->load->model('noticia_model');
        $data['noticia'] = $this->noticia_model->getid($id);


        $this->load->view('includes/import');
           if($this->session->userdata('permissao') == 'administrador'){
             $this->load->view('includes/menu_admin');  
      }else{
              $this->load->view('includes/menu'); 
        }
        $this->load->view('includes/header');
        $this->load->view('noticia/alterar', $data);
        $this->load->view('includes/footer');
    }

    public function update() {
        if (isset($_POST['destaque'])) {
            $d = "1";
        } else {
            $d = "0";
        }
        $data['titulo'] = $this->input->post('titulo');
        $data['conteudo'] = $this->input->post('descricao');
        $data['destaque'] = $d;
        $data['entidade'] = $this->session->userdata('entidade');

        $this->load->model('noticia_model');
        if ($this->noticia_model->update($data, $this->input->post('iduser'))) {
            redirect('noticia/2');
        } else {
            echo $this->input->post('iduser');
        }
    }

    public function updateimg() {



        $this->load->model('noticia_model');
        if ($this->noticia_model->update_img($this->input->post('iduser'))) {
            redirect('noticia/2');
        } else {
            echo $this->input->post('iduser');
        }
    }

}

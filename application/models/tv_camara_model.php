<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class tv_camara_model extends CI_Model {

    public function set($obj) {
        $entidade = $this->session->userdata('entidade');

        if ($this->db->insert('tv_camara', $obj)) {
            return true;
        }
    }
    public function getid($id){
        $query = $this->db->query('select * from tv_camara WHERE id ='.$id.' AND entidade = '.$this->session->userdata('entidade'));
        return $query->result();
        }
        
        public function getNoticia($id) {
            echo $id;
       $query = $this->db->query('select * from tv_camara WHERE id ='.$id.' AND entidade = '.$this->session->userdata('entidade'));
       echo count($query); 
       return $query->result();
    }

    public function getall() {
        $query = $this->db->query("select * from tv_camara where entidade = " . $this->session->userdata('entidade')." order by id desc ");
        return $query->result();
    }
    public function update($obj,$id) {
        $this->db->where('id', $id);
         $this->db->where('entidade',  $this->session->userdata('entidade'));
        if($this->db->update('tv_camara', $obj)){
             return true;
        }
       
    }
    public function update_img($id){
         $this->load->model('Imagem');
        $upload = new Imagem();
        $img = $upload->upload('tv_camara');
        if ($img == null) {
            $img = "";
        }
        $obj['img'] = $img;
         $this->db->where('id', $id);
          $this->db->where('entidade',  $this->session->userdata('entidade'));
         
         if($this->db->update('tv_camara', $obj)){
             return true;
        }
    }

}

?>
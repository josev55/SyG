<?php

class Publicacion extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function getPublications($limit){

        if ($limit) {
            $query = $this->db->get('publicaciones', $limit);
        } else {
            $query = $this->db->get('publicaciones');
        }

        return $query->result();

    }

    public function getPublicationImages($id){

        $this->db->select('*');
        $this->db->from('publicacion_images');
        $this->db->where('id_publicacion', $id);
        $query = $this->db->get();

        return $query->result();

    }

}

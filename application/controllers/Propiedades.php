<?php

class Propiedades extends CI_Controller {

    public function index() {
        $this->load->view('error');
    }

    public function simple($id) {
        $this->load->model('publicacion');

        $results = $this->publicacion->getPublication($id);

        $images = $this->publicacion->getPublicationImages($id);

        $data['publicacion'] = $results;
        $data['images'] = $images;

        $this->load->view('properties-single', $data);
    }

}

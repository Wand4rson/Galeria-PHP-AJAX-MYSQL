<?php
class homeController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $galeria = new Galeria();

        $data = array();
        $data['lista'] = $galeria->getAll();
        
        $this->loadTemplate('home', $data);
    }

}
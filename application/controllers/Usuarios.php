<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Usuarios extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('principal_model');

    }

    public function index()
    {
        $query = "SELECT * FROM users";

        $usuarios = $this->principal_model->get('tabla', $query);
        echo "$usuarios";
    }

}

/* End of file  usuarios.php */

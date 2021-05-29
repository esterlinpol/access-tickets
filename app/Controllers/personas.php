<?php
class personas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login');
        }
        $this->load->model('visitantestModel');
    }
    function index()
    {
        if ($this->session->userdata('level') === '1') {
            $data['servicios'] = $this->ServiciosModel->getServicios();
            $this->load->view('listClient', $data);
        } elseif ($this->session->userdata('level') === '2') {
            $data['servicios'] = $this->ServiciosModel->getServicios();
            $this->load->view('listClient', $data);
        } else {
            echo "Access Denied";
        }
    }
    function show()
    {
        $data = $this->ClientModel->clientList();
        echo json_encode($data);
    }
    
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainSections extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
//        $this->load->model('AdminModels');
        $this->load->library('session');
        $this->load->library('pagination');
        $this->load->helper('url');
        $this->load->library('form_validation');

        $arraydata = $this->session->userdata['login'];
        if (empty($arraydata)) {
            redirect(site_url() . 'admin/Admin_page/');
        }
    }

    public function vacancy(){
        $this->load->view('admin/header');
        $this->load->view('admin/vacancy');
        $this->load->view('admin/footer');
    }


}
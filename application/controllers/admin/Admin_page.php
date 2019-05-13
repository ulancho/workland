<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_page extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->library('session');
        $this->load->model('UserModel');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

     //загрузка страницы логина
    public function index()
    {
//       $this->load->library('password');
//       $pwd = "123";
//       $name =  $this->password->create_hash($pwd);
//       print_r($name);
//       die;
        $this->load->view('admin/login');
    }

     //Проверка и redirect на админ страничку
    public function login()
    {
            $login = $this->input->post('login');
            $pwd = $this->input->post('password');
            $userInfo = $this->UserModel->checkLogin($login, $pwd);

            if (!$userInfo) {
                $this->session->set_flashdata('flash_message', 'Неверный пароль или логин.');
                redirect(base_url() . 'admin/Admin_page');
            } else {
                $array = array(
                    'id' => $userInfo->id,
                    'login' => $userInfo->login
                );
                $this->session->set_userdata($array);
                redirect(base_url() . 'admin/Admin_page/admin');
            }




    }

    //Загузка админ странички
    public function admin()
    {
        $arraydata = $this->session->userdata['login'];
        if (empty($arraydata)) {
            redirect(base_url() . 'admin/Admin_page/');
        } else {
            $this->load->view('admin/header');
            $this->load->view('admin/main');
            $this->load->view('admin/footer');
        }
    }

    //Logout
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url() . 'admin/Admin_page/');
    }


}

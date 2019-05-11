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
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
    }

//загрузка страницы логина
    public function index()
    {
//       $this->load->library('password');
//       $pwd = "123";
//       $name =  $this->password->create_hash($pwd);
//       print_r($name);
//       die;
        $this->load->view('admin/header');
        $this->load->view('admin/login_form');
        $this->load->view('admin/footer');
    }

//Проверка и redirect на админ страничку
    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email',
            array('required' => "Поле логин обязательна.",
                'valid_email' => "Введите полное название почты. Например:example@gmail.com"
            )
        );
        $this->form_validation->set_rules('password', 'Password', 'required',
            array(
                'required' => "Поле пароль обязательна."
            )
        );

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/header');
            $this->load->view('admin/container');
            $this->load->view('admin/login_form');
            $this->load->view('admin/footer');
        } else {
            $login = $this->input->post('email');
            $pwd = $this->input->post('password');
            $userInfo = $this->UserModel->checkLogin($login, $pwd);

            if (!$userInfo) {
                $this->session->set_flashdata('flash_message', 'Неверный пароль или адрес электронной почты.');
                redirect(site_url() . 'admin/Admin_page/login');
            } else {
                $array = array(
                    'id' => $userInfo->id,
                    'login' => $userInfo->login
                );
                $this->session->set_userdata($array);
                redirect(site_url() . 'admin/Admin_page/admin');
            }


        }

    }

//Загузка админ странички
    public function admin()
    {
        $data['box'] = $this->db->count_all('box');
        $data['fruits'] = $this->db->count_all('fruits');
        $data['vegetables'] = $this->db->count_all('vegetables');
        $data['news'] = $this->db->count_all('news');
        $data['partners'] = $this->db->count_all('partners');
        $arraydata = $this->session->userdata['login'];
        if (empty($arraydata)) {
            redirect(site_url() . 'admin/Admin_page/');
        } else {
            $this->load->view('admin/header');
            $this->load->view('admin/navbar');
            $this->load->view('admin/indexcontainer',$data);
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

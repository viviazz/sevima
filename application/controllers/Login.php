<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    function __construct()
    {
        parent::__construct();
        $this->load->model('ModelCrud');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('Login');
    }
    public function AksiLogin()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $where = array(
            'email' => $email,
            'password' => sha1($password)
        );
        $cek = $this->ModelCrud->cek_login("member_vaksin", $where)->num_rows();
        if ($cek > 0) {
            redirect(site_url('home'));
        } else {
            echo "Username dan password salah !";
        }
    }
}

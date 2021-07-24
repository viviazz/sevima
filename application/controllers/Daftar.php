<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
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
        $this->load->view('Daftar');
    }
    public function AddAccount()
    {
        $nik = $this->input->post('nik'); //mengambil inputan judul
        $nama = $this->input->post('nama'); //mengambil inputan isi
        $email = $this->input->post('email'); //mengambil inputan isi
        $alamat = $this->input->post('alamat'); //mengambil inputan isi
        $password = $this->input->post('password'); //mengambil inputan isi
        $password1 = $this->input->post('repassword'); //mengambil inputan isi

        if ($password == $password1) {
            $dataInput = array(
                'nik' => $nik,
                'nama' => $nama,
                'email' => $email,
                'alamat' => $alamat,
                'password' => sha1($password)
            );

            $this->ModelCrud->insert_user($dataInput);

            redirect('home');
        } else {
            echo "<script>alert('Password tidak sama!');history.go(-1);</script>";
        }
    }
}

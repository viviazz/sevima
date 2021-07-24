<?php
defined('BASEPATH') or exit('No direct script access allowed');

class afterlogin extends CI_Controller
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

        $this->load->view('afterlogin/home');
    }
    function qrcode()
    {
        $params['data'] = 'This is a text to encode become QR Code';
        $this->ciqrcode->generate($params);
        $params['data'] = 'This is a text to encode become QR Code';
        $params['level'] = 'H';
        $params['size'] = 10;
        $params['savename'] = FCPATH . 'tes.png';
        $this->ciqrcode->generate($params);

        echo '<img src="' . base_url() . 'tes.png" />';
    }
}

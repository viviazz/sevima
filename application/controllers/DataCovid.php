<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataCovid extends CI_Controller
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
    public function index()
    {
        // $this->load->view('home');

        $readAPIIndonesia = file_get_contents("https://api.kawalcorona.com/indonesia");
        $data['indonesia'] = json_decode($readAPIIndonesia, true);

        $readAPIProvinsi = file_get_contents("https://api.kawalcorona.com/indonesia/provinsi");
        $data['provinsi'] = json_decode($readAPIProvinsi, true);

        $this->load->view('DataCovid', $data);
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Privacy extends CI_Controller
{

    public function index()
    {
        $this->load->view('templates/head');
        $this->load->view('templates/header');
        $this->load->view('templates/topbar');
        $this->load->view('templates/nav');
        $this->load->view('templates/sidebar');
        $this->load->view('pages/home');
        $this->load->view('templates/footer');
    }

    public function app_privacy()
    {
        $appid = $this->uri->segment(3, 0);
      //echo $appid;
        switch ($appid) {
            case "com.sprs.datahub":
        $this->load->view('pages/privacies/pvc_datahub');
                break;
                default:
        $this->load->view('pages/privacies/app_pvc');
            }
    }
}
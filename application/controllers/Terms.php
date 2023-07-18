<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Terms extends CI_Controller
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

    public function app_terms()
    {
        $appid = $this->uri->segment(3, 0);
        $this->load->view('pages/terms/app_terms');
        if ($appid = 'com.sprs.sampark') {
            //
        }

        /*  
		$this->load->view('templates/head');
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/nav');
		$this->load->view('templates/sidebar');
		$this->load->view('pages/home');
		$this->load->view('templates/footer'); */
    }
}
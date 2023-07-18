<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
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

	public function about()
	{
		$this->load->view('templates/head');
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/nav');
		$this->load->view('templates/sidebar');
		$this->load->view('pages/about');
		$this->load->view('templates/footer');
	}

	public function gallery()
	{
		$this->load->view('templates/head');
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/nav');
		$this->load->view('templates/sidebar');
		$this->load->view('pages/gallery');
		$this->load->view('templates/footer');
	}

	public function testimonials()
	{
		$this->load->view('templates/head');
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/nav');
		$this->load->view('templates/sidebar');
		$this->load->view('pages/testimonials');
		$this->load->view('templates/footer');
	}

	public function services()
	{
		$this->load->view('templates/head');
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/nav');
		$this->load->view('templates/sidebar');
		$this->load->view('pages/servicelist');
		$this->load->view('templates/footer');
	}

	public function test()
	{
		$this->load->view('test');
	}
}
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

	public function mobileapps()
	{
		$this->load->view('templates/head');
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/nav');
		$this->load->view('templates/sidebar');
		$this->load->view('pages/mobileapps');
		$this->load->view('templates/shortcontact');
		$this->load->view('templates/footer');
	}

	public function seos()
	{
		$this->load->view('templates/head');
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/nav');
		$this->load->view('templates/sidebar');
		$this->load->view('pages/seos');
		$this->load->view('templates/shortcontact');
		$this->load->view('templates/footer');
	}

	public function brandings()
	{
		$this->load->view('templates/head');
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/nav');
		$this->load->view('templates/sidebar');
		$this->load->view('pages/brandings');
		$this->load->view('templates/shortcontact');
		$this->load->view('templates/footer');
	}

	public function graphicdesigns()
	{
		$this->load->view('templates/head');
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/nav');
		$this->load->view('templates/sidebar');
		$this->load->view('pages/graphicdesigns');
		$this->load->view('templates/shortcontact');
		$this->load->view('templates/footer');
	}

	public function test()
	{
		$this->load->view('test');
	}
}
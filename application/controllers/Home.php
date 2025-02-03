<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	protected $layout = 'layout/layout';
	public function render($file, $pageTitle, $sourcedData)
	{
		if ($file == 'home2') {
			$footer = 'footer_second';
		} else {
			$footer = 'footer';
		}
		$page_data = array();
		if (isset($sourcedData['page_data'])) {
			$page_data = $sourcedData['page_data'];
		}
		$data['header'] = $this->load->view('layout/header', array(), TRUE);
		$data['footer'] = $this->load->view('layout/' . $footer, array(), TRUE);
		$data['pageTitle'] = $pageTitle;
		$data['body'] = $this->load->view($file, $page_data, TRUE);
		if (isset($sourcedData['page_data'])) {
			$data['script_file'] = $sourcedData['script_file'];
		}
		$this->load->view($this->layout, $data);
		return;
	}
	public function index()
	{
		$data = array(
			"page_data" => array(),
			"script_file" => ""
		);
		$this->render('home', "Welcome to the UMMA", $data);
	}
	public function about()
	{
		$data = array(
			"page_data" => array(),
			"script_file" => ""
		);
		$this->render('about', "Welcome to the UMMA", $data);
	}
	public function programs()
	{
		$data = array(
			"page_data" => array(),
			"script_file" => ""
		);
		$this->render('ummah_programs', "Welcome to the UMMA", $data);
	}
	public function joinUmma()
	{
		$data = array(
			"page_data" => array(),
			"script_file" => ""
		);
		$this->render('join_ummah', "Welcome to the UMMA", $data);
	}
	public function resources()
	{
		$data = array(
			"page_data" => array(),
			"script_file" => ""
		);
		$this->render('resources', "Welcome to the UMMA", $data);
	}
	public function home_second()
	{
		$data = array(
			"page_data" => array(),
			"script_file" => ""
		);
		$this->render('home2', "Welcome to the UMMA", $data);
	}
	public function support()
	{
		redirect('https://www.zeffy.com/en-US/donation-form/e6c041d0-59e3-44c1-9abb-3867bda70600');
	}
}

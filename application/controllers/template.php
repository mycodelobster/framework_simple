<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template extends CI_Controller {

	public function index()
	{
		$this->listing();
	}

	public function listing()
	{
		$this->load->view('template/listing');
	}

	public function detail()
	{
		$this->load->view('template/detail');
	}

	public function add()
	{
		$this->load->view('template/add');
	}

	public function update()
	{
		$this->load->view('template/update');
	}

	public function delete()
	{

	}

}

/* End of file template.php */
/* Location: ./application/controllers/template.php */

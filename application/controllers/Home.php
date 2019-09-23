<?php
class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('get_data_model');
	}
	function index()
	{
		$data['slider'] = $this->get_data_model->get_slider_home();
		$data['all_slider'] = $this->get_data_model->get_all_slider();


		$this->load->view('frontend/v_home', $data);
	}
}

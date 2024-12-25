<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sadi extends CI_Controller {
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function full_name($name)
	{
        $data['full_name'] = $name;
        
		$this->load->view('sadi', $data);
	}
    
	public function my_name()
	{
        $this->load->model("My_model");
        $name = $this->My_model->myName();

		$this->load->database();
        
        echo  $name;
	}
}

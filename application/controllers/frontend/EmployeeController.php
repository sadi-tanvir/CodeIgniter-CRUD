<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EmployeeController extends CI_Controller
{
	public function index()
	{
		$employees = $this->emp->employees();
		// $data['employees'] = $employees;
		$this->load->view("template/header");
		$this->load->view("frontend/employee", ["employees" => $employees]);
		// $this->load->view("frontend/employee", $data);
		$this->load->view("template/footer");
	}

	public function add()
	{
		$this->load->view("template/header");
		$this->load->view("frontend/form");
		$this->load->view("template/footer");
	}

	public function store()
	{
		$this->form_validation->set_rules("first_name", "First Name", "required");
		$this->form_validation->set_rules("last_name", "Last Name", "required");
		$this->form_validation->set_rules("phone", "Phone", "required");
		$this->form_validation->set_rules("email", "Email", "required");

		if ($this->form_validation->run()) {
			$data = [
				'first_name' => $this->input->post("first_name"),
				'last_name' => $this->input->post("last_name"),
				'phone' => $this->input->post("phone"),
				'email' => $this->input->post("email")
			];

			// $this->load->model("EmployeeModel", "emp");
			$this->emp->insert($data);
			$this->add();
		} else {
			$this->add();
			// redirect(base_url("employee/add"));
		}
	}


	public function edit($id)
	{
		$employee = $this->emp->employee($id);
		$data['employee'] = $employee;
		$this->load->view("template/header");
		$this->load->view("frontend/form_update",$data);
		$this->load->view("template/footer");
	}

	public function update($id)
	{
		$this->form_validation->set_rules("first_name", "First Name", "required");
		$this->form_validation->set_rules("last_name", "Last Name", "required");
		$this->form_validation->set_rules("phone", "Phone", "required");
		$this->form_validation->set_rules("email", "Email", "required");

		if ($this->form_validation->run()) {
			$data = [
				'id' => $id,
				'first_name' => $this->input->post("first_name"),
				'last_name' => $this->input->post("last_name"),
				'phone' => $this->input->post("phone"),
				'email' => $this->input->post("email")
			];

			// $this->load->model("EmployeeModel", "emp");
			$this->emp->update($data, $id);
			$this->session->set_flashdata("success", "employee updated successfully");
			redirect(base_url("employee"));
		} else {
			$this->edit();
			// redirect(base_url("employee/add"));
		}
	}
}

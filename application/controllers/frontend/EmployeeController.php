<?php
defined('BASEPATH') or exit('No direct script access allowed');
require FCPATH . 'vendor/autoload.php';

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
		$this->load->view("frontend/form_update", $data);
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

	public function print()
{
    // HTML আউটপুট ক্যাচ করা
    $html = $this->load->view("frontend/EmployeeInfoPdf", [], true);

    try {
        // ফন্ট ডিরেক্টরি এবং ফন্ট ডেটা কনফিগারেশন তৈরি করা
        $mpdfConfig = [
            'fontDir' => [APPPATH . 'assets/fonts/'], // ফন্ট ডিরেক্টরি
            'fontdata' => [
                'kalpurush' => [
                    'R' => 'Kalpurush.ttf',   // রেগুলার ফন্ট
                    // 'B' => '	', // বোল্ড ফন্ট
                ],
            ],
            'default_font' => 'kalpurush', // ডিফল্ট ফন্ট
            'mode' => 'utf-8', // ইউটিএফ-৮ মোড
            'tempDir' => sys_get_temp_dir(), // টেম্প ফোল্ডার ডিরেক্টরি
        ];

        // mPDF অবজেক্ট তৈরি করা
        $mpdf = new \Mpdf\Mpdf($mpdfConfig);

        // HTML কন্টেন্ট এবং সিএসএস
        $html = '<style>
                    body {
                        font-family: Kalpurush, sans-serif; /* বাংলা ফন্ট */
                        font-size: 16px; /* ফন্ট সাইজ */
                    }
                </style>' . $html;

        // HTML কন্টেন্ট mPDF এ লিখা
        $mpdf->WriteHTML($html);

        // পিডিএফ আউটপুট করা (ব্রাউজারে দেখানো)
        return $mpdf->Output();
    } catch (\Mpdf\MpdfException $e) {
        // যদি কোনো সমস্যা হয়, সেটি দেখানো
        echo "Error: " . $e->getMessage();
        exit;
    }
}

}

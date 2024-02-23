<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{



	public function index()
	{
		if ($this->session->userdata('username') != null) {
			$cek = $this->db->get_where('login', ['nama' => $this->session->userdata('username')])->row_array();
			if ($cek['role_id'] == 1) {
				redirect('admin');
			} else {
				redirect('dashboard');
			}
		}

		$data['title'] 			= 'SARI KUSUMA 99';
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('template/jumbotron', $data);
		$this->load->view('template/about', $data);
		$this->load->view('template/project', $data);
		$this->load->view('template/footer', $data);
		$this->load->view('template/script', $data);
	}



	// function untuk logout
	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata('message', '<div class="alert alert-success text-center" 																							role="alert">
													  You have been logout
													</div>');
		redirect('home');
	}
	// end function untuk logout
}

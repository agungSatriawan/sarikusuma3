<?php

use SebastianBergmann\CodeCoverage\Driver\Selector;

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		check();
		$this->load->library('form_validation');
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('Admin_model');
		// $this->load->library('breadcrumb');
		// $this->load->library('logger');
	}


	public function index()
	{

		if ($this->session->userdata('role_id') == 2) {
			redirect('admin/pemeriksaan');
		}
		$data['title'] 					= 'Admin';
		$data['username'] 				= $this->session->userdata();
		$data['jumlah_register']		= $this->db->query("select count(id) id from data_user")->row_array();

		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/navbar', $data);
		$this->load->view('admin/main', $data);
		// $this->load->view('admin/main', $data);
		$this->load->view('admin/script', $data);
		// $this->load->view('admin/footer', $data);
	}
	public function detail_user()
	{
		$data['title'] 					= 'Detail User';
		$data['username'] 				= $this->session->userdata();
		$data['detail_user']			= $this->db->get('data_user')->result_array();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/navbar', $data);
		$this->load->view('admin/detail_user', $data);
		// $this->load->view('admin/main', $data);
		$this->load->view('admin/script', $data);
		// $this->load->view('admin/footer', $data);
	}
	public function detal_laporan_rekam_medis()
	{
		$data['title'] 					= 'Detail Laporan Rekam Medis';
		$data['username'] 				= $this->session->userdata();
		$data['detail_user']			= $this->db->get('data_user')->result_array();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/navbar', $data);
		$this->load->view('admin/detailLaporanRekamMedis', $data);
		// $this->load->view('admin/main', $data);
		$this->load->view('admin/script', $data);
		// $this->load->view('admin/footer', $data);
	}
	public function detailLaporanPasien($id_user)
	{
		$data['title'] 					= 'Detail Laporan Rekam Medis Pasien';
		$data['username'] 				= $this->session->userdata();
		$data['detail_user']			= $this->db->get_where('data_user', ['id' => $id_user])->result_array();

		$data['rekam_medis']			= $this->Admin_model->rekam_medis_pasien($id_user)->result_array();

		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/navbar', $data);
		$this->load->view('admin/detailLaporanRekamMedisPasien', $data);
		// $this->load->view('admin/main', $data);
		$this->load->view('admin/script', $data);
		// $this->load->view('admin/footer', $data);
	}
	public function pasien()
	{
		$data['title'] 					= 'Daftar Pasien';
		$data['username'] 				= $this->session->userdata();
		$data['detail_user']			= $this->db->get_where('data_user', ['active' => 1])->result_array();

		$nama 			= htmlspecialchars($this->input->post('nama'));
		$no_ktp 		= htmlspecialchars($this->input->post('no_ktp'));
		$email 			= htmlspecialchars($this->input->post('email'));
		$whatsapp 		= htmlspecialchars($this->input->post('whatsapp'));
		$ttl 			= htmlspecialchars($this->input->post('ttl'));
		$agama 			= htmlspecialchars($this->input->post('agama'));
		$jk 			= htmlspecialchars($this->input->post('jk'));
		$alamat 		= htmlspecialchars($this->input->post('alamat'));
		$kota 			= htmlspecialchars($this->input->post('kota'));
		$provinsi 		= htmlspecialchars($this->input->post('provinsi'));
		$negara 		= htmlspecialchars($this->input->post('negara'));
		$this->form_validation->set_rules('nama', 'Nama Pasien', 'trim|required');
		$this->form_validation->set_rules('no_ktp', 'KTP', 'trim|required|is_unique[data_user.no_ktp]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('whatsapp', 'No WhatsApp', 'trim|required');
		$this->form_validation->set_rules('ttl', 'Tanggal Lahir', 'trim|required');
		$this->form_validation->set_rules('agama', 'Agama', 'trim|required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('kota', 'Kota', 'trim|required');
		$this->form_validation->set_rules('provinsi', 'Provinsi', 'trim|required');
		$this->form_validation->set_rules('negara', 'Negara', 'trim|required');
		if ($this->form_validation->run() == false) {
			$this->load->view('admin/header', $data);
			$this->load->view('admin/sidebar', $data);
			$this->load->view('admin/navbar', $data);
			$this->load->view('admin/pasien', $data);
			// $this->load->view('admin/main', $data);
			$this->load->view('admin/script', $data);
			// $this->load->view('admin/footer', $data);
		} else {
			$data = [
				'nama'  => $nama,
				'no_ktp'  => $no_ktp,
				'email'  => $email,
				'whatsapp'  => $whatsapp,
				'tgl_lahir'  => $ttl,
				'agama'  => $agama,
				'jk'  => $jk,
				'alamat'  => $alamat,
				'kota'  => $kota,
				'provinsi'  => $provinsi,
				'negara'  => $negara,
				'active'  => 1,
				'date_created' 		=> date('Y-m-d H:i:sa')
			];
			$res = $this->db->insert('data_user', $data);
			if ($res) {
				$this->session->set_flashdata('message', '<div class="alert alert-success  text-center" 												role="alert">
							  Data Berhasil Ditambahkan
							</div>');
				redirect('admin/pasien');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger  text-center" 												role="alert">
							  Data Gagal Ditambahkan
							</div>');
				redirect('admin/pasien');
			}
		}
	}
	public function reservasi()
	{
		$data['title'] 					= 'Daftar Reservasi';
		$data['username'] 				= $this->session->userdata();
		$data['detail_user']			= $this->Admin_model->reservasi();
		$data['layanan']				= $this->db->get('layanan')->result_array();
		$data['nik']					= $this->db->get_where('data_user', ['active' => 1])->result_array();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/navbar', $data);
		$this->load->view('admin/reservasi', $data);
		// $this->load->view('admin/main', $data);
		$this->load->view('admin/script', $data);
		// $this->load->view('admin/footer', $data);
	}
	public function pemeriksaan()
	{
		$data['title'] 					= 'Pemeriksaan';
		$data['username'] 				= $this->session->userdata();
		$data['detail_user']			= $this->Admin_model->reservasi();
		$today							= '';
		$data['pemeriksaan']			= $this->Admin_model->pemeriksaan($today);

		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/navbar', $data);
		$this->load->view('admin/pemeriksaan', $data);
		// $this->load->view('admin/main', $data);
		$this->load->view('admin/script', $data);
		// $this->load->view('admin/footer', $data);
	}
	public function historyRekamMedis()
	{
		$data['title'] 					= 'History Rekam Medis';
		$data['username'] 				= $this->session->userdata();
		$data['detail_user']			= $this->Admin_model->reservasi();
		$today							= date('d-m-Y') + 1;
		$data['pemeriksaan']			= $this->Admin_model->pemeriksaan($today);

		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/navbar', $data);
		$this->load->view('admin/pemeriksaan', $data);
		// $this->load->view('admin/main', $data);
		$this->load->view('admin/script', $data);
		// $this->load->view('admin/footer', $data);
	}
	public function pembayaran()
	{
		$data['title'] 					= 'Pembayaran';
		$data['username'] 				= $this->session->userdata();
		$data['detail_user']			= $this->Admin_model->reservasi();
		$today							= date('Y-m-d');
		$data['pembayaran']				= $this->Admin_model->pembayaran($today);

		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/navbar', $data);
		$this->load->view('admin/pembayaran', $data);
		// $this->load->view('admin/main', $data);
		$this->load->view('admin/script', $data);
		// $this->load->view('admin/footer', $data);
	}
	public function historyPembayaran()
	{
		$data['title'] 					= 'History Pembayaran';
		$data['username'] 				= $this->session->userdata();
		$data['detail_user']			= $this->Admin_model->reservasi();
		$today							= '';
		$data['pembayaran']				= $this->Admin_model->pembayaran($today);

		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/navbar', $data);
		$this->load->view('admin/historyPembayaran', $data);
		// $this->load->view('admin/main', $data);
		$this->load->view('admin/script', $data);
		// $this->load->view('admin/footer', $data);
	}

	public function loadTransaksi()
	{
		$day = $this->input->post('day');
		$res = $this->Admin_model->pembayaran($day);
		echo json_encode($res);
	}

	public function detNota()
	{
		$id_reservasi 	= $this->input->post('id_reservasi');
		$resep 			= $this->Admin_model->resep($id_reservasi);
		$layanan 		= $this->Admin_model->layanan($id_reservasi);
		$pembayaran 	= $this->db->get_where('nota', ['id_reservasi' => $id_reservasi])->result_array();
		$history 		= $this->db->get_where('history_transaksi', ['id_reservasi' => $id_reservasi])->result_array();
		echo json_encode([
			'resep' => $resep,
			'layanan' => $layanan,
			'pembayaran' => $pembayaran,
			'history' => $history
		]);
	}

	public function printNota($id)
	{
		$this->load->library('pdfgenerator');
		$today							= date('d-m-Y');
		$data['pembayaran']				= $this->Admin_model->pembayaran($today);
		$data['title'] = "Data Random";
		$file_pdf = $data['title'];
		$paper = 'A4';
		$orientation = "landscape";
		$html = $this->load->view('admin/printNota', $data, true);
		// $html = 'tes';
		$this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
	}

	public function cash($id_reservasi, $nominal)
	{
		$data = [
			'id_reservasi' => $id_reservasi,
			'metode_pembayaran' => 'Cash',
			'status_pembayaran' => 1,
			'date_created' => date('Y-m-d H:i:sa')
		];
		$data_history = [
			'id_reservasi' => $id_reservasi,
			'metode_pembayaran' => 'Cash',
			'nominal' => $nominal,
			'date_created' => date('Y-m-d H:i:sa')
		];
		$this->db->insert('history_transaksi', $data_history);
		$res = $this->db->insert('nota', $data);
		if ($res) {
			echo json_encode(1);
		}
	}
	public function ewalet($id_reservasi, $ewalet, $total)
	{
		$data = [
			'id_reservasi' => $id_reservasi,
			'metode_pembayaran' => $ewalet,
			'status_pembayaran' => 1,
			'date_created' => date('Y-m-d H:i:sa')
		];
		$data_history = [
			'id_reservasi' => $id_reservasi,
			'metode_pembayaran' => $ewalet,
			'nominal' => $total,
			'date_created' => date('Y-m-d H:i:sa')
		];
		$this->db->insert('history_transaksi', $data_history);
		$res = $this->db->insert('nota', $data);
		if ($res) {
			echo json_encode(1);
		}
	}
	public function addReservasi()
	{
		$nik 						= $this->input->post('cari');
		$terapi 					= $this->input->post('terapi');
		$tanggal_terapi 			= $this->input->post('tanggal_terapi');
		$res 						= $this->db->get_where('data_user', ['no_ktp' => $nik])->row_array();
		$cek 						= $this->db->get_where('reservasi', ['id_user' => $res['id'], 'tanggal_terapi' => $tanggal_terapi, 'id_layanan' => $terapi])->num_rows();
		if ($cek > 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-warning  text-center" 												role="alert">
							  Sudah Melakukan Reservasi
							</div>');
			redirect('admin/reservasi');
		}
		$data = [

			'id_user' => $res['id'],
			'id_layanan' => $terapi,
			'status' => 0,
			'tanggal_terapi' => $tanggal_terapi,
			'date_created' => date('Y-m-d H:i:sa')
		];

		$insert = $this->db->insert('reservasi', $data);
		if ($insert) {
			$this->session->set_flashdata('message', '<div class="alert alert-success  text-center" 												role="alert">
							  Reservasi Berhasil Ditambahkan
							</div>');
			redirect('admin/reservasi');
		}
	}
	public function editReservasi()
	{
		$id 						= $this->input->post('id');
		$terapi 					= $this->input->post('terapi');
		$tanggal_terapi 			= $this->input->post('tanggal_terapi');
		$status 					= $this->input->post('status');


		$data = [
			'id_layanan' => $terapi,
			'tanggal_terapi' => $tanggal_terapi,
			'status' => $status,
			'date_created' => date('Y-m-d H:i:sa')
		];
		$this->db->where('id', $id);
		$update = $this->db->update('reservasi', $data);
		if ($update) {
			$this->session->set_flashdata('message', '<div class="alert alert-success  text-center" 												role="alert">
							  Reservasi Berhasil Diupdate
							</div>');
			redirect('admin/reservasi');
		}
	}
	public function dataTerapis()
	{
		$data['title'] 					= 'Data Terapis';
		$data['username'] 				= $this->session->userdata();
		$data['detail_user']			= $this->db->get('data_admin')->result_array();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/navbar', $data);
		$this->load->view('admin/dataTerapis', $data);
		// $this->load->view('admin/main', $data);
		$this->load->view('admin/script', $data);
		// $this->load->view('admin/footer', $data);
	}
	public function dataObat()
	{
		$data['title'] 					= 'Data Obat';
		$data['username'] 				= $this->session->userdata();
		$data['detail_user']			= $this->db->get('data_obat')->result_array();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/navbar', $data);
		$this->load->view('admin/dataObat', $data);
		// $this->load->view('admin/main', $data);
		$this->load->view('admin/script', $data);
		// $this->load->view('admin/footer', $data);
	}
	public function layanan()
	{
		$data['title'] 					= 'Data Layanan';
		$data['username'] 				= $this->session->userdata();
		$data['detail_user']			= $this->db->get('layanan')->result_array();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/navbar', $data);
		$this->load->view('admin/layanan', $data);
		// $this->load->view('admin/main', $data);
		$this->load->view('admin/script', $data);
		// $this->load->view('admin/footer', $data);
	}
	public function rekamMedis()
	{
		$data['title'] 					= 'Rekam Medis';
		$data['username'] 				= $this->session->userdata();
		$data['detail_user']			= $this->db->get('data_user')->result_array();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/navbar', $data);
		$this->load->view('admin/rekamMedis', $data);
		// $this->load->view('admin/main', $data);
		$this->load->view('admin/script', $data);
		// $this->load->view('admin/footer', $data);
	}

	public function inputRekamMEdis($id_reservasi, $id_pasien)
	{
		$username 				= $this->session->userdata('username');
		$cek_terapi 			= $this->db->get_where('login', ['nama' => $username])->row_array();
		$id_terapi 				= $cek_terapi['id'];
		$id_user 				= $this->input->post('id');
		$id_reservasi 			= $this->input->post('id_reservasi');
		$mata_kanan_minus 		= $this->input->post('mata_kanan_minus');
		$mata_kiri_minus 		= $this->input->post('mata_kiri_minus');
		$mata_kanan_plus 		= $this->input->post('mata_kanan_plus');
		$mata_kiri_plus 		= $this->input->post('mata_kiri_plus');
		$buta_warna 			= $this->input->post('buta_warna');
		$buta_warna_parsial 	= $this->input->post('buta_warna_parsial');
		$buta_warna_total 		= $this->input->post('buta_warna_total');
		$lampu15Titik 			= $this->input->post('lampu15Titik');
		$lampuTerangGelap 		= $this->input->post('lampuTerangGelap');
		$osilatorListrik 		= $this->input->post('osilatorListrik');
		$stikMagnet 			= $this->input->post('stikMagnet');
		$snelled 				= $this->input->post('snelled');
		$obat 					= $this->input->post('obat');
		$kesimpulan 			= $this->input->post('kesimpulan');
		$vitamin 				= $this->db->query("select * from data_obat where id in(" . implode(",", $obat) . ")")->result_array();
		$dataVitamin 			= [];
		foreach ($vitamin as $v) {
			$dataVitamin 			= [
				'id_reservasi' => $id_reservasi,
				'id_vitamin' => $v['id'],
				'date_created' => date('Y-m-d H:i:sa')
			];
			$this->db->insert('resep', $dataVitamin);
		}

		$data = [
			'id_user' => $id_pasien,
			'id_dokter' => $id_terapi,
			'id_reservasi' => $id_reservasi,
			'mata_kanan_minus' => $mata_kanan_minus,
			'mata_kiri_minus' => $mata_kiri_minus,
			'mata_kanan_plus' => $mata_kanan_plus,
			'mata_kiri_plus' => $mata_kiri_plus,
			'buta_warna' => $buta_warna,
			'buta_warna_parsial' => $buta_warna_parsial,
			'buta_warna_total' => $buta_warna_total,
			'lampu15Titik' => $lampu15Titik,
			'lampuTerangGelap' => $lampuTerangGelap,
			'stikMagnet' => $stikMagnet,
			'osilatorListrik' => $osilatorListrik,
			'snelled' => $snelled,
			'obat' => implode(",", $obat),
			'kesimpulan' => $kesimpulan,
			'tanggal' => date('Y-m-d'),
			'jam' => date('H:i:sa'),
			'layanan' => 'Terapi Mata',
			'status' => 1,
			'date_created' => date('Y-m-d H:i:sa')
		];
		$data_reservasi = [
			'status' => 1
		];
		$this->db->where('id', $id_reservasi);
		$this->db->update('reservasi', $data_reservasi);

		$res = $this->db->insert('rekam_medis', $data);
		if ($res) {
			$this->session->set_flashdata('message', '<div class="alert alert-success  text-center" 												role="alert">
							  Rekam Medis Berhasil Ditambahkan
							</div>');
			redirect('admin/pemeriksaan');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger  text-center" 												role="alert">
							  Rekam Medis Gagal Ditambahkan
							</div>');
			redirect('admin/pemeriksaan');
		}
	}
	public function updateRekamMEdis($id, $id_user)
	{

		$mata_kanan_minus 		= $this->input->post('mata_kanan_minus');
		$id_reservasi 			= $this->input->post('id_reservasi');
		$mata_kanan_plus 		= $this->input->post('mata_kanan_plus');
		$mata_kiri_minus 		= $this->input->post('mata_kiri_minus');
		$mata_kiri_plus 		= $this->input->post('mata_kiri_plus');
		$buta_warna 			= $this->input->post('buta_warna');
		$buta_warna_parsial 	= $this->input->post('buta_warna_parsial');
		$buta_warna_total 		= $this->input->post('buta_warna_total');
		$lampu15Titik 			= $this->input->post('lampu15Titik');
		$lampuTerangGelap 		= $this->input->post('lampuTerangGelap');
		$osilatorListrik 		= $this->input->post('osilatorListrik');
		$stikMagnet 			= $this->input->post('stikMagnet');
		$snelled 				= $this->input->post('snelled');
		$obat 					= $this->input->post('obat');
		$kesimpulan 			= $this->input->post('kesimpulan');
		$vitamin 				= $this->db->query("select * from data_obat where id in(" . implode(",", $obat) . ")")->result_array();
		$this->db->where('id_reservasi', $id_reservasi);
		$this->db->delete('resep');
		$dataVitamin 			= [];
		foreach ($vitamin as $v) {
			$dataVitamin 			= [
				'id_reservasi' => $id_reservasi,
				'id_vitamin' => $v['id'],
				'date_modified' => date('Y-m-d H:i:sa')
			];
			$this->db->insert('resep', $dataVitamin);
		}

		$data = [
			'mata_kanan_minus' 	=> $mata_kanan_minus,
			'mata_kanan_plus' 	=> $mata_kanan_plus,
			'mata_kiri_minus' 	=> $mata_kiri_minus,
			'mata_kiri_plus' 	=> $mata_kiri_plus,
			'buta_warna' => $buta_warna,
			'buta_warna_parsial' => $buta_warna_parsial,
			'buta_warna_total' => $buta_warna_total,
			'lampu15Titik' => $lampu15Titik,
			'lampuTerangGelap' => $lampuTerangGelap,
			'stikMagnet' => $stikMagnet,
			'osilatorListrik' => $osilatorListrik,
			'snelled' => $snelled,
			'obat' => implode(",", $obat),
			'kesimpulan' => $kesimpulan,
			'tanggal' => date('Y-m-d'),
			'jam' => date('H:i:sa'),
			'layanan' => 'Terapi Mata',
			'date_modified' => date('Y-m-d H:i:sa')
		];
		$this->db->where('id', $id);
		$res = $this->db->update('rekam_medis', $data);
		if ($res) {
			$this->session->set_flashdata('message', '<div class="alert alert-success  text-center" 												role="alert">
							  Rekam Medis Berhasil Diupdate
							</div>');
			redirect('admin/kelolaRekamMedis/' . $id_reservasi . '/' . $id_user);
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger  text-center" 												role="alert">
							  Rekam Medis Gagal Diupdate
							</div>');
			redirect('admin/kelolaRekamMedis/' . $id_reservasi . '/' . $id_user);
		}
	}

	public function kelolaRekamMedis($id_reservasi, $id)
	{
		$data['title'] 					= 'Kelola Rekam Medis';
		$username 						= $this->session->userdata('username');
		$cek 							= $this->db->get_where('login', ['nama' => $username])->row_array();
		$id_login 						= $this->db->get_where('data_admin', ['id_login' => $cek['id']])->row_array();
		$data['id_terapis']				= $id_login['id'];
		$data['detail_user']			= $this->db->get_where('data_user', ['id' => $id])->result_array();
		$data['vitamin']				= $this->db->get('data_obat')->result_array();

		$this->db->select('*');
		$this->db->select('data_admin.id id_terapis');
		$this->db->select('rekam_medis.date_created tanggal_periksa');
		$this->db->select('rekam_medis.id id_rekam');
		$this->db->from('rekam_medis');
		$this->db->join('data_admin', 'data_admin.id_login = rekam_medis.id_dokter', 'left');
		$this->db->join('data_user', 'data_user.id = rekam_medis.id_user', 'left');
		$this->db->where('rekam_medis.id_user', $id);
		$this->db->order_by('rekam_medis.date_created', 'DESC');

		$data['rekam_medis']			= $this->db->get()->result_array();


		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/navbar', $data);
		$this->load->view('admin/kelolaRekamMedis', $data);
		// $this->load->view('admin/main', $data);
		$this->load->view('admin/script', $data);
		// $this->load->view('admin/footer', $data);
	}

	public function addPasien()
	{
		$nama 			= $this->input->post('nama');
		$no_ktp 		= $this->input->post('no_ktp');
		$email 			= $this->input->post('email');
		$whatsapp 		= $this->input->post('whatsapp');
		$ttl 			= $this->input->post('ttl');
		$agama 			= $this->input->post('agama');
		$jk 			= $this->input->post('jk');
		$alamat 		= $this->input->post('alamat$alamat');
		$kota 			= $this->input->post('kota');
		$provinsi 		= $this->input->post('provinsi');
		$negara 		= $this->input->post('negara');
		$this->form_validation->set_rules('no_ktp', 'KTP', 'trim|required|is_unique[data_user.no_ktp]');
		if ($this->form_validation->run() == false) {
		} else {
			$data = [
				'nama'  => $nama,
				'no_ktp'  => $no_ktp,
				'email'  => $email,
				'whatsapp'  => $whatsapp,
				'tgl_lahir'  => $ttl,
				'agama'  => $agama,
				'jk'  => $jk,
				'alamat'  => $alamat,
				'kota'  => $kota,
				'provinsi'  => $provinsi,
				'negara'  => $negara,
				'date_created' 		=> date('Y-m-d H:i:sa')
			];
			$res = $this->db->insert('data_user', $data);
			if ($res) {
				$this->session->set_flashdata('message', '<div class="alert alert-success  text-center" 												role="alert">
							  Data Berhasil Ditambahkan
							</div>');
				redirect('admin/pasien');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger  text-center" 												role="alert">
							  Data Gagal Ditambahkan
							</div>');
				redirect('admin/pasien');
			}
		}
	}
	public function addTerapis()
	{
		$nama 			= $this->input->post('nama');
		$spesialis 		= $this->input->post('spesialis');
		$jabatan 		= $this->input->post('jabatan');


		$data = [
			'nama_terapis'  => $nama,
			'spesialis'  => $spesialis,
			'jabatan'  => $jabatan,
			'date_created' 		=> date('Y-m-d H:i:sa')
		];
		$res = $this->db->insert('data_admin', $data);
		if ($res) {
			$this->session->set_flashdata('message', '<div class="alert alert-success  text-center" 												role="alert">
							  Data Berhasil Ditambahkan
							</div>');
			redirect('admin/dataTerapis');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger  text-center" 												role="alert">
							  Data Gagal Ditambahkan
							</div>');
			redirect('admin/dataTerapis');
		}
	}
	public function addObat()
	{
		$nama_obat 			= $this->input->post('nama_obat');
		$harga 				= $this->input->post('harga');
		$keterangan 		= $this->input->post('keterangan');
		$upload_image 		= $_FILES['foto_obat'];
		if ($upload_image['name'] != '') {
			$config['allowed_types'] 	= '*';
			$config['max_size']     	= '2048';
			$config['upload_path'] 		= './assets/obat/';

			$this->load->library('upload', $config);

			// var_dump($this->upload->do_upload('icon'));die;
			// jika upload icon berhasil

			if (!$this->upload->do_upload('foto_obat')) {
				$error = $this->upload->display_errors();
				echo $error;

				$this->session->set_flashdata('message', '<div class="alert alert-danger text-center"  												role="alert">
															  ' . $error . '
															</div>');
				redirect('admin/dataObat');
			}

			if ($this->upload->do_upload('foto_obat')) {
				$new_icon = $this->upload->data('file_name');
				$data = [
					'nama_obat'  		=> $nama_obat,
					'image'  			=> $new_icon,
					'harga'  			=> $harga,
					'keterangan'  		=> $keterangan,
					'date_created' 		=> date('Y-m-d H:i:sa')
				];

				$addMenu 		= $this->db->insert('data_obat', $data);
				if ($addMenu) {
					$this->session->set_flashdata('message', '<div class="alert alert-success text-center" 												role="alert">
												  Your Menu Added
												</div>');
					redirect('admin/dataObat');
				}
			}
		}





		$res = $this->db->insert('data_obat', $data);
		if ($res) {
			$this->session->set_flashdata('message', '<div class="alert alert-success  text-center" 												role="alert">
							  Data Berhasil Ditambahkan
							</div>');
			redirect('admin/dataObat');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger  text-center" 												role="alert">
							  Data Gagal Ditambahkan
							</div>');
			redirect('admin/dataObat');
		}
	}
	public function addLayanan()
	{

		$nama_layanan 		= $this->input->post('nama_layanan');
		$harga 		= $this->input->post('harga');


		$data = [
			'layanan'  => $nama_layanan,
			'harga'  => $harga,
			'date_created' 		=> date('Y-m-d H:i:sa')
		];
		$res = $this->db->insert('layanan', $data);
		if ($res) {
			$this->session->set_flashdata('message', '<div class="alert alert-success  text-center" 												role="alert">
							  Data Berhasil Ditambahkan
							</div>');
			redirect('admin/layanan');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger  text-center" 												role="alert">
							  Data Gagal Ditambahkan
							</div>');
			redirect('admin/layanan');
		}
	}

	public function editPasien()
	{

		$id 			= $this->input->post('id');
		$nama 			= $this->input->post('nama');
		$email 			= $this->input->post('email');
		$whatsapp 		= $this->input->post('whatsapp');
		$ttl 			= $this->input->post('ttl');
		$agama 			= $this->input->post('agama');
		$jk 			= $this->input->post('jk');
		$alamat 		= $this->input->post('alamat');
		$kota 			= $this->input->post('kota');
		$provinsi 		= $this->input->post('provinsi');
		$negara 		= $this->input->post('negara');
		$data = [
			'nama'  => $nama,
			'email'  => $email,
			'whatsapp'  => $whatsapp,
			'tgl_lahir'  => $ttl,
			'agama'  => $agama,
			'jk'  => $jk,
			'alamat'  => $alamat,
			'kota'  => $kota,
			'provinsi'  => $provinsi,
			'negara'  => $negara,
			'date_created' 		=> date('Y-m-d H:i:sa')
		];
		$this->db->where('id', $id);
		$res = $this->db->update('data_user', $data);

		if ($res) {
			$this->session->set_flashdata('message', '<div class="alert alert-success  text-center" 												role="alert">
							  Data Berhasil Diupdate
							</div>');
			redirect('admin/pasien');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger  text-center" 												role="alert">
							  Data Gagal Diupdate
							</div>');
			redirect('admin/pasien');
		}
	}
	public function editObat()
	{

		$id 				= $this->input->post('id');
		$nama_obat 			= $this->input->post('nama_obat');
		$harga 				= $this->input->post('harga');
		$keterangan 		= $this->input->post('keterangan');

		$upload_image = $_FILES['foto_obat'];
		if ($upload_image['name'] != '') {
			$config['allowed_types'] 	= '*';
			$config['max_size']     	= '2048';
			$config['upload_path'] 		= './assets/obat/';

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('foto_obat')) {
				$error = $this->upload->display_errors();
				echo $error;

				$this->session->set_flashdata('message', '<div class="alert alert-danger text-center"  												role="alert">
															  ' . $error . '
															</div>');
				redirect('admin/dataObat');
			}

			if ($this->upload->do_upload('foto_obat')) {
				$new_icon = $this->upload->data('file_name');
				$data = [
					'image'  => $new_icon,
					'nama_obat'  => $nama_obat,
					'harga'  => $harga,
					'keterangan'  => $keterangan,
					'date_modified' => date('Y-m-d H:i:sa')
				];
				$this->db->where('id', $id);
				$res = $this->db->update('data_obat', $data);

				if ($res) {
					$this->session->set_flashdata('message', '<div class="alert alert-success  text-center" 												role="alert">
							  Data Berhasil Diupdate
							</div>');
					redirect('admin/dataObat');
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger  text-center" 												role="alert">
							  Data Gagal Diupdate
							</div>');
					redirect('admin/dataObat');
				}
			}
		} else {
			$data = [
				'nama_obat'  => $nama_obat,
				'harga'  => $harga,
				'keterangan'  => $keterangan,
				'date_modified' => date('Y-m-d H:i:sa')
			];
			$this->db->where('id', $id);
			$res = $this->db->update('data_obat', $data);

			if ($res) {
				$this->session->set_flashdata('message', '<div class="alert alert-success  text-center" 												role="alert">
							  Data Berhasil Diupdate
							</div>');
				redirect('admin/dataObat');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger  text-center" 												role="alert">
							  Data Gagal Diupdate
							</div>');
				redirect('admin/dataObat');
			}
		}
	}
	public function editLayanan()
	{

		$id 				= $this->input->post('id');
		$layanan 			= $this->input->post('nama_layanan');
		$harga 				= $this->input->post('harga');
		$data = [
			'layanan'  => $layanan,
			'harga'  => $harga,
			'date_modified' => date('Y-m-d H:i:sa')
		];
		$this->db->where('id', $id);
		$res = $this->db->update('layanan', $data);

		if ($res) {
			$this->session->set_flashdata('message', '<div class="alert alert-success  text-center" 												role="alert">
							  Data Berhasil Diupdate
							</div>');
			redirect('admin/layanan');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger  text-center" 												role="alert">
							  Data Gagal Diupdate
							</div>');
			redirect('admin/layanan');
		}
	}
	public function editTerapis()
	{

		$id 			= $this->input->post('id');
		$nama 			= $this->input->post('nama');
		$spesialis 			= $this->input->post('spesialis');
		$jabatan 		= $this->input->post('jabatan');

		$data = [
			'nama_terapis'  => $nama,
			'spesialis'  => $spesialis,
			'jabatan'  => $jabatan,
			'date_modified' 		=> date('Y-m-d H:i:sa')
		];
		$this->db->where('id', $id);
		$res = $this->db->update('data_admin', $data);

		if ($res) {
			$this->session->set_flashdata('message', '<div class="alert alert-success  text-center" 												role="alert">
							  Data Berhasil Diupdate
							</div>');
			redirect('admin/dataTerapis');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger  text-center" 												role="alert">
							  Data Gagal Diupdate
							</div>');
			redirect('admin/dataTerapis');
		}
	}

	public function hapusUser()
	{
		$id = $this->input->post('id');
		$id_user = $this->input->post('id_user');
		$this->db->where('id', $id);
		$this->db->set('active', 0);
		$res = $this->db->update('data_user');
		if ($res) {
			echo 1;
		} else {
			echo 0;
		}
	}
	public function hapusTerapis()
	{
		$id = $this->input->post('id');

		$this->db->where('id', $id);
		$res = $this->db->delete('data_admin');
		if ($res) {
			echo 1;
		} else {
			echo 0;
		}
	}
	public function hapusObat()
	{
		$id = $this->input->post('id');

		$this->db->where('id', $id);
		$res = $this->db->delete('data_obat');
		if ($res) {
			echo 1;
		} else {
			echo 0;
		}
	}
	public function hapusLayanan()
	{
		$id = $this->input->post('id');

		$this->db->where('id', $id);
		$res = $this->db->delete('layanan');
		if ($res) {
			echo 1;
		} else {
			echo 0;
		}
	}
	public function hapusRekamMedis()
	{
		$id = $this->input->post('id');

		$this->db->where('id', $id);
		$res = $this->db->delete('rekam_medis');
		if ($res) {
			echo 1;
		} else {
			echo 0;
		}
	}
	public function hapusReservasi()
	{
		$id = $this->input->post('id');

		$this->db->where('id', $id);
		$res = $this->db->delete('reservasi');
		if ($res) {
			echo 1;
		} else {
			echo 0;
		}
	}


	public function cariPasien()
	{
		$cari = $this->input->post('cari');
		$res = $this->db->get_where('data_user', ['no_ktp' => $cari])->row_array();
		echo json_encode($res);
	}

	public function userRegistered()
	{
		$mulai 						= date("d-m-Y", strtotime($this->input->post('mulai')));
		$sampai 					= date("d-m-Y", strtotime($this->input->post('sampai')));

		$mulaiUser 					= $this->input->post('mulai');
		$sampaiUser 				= $this->input->post('sampai');
		$resUserRegistered 			= $this->Admin_model->userRegistered($mulaiUser, $sampaiUser)->result_array();
		$resReservasi 				= $this->Admin_model->tableReservasi($mulaiUser, $sampaiUser)->result_array();
		$resPemeriksaan 			= $this->Admin_model->tablePemeriksaan($mulaiUser, $sampaiUser)->result_array();
		$resHistoryPembayaran 		= $this->Admin_model->historyPembayaran($mulai, $sampai, $mulaiUser, $sampaiUser)->result_array();
		$resLayanan 				= $this->db->get('layanan')->result_array();
		echo json_encode(
			[
				'userRegistered' => $resUserRegistered,
				'reservasi' => $resReservasi,
				'layanan' => $resLayanan,
				'historyPembayaran' => $resHistoryPembayaran,
				'pemeriksaan' => $resPemeriksaan
			]
		);
	}

	public function cekUser()
	{
		$ktp = $this->input->post('ktp');
		$cek = $this->db->get_where('data_user', ['no_ktp' => $ktp])->num_rows();
		if ($ktp != '') {
			if ($cek > 0) {
				echo 1;
			} else {
				echo 0;
			}
		}
	}
}

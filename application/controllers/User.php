<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
	}
	public function index()
	{
		$nama = $this->session->userdata('nama_user');
		$data['nama'] = $nama;
		$this->load->view('user/dashboard', $data);
	}
	public function cart()
	{
		$id_user = $this->session->userdata('id');
		$nama = $this->session->userdata('nama_user');
		$no_pesan = $this->session->userdata('no_pesan');
		$where = array('id_user' => $id_user);
		$where1 = array('id_user' => $id_user, 'no_pesan' => $no_pesan);
		$data['cart'] = $this->m_user->data_cart($where);
		$data['nama'] = $nama;
		$data['pesanan'] = $this->m_user->data_pesanan($where1);
		$this->load->view('user/cart', $data);
	}
	public function custom()
	{
		$nama = $this->session->userdata('nama_user');
		$cpu = "CPU";
		$mobo = "Motherboard";
		$ram = "RAM";
		$vga = "VGA";
		$psu = "PSU";
		$case = "Case";
		$col_cpu = "CPU Cooler";
		$fan = "Cooler Fan";
		$where = array('jenis' => $cpu);
		$where2 = array('jenis' => $mobo);
		$where3 = array('jenis' => $ram);
		$where4 = array('jenis' => $vga);
		$where5 = array('jenis' => $psu);
		$where6 = array('jenis' => $case);
		$where7 = array('jenis' => $col_cpu);
		$where8 = array('jenis' => $fan);
		$data['cpu'] = $this->m_user->komponen($where);
		$data['mobo'] = $this->m_user->komponen($where2);
		$data['ram'] = $this->m_user->komponen($where3);
		$data['vga'] = $this->m_user->komponen($where4);
		$data['psu'] = $this->m_user->komponen($where5);
		$data['case'] = $this->m_user->komponen($where6);
		$data['col_cpu'] = $this->m_user->komponen($where7);
		$data['fan'] = $this->m_user->komponen($where8);
		$data['nama'] = $nama;
		$this->load->view('user/custom', $data);
	}
	public function pesan()
	{
		$id_user = $this->session->userdata('id');
		$cpu = $this->input->post('cpu_chip');
		$mobo = $this->input->post('mobo');
		$ram1 = $this->input->post('ram1');
		$ram2 = $this->input->post('ram2');
		$vga = $this->input->post('vga');
		$psu = $this->input->post('psu');
		$col = $this->input->post('cooler');
		$col_fan = $this->input->post('cooler_fan');
		$case = $this->input->post('case');
		$index = 0;
		$komponen = array(
			$cpu, $mobo, $ram1, $ram2, $vga, $psu, $col, $col_fan, $case
		);
		$date = '';
		$time = '';
		$id_pesan = '';
		$no_pesan = '';
		foreach ($komponen as $k) {
			$date = date('Y-m-d H:i:s');
			$time = date('h:i:s');
			$index++;
			$komponenData = $this->m_user->pesan_komponen($k);
			$id_pesan = md5($id_user . $komponenData->nama . $index . $date);
			$no_pesan = md5($id_user . $time);
			$this->session->set_userdata('no_pesan', $no_pesan);
			$pesananData = array(
				'id_pesanan' => $id_pesan,
				'id_user' => $id_user,
				'nama_komponen' => $komponenData->nama,
				'harga' => $komponenData->harga,
				'tgl_pesan' => $time,
				'no_pesan' => $no_pesan
			);
			$this->m_user->pesanan($pesananData);
		}
		redirect(base_url('user/pesanan'));
	}
	public function pesanan()
	{
		$id_user = $this->session->userdata('id');
		$nama = $this->session->userdata('nama_user');
		$no_pesan = $this->session->userdata('no_pesan');
		$where = array('id_user' => $id_user, 'no_pesan' => $no_pesan);
		$data['nama'] = $nama;
		$data['pesanan'] = $this->m_user->data_pesanan($where);
		$this->load->view('user/pesanan', $data);
	}
	public function pesanan_cart($no_pesanan, $id_cart)
	{
		$id_user = $this->session->userdata('id');
		$nama = $this->session->userdata('nama_user');
		$where1 = array('id_user' => $id_user, 'id_cart' => $id_cart);
		$where = array('id_user' => $id_user, 'no_pesan' => $no_pesanan);
		$data['cart'] = $this->m_user->data_cart($where1);
		$data['nama'] = $nama;
		$data['id'] = array('id_cart'=>$id_cart,'no_pesanan'=>$no_pesanan);
		$data['pesanan'] = $this->m_user->data_pesanan($where);
		$this->load->view('user/cart_detail', $data);
	}
	public function confirm()
	{
		$id_user = $this->session->userdata('id');
		$id_pesanan = $this->input->post('id');
		$status = $this->input->post('method');
		$time = date('h:i:s');
		$id_cart = md5($id_pesanan . $id_user . $time);
		$data_cart = array('id_cart' => $id_cart, 'id_user' => $id_user, 'no_pesanan' => $id_pesanan, 'method_payment' => $status, 'status' => 'Terkonfirmasi');
		$where = array('no_pesan' => $id_pesanan);
		$data = array('status' => 'Pembayaran menggunakan ' . $status);
		$this->m_user->insert_cart($data_cart);
		$this->m_user->confirm_pesanan($data, $where);
		redirect('user');
	}
	public function confirm_update()
	{
		$id_pesanan = $this->input->post('id');
		$status = $this->input->post('method');
		$id_cart = $this->input->post('id_cart');
		$data_cart = array('method_payment' => $status, 'status' => 'Terkonfirmasi');
		$where = array('no_pesan' => $id_pesanan);
		$where1 = array('id_cart' => $id_cart);
		$data = array('status' => 'Pembayaran menggunakan ' . $status);
		$this->m_user->update_cart($data_cart, $where1);
		$this->m_user->confirm_pesanan($data, $where);
		redirect('user');
	}
	public function save()
	{
		$id_pesanan = $this->input->post('id');
		$id_user = $this->session->userdata('id');
		$time = date('h:i:s');
		$id_cart = md5($id_pesanan . $id_user . $time);
		$data = array('id_cart' => $id_cart, 'id_user' => $id_user, 'no_pesanan' => $id_pesanan);
		$this->m_user->insert_cart($data);
		redirect('user');
	}
	public function edit($id_pesanan)
	{
		$where = array('id_pesanan' => $id_pesanan);
		$data['komponen'] = $this->m_user->edit_komponen($where);
		$where1 = array('nama' => $data['komponen']->nama_komponen);
		$komponen = $this->m_user->komponen($where1);
		$where2 = array('jenis' => $komponen[0]->jenis);
		$data['komp_all'] = $this->m_user->komponen($where2);
		$this->load->view('user/edit', $data);
	}
	public function update()
	{
		$id_pesanan = $this->input->post('id');
		$komponen = $this->input->post('custom_komp');
		$where = array('nama' => $komponen);
		$komp = $this->m_user->komponen($where);
		$where1 = array('id_pesanan' => $id_pesanan);
		$data = array('nama_komponen' => $komponen, 'harga' => $komp[0]->harga);
		$this->m_user->update_pesanan($data, $where1);
		redirect(base_url('user/pesanan'));
	}
	public function delete()
	{
		$id_pesanan = $this->input->post('id');
		$where = array('id_pesanan' => $id_pesanan);
		$this->m_user->delete_pesanan($where);
		redirect(base_url('user/pesanan'));
	}
	public function delete_cart()
	{
		$id_pesanan = $this->input->post('id');
		$where1 = array('no_pesanan' => $id_pesanan);
		$where = array('no_pesan' => $id_pesanan);
		$this->m_user->delete_pesanan($where);
		$this->m_user->delete_cart($where1);
		redirect(base_url('user/cart'));
	}
	public function spare_part(){
		$nama = $this->session->userdata('nama_user');
		$data['nama']=$nama;
		$data['komponen']=$this->m_user->data_komponen();
		$this->load->view('user/spare_part',$data);
	}
	public function report()
	{
		$id_user = $this->session->userdata('id');
		$jenis = $this->input->post('jenis');
		$detail = $this->input->post('detail');
		$waktu = date('h:i:s');
		$id_report = md5($id_user . $jenis . $waktu);
		$data = array(
			'id_report' => $id_report,
			'id_user' => $id_user,
			'jenis' => $jenis,
			'detail' => $detail
		);
		$this->m_user->insert_report($data);
		redirect('user');
		exit;
	}
}
?>

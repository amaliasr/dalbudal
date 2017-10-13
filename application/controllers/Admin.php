<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$data['tampil'] = $this->m_global->tampil('admin','id_admin');
		$this->load->view('for_admin/admin',$data);		
	}
	public function admin_add()
	{
		$this->load->view('for_admin/admin_add');
	}
	public function admin_DoAdd()
	{
		$data = array(
						'username' => $this->input->post('username'),
						'password' => $this->input->post('password')
					);
			$this->m_global->tambah('admin',$data);
			redirect('admin','refresh');
	}
	public function admin_edit($id)
	{
		$data['tampil'] = $this->m_global->tampil_id($id,'admin','id_admin');
		$this->load->view('for_admin/admin_edit',$data);
	}
	public function admin_DoEdit($id){
			$data = array(
						'username' => $this->input->post('username'),
						'password' => $this->input->post('password')
					);
			$this->m_global->edit($id,'admin',$data,'id_admin');
			redirect('admin','refresh');
		}
	public function admin_delete($id)
	{
		$this->m_global->hapus($id,'admin','id_admin');
		redirect('admin','refresh');
	}
	public function admin_informasi()
	{
		$this->load->view('for_admin/admin_informasi');
	}
	public function admin_informasi_add()
	{
		$this->load->view('for_admin/admin_informasi_add');
	}
	public function admin_pemesanan()
	{
		$this->load->view('for_admin/admin_pemesanan');
	}

	public function admin_statistik()
	{
		$this->load->view('for_admin/admin_statistik');
	}

	public function admin_tiket()
	{
		$this->load->view('for_admin/admin_tiket');
	}
	public function admin_tiket_add()
	{
		$this->load->view('for_admin/admin_tiket_add');
	}
	public function admin_transaksi()
	{
		$this->load->view('for_admin/admin_transaksi');
	}
	public function admin_user()
	{
		$this->load->view('for_admin/admin_user');
	}
	public function admin_wisata()
	{
		$this->load->view('for_admin/admin_wisata');
	}
	public function admin_wisata_add()
	{
		$this->load->view('for_admin/admin_wisata_add');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
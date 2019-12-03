<?php

defined('BASEPATH') OR exit ('No direct script access allowed');

class Mesajlar extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		// Your own constructor code
		$this->load->model('Database_Model');
		$this->load->helper('URL');

		if(!$this->session->userdata("admin_session"))
			redirect(base_url().'admin/login');
	}


	public function index()
	{

		$query = $this->db->query("SELECT * FROM mesajlar ORDER BY adsoyad");
		$data["veriler"]=$query->result();

		$this->load->view('admin/mesaj_listesi',$data);
	}

	public function detay($id)
	{
		$query = $this->db->query("UPDATE mesajlar SET durum='Okundu' WHERE Id = $id");
		$query = $this->db->query("SELECT * FROM mesajlar WHERE Id = $id");
		$data["veri"]=$query->result();

		$this->load->view('admin/mesaj_detay',$data);
	}


	public function guncelle($id)
	{
		//Form verilerini alacak
		$data=array(
			'adminnotu' => $this->input->post('adminnotu')
		);

		$this->Database_Model->update_data("mesajlar", $data, $id);
		$this->session->set_flashdata("mesaj","Notunuz güncellendi.");
        redirect(base_url().'admin/mesajlar/detay/'.$id);
	}


	public function sil($id)
	{
		$this->db->query("DELETE FROM mesajlar WHERE Id = $id");
		redirect(base_url().'admin/mesajlar');
	}


}

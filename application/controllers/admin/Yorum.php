<?php

defined('BASEPATH') OR exit ('No direct script access allowed');

class Yorum extends CI_Controller 
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
		$query = $this->db->query("SELECT * FROM yorumlar ORDER BY Id");
		$data["veriler"]=$query->result();

		$this->load->view('admin/yorum_liste',$data);
	}


	public function duzenle($id)
	{
		$query = $this->db->query("SELECT * FROM yorumlar WHERE Id = $id");
		$data["veri"]=$query->result();

		$this->load->view('admin/yorum_duzenle',$data);
	}


	public function guncelle($id)
	{
		//Form verilerini alacak
		$data=array(
			'yorum' => $this->input->post('yorum'),
		);

		$this->load->model('Database_Model');
		$this->Database_Model->update_data("yorumlar", $data, $id);
		$this->session->set_flashdata("mesaj","Yorum Güncellendi");
        redirect(base_url().'admin/yorum');
	}


	public function sil($id)
	{
		$this->db->query("DELETE FROM yorumlar WHERE Id = $id");
		redirect(base_url().'admin/yorum');
	}


}

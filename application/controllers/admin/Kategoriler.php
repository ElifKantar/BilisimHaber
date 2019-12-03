<?php

defined('BASEPATH') OR exit ('No direct script access allowed');

class Kategoriler extends CI_Controller 
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
		$query = $this->db->query("SELECT * FROM kategoriler ORDER BY Id");
		$data["veriler"]=$query->result();

		$this->load->view('admin/kategori_liste',$data);
	}


	public function ekle()
	{
		$this->load->view('admin/kategori_ekle');
	}


	public function ekle_kaydet()
	{
		//Form verilerini alacak
		$data=array(
			'adi' => $this->input->post('adi'),
			'description' => $this->input->post('description'),
			'keywords' => $this->input->post('keywords'),
			'tarih' => $this->input->post('tarih')
		);

		$this->db->insert("kategoriler",$data);
		$this->session->set_flashdata("mesaj","Kategori Eklendi");
        redirect(base_url().'admin/kategoriler');
	}


	public function duzenle($id)
	{
		$query = $this->db->query("SELECT * FROM kategoriler WHERE Id = $id");
		$data["veri"]=$query->result();

		$this->load->view('admin/kategori_duzenle_formu',$data);
	}


	public function guncelle($id)
	{
		//Form verilerini alacak
		$data=array(
			'adi' => $this->input->post('adi'),
			'description' => $this->input->post('description'),
			'keywords' => $this->input->post('keywords'),
			'tarih' => $this->input->post('tarih')
		);

		$this->load->model('Database_Model');
		$this->Database_Model->update_data("kategoriler", $data, $id);
		$this->session->set_flashdata("mesaj","Kategori Güncellendi");
        redirect(base_url().'admin/kategoriler');
	}


	public function sil($id)
	{
		$this->db->query("DELETE FROM kategoriler WHERE Id = $id");
		redirect(base_url().'admin/kategoriler');
	}


}

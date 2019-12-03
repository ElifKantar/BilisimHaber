<?php

defined('BASEPATH') OR exit ('No direct script access allowed');

class Home extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		// Your own constructor code
		$this->load->helper('URL');
		$this->load->model('Database_Model');

		if(!$this->session->userdata("admin_session"))
			redirect(base_url().'admin/login');
	}

	public function index()
	{
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/_header');
		$this->load->view('admin/_content');
		$this->load->view('admin/_footer');
	}

	public function ayarlar()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();

		$this->load->view('admin/ayarlar',$data);
	}

	public function ayarlar_guncelle($id)
	{
		//Form verilerini alacak
		$data=array(
			'adi' => $this->input->post('adi'),
			'sehir' => $this->input->post('sehir'),
			'adres' => $this->input->post('adres'),
			'tel' => $this->input->post('tel'),
			'keywords' => $this->input->post('keywords'),
			'description' => $this->input->post('description'),
			'smtpemail' => $this->input->post('smtpemail'),
			'smtpserver' => $this->input->post('smtpserver'),
			'smtpport' => $this->input->post('smtpport'),
			'password' => $this->input->post('password'),
			'facebook' => $this->input->post('facebook'),
			'instagram' => $this->input->post('instagram'),
			'twitter' => $this->input->post('twitter'),
			'pinterest' => $this->input->post('pinterest'),
			'hakkimizda' => $this->input->post('hakkimizda'),
			'iletisim' => $this->input->post('iletisim')
		);

		$this->Database_Model->update_data("ayarlar", $data, $id);
        redirect(base_url().'admin/home/ayarlar');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uye extends CI_Controller {
	 public function __construct()
        {
                parent::__construct();
                // Your own constructor code
                $this->load->model('Database_Model');
                $this->load->helper('url');

                //Login olma kontrolü

                if(!$this->session->userdata("uye_session"))
                	redirect(base_url().'home/login_ol');
        }

	
	public function index()
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY Id");
		$data["kategoriler"]=$query->result(); 
		
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();

		$query=$this->db->query("SELECT * FROM uyeler WHERE Id=".$this->session->uye_session["id"]);
		$data["uye"]=$query->result();


		$data["sayfa"]="Üye Paneli | ";

		$this->load->view('hesabim',$data);
	

	}

	public function cikis()
	{
		$this->session->unset_userdata("uye_session");
		redirect(base_url());
	}

	public function hesabim()
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY Id");
		$data["kategoriler"]=$query->result(); 
		
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Üye Hesabı | ";

		$query=$this->db->query("SELECT * FROM uyeler WHERE Id=".$this->session->uye_session["id"]);
		$data["uye"]=$query->result();

		$this->load->view('hesabim',$data);
	}

	public function uye_guncelle()
	{
		$data=array(
			'adsoyad'=>$this->input->post('adsoyad'),
			'sehir'=>$this->input->post('sehir'),
			'adres'=>$this->input->post('adres'),
			'email'=>$this->input->post('email'),
			'sifre'=>$this->input->post('sifre'),
			'tel'=>$this->input->post('tel'),

		);
		$id=$this->session->uye_session["id"];

		$this->Database_Model->update_data("uyeler",$data,$id);
		$this->session->set_flashdata("mesaj","Üye Bilgileriniz Güncellendi");
		redirect(base_url().'uye/hesabim');
	}
		



}


<?php

defined('BASEPATH') OR exit ('No direct script access allowed');

class Haber extends CI_Controller 
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
		//$query = $this->db->query("SELECT * FROM haber ORDER BY adi");
		//$data["veriler"]=$query->result();

		$data["veriler"]=$this->Database_Model->get_haberler();
        $this->load->view('admin/haber_liste',$data);
	}


	public function ekle()
	{
		$query = $this->db->query("SELECT * FROM kategoriler ORDER BY Id");
		$data["kategoriler"]=$query->result();
		
		$this->load->view('admin/haber_ekle',$data);
	}


	public function ekle_kaydet()
	{
		//Form verilerini alacak
		$data=array(
			'adi' => $this->input->post('adi'),
			'kategori' => $this->input->post('kategori'),
			'resim' => $this->input->post('resim'),
			'icerik' => $this->input->post('icerik'),
			'aciklama' => $this->input->post('aciklama'),
			'keywords' => $this->input->post('keywords'),
			'description' => $this->input->post('description'),
			'yorum' => $this->input->post('yorum'),
			'okunma_sayisi' => $this->input->post('okunma_sayisi'),
			'grubu' => $this->input->post('grubu')
		);

		$this->db->insert("haber",$data);
		$this->session->set_flashdata("mesaj","Haber Eklendi");
        redirect(base_url().'admin/haber');
	}


	public function duzenle($id)
	{
		$query = $this->db->query("SELECT * FROM kategoriler");
		$data["veriler"]=$query->result();

		
		$data["veri"]=$this->Database_Model->get_haber($id);
		$this->load->view('admin/haber_duzenle_formu',$data);
	}


	public function guncelle($id)
	{
		//Form verilerini alacak
		$data=array(
			'adi' => $this->input->post('adi'),
			'kategori' => $this->input->post('kategori'),
			'icerik' => $this->input->post('icerik'),
			'aciklama' => $this->input->post('aciklama'),
			'keywords' => $this->input->post('keywords'),
			'description' => $this->input->post('description'),
			'grubu' => $this->input->post('grubu')
		);

		$this->load->model('Database_Model');
		$this->Database_Model->update_data("haber", $data, $id);
        redirect(base_url().'admin/haber');
	}


	public function sil($id)
	{
		$this->db->query("DELETE FROM haber WHERE Id = $id");
		redirect(base_url().'admin/haber');
	}

	public function resim_yukle($id)
	{

		$query = $this->db->query("SELECT * FROM haber WHERE Id = $id");
		$data["veri"]=$query->result();
		
		$data["id"]=$id;
		$this->load->view('admin/haber_resim_yukle',$data);
	}

	public function resim_kaydet($id)
	{
		$data["id"]=$id;
		
		//upload edilecek dosyaya ait ayarlar ve limitler
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 1024;
        $config['max_height']           = 1024;


        //Ayarlar ile kütüphaneyi çağır
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('resim')) //Yükle -> Eğer hata varsa
        {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata("mesaj","Yüklemede hata oluştu:".$error);
            redirect(base_url().'admin/haber/resim_yukle/'.$id);
        }
        else  //Hata yoksa
        {
            $upload_data = $this->upload->data();

            $data=array(
			'resim' =>$upload_data["file_name"]
		    );

		    $this->load->model('Database_Model');
		    $this->Database_Model->update_data("haber", $data, $id);
		    $this->session->set_flashdata("mesaj","Haber Güncellendi");
            redirect(base_url().'admin/haber');
        }
	}


	public function galeri_yukle($id)
	{

		$query = $this->db->query("SELECT * FROM haber_resim WHERE haber_id = $id");
		$data["veriler"]=$query->result();
		
		$data["id"]=$id;
		$this->load->view('admin/haber_galeri_yukle',$data);
	}

	public function galeri_kaydet($id)
	{
		$data["id"]=$id;
		
		//upload edilecek dosyaya ait ayarlar ve limitler
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 1024;
        $config['max_height']           = 1024;


        //Ayarlar ile kütüphaneyi çağır
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('resim')) //Yükle -> Eğer hata varsa
        {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata("mesaj","Yüklemede hata oluştu:".$error);
            redirect(base_url().'admin/haber/galeri_yukle/'.$id);
        }
        else  //Hata yoksa
        {
        	// >>>>> Veritabanına kayıt >>>
            $upload_data = $this->upload->data();

            $data=array(
               'haber_id'=> $id,
			   'resim' =>$upload_data["file_name"]
		    );

		    $this->db->insert("haber_resim",$data);
		    // <<<<< Veritabanına kayıt <<<

		    $this->session->set_flashdata("mesaj","Resim Galeriye Yüklendi");

            redirect(base_url().'admin/haber/galeri_yukle/'.$id);
        }
	}

	public function galeri_sil($haber_id,$resim_id)
	{
		$this->db->query("DELETE FROM haber_resim WHERE Id = $resim_id");
		$this->session->set_flashdata("mesaj","Resim Galeriden Silindi");

        redirect(base_url().'admin/haber/galeri_yukle/'.$haber_id);
	}


}

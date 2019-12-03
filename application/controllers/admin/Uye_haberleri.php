<?php

defined('BASEPATH') OR exit ('No direct script access allowed');

class Uye_haberleri extends CI_Controller 
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

		$data["veri"]=$this->Database_Model->get_durum("'yeni'");
        $this->load->view('admin/uye_haber_liste',$data);
	}

	public function liste($durum)
	{

		$data["veri"]=$this->Database_Model->get_durum("'$durum'");
		
        $this->load->view('admin/uye_haber_liste',$data);
	}

	public function yayinla($id)
	{

		$this->Database_Model->birlestir($id);
		redirect(base_url().'admin/uye_haberleri');


	}


	public function duzenle($id)
	{
		$query = $this->db->query("SELECT * FROM kategoriler");
		$data["veriler"]=$query->result();

		
		$data["veri"]=$this->Database_Model->get_uye_haberi($id);
		$this->load->view('admin/uye_haber_duzenle',$data);
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
			'grubu' => $this->input->post('grubu'),
			'durum' => $this->input->post('durum')
		);

		$this->load->model('Database_Model');
		$this->Database_Model->update_data("uye_haber", $data, $id);
        redirect(base_url().'admin/uye_haberleri');
	}

	public function resim_yukle($id)
	{

		$query = $this->db->query("SELECT * FROM uye_haber WHERE Id = $id");
		$data["veri"]=$query->result();
		
		$data["id"]=$id;
		$this->load->view('admin/uye_haber_resim_yukle',$data);
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
            redirect(base_url().'admin/uye_haberleri/resim_yukle/'.$id);
        }
        else  //Hata yoksa
        {
            $upload_data = $this->upload->data();

            $data=array(
			'resim' =>$upload_data["file_name"]
		    );

		    $this->load->model('Database_Model');
		    $this->Database_Model->update_data("uye_haber", $data, $id);
		    $this->session->set_flashdata("mesaj","Haber Güncellendi");
            redirect(base_url().'admin/uye_haberleri');
        }
	}


	public function sil($id)
	{
		$this->db->query("DELETE FROM uye_haber WHERE Id = $id");
		$this->session->set_flashdata("mesaj","Haber Silindi");
		redirect(base_url().'admin/uye_haberleri');
	}

}

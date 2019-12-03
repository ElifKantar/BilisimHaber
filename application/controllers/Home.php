<?php

defined('BASEPATH') OR exit ('No direct script access allowed');

class Home extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		// Your own constructor code
		$this->load->model('Database_Model');
		$this->load->helper('URL');
	}

	public function index()
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY Id");
		$data["kategoriler"]=$query->result();

		$query=$this->db->query("SELECT * FROM haber WHERE grubu='guncel' ORDER BY Id DESC LIMIT 4");
		$data["guncel"]=$query->result();

		$query=$this->db->query("SELECT * FROM haber WHERE kategori=1 ORDER BY Id DESC LIMIT 3");
		$data["haberler"]=$query->result();

		$query=$this->db->query("SELECT * FROM haber WHERE kategori=2 ORDER BY Id DESC LIMIT 3");
		$data["teknoloji"]=$query->result();

		$query=$this->db->query("SELECT * FROM haber WHERE kategori=3 ORDER BY Id DESC LIMIT 3");
		$data["sosyal"]=$query->result();

		$query=$this->db->query("SELECT * FROM haber WHERE kategori=4 ORDER BY Id DESC LIMIT 3");
		$data["internet"]=$query->result();

		$query=$this->db->query("SELECT * FROM haber ORDER BY RAND() LIMIT 6");
		$data["random"]=$query->result();

		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="";

		$this->load->view('_header',$data);
		$this->load->view('_slider');
		$this->load->view('_content');
		$this->load->view('_footer');
	}

	public function hakkimizda()
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY Id");
		$data["kategoriler"]=$query->result();

		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Hakkımızda | ";

		$this->load->view('hakkimizda',$data);
	}

	public function iletisim()
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY Id");
		$data["kategoriler"]=$query->result();

		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="İletişim | ";

		$this->load->view('iletisim',$data);
	}


	public function mesaj_kaydet()
	{
		//Form verilerini alacak
		$data=array(
			'adsoyad' => $this->input->post('adsoyad'),
			'email' => $this->input->post('email'),
			'tel' => $this->input->post('tel'),
			'konu' => $this->input->post('konu'),
			'mesaj' => $this->input->post('mesaj'),			
			'IP'=>$_SERVER['REMOTE_ADDR']
		);

		$this->db->insert("mesajlar",$data);

		 $adsoyad=$this->input->post('adsoyad');
		 $email=$this->input->post('email');
		 

		 //Email ayarlarını veritabanından okuma
		 $query=$this->db->get("ayarlar"); //Ayarlar tablosunun veritabanından çek
		 $data["veri"]=$query->result(); //Sonuçları veri değişkenine yükle

		 //Email Server ayarları
		 $config = Array(
		 	'protocol' => 'smtp',
		 	'smtp_host' => $data["veri"][0]->smtpserver,
		 	'smtp_port' => $data["veri"][0]->smtpport,
		 	'smtp_user' => $data["veri"][0]->smtpemail,
		 	'smtp_pass' => $data["veri"][0]->password,
		 	'mailtype' => 'html',
		 	'charset' => 'utf-8',
		 	'wordwrap' => TRUE

		 );

		 //İstediğiniz şekilde mail içeriğini html olarak oluşturabilirsiniz

		 $mesaj="Değerli : ".$adsoyad."<br> Göndermiş olduğunuz mesaj alınmıştır.<br>En kısa sürede sizinle iletişime geçilecektir.<br>Teşekkür ederiz. <br>";
		 $mesaj.="=========================================================================================";
		 $mesaj.=$data["veri"][0]->name."<br";
		 $mesaj.=$data["veri"][0]->adres."<br";
		 $mesaj.=$data["veri"][0]->sehir."<br";
		 $mesaj.=$data["veri"][0]->tel."<br";
		 $mesaj.=$data["veri"][0]->fax."<br";
		 $mesaj.=$data["veri"][0]->email."<br";
		 $mesaj.="Gönderdiğiniz mesaj aşağıdaki gibidir<br>============================================<br>";
		 $mesaj.=$this->input->post('mesaj');

		 //Email gönderme
		 $this->load->library('email',$config);
		 $this->email->set_newline("\r\n");
		 $this->email->from($data["veri"][0]->smtpemail);
		 $this->email->to($email);
		 $this->email->subject($data["veri"][0]->name. "Form Alındı Mesajı");
		 $this->email->message($mesaj);

		 //Send Mail
		 if($this->email->send())
		 	$this->session->set_flashdata("email_sent","Email başarı ile gönderildi.");
		 else
		 {
		 	$this->session->set_flashdata("email_sent","Email Göndermede Hata Oluştu.");
		 	show_error($this->email->print_debugger()); //ayrıntılı hata dökümü için
		 }


		$this->session->set_flashdata("mesaj","Mesajınız başarılı bir şekilde gönderilmiştir. <b> En kısa sürede sizinle iletişime geçilecektir.");
		redirect(base_url()."home/iletisim");


	}

	public function login_ol()
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY Id");
		$data["kategoriler"]=$query->result();

		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Üye Login | ";

		$this->load->view('login_ol',$data);
	}



	public function login()
	{
		
		$email = $this->input->post("email");
		$sifre = $this->input->post("sifre");

		//Zararlı kodlardan temizleme
		echo $email = $this->security->xss_clean($email);
		echo $sifre = $this->security->xss_clean($sifre);
		//exit();

		$this->load->model('Database_Model');
		$result= $this->Database_Model->login("uyeler",$email,$sifre);

		if ($result)
		{
			//Kullanıcı var ise bilgileri diziye aktarılıyor
			$sess_array = array(
				'id' => $result[0] ->Id,
				'yetki' => $result[0] ->yetki,
				'email' => $result[0] ->email,
				'adsoyad' => $result[0] ->adsoyad,
				'resim' => $result[0] ->resim
			);

			//print_r($sess_array);
			//echo "login oldu";
			//exit();

			//Session değişkenine atama
			$this->session->set_userdata("uye_session",$sess_array);
			redirect(base_url());
		}
		else
		{
			$this->session->set_flashdata("mesaj","Hatalı kullanıcı adı ya da şifre!!");
			redirect(base_url().'home/login_ol');
		}

	}

	public function kayit_ol()
	{
		//Form verilerini alacak
		$data=array(
			'adsoyad' => $this->input->post('adsoyad'),
			'email' => $this->input->post('email'),
			'sifre' => $this->input->post('sifre')
		);

		$this->db->insert("uyeler",$data);
		$this->session->set_flashdata("mesaj","Üye kaydınız başarıyla tamamlanmıştır. Lütfen giriş yapınız.");
		redirect(base_url()."home/login_ol");
	}


	public function kategori($id)
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY Id");
		$data["kategoriler"]=$query->result();

		$query=$this->db->query("SELECT * FROM haber WHERE kategori=$id");
		$data["veriler"]=$query->result();

		$query=$this->db->get("kategoriler");
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Haber | ";

		$this->load->view('kategori',$data);

		
		/* $query=$this->db->query('SELECT haber.*, kategoriler.adi as katadi
        FROM haber
        INNER JOIN kategoriler ON haber.kategori=kategoriler.Id
        WHERE haber.kategori='.$id);
		$data["veriler"]=$query->result(); */

	}

	public function haber_detay($id)
	{
		$data["yorum"]=$this->Database_Model->get_yorum($id);

		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY Id");
		$data["kategoriler"]=$query->result();
		$data["sayfa"]=null;

		$data["veri"]=$this->Database_Model->get_haber($id);
		$query=$this->db->query("SELECT * FROM haber_resim WHERE haber_id=$id");
		$data["resimler"]=$query->result();

		$this->load->view('haber_detay',$data);

	}

	public function yorum_ekle()
	      {
		
		    $data = array(
			'adsoyad'=> $this->session->uye_session['adsoyad'],
			'haber_id'=> $this->input->post('haber_id'),
			'yorum'=> $this->input->post('yorum')
			);

			$result = $this->Database_Model->insert_data("yorumlar",$data);
			if($result)
			{
			//$query = $this->db->query("SELECT * FROM yorumlar ORDER BY tarih");
			//$data["yorumlar"]=$query->result();

		  	//$this->db->insert("yorumlar",$data);
		  	$this->session->set_flashdata("mesaj","Yorum basariyla eklendi.");
		  	redirect(base_url().'home/haber_detay/'.$this->input->post('haber_id'));
		  }

		  else
		  	{
		  		$this->session->set_flashdata("mesaj","Yorum eklenemiyor.");
		  	}
		  }

		}

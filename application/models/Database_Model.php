<?php

class Database_Model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }


        public function insert_data($tablo,$data)
        {
            $this->db->INSERT($tablo,$data);
            return true;

        }


    public function login($tablo,$email,$sifre)
    {
    	$this->db->select("*");
    	$this->db->from($tablo);
    	$this->db->where('email', $email);
    	$this->db->where('sifre', $sifre);
    	$this->db->where('durum', "aktif");
    	$this->db->limit(1);

    	$query = $this->db->get(); // Verileri getir

    	if($query->num_rows() == 1)
    	{
    		return $query->result();
    	}
    	else
    	{
    		return false;
    	}

    }

    public function update_data($tablo,$data,$id)    //id ve datası gönderilen verileri günceller.
    {
        $this->db->where('Id',$id);
        $this->db->update($tablo, $data);
        return true;
    }

    function get_haberler() //Admin haber görüntüle
    {
        $query = $this->db->query('SELECT haber.*, kategoriler.adi as katadi
        FROM haber
        INNER JOIN kategoriler ON haber.kategori=kategoriler.Id
        order by adi');

        return $query->result();
    }

    function get_haber($id) // Admin haber düzenle
    {
        $query = $this->db->query('SELECT haber.*, kategoriler.adi as katadi
        FROM haber
        INNER JOIN kategoriler ON haber.kategori=kategoriler.Id
        WHERE haber.Id='.$id);

        return $query->result();
    }


   function get_uye_haber($id) // Üyeye kendi haberlerinin gelmesini sağlıyor
    {
        $query = $this->db->query('SELECT uye_haber.*, kategoriler.adi as katadi
        FROM uye_haber
        INNER JOIN kategoriler ON uye_haber.kategori=kategoriler.Id
        WHERE uye_haber.uye_id='.$id);

        return $query->result();
    }

    function get_uye_haberi($id) // Üyenin kendi haberlerini düzeltmesi için
    {
        $query = $this->db->query('SELECT uye_haber.*, kategoriler.adi as katadi
        FROM uye_haber
        INNER JOIN kategoriler ON uye_haber.kategori=kategoriler.Id
        WHERE uye_haber.Id='.$id);

        return $query->result();
    }


     function get_durum($durum) // Durum kontrolü 
    {
        $query = $this->db->query('SELECT uye_haber.*, kategoriler.adi as katadi, uyeler.adsoyad as uyeadi
        FROM uye_haber
        INNER JOIN kategoriler ON uye_haber.kategori=kategoriler.Id
        INNER JOIN uyeler ON uye_haber.uye_id=uyeler.id
        WHERE uye_haber.durum='.$durum);

        return $query->result();
    }

    function birlestir($id) // Durum onaylandi ise haber tabloya aktar
    {
        $this->db->query('INSERT INTO haber (uye_id,adi,kategori,icerik,aciklama,resim,tarih,grubu,description,keywords,durum,yorum) 
        SELECT uye_id,adi,kategori,icerik,aciklama,resim,tarih,grubu,description,keywords,durum,yorum 
        FROM uye_haber
        WHERE uye_haber.Id='.$id);

    }

     function get_yorum($id) // Haberin yorumunu getirme
    {
        $query = $this->db->query('SELECT yorumlar.*
        FROM yorumlar
        INNER JOIN haber ON yorumlar.haber_id=haber.Id
        WHERE yorumlar.haber_id='.$id);

        return $query->result();
    }

}

?>
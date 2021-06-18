<?php
class M_tampil extends CI_Model
{ //baris untuk menerangkah bahwa m_curd adalah sebuah model

    function tampil_semua_sekolah()
    {
        return $this->db->get('sekolah_tb')->result();
        // harus ada return
        // result untuk menampilkan keseluruhan data di tabel
        // pakai row jika hanya 1 data spesifik
    }

    function tampil_satu_sekolah($where)
    {
        return $this->db->get_where('sekolah_tb', $where)->row();
        // harus ada return
        // result untuk menampilkan keseluruhan data di tabel
        // pakai row jika hanya 1 data spesifik
    }

    function tampil_pondasi()
    {
        return $this->db->get('pondasi_tb')->result();
        // harus ada return
        // result untuk menampilkan keseluruhan data di tabel
        // pakai row jika hanya 1 data spesifik
    }

    function tampil_detail_pondasi($where)
    {
        return $this->db->get_where('pondasi_tb', $where)->row();
        // harus ada return
        // result untuk menampilkan keseluruhan data di tabel
        // pakai row jika hanya 1 data spesifik
    }


    function tampil_kolom()
    {
        return $this->db->get('kolom_tb')->result();
        // harus ada return
        // result untuk menampilkan keseluruhan data di tabel
        // pakai row jika hanya 1 data spesifik
    }

    function tampil_detail_kolom($where)
    {
        return $this->db->get_where('kolom_tb', $where)->row();
        // harus ada return
        // result untuk menampilkan keseluruhan data di tabel
        // pakai row jika hanya 1 data spesifik
    }


    function tampil_balok()
    {
        return $this->db->get('balok_tb')->result();
        // harus ada return
        // result untuk menampilkan keseluruhan data di tabel
        // pakai row jika hanya 1 data spesifik
    }

    function tampil_detail_balok($where)
    {
        return $this->db->get_where('balok_tb', $where)->row();
        // harus ada return
        // result untuk menampilkan keseluruhan data di tabel
        // pakai row jika hanya 1 data spesifik
    }


    function tampil_atap()
    {
        return $this->db->get('atap_tb')->result();
        // harus ada return
        // result untuk menampilkan keseluruhan data di tabel
        // pakai row jika hanya 1 data spesifik
    }

    function tampil_detail_atap($where)
    {
        return $this->db->get_where('atap_tb', $where)->row();
        // harus ada return
        // result untuk menampilkan keseluruhan data di tabel
        // pakai row jika hanya 1 data spesifik
    }

    function tampil_dinding()
    {
        return $this->db->get('dinding_tb')->result();
        // harus ada return
        // result untuk menampilkan keseluruhan data di tabel
        // pakai row jika hanya 1 data spesifik
    }

    function tampil_detail_dinding($where)
    {
        return $this->db->get_where('dinding_tb', $where)->row();
        // harus ada return
        // result untuk menampilkan keseluruhan data di tabel
        // pakai row jika hanya 1 data spesifik
    }

    function tampil_detail_plafond($where)
    {
        return $this->db->get_where('plafond_tb', $where)->row();
        // harus ada return
        // result untuk menampilkan keseluruhan data di tabel
        // pakai row jika hanya 1 data spesifik
    }

    function tampil_detail_lantai($where)
    {
        return $this->db->get_where('lantai_tb', $where)->row();
        // harus ada return
        // result untuk menampilkan keseluruhan data di tabel
        // pakai row jika hanya 1 data spesifik
    }

    function tampil_detail_kusen($where)
    {
        return $this->db->get_where('kusen_tb', $where)->row();
        // harus ada return
        // result untuk menampilkan keseluruhan data di tabel
        // pakai row jika hanya 1 data spesifik
    }

    function tampil_detail_pintu($where)
    {
        return $this->db->get_where('pintu_tb', $where)->row();
        // harus ada return
        // result untuk menampilkan keseluruhan data di tabel
        // pakai row jika hanya 1 data spesifik
    }


    function tampil_detail_jendela($where)
    {
        return $this->db->get_where('jendela_tb', $where)->row();
        // harus ada return
        // result untuk menampilkan keseluruhan data di tabel
        // pakai row jika hanya 1 data spesifik
    }

    function tampil_detail_finishingplafond($where)
    {
        return $this->db->get_where('finishing_plafond_tb', $where)->row();
        // harus ada return
        // result untuk menampilkan keseluruhan data di tabel
        // pakai row jika hanya 1 data spesifik
    }

    function tampil_detail_finishingdinding($where)
    {
        return $this->db->get_where('finishing_dinding_tb', $where)->row();
        // harus ada return
        // result untuk menampilkan keseluruhan data di tabel
        // pakai row jika hanya 1 data spesifik
    }


    function tampil_detail_finishingkusen($where)
    {
        return $this->db->get_where('finishing_kusen_tb', $where)->row();
        // harus ada return
        // result untuk menampilkan keseluruhan data di tabel
        // pakai row jika hanya 1 data spesifik
    }

    function tampil_detail_instalasilistrik($where)
    {
        return $this->db->get_where('instalasi_listrik_tb', $where)->row();
        // harus ada return
        // result untuk menampilkan keseluruhan data di tabel
        // pakai row jika hanya 1 data spesifik
    }

    function tampil_detail_instalasiair($where)
    {
        return $this->db->get_where('instalasi_air_tb', $where)->row();
        // harus ada return
        // result untuk menampilkan keseluruhan data di tabel
        // pakai row jika hanya 1 data spesifik
    }

    function tampil_relasih()
    // Untuk relaasi database cari di CI-Documentation keyword = Join - Query Builder class
    // Tentukan table parent, parent jadi acuan table lainnya
    {
        // return $this->db->get_where('dinding_tb', $where)->row();
        // harus ada return
        // result untuk menampilkan keseluruhan data di tabel
        // pakai row jika hanya 1 data spesifik

        $this->db->select('*');
        $this->db->from('sekolah_tb');
        $this->db->join('atap_tb', 'atap_tb.id_sekolah = sekolah_tb.id_sekolah');
        $this->db->join('balok_tb', 'balok_tb.id_sekolah = sekolah_tb.id_sekolah');
        $this->db->join('dinding_tb', 'dinding_tb.id_sekolah = sekolah_tb.id_sekolah');
        $this->db->join('finishing_dinding_tb', 'finishing_dinding_tb.id_sekolah = sekolah_tb.id_sekolah');
        $this->db->join('finishing_kusen_tb', 'finishing_kusen_tb.id_sekolah = sekolah_tb.id_sekolah');
        $this->db->join('finishing_plafond_tb', 'finishing_plafond_tb.id_sekolah = sekolah_tb.id_sekolah');
        $this->db->join('instalasi_air_tb', 'instalasi_air_tb.id_sekolah = sekolah_tb.id_sekolah');
        $this->db->join('instalasi_listrik_tb', 'instalasi_listrik_tb.id_sekolah = sekolah_tb.id_sekolah');
        $this->db->join('jendela_tb', 'jendela_tb.id_sekolah = sekolah_tb.id_sekolah');
        $this->db->join('kolom_tb', 'kolom_tb.id_sekolah = sekolah_tb.id_sekolah');
        $this->db->join('kusen_tb', 'kusen_tb.id_sekolah = sekolah_tb.id_sekolah');
        $this->db->join('lantai_tb', 'lantai_tb.id_sekolah = sekolah_tb.id_sekolah');
        $this->db->join('pintu_tb', 'pintu_tb.id_sekolah = sekolah_tb.id_sekolah');
        $this->db->join('plafond_tb', 'plafond_tb.id_sekolah = sekolah_tb.id_sekolah');
        $this->db->join('pondasi_tb', 'pondasi_tb.id_sekolah = sekolah_tb.id_sekolah');



        return $this->db->get()->result();
        // Produces:
        // SELECT * FROM blogs JOIN comments ON comments.id = blogs.id
    }
}

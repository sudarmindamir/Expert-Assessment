<?php
class M_sekolah extends CI_Model
{
    public function simpan_data_sekolah($a)
    {
        $this->db->insert('sekolah_tb', $a);
    }

    public function getSekolah()
    {
        return $this->db->get('sekolah_tb')->result();
    }

    public function getDetailSekolah($id)
    {
        return  $this->db->get_where('sekolah_tb', array('id_sekolah' => $id))->row();
    }


    public function simpan_data_pondasi($a)
    {
        $this->db->insert('pondasi_tb', $a);
    }

    public function simpan_data_kolom($a)
    {
        $this->db->insert('kolom_tb', $a);
    }

    public function simpan_data_balok($a)
    {
        $this->db->insert('balok_tb', $a);
    }

    public function simpan_data_atap($a)
    {
        $this->db->insert('atap_tb', $a);
    }

    public function simpan_data_dinding($a)
    {
        $this->db->insert('dinding_tb', $a);
    }

    public function simpan_data_plafond($a)
    {
        $this->db->insert('plafond_tb', $a);
    }

    public function simpan_data_lantai($a)
    {
        $this->db->insert('lantai_tb', $a);
    }

    public function simpan_data_kusen($a)
    {
        $this->db->insert('kusen_tb', $a);
    }

    public function simpan_data_pintu($a)
    {
        $this->db->insert('pintu_tb', $a);
    }


    public function simpan_data_jendela($a)
    {
        $this->db->insert('jendela_tb', $a);
    }

    public function simpan_data_finishing_plafond($a)
    {
        $this->db->insert('finishing_plafond_tb', $a);
    }

    public function simpan_data_finishing_dinding($a)
    {
        $this->db->insert('finishing_dinding_tb', $a);
    }

    public function simpan_data_finishing_kusen($a)
    {
        $this->db->insert('finishing_kusen_tb', $a);
    }

    public function simpan_data_instalasi_listrik($a)
    {
        $this->db->insert('instalasi_listrik_tb', $a);
    }

    public function simpan_data_instalasi_air($a)
    {
        $this->db->insert('instalasi_air_tb', $a);
    }

    function hasilAkumulasi($id_sekolah)
    // Untuk relaasi database cari di CI-Documentation keyword = Join - Query Builder class
    // Tentukan table parent, parent jadi acuan table lainnya
    {
        // return $this->db->get_where('dinding_tb', $where)->row();
        // harus ada return
        // result untuk menampilkan keseluruhan data di tabel
        // pakai row jika hanya 1 data spesifik

        $this->db->select('a.biaya_bangunan, b.tingkat_kerusakan_pondasi, c.tingkat_kerusakan_kolom, d.tingkat_kerusakan_balok, 
        e.tingkat_kerusakan_atap,  f.tingkat_kerusakan_dinding,  g.tingkat_kerusakan_plafond,  h.tingkat_kerusakan_lantai, 
        i.tingkat_kerusakan_kusen,  j.tingkat_kerusakan_pintu,  k.tingkat_kerusakan_jendela,  l.tingkat_kerusakan_finishing_plafond, 
        m.tingkat_kerusakan_finishing_dinding,  n.tingkat_kerusakan_finishing_kusen,  o.tingkat_kerusakan_instalasi_listrik,  p.tingkat_kerusakan_instalasi_air');


        $this->db->from('sekolah_tb as a');
        $this->db->join('pondasi_tb as b', 'b.id_sekolah = a.id_sekolah');
        $this->db->join('kolom_tb as c', 'c.id_sekolah = a.id_sekolah');
        $this->db->join('balok_tb as d', 'd.id_sekolah = a.id_sekolah');
        $this->db->join('atap_tb as e', 'e.id_sekolah = a.id_sekolah');
        $this->db->join('dinding_tb as f', 'f.id_sekolah = a.id_sekolah');
        $this->db->join('plafond_tb as g', 'g.id_sekolah = a.id_sekolah');
        $this->db->join('lantai_tb as h', 'h.id_sekolah = a.id_sekolah');
        $this->db->join('kusen_tb as i', 'i.id_sekolah = a.id_sekolah');
        $this->db->join('pintu_tb as j', 'j.id_sekolah = a.id_sekolah');
        $this->db->join('jendela_tb as k', 'k.id_sekolah = a.id_sekolah');
        $this->db->join('finishing_plafond_tb as l', 'l.id_sekolah = a.id_sekolah');
        $this->db->join('finishing_dinding_tb as m', 'm.id_sekolah = a.id_sekolah');
        $this->db->join('finishing_kusen_tb as n', 'n.id_sekolah = a.id_sekolah');
        $this->db->join('instalasi_listrik_tb as o', 'o.id_sekolah = a.id_sekolah');
        $this->db->join('instalasi_air_tb as p', 'p.id_sekolah = a.id_sekolah');
        // tambah biaya bangunan



        $this->db->where($id_sekolah);
        // $this->db->join('balok_tb', 'balok_tb.id_sekolah = sekolah_tb.id_sekolah');
        // $this->db->join('dinding_tb', 'dinding_tb.id_sekolah = sekolah_tb.id_sekolah');
        // $this->db->join('finishing_dinding_tb', 'finishing_dinding_tb.id_sekolah = sekolah_tb.id_sekolah');
        // $this->db->join('finishing_kusen_tb', 'finishing_kusen_tb.id_sekolah = sekolah_tb.id_sekolah');
        // $this->db->join('finishing_plafond_tb', 'finishing_plafond_tb.id_sekolah = sekolah_tb.id_sekolah');
        // $this->db->join('instalasi_air_tb', 'instalasi_air_tb.id_sekolah = sekolah_tb.id_sekolah');
        // $this->db->join('instalasi_listrik_tb', 'instalasi_listrik_tb.id_sekolah = sekolah_tb.id_sekolah');
        // $this->db->join('jendela_tb', 'jendela_tb.id_sekolah = sekolah_tb.id_sekolah');
        // $this->db->join('kolom_tb', 'kolom_tb.id_sekolah = sekolah_tb.id_sekolah');
        // $this->db->join('kusen_tb', 'kusen_tb.id_sekolah = sekolah_tb.id_sekolah');
        // $this->db->join('lantai_tb', 'lantai_tb.id_sekolah = sekolah_tb.id_sekolah');
        // $this->db->join('pintu_tb', 'pintu_tb.id_sekolah = sekolah_tb.id_sekolah');
        // $this->db->join('plafond_tb', 'plafond_tb.id_sekolah = sekolah_tb.id_sekolah');
        return $this->db->get()->row();
    }

    function get_luas_bangunan($id_sekolah)
    {
        $this->db->select('luas_bangunan');
        return $this->db->get_where('sekolah_tb as a', $id_sekolah)->row();
    }

    function get_biaya_bangunan($id_sekolah)
    {
        $this->db->select('biaya_bangunan');
        return $this->db->get_where('sekolah_tb as a', $id_sekolah)->row();
    }
}

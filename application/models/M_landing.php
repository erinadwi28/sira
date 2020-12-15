<?php

class M_landing extends CI_Model
{
    // detail kades
    public function get_data_kades()
    {
        $this->db->select('*');
        $this->db->from('kepala_desa');
        $this->db->where('status_kepegawaian', 'Aktif');
        $this->db->where('status_delete', 0);

        $hasil = $this->db->get();

        return $hasil;
    }

    // tambah data feedback
    public function tambah_feedback($data)
    {
        return $this->db->insert('pesan', $data);
    }

}

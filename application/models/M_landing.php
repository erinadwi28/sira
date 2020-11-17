<?php

class M_landing extends CI_Model
{
    // detail kades
    public function get_data_kades($tabel)
    {
        return $this->db->get_where($tabel);
    }

    // tambah data feedback
    public function tambah_feedback($data)
    {
        return $this->db->insert('pesan', $data);
    }

}

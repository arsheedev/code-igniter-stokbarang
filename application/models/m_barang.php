<?php

class M_barang extends CI_Model{

    function tampil_data($table){
        return $this->db->get($table);
    }

    function save_data($table, $data) {
        $this->db->insert($table, $data);
    }

    function cari_data($table, $dari, $sampai) {
        $query = $this->db->query("SELECT * FROM `$table` WHERE `tgl` BETWEEN '$dari' AND '$sampai'");
        return $query->result();
    }

}

?>
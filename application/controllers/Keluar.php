<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keluar extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_barang');
    }

    //Menampilkan histori barang keluar
    public function index() {
        $data['keluar'] = $this->m_barang->tampil_data('barang_out')->result();

		$this->load->view('v_header');
        $this->load->view('keluar/v_keluar', $data);
	}

    //form input histori barang keluar
    public function form_output() {
        $data['stock'] = $this->m_barang->tampil_data('stock')->result();

		$this->load->view('v_header');
        $this->load->view('keluar/v_output', $data);
	}

    //Hasil pencarian barang keluar
    public function hasil_cari_keluar() {
        $dari = $this->input->post('dari');
        $sampai = $this->input->post('sampai');

        $data['temp_dari'] = $this->input->post('dari');
        $data['temp_sampai'] = $this->input->post('sampai');
        $data['stock'] = $this->m_barang->cari_data('barang_out', $dari, $sampai);

		$this->load->view('v_header');
        $this->load->view('keluar/v_cari_outbound', $data);
    }

    //Cetak barang keluar ke pdf
    public function cetak_keluar() {
        $data['stock'] = $this->m_barang->tampil_data('barang_out')->result();

        $this->load->view('cetak_data/lap_keluar', $data);
    }

    //Cetak barang keluar ke excel
    public function excel_keluar() {
        $data['stock'] = $this->m_barang->tampil_data('barang_out')->result();

        $this->load->view('cetak_data/xls_keluar', $data);
    }

    //Cetak filter barang keluar ke pdf
    public function filter_cetak_keluar($dari, $sampai) {
        $data['stock'] = $this->m_barang->cari_data('barang_out', $dari, $sampai);

        $this->load->view('cetak_data/lap_keluar', $data);
    }

    //Cetak filter barang keluar ke excel
    public function filter_excel_keluar($dari, $sampai) {
        $data['stock'] = $this->m_barang->cari_data('barang_out', $dari, $sampai);

        $this->load->view('cetak_data/xls_keluar', $data);
    }

    //Input histori barang keluar kedatabase
    public function history_output() {
        $id_barang = $this->input->post('id_barang');
        $kd_barang = $this->input->post('kd_barang');
        $kategori = $this->input->post('kategori');
        $nama_barang = $this->input->post('nama_barang');
        $jumlah = $this->input->post('jumlah');
        $uom = $this->input->post('uom');

        $data = array(
            'id_barang' => $id_barang,
            'kode_barang' => $kd_barang,
            'kategori' => $kategori,
            'nama_barang' => $nama_barang,
            'jumlah' => $jumlah,
            'satuan' => $uom,
        );

        $this->m_barang->save_data('barang_out', $data);
        redirect('keluar');
    }

}
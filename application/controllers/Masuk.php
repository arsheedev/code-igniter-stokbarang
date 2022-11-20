<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_barang');
    }

    //Menampilkan histori barang masuk
    public function index() {
        $data['masuk'] = $this->m_barang->tampil_data('barang_in')->result();

		$this->load->view('v_header');
        $this->load->view('masuk/v_masuk', $data);
	}

    //form input histori barang masuk
    public function form_input() {
        $data['stock'] = $this->m_barang->tampil_data('stock')->result();

		$this->load->view('v_header');
        $this->load->view('masuk/v_input', $data);
	}

    //Hasil pencarian barang masuk
    public function hasil_cari_masuk() {
        $dari = $this->input->post('dari');
        $sampai = $this->input->post('sampai');

        $data['temp_dari'] = $this->input->post('dari');
        $data['temp_sampai'] = $this->input->post('sampai');
        $data['stock'] = $this->m_barang->cari_data('barang_in', $dari, $sampai);

		$this->load->view('v_header');
        $this->load->view('masuk/v_cari_income', $data);
    }

    //Cetak barang masuk ke pdf
    public function cetak_masuk() {
        $data['stock'] = $this->m_barang->tampil_data('barang_in')->result();

        $this->load->view('cetak_data/lap_masuk', $data);
    }

    //Cetak barang masuk ke excel
    public function excel_masuk() {
        $data['stock'] = $this->m_barang->tampil_data('barang_in')->result();

        $this->load->view('cetak_data/xls_masuk', $data);
    }

    //Cetak filter barang masuk ke pdf
    public function filter_cetak_masuk($dari, $sampai) {
        $data['stock'] = $this->m_barang->cari_data('barang_in', $dari, $sampai);

        $this->load->view('cetak_data/lap_masuk', $data);
    }

    //Cetak filter barang masuk ke excel
    public function filter_excel_masuk($dari, $sampai) {
        $data['stock'] = $this->m_barang->cari_data('barang_in', $dari, $sampai);

        $this->load->view('cetak_data/xls_masuk', $data);
    }

    //Input hostori barang masuk kedatabase
    public function history_input() {
        $id_barang = $this->input->post('id_barang');
        $kd_barang = $this->input->post('kd_barang');
        $kategori = $this->input->post('kategori');
        $nama_barang = $this->input->post('nama_barang');
        $jumlah = $this->input->post('jumlah');
        $uom = $this->input->post('uom');
        $location = $this->input->post('location');

        $data = array(
            'id_barang' => $id_barang,
            'kode_barang' => $kd_barang,
            'kategori' => $kategori,
            'nama_barang' => $nama_barang,
            'jumlah' => $jumlah,
            'satuan' => $uom,
            'location' => $location
        );

        $this->m_barang->save_data('barang_in', $data);
        redirect('masuk');
    }

}
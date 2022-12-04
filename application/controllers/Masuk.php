<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_barang');
    }

    //Menampilkan histori barang masuk
    public function index() {
        $this->is_login();
        $data['masuk'] = $this->m_barang->tampil_data('barang_in')->result();

		$this->load->view('v_header');
        $this->load->view('masuk/v_masuk', $data);
	}

    //form input histori barang masuk
    public function form_input() {
        $this->is_login();
        $data['stock'] = $this->m_barang->tampil_data('stock')->result();

		$this->load->view('v_header');
        $this->load->view('masuk/v_input', $data);
	}

    //Hasil pencarian barang masuk
    public function hasil_cari_masuk() {
        $this->is_login();
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
        $this->is_login();
        $data['stock'] = $this->m_barang->tampil_data('barang_in')->result();

        $this->load->view('cetak_data/lap_masuk', $data);
    }

    //Cetak barang masuk ke excel
    public function excel_masuk() {
        $this->is_login();
        $data['stock'] = $this->m_barang->tampil_data('barang_in')->result();

        $this->load->view('cetak_data/xls_masuk', $data);
    }

    //Cetak filter barang masuk ke pdf
    public function filter_cetak_masuk($dari, $sampai) {
        $this->is_login();
        $data['stock'] = $this->m_barang->cari_data('barang_in', $dari, $sampai);

        $this->load->view('cetak_data/lap_masuk', $data);
    }

    //Cetak filter barang masuk ke excel
    public function filter_excel_masuk($dari, $sampai) {
        $this->is_login();
        $data['stock'] = $this->m_barang->cari_data('barang_in', $dari, $sampai);

        $this->load->view('cetak_data/xls_masuk', $data);
    }

    //Input hostori barang masuk kedatabase
    public function history_input() {
        $this->is_login();
        $id_barang = $this->input->post('id_barang');
        $kd_barang = $this->input->post('kd_barang');
        $kategori = $this->input->post('kategori');
        $nama_barang = $this->input->post('nama_barang');
        $jumlah = $this->input->post('jumlah');
        $uom = $this->input->post('uom');
        $location = $this->input->post('location');
        $suplier = $this->input->post('suplier');

        $data = array(
            'id_barang' => $id_barang,
            'kode_barang' => $kd_barang,
            'kategori' => $kategori,
            'nama_barang' => $nama_barang,
            'jumlah' => $jumlah,
            'satuan' => $uom,
            'location' => $location,
            'suplier' => $suplier
        );

        $this->m_barang->save_data('barang_in', $data);
        redirect('masuk');
    }

    private function is_login() {
        if (!$this->session->userdata('login')) {
          return redirect(base_url());
        }
    }

}
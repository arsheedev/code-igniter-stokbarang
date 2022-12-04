<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_barang');
    }

    //Menampilkan semua stok barang
	public function index() {
        $this->is_login();
        $data['stock'] = $this->m_barang->tampil_data('stock')->result();

		$this->load->view('v_header');
        $this->load->view('stock/v_stock', $data);
	}

    //Cetak stok barang ke pdf
    public function cetak_stok() {
        $this->is_login();
        $data['stock'] = $this->m_barang->tampil_data('stock')->result();

        $this->load->view('cetak_data/lap_stock', $data);
    }

    //Cetak stok barang ke excel
    public function excel_stok() {
        $this->is_login();
        $data['stock'] = $this->m_barang->tampil_data('stock')->result();

        $this->load->view('cetak_data/xls_stock', $data);
    }

    //Menambahkan barang baru
    public function tambah_barang() {
        $this->is_login();
		$this->load->view('v_header');
        $this->load->view('stock/v_tambah');
	}
    public function add_action() {
        $this->is_login();
        //$id_barang = $this->input->post('id_barang');
		$kd_barang = $this->input->post('kd_barang');
        $kategori = $this->input->post('kategori');
        $nama_barang = $this->input->post('nama_barang');
        $stock = $this->input->post('stock');
        $satuan = $this->input->post('satuan');
        $location = $this->input->post('location');
        $koordinator = $this->input->post('koordinator');

        $data = array(
            //'id_barang' => $id_barang,
            'kd_barang' => $kd_barang,
            'nama_barang' => $nama_barang,
            'kategori' => $kategori,
            'stok' => $stock,
            'satuan' => $satuan,
            'location' => $location,
            'koordinator' => $koordinator
        );

        $this->m_barang->save_data('stock', $data);
        redirect('stock');
	}

    private function is_login() {
        if (!$this->session->userdata('login')) {
          return redirect(base_url());
        }
    }

}
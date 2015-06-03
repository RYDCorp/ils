<?php


class Cetak extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('');
        };
        $this->load->model('model_app');
        $this->load->helper('currency_format_helper');
    }

    function cetak_faktur_barang_keluar(){
        $id=$this->uri->segment(3);
        $data=array(
            'title'=>'Penjualan',
            'dt_contact'=>$this->model_app->getAllData('tabel_kontak'),
            'dt_penjualan'=>$this->model_app->getDataPenjualan($id),
            'barang_jual'=>$this->model_app->getBarangPenjualan($id),
        );
        $this->load->view('pages/v_print_penjualan',$data);
    }

}
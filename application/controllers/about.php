<?php
class About extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('');
        };
        $this->load->model('model_app');
    }

    function index(){
        $data=array(
            'title'=>'Tentang Kami',
            'active_about'=>'active',
            'dt_contact'=>$this->model_app->getAllData('tabel_kontak'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('pages/v_about');
        $this->load->view('element/v_footer');
    }

}

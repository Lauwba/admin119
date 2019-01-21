<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Dashboard
 *
 * @author sigit
 * 
 */
class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (empty($this->session->userdata('username'))) {
            redirect('infront');
        }
    }

    //put your code here
    function index() {
        $this->load->view('headfoot/header');
        $data['report'] = $this->user->getByTindakan('laporan', 'registrasi', 'nik', 'tindakan=1', 'id DESC', 5);
        $data['last_login'] = $this->admin->getLastLogin('admin', 'last_login DESC', 10);
        $this->load->view('dashboard/dashboard', $data);
        $this->load->view('headfoot/footer');
    }

    function report() {
        $this->load->view('headfoot/header');
        $this->load->view('dashboard/report');
        $this->load->view('headfoot/footer');
    }

    function emergency_report() {
        $data['report'] = $this->user->getByTindakan('laporan', 'registrasi', 'nik', 'tindakan=0', 'id DESC', NULL);
        $this->load->view('dashboard/emergency_page', $data);
    }

    function update_status() {
        $id = $this->input->post('id');
        $data = array('tindakan' => '1');
        $condition = array('id' => $id);

        $stts = $this->user->updateLaporan('laporan', $data, $condition);

        $reponse = array();

        if ($stts > 0) {
            $reponse['status'] = 0;
            $reponse['message'] = "Laporan berhasil diperbaharui";

            echo json_encode($reponse);
        } else {
            $reponse['status'] = 1;
            $reponse['message'] = "Terjadi Kesalahan Saat Memperbaharui Laporan";

            echo json_encode($reponse);
        }
    }

}

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
 */
class Dashboard extends CI_Controller {

    //put your code here
    function index() {
        $this->load->view('headfoot/header');
        $this->load->view('dashboard/dashboard');
        $this->load->view('headfoot/footer');
    }

    function report() {
        $this->load->view('headfoot/header');
        $this->load->view('dashboard/report');
        $this->load->view('headfoot/footer');
    }

    function emergency_report() {
        $data['report'] = $this->user->getByTindakan('laporan', 'registrasi', 'nik', 'tindakan=0');
        $this->load->view('dashboard/emergency_page', $data);
    }

}

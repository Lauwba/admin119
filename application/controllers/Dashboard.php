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

    function emergency_report() {
        $this->load->view('headfoot/header');
        $data['lat'] = "-7.7520206";
        $data['longi'] = "110.4892787";
        $this->load->view('dashboard/emergency_page', $data);
        $this->load->view('headfoot/footer');
    }


}

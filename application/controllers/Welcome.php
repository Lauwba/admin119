<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->load->view('welcome_message');
    }

    function login_proses() {
        $username = $this->input->post('email');
        $plainPassword = $this->input->post('password');
        $response = array();

        $condition = array('email' => $username);
        $getBcrypt = $this->admin->get('admin', $condition);
        $bcyrptPass = $getBcrypt[0]->password;

        if ($this->passwordhash->checkHashIsValid($plainPassword, $bcyrptPass)) {

            $sessionData = array('username' => $username, 'nama' => $getBcrypt[0]->nama);
            $this->session->set_userdata($sessionData);

            //update last_login

            $data = array('last_login' => date('Y-m-d H:i:s'));
            $this->admin->updateLastLogin('admin', $data, $condition);
            
            $response['status'] = 0;
            $response['message'] = "Credentials Valid";
            echo json_encode($response);
        } else {
            $response['status'] = 1;
            $response['message'] = "Credentials Invalid";
            echo json_encode($response);
        }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect('infront');
    }

}

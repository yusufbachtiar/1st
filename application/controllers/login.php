<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
 * @author artikulpi
 */
class login extends CI_Controller{
    //put your code here
    function login() {
        parent::Controller();
        $this->load->model('User','',TRUE);
    }
    function index() {
        if($this->session->userdata('login') == TRUE){
            redirect('anggota');
        }else{
            $this->load->view('login/login_view');
        }
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contactUs extends CI_Controller {

    function index(){
        $this->data['pageTitle']='Home';
        $this->data['subview'] = 'contactUs';
        $this->load->view('layouts/layout', $this->data);
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutUs extends CI_Controller {

    function index(){
        $this->data['pageTitle']='Home';
        $this->data['subview'] = 'AboutUs';
        $this->load->view('layouts/layout', $this->data);
    }
}
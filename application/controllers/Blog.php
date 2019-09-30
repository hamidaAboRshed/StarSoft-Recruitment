<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    function index(){
        $this->data['pageTitle']='Home';
        $this->data['subview'] = 'Blog';
        $this->load->view('layouts/layout', $this->data);
    }
}
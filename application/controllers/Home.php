<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function index(){
        $this->data['pageTitle']='Home';
        $this->data['subview'] = 'Home';
        $this->load->view('layouts/layout', $this->data);
    }

    function contact_us(){
        $this->data['pageTitle']='Home';
        $this->data['subview'] = 'contact_us';
        $this->load->view('layouts/layout', $this->data);
    }


    function service(){
        $this->data['pageTitle']='Home';
        $this->data['subview'] = 'service';
        $this->load->view('layouts/layout', $this->data);
    }
}
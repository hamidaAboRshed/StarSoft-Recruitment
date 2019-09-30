<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlogSingle extends CI_Controller {

    function index(){
        $this->data['pageTitle']='Home';
        $this->data['subview'] = 'BlogSingle';
        $this->load->view('layouts/layout', $this->data);
    }
}
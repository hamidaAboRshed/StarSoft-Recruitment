<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seeker extends CI_Controller {

    public function CVForm()
    {
        $this->data['pageTitle']='Create Resume';
        $this->data['subview'] = 'cv_form';
        $this->load->view('layouts/layout2', $this->data);
    }
}
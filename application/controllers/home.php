<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {


    
    public function index()
    {

        echo "hjdfjdk";
        die;
        $this->load->helper('url');
        $this->load->view('inc/header');
        $this->load->view('home', $this->data);
        $this->load->view('inc/footer');
    }
    

}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

<<<<<<< HEAD

    
    public function index()
    {

        echo "hjdfjdk";
        die;
        $this->load->helper('url');
        $this->load->view('inc/header');
        $this->load->view('home', $this->data);
        $this->load->view('inc/footer');
    }
    

=======
    // ------------------------------------------------------------------------
    
    public function index()
    {
        $this->load->view('home', $this->data);
    }
    
    // ------------------------------------------------------------------------
    
>>>>>>> 62eb11614248ebc88b55f36b0a00012ce554d9c8
}

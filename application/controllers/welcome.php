<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index(){
        $this->load->helper('form');
        $data['title'] = "Welcome to our Site";
        $data['headline'] = "Welcome!";
        $data['include'] = 'home';
        $this->load->vars($data);
        $this->load->view('template');
    }

    function contactus(){
        $this->load->helper('url');
        if ($this->input->post('email')){
            $this->load->model('Mcontacts','',TRUE);
            $this->Mcontacts->addContact();
            redirect('welcome/thankyou','refresh');
        }else{
            redirect('welcome/index','refresh');
        }
    }

    function thankyou(){
        $data['title'] = "Thank You!";
        $data['headline'] = "Thanks!";
        $data['include'] = 'thanks';
        $this->load->vars($data);
        $this->load->view('template');
    }
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     * 
     */
    function __construct()
    {
        parent::__construct();
        // if ($this->Utilities->checkUserLogged()) {
        //     $userLoggedIn = $this->session->get_userdata('vendorLoggedIn');
        //     $this->data['vendorLoggedIn'] = $userLoggedIn['vendorLoggedIn'];
        // }
    }

    public function index()
    {
        $this->load->view('adminLogin.php');
    }

    public function login()
    {
        $this->load->view('providerLogin.php');
    }

    public function registration()
    {
        $this->load->view('providerRegistration.php');
    }

    public function dashboard(){
        $this->data['method'] = "dash";
        $this->load->view('admindashboard.php', $this->data);
    }

    public function createAdminUser()
    {
        $this->data['method'] = "dash";
        $this->load->view('admindashboard.php', $this->data);
    }

    public function adminUsers()
    {
        $this->data['method'] = "adminUsers";
        $this->load->view('admindashboard.php', $this->data);
    }

    public function createEmployer()
    {
        $this->data['method'] = "createEmployer";
        $this->load->view('admindashboard.php', $this->data);
    }

    public function verifiedEmployers()
    {
        $this->data['method'] = "verifiedEmployers";
        $this->load->view('admindashboard.php', $this->data);
    }

    public function unVerifiedEmployers()
    {
        $this->data['method'] = "unVerifiedEmployers";
        $this->load->view('admindashboard.php', $this->data);
    }
    
    public function createCandidates()
    {
        $this->data['method'] = "createCandidates";
        $this->load->view('admindashboard.php', $this->data);
    }

    public function verifiedCandidates()
    {
        $this->data['method'] = "verifiedCandidates";
        $this->load->view('admindashboard.php', $this->data);
    }

    public function unVerifiedCandidates()
    {
        $this->data['method'] = "unVerifiedCandidates";
        $this->load->view('admindashboard.php', $this->data);
    }
}

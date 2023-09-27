<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel');
        $this->load->library('session');
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
        $this->data['method'] = "dashboard";
        $this->load->view('admindashboard.php', $this->data);
    }

    public function createAdminUser()
    {
        $this->data['method'] = "createAdminUser";
        $this->load->view('admindashboard.php', $this->data);
    }

    public function insertAdminUser(){
        $postData = $this->input->post(null, true);
        $register = $this->AdminModel->createAdminUser();
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

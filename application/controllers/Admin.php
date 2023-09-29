<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel');
        $this->load->library('session');
        $this->load->model('RegistrationModel');
        $this->load->model('SeekerModel');
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
        $this->adminUsers();
    }

    public function adminUsers()
    {
        $this->data['method'] = "adminUsers";
        $adminUsers = $this->AdminModel->adminUsers();
        $this->data['adminUsers'] = $adminUsers;
        $this->load->view('admindashboard.php', $this->data);
    }

    public function createEmployer()
    {
        $this->data['method'] = "createEmployer";
        $this->load->view('admindashboard.php', $this->data);
    }

    public function insertEmployer(){
        $postData = $this->input->post(null, true);
        $responses = $this->RegistrationModel->register();
        $this->unVerifiedEmployers();
    }

    public function unVerifiedEmployers()
    {
        $this->data['method'] = "unVerifiedEmployers";
        $unVerifiedEmployers = $this->AdminModel->unVerifiedEmployers();
        $this->data['unVerifiedEmployers'] = $unVerifiedEmployers;
        $this->load->view('admindashboard.php', $this->data);
    }

    public function verifiedEmployers()
    {
        $this->data['method'] = "verifiedEmployers";
        $verifiedEmployers = $this->AdminModel->verifiedEmployers();
        $this->data['verifiedEmployers'] = $verifiedEmployers;
        $this->load->view('admindashboard.php', $this->data);
    }
    
    public function createCandidates()
    {
        $this->data['method'] = "createCandidates";
        $this->load->view('admindashboard.php', $this->data);
    }

    public function candidateRegistration(){
        $postData = $this->input->post(null, true);
        $register = $this->SeekerModel->register();
    }

    public function unVerifiedCandidates()
    {
        $this->data['method'] = "unVerifiedCandidates";
        $unVerifiedCandidates = $this->AdminModel->unVerifiedCandidates();
        $this->data['unVerifiedCandidates'] = $unVerifiedCandidates;
        $this->load->view('admindashboard.php', $this->data);
    }

    public function verifiedCandidates()
    {
        $this->data['method'] = "verifiedCandidates";
        $verifiedCandidates = $this->AdminModel->verifiedCandidates();
        $this->data['verifiedCandidates'] = $verifiedCandidates;
        $this->load->view('admindashboard.php', $this->data);
    }

}

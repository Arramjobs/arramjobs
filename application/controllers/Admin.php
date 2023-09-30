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
        $this->load->view('adminLogin.php');
    }


    public function dashboard(){
        $postData = $this->input->post(null, true);
        $response = $this->AdminModel->adminLogin();
        if (isset($response[0]['id'])) {
            $adminLoggedIn = array(
                'adminId' => $response[0]['id'],
                'adminName' => $response[0]['name'],
                'adminNumber' => $response[0]['mobileNumber'],
                "role" => $response[0]['userRole']
            );
            $this->session->set_userdata($adminLoggedIn);
            $this->data['method'] = "dashboard";
            $this->load->view('admindashboard.php', $this->data);
        } else {

            $this->load->view('adminLogin.php');
        }
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

    public function manageCandidate(){
        $id = $this->uri->segment(3);
        $this->data['method'] ="manageCandidate";

        $education = $this->RegistrationModel->educationalDetails($id);
        $this->data['education'] = $education;

        $skills = $this->RegistrationModel->skills($id);
        $this->data['skills'] = $skills;

        // $projectDetails = $this->RegistrationModel->projectDetails($id);
        // $this->data['projectDetails'] = $projectDetails;

        $areaOfInterest = $this->RegistrationModel->areaOfInterest($id);
        $this->data['areaOfInterest'] = $areaOfInterest;

        $experienceDetails = $this->RegistrationModel->experienceDetails($id);
        $this->data['experienceDetails'] = $experienceDetails;

        $basicDetails = $this->RegistrationModel->candidate($id);
        $this->data['basicDetails'] = $basicDetails;

        $this->load->view('admindashboard.php', $this->data);
    }

    public function verifyCandidate(){
        $postData = $this->input->post(null, true);
        $verifyCandidateDetails = $this->AdminModel->verifyCandidateDetails();
        $this->verifiedCandidates();
    }

    public function logout()
    {
        $this->session->unset_userdata('adminLoggedIn');
        // $successMsg = array('msgClass' => 'warning', 'msgText' => 'Logged out successfully.');
        //$this->session->set_flashdata('frontFlashMsg', $successMsg);
        $this->index();
    }

}

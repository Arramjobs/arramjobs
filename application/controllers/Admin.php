<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel');
        $this->load->library('session');
        $this->load->model('EmployerModel');
        $this->load->model('EmployeeModel');
    }

    public function index()
    {
        $this->load->view('adminLogin.php');
    }

    public function login()
    {
        $this->load->view('adminLogin.php');
    }


    public function verifyLogin()
    {
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
            $this->dashboard();
        } else {

            $this->load->view('adminLogin.php');
            echo '<script>alert("Please enter valid login details.");</script>';
        }
    }

    public function dashboard()
    {
        $admin = $this->AdminModel->admin();
        $this->data['admin'] = $admin;
        $employer = $this->AdminModel->employer();
        $this->data['employer'] = $employer;
        $employee = $this->AdminModel->employee();
        $this->data['employee'] = $employee;
        $this->data['method'] = "dashboard";
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function createAdminUser()
    {
        $this->data['method'] = "createAdminUser";
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function insertAdminUser()
    {
        $postData = $this->input->post(null, true);
        $register = $this->AdminModel->createAdminUser();
        $this->adminUsers();
    }

    public function adminUsers()
    {
        $this->data['method'] = "adminUsers";
        $adminUsers = $this->AdminModel->adminUsers();
        $this->data['adminUsers'] = $adminUsers;
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function createEmployer()
    {
        $this->data['method'] = "createEmployer";
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function deleteAdminuser()
    {
        $adminId = $this->uri->segment(3);
        $delete = $this->AdminModel->deleteAdminUser($adminId);
        if ($delete == null) {
            $this->adminUsers();
        } else {
            echo "Error deleting record";
        }
    }
    public function insertEmployer()
    {
        $postData = $this->input->post(null, true);
        $responses = $this->EmployerModel->register();
        $generatedid = $this->EmployerModel->generate_customer_id();
        $this->unVerifiedEmployers();
        echo '<script>alert("Employer registered successfully.");</script>';
    }

    public function unVerifiedEmployers()
    {
        $this->data['method'] = "unVerifiedEmployers";
        $unVerifiedEmployers = $this->AdminModel->unVerifiedEmployers();
        $this->data['unVerifiedEmployers'] = $unVerifiedEmployers;
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function verifiedEmployers()
    {
        $this->data['method'] = "verifiedEmployers";
        $verifiedEmployers = $this->AdminModel->verifiedEmployers();
        $this->data['verifiedEmployers'] = $verifiedEmployers;
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function manageEmployer()
    {
        $id = $this->uri->segment(3);
        $verifyEmployerDetails = $this->AdminModel->verifyEmployerDetails($id);
        $this->data['manageEmployer'] = $verifyEmployerDetails;
        $this->data['method'] = "manageEmployer";
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function manageEmployerVerify()
    {
        $id = $this->uri->segment(3);
        $verifyEmployerDetails = $this->AdminModel->verifyEmployerDetails($id);
        $this->data['manageEmployerVerify'] = $verifyEmployerDetails;
        $this->data['method'] = "manageEmployerVerify";
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function verifyEmployer()
    {
        $postData = $this->input->post(null, true);
        $verifyEmployer = $this->AdminModel->verifyEmployer();
        $this->unVerifiedEmployers();
    }

    public function verifyEmployerVerified()
    {
        $postData = $this->input->post(null, true);
        $verifyEmployerVerified = $this->AdminModel->verifyEmployerVerified();
        $this->verifiedEmployers();
    }


    public function employerApprovel()
    {
        $id = $this->uri->segment(3);
        $employerApprovelDetails = $this->AdminModel->verifyEmployerDetails($id);
        $this->data['manageEmployer'] = $employerApprovelDetails;
        $this->data['method'] = "employerApprovel";
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function employerApprovelStatus()
    {
        $id = $this->uri->segment(3);
        $employerApprovelDetails = $this->AdminModel->employerApprovelStatus();
        $this->data['manageEmployer'] = $employerApprovelDetails;
        $this->verifiedEmployers();
    }

    public function deleteRequestEmployer()
    {
        $id = $this->uri->segment(3);
        $employerDetails = $this->AdminModel->verifyEmployerDetails($id);
        $this->data['employerDetails'] = $employerDetails;
        $this->data['method'] = "deleteRequestEmployer";
        $this->load->view('adminDashboard.php', $this->data);
    }
    public function deleteRequestEmployerForm()
    {
        $postData = $this->input->post(null, true);
        $deleteRequestEmployer = $this->AdminModel->deleteRequestEmployer();
        $this->dashboard();
    }

    public function deleteEmployerList()
    {
        $this->data['method'] = "deleteEmployerList";
        $deleteEmployerList = $this->AdminModel->deleteEmployerList();
        $this->data['deleteEmployerList'] = $deleteEmployerList;
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function restoreEmployerform()
    {
        $postData = $this->input->post(null, true);
        $restoreEmployerDetails = $this->AdminModel->restoreEmployerDetails();
        $this->deleteEmployerList();
    }
    public function createEmployees()
    {
        $this->data['method'] = "createEmployees";
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function employeeRegistration()
    {
        $postData = $this->input->post(null, true);
        $register = $this->EmployeeModel->register();
        $generatedeeid = $this->EmployeeModel->generate_customer_id();
        $this->unVerifiedEmployees();
        echo '<script>alert("Employee registered successfully.");</script>';
    }

    public function unVerifiedEmployees()
    {
        $this->data['method'] = "unVerifiedEmployees";
        $unVerifiedEmployees = $this->AdminModel->unVerifiedEmployees();
        $this->data['unVerifiedEmployees'] = $unVerifiedEmployees;
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function verifiedEmployees()
    {
        $this->data['method'] = "verifiedEmployees";
        $verifiedEmployees = $this->AdminModel->verifiedEmployees();
        $this->data['verifiedEmployees'] = $verifiedEmployees;
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function deleteEmployeeList()
    {
        $this->data['method'] = "deleteEmployeeList";
        $deleteEmployeeList = $this->AdminModel->deleteEmployeeList();
        $this->data['deleteEmployeeList'] = $deleteEmployeeList;
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function manageEmployee()
    {
        $id = $this->uri->segment(3);
        $this->data['method'] = "manageEmployee";

        $education = $this->EmployerModel->educationalDetails($id);
        $this->data['education'] = $education;

        $skills = $this->EmployerModel->skills($id);
        $this->data['skills'] = $skills;

        // $projectDetails = $this->EmployerModel->projectDetails($id);
        // $this->data['projectDetails'] = $projectDetails;

        $areaOfInterest = $this->EmployerModel->areaOfInterest($id);
        $this->data['areaOfInterest'] = $areaOfInterest;

        $experienceDetails = $this->EmployerModel->experienceDetails($id);
        $this->data['experienceDetails'] = $experienceDetails;

        $basicDetails = $this->EmployerModel->candidate($id);
        $this->data['basicDetails'] = $basicDetails;

        $this->load->view('adminDashboard.php', $this->data);
    }

    public function deleteEmployee()
    {
        $id = $this->uri->segment(3);
        $this->data['method'] = "deleteEmployee";

        $basicDetails = $this->EmployerModel->candidate($id);
        $this->data['basicDetails'] = $basicDetails;

        $this->load->view('adminDashboard.php', $this->data);
    }

    public function verifyEmployee()
    {
        $postData = $this->input->post(null, true);
        $verifyEmployeeDetails = $this->AdminModel->verifyEmployeeDetails();
        $this->verifiedEmployees();
    }

    public function deleteEmployeeform()
    {
        $postData = $this->input->post(null, true);
        $deleteEmployeeDetails = $this->AdminModel->deleteEmployeeDetails();
        $this->deleteEmployeeList();
    }

    public function restoreEmployeeform()
    {
        $postData = $this->input->post(null, true);
        $restoreEmployeeDetails = $this->AdminModel->restoreEmployeeDetails();
        $this->deleteEmployeeList();
    }

    public function addNewAdminApprovel()
    {
    }

    public function deleteAdminApprovel()
    {
    }

    public function employerApprovelRequest()
    {
        $addNewEmployerApprovel = $this->AdminModel->addNewEmployerApprovel();
        $this->data['addNewEmployerApprovel'] = $addNewEmployerApprovel;

        $deleteEmployerApprovel = $this->AdminModel->deleteEmployerApprovel();
        $this->data['deleteEmployerApprovel'] = $deleteEmployerApprovel;

        $this->data['method'] = "addNewEmployerApprovel";
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function logout()
    {
        $this->session->unset_userdata('adminLoggedIn');
        // $successMsg = array('msgClass' => 'warning', 'msgText' => 'Logged out successfully.');
        //$this->session->set_flashdata('frontFlashMsg', $successMsg);
        $this->index();
    }
}

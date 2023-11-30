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
        $this->load->model('CandidateModel');
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
                "role" => $response[0]['userRole'],
                'adminid' => $response[0]['admin_id']
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
        $generatedeeid = $this->AdminModel->generate_customer_id();
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
        $this->newEmployersList();
        echo '<script>alert("Employer registered successfully.");</script>';
    }

    public function newEmployersList()
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

    public function pendingEmployers()
    {
        $this->data['method'] = "pendingEmployers";
        $pendingEmployers = $this->AdminModel->pendingEmployers();
        $this->data['pendingEmployers'] = $pendingEmployers;
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function deleteEmployerList()
    {
        $this->data['method'] = "deleteEmployerList";
        $deleteEmployerList = $this->AdminModel->deleteEmployerList();
        $this->data['deleteEmployerList'] = $deleteEmployerList;
        $this->load->view('adminDashboard.php', $this->data);
    }
    public function overallEmployers()
    {
        $this->data['method'] = "overallEmployers";
        $overallEmployers = $this->AdminModel->overallEmployers();
        $this->data['overallEmployers'] = $overallEmployers;
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

    public function viewEmployer()
    {
        $id = $this->uri->segment(3);

        $verifyEmployerDetails = $this->AdminModel->verifyEmployerDetails($id);
        $this->data['manageEmployer'] = $verifyEmployerDetails;

        $employerJobDetails = $this->AdminModel->employerJobDetails($id);
        $this->data['jobDetails'] = $employerJobDetails;

        $this->data['method'] = "viewEmployer";
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function verifyEmployer()
    {
        $postData = $this->input->post(null, true);
        $verifyEmployer = $this->AdminModel->verifyEmployer();
        $this->dashboard();
    }

    public function deleteEmployerForm()
    {
        $postData = $this->input->post(null, true);
        $deleteRequestEmployer = $this->AdminModel->deleteEmployer();
        $this->dashboard();
    }

    public function restoreEmployerform()
    {
        $postData = $this->input->post(null, true);
        $restoreEmployerDetails = $this->AdminModel->restoreEmployerDetails();
        $this->deleteEmployerList();
    }

    // public function employerApprovel()
    // {
    //     $id = $this->uri->segment(3);
    //     $employerApprovelDetails = $this->AdminModel->verifyEmployerDetails($id);
    //     $this->data['manageEmployer'] = $employerApprovelDetails;
    //     $this->data['method'] = "employerApprovel";
    //     $this->load->view('adminDashboard.php', $this->data);
    // }

    // public function employerApprovelStatus()
    // {
    //     $id = $this->uri->segment(3);
    //     $employerApprovelDetails = $this->AdminModel->employerApprovelStatus();
    //     $this->data['manageEmployer'] = $employerApprovelDetails;
    //     $this->dashboard();
    // }


    // public function deleteEmployer()
    // {
    //     $deleteEmployerId = $this->uri->segment(3);
    //     $delete = $this->AdminModel->deleteEmployer($deleteEmployerId);
    //     if ($delete == null) {
    //         $this->deleteEmployerList();
    //     } else {
    //         echo "Error deleting record";
    //     }
    // }


    public function createCandidates()
    {
        $this->data['method'] = "createEmployees";
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function employeeRegistration()
    {
        $postData = $this->input->post(null, true);
        $register = $this->CandidateModel->register();
        $generatedeeid = $this->CandidateModel->generate_customer_id();
        $this->newEmployeeList();
        echo '<script>alert("Candidate registered successfully.");</script>';
    }

    public function newCandidateList()
    {
        $this->data['method'] = "unVerifiedEmployees";
        $unVerifiedEmployees = $this->AdminModel->unVerifiedEmployees();
        $this->data['unVerifiedEmployees'] = $unVerifiedEmployees;
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function verifiedCandidate()
    {
        $this->data['method'] = "verifiedEmployees";
        $verifiedEmployees = $this->AdminModel->verifiedEmployees();
        $this->data['verifiedEmployees'] = $verifiedEmployees;
        $this->load->view('adminDashboard.php', $this->data);
    }
    public function pendingCandidates()
    {
        $this->data['method'] = "pendingEmployees";
        $pendingEmployees = $this->AdminModel->pendingEmployees();
        $this->data['pendingEmployees'] = $pendingEmployees;
        $this->load->view('adminDashboard.php', $this->data);
    }
    
    public function deleteCandidateList()
    {
        $this->data['method'] = "deleteEmployeeList";
        $deleteEmployeeList = $this->AdminModel->deleteEmployeeList();
        $this->data['deleteEmployeeList'] = $deleteEmployeeList;
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function overallCandidates()
    {
        $this->data['method'] = "overallEmployees";
        $overallEmployees = $this->AdminModel->overallEmployees();
        $this->data['overallEmployees'] = $overallEmployees;
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function manageCandidate()
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

    public function viewCandidate()
    {
        $id = $this->uri->segment(3);
        $this->data['method'] = "viewEmployee";

        $education = $this->EmployerModel->educationalDetails($id);
        $this->data['education'] = $education;

        $skills = $this->EmployerModel->skills($id);
        $this->data['skills'] = $skills;

        $areaOfInterest = $this->EmployerModel->areaOfInterest($id);
        $this->data['areaOfInterest'] = $areaOfInterest;

        $experienceDetails = $this->EmployerModel->experienceDetails($id);
        $this->data['experienceDetails'] = $experienceDetails;

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

    // Delete Employee from Table permanently
    // public function deleteEmployeeDetails()
    // {
    //     $deleteEmployeeId = $this->uri->segment(3);
    //     $delete = $this->AdminModel->deleteEmployee($deleteEmployeeId);
    //     if ($delete == null) {
    //         $this->deleteEmployeeList();
    //     } else {
    //         echo "Error deleting record";
    //     }
    // }
    

    // public function addNewAdminApprovel()
    // {
    // }

    // public function deleteAdminApprovel()
    // {
    // }

    // public function employerApprovelRequest()
    // {
    //     $addNewEmployerApprovel = $this->AdminModel->addNewEmployerApprovel();
    //     $this->data['addNewEmployerApprovel'] = $addNewEmployerApprovel;

    //     $deleteEmployerApprovel = $this->AdminModel->deleteEmployerApprovel();
    //     $this->data['deleteEmployerApprovel'] = $deleteEmployerApprovel;

    //     $this->data['method'] = "addNewEmployerApprovel";
    //     $this->load->view('adminDashboard.php', $this->data);
    // }


    public function categoryRequest()
    {
        $this->data['method'] = "categoryRequest";
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function candidateRequestList()
    {
        $this->data['method'] = "candidateRequestList";
        $candidateRequestList = $this->AdminModel->candidateRequestDetails();
        $this->data['candidateRequestList'] = $candidateRequestList;
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function approveCandidateRequest()
    {
        $postData = $this->input->post(null, true);
        $approveRequest = $this->AdminModel->approveRequest();
        $this->candidateRequestList();
    }

    public function cancelCandidateRequest()
    {
        $postData = $this->input->post(null, true);
        $cancelRequest = $this->AdminModel->cancelRequest();
        $this->candidateRequestList();
    }

    public function logout()
    {
        $this->session->unset_userdata('adminLoggedIn');
        // $successMsg = array('msgClass' => 'warning', 'msgText' => 'Logged out successfully.');
        //$this->session->set_flashdata('frontFlashMsg', $successMsg);
        $this->index();
    }
}

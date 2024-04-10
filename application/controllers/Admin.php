<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    private $yourVariable;

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

    // To set the total no of rows in the candidate request

    public function setVariable()
    {
        $candidateTotalRows = $this->AdminModel->candidateRequestDetails();
        $this->data['canReqTotalRows'] = $candidateTotalRows["totalRows"];
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
        $this->setVariable();
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function createAdminUser()
    {
        $this->data['method'] = "createAdminUser";
        $this->setVariable();
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
        $this->setVariable();
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function createEmployer()
    {
        $this->data['method'] = "createEmployer";
        $this->setVariable();
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
        $this->setVariable();
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function verifiedEmployers()
    {
        $this->data['method'] = "verifiedEmployers";
        $verifiedEmployers = $this->AdminModel->verifiedEmployers();
        $this->data['verifiedEmployers'] = $verifiedEmployers;
        $this->setVariable();
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function pendingEmployers()
    {
        $this->data['method'] = "pendingEmployers";
        $pendingEmployers = $this->AdminModel->pendingEmployers();
        $this->data['pendingEmployers'] = $pendingEmployers;
        $this->setVariable();
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function deleteEmployerList()
    {
        $this->data['method'] = "deleteEmployerList";
        $deleteEmployerList = $this->AdminModel->deleteEmployerList();
        $this->data['deleteEmployerList'] = $deleteEmployerList;
        $this->setVariable();
        $this->load->view('adminDashboard.php', $this->data);
    }
    public function overallEmployers()
    {
        $this->data['method'] = "overallEmployers";
        $overallEmployers = $this->AdminModel->overallEmployers();
        $this->data['overallEmployers'] = $overallEmployers;
        $this->setVariable();
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function deleteOverallEmployers()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['selected_items']) && is_array($_POST['selected_items'])) {
                $selectedItems = $_POST['selected_items'];
                foreach ($selectedItems as $itemId) {
                    $this->AdminModel->deleteOverallEmployers($itemId);
                }
                $this->overallEmployers();
            } else {
                $this->overallEmployers();
                echo '<script>alert("Please select the checkbox to delete.");</script>';
            }
        }
    }

    public function manageEmployer()
    {
        $id = $this->uri->segment(3);

        $verifyEmployerDetails = $this->AdminModel->verifyEmployerDetails($id);
        $this->data['manageEmployer'] = $verifyEmployerDetails;

        $this->setVariable();

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

        $this->setVariable();

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
        $this->setVariable();
        $this->load->view('adminDashboard.php', $this->data);
    }


    public function employeeRegistration()
    {
        $postData = $this->input->post(null, true);
        $register = $this->CandidateModel->register();
        $generatedeeid = $this->CandidateModel->generate_customer_id();
        $this->newCandidateList();
        echo '<script>alert("Candidate registered successfully.");</script>';
    }

    public function createCandidatesAdmin()
    {
        $this->data['method'] = "createEmployees1";
        $this->setVariable();
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function employeeRegistrationAdmin()
    {
        $postData = $this->input->post(null, true);
        $register = $this->CandidateModel->register();
        $generatedeeid = $this->CandidateModel->generate_customer_id();
        $this->basicDetails();
        echo '<script>alert("Candidate registered successfully.");</script>';
    }

    // public function updateRegistration()
    // {
    //     $this->data['method'] = "updateJob";
    //     $provider = $this->AdminModel->provider_detail();
    //     $this->data['providerDetail'] = $provider;
    //     $this->setVariable();
    //     $this->load->view('adminDashboard.php', $this->data);
    // }

    // public function updateAddNew()
    // {
    //     $jobProviderId = $this->uri->segment(3);
    //     $this->data['method'] = "updateaddnew";

    //     $tab = $this->AdminModel->addTab($jobProviderId);
    //     $this->data['providerJobs'] = $tab;

    //     $addjob = $this->AdminModel->updatejob($jobProviderId);
    //     $this->data['updateAddNew'] = $addjob;

    //     $categoryList = $this->AdminModel->getCategoryList();
    //     $this->data['categoryList'] = $categoryList;

    //     //$this->load->view('update_addnew_jobs.php',$this->data);
    //     $this->setVariable();
    //     $this->load->view('adminDashboard.php', $this->data);
    // }

    // public function jobViewTable()
    // {
    //     $jobProviderId = $this->uri->segment(3);
    //     $this->data['method'] = "jobview";

    //     $tab = $this->AdminModel->addTab($jobProviderId);
    //     $this->data['providerJobs'] = $tab;

    //     $categoryList = $this->AdminModel->getCategoryList();
    //     $this->data['categoryList'] = $categoryList;

    //     $this->setVariable();
    //     $this->load->view('adminDashboard.php', $this->data);
    // }

    // public function update_record()
    // {
    //     $postData = $this->input->post(null, true);
    //     $var = $this->AdminModel->update_data();
    //     // echo "Record updated successfully";
    //     $this->jobViewTable();
    //     // $this->setVariable();
    //     echo '<script>alert("Company profile updated successfully.");</script>';
    // }

    // public function insertJob()
    // {
    //     $id = $this->uri->segment(3);
    //     $this->data['method'] = "jobs";
    //     $addJob = $this->AdminModel->addNew($id);
    //     // echo "Record added seccessfuly";
    //     $this->updateRegistration();
    //     // $this->setVariable();
    //     echo '<script>alert("Job details inserted successfully.");</script>';
    // }

    // public function updateInsert()
    // {
    //     $id = $this->uri->segment(3);
    //     $postData = $this->input->post(null, true);
    //     $add = $this->AdminModel->updatejob($id);

    //     // echo "Record updated Successfully";
    //     $this->jobViewTable();
    //     // $this->setVariable();
    //     echo '<script>alert("Job details updated successfully.");</script>';
    // }

    // public function jobMatchedTable()
    // {
    //     $jobCategory = $this->uri->segment(3);
    //     $response = $this->AdminModel->candidates($jobCategory);
    //     $this->data['method'] = "match";
    //     $this->data['response'] = $response;
    //     $this->data['category'] = $jobCategory;

    //     $this->setVariable();

    //     $this->load->view('adminDashboard.php', $this->data);
    // }

    // public function resumeCard()
    // {
    //     $id = $this->uri->segment(3);
    //     $this->data['method'] = "resume";


    //     $education = $this->AdminModel->educationalDetails($id);
    //     $this->data['education'] = $education;

    //     $skills = $this->AdminModel->skills($id);
    //     $this->data['skills'] = $skills;

    //     $projectDetails = $this->AdminModel->projectDetails($id);
    //     $this->data['projectDetails'] = $projectDetails;

    //     $areaOfInterest = $this->AdminModel->areaOfInterest($id);
    //     $this->data['areaOfInterest'] = $areaOfInterest;

    //     $experienceDetails = $this->AdminModel->experienceDetails($id);
    //     $this->data['experienceDetails'] = $experienceDetails;

    //     $seekerName = $this->AdminModel->candidate($id);
    //     $this->data['basicDetails'] = $seekerName;

    //     $reqStatus = $this->AdminModel->canRequestStatus($id);
    //     $this->data['canReqStatus'] = $reqStatus;

    //     $this->setVariable();

    //     $this->load->view('adminDashboard.php', $this->data);
    // }

    // public function deleteAddJob()
    // {
    //     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //         if (isset($_POST['selected_items']) && is_array($_POST['selected_items'])) {
    //             $selectedItems = $_POST['selected_items'];
    //             foreach ($selectedItems as $deleteId) {
    //                 $this->AdminModel->deleteAddJob($deleteId);
    //             }
    //             $this->updateRegistration();
    //         } else {
    //             $this->updateRegistration();
    //             echo '<script>alert("Please select the checkbox to delete.");</script>';
    //         }
    //         $this->setVariable();
    //     }

    // }
   
    // public function requestCandidate()
    // {
    //     $postData = $this->input->post(null, true);
    //     $requestCandidate = $this->AdminModel->requestForCandidate();
    //     $this->jobViewTable();
    // }


    public function newCandidateList()
    {
        $this->data['method'] = "unVerifiedEmployees";
        $unVerifiedEmployees = $this->AdminModel->unVerifiedEmployees();
        $this->data['unVerifiedEmployees'] = $unVerifiedEmployees;
        $this->setVariable();
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function verifiedCandidate()
    {
        $this->data['method'] = "verifiedEmployees";
        $verifiedEmployees = $this->AdminModel->verifiedEmployees();
        $this->data['verifiedEmployees'] = $verifiedEmployees;
        $this->setVariable();
        $this->load->view('adminDashboard.php', $this->data);
    }
    public function pendingCandidates()
    {
        $this->data['method'] = "pendingEmployees";
        $pendingEmployees = $this->AdminModel->pendingEmployees();
        $this->data['pendingEmployees'] = $pendingEmployees;
        $this->setVariable();
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function deleteCandidateList()
    {
        $this->data['method'] = "deleteEmployeeList";
        $deleteEmployeeList = $this->AdminModel->deleteEmployeeList();
        $this->data['deleteEmployeeList'] = $deleteEmployeeList;
        $this->setVariable();
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function overallCandidates()
    {
        $this->data['method'] = "overallEmployees";
        $overallEmployees = $this->AdminModel->overallEmployees();
        $this->data['overallEmployees'] = $overallEmployees;
        $this->setVariable();
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function deleteOverallEmployees()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['selected_items']) && is_array($_POST['selected_items'])) {
                $selectedItems = $_POST['selected_items'];
                foreach ($selectedItems as $itemId) {
                    $this->AdminModel->deleteOverallEmployees($itemId);
                }
                $this->overallCandidates();
            } else {
                $this->overallCandidates();
                echo '<script>alert("Please select the checkbox to delete.");</script>';
            }
        }
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

        $this->setVariable();

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

        $this->setVariable();

        $this->load->view('adminDashboard.php', $this->data);
    }

    public function resumePrint()
    {
        $id = $this->uri->segment(3);
        $this->data['method'] = "resumePrint";

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

        $this->setVariable();

        $this->load->view('adminDashboard.php', $this->data);
    }

    public function verifyEmployee()
    {
        $postData = $this->input->post(null, true);
        $verifyEmployeeDetails = $this->AdminModel->verifyEmployeeDetails();
        $this->verifiedCandidate();
    }

    public function deleteEmployeeform()
    {
        $postData = $this->input->post(null, true);
        $deleteEmployeeDetails = $this->AdminModel->deleteEmployeeDetails();
        $this->deleteCandidateList();
    }

    public function restoreEmployeeform()
    {
        $postData = $this->input->post(null, true);
        $restoreEmployeeDetails = $this->AdminModel->restoreEmployeeDetails();
        $this->deleteCandidateList();
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


    public function candidateChart()
    {
        $this->data['method'] = "candidateChart";
        $candidateChartList = $this->AdminModel->candidateChartDetails();
        $this->data['candidateChartList'] = $candidateChartList["response"];
        $this->setVariable();
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function employerChart()
    {
        $this->data['method'] = "employerChart";
        $employerChartList = $this->AdminModel->employerChartDetails();
        $this->data['employerChartList'] = $employerChartList["response"];
        $this->setVariable();
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function updateCurrentStatus()
    {
        $postData = $this->input->post(null, true);
        $updateStatus = $this->AdminModel->candidateStatus();
        $currentStatus = $this->AdminModel->currentStatusSpf();
        $this->candidateChart();
    }

    public function updateCurrentStatusEmp()
    {
        $postData = $this->input->post(null, true);
        $updateStatus = $this->AdminModel->employerStatus();
        $currentStatus = $this->AdminModel->currentStatusSpfEmp();
        $this->employerChart();
    }

    public function placedCandidate()
    {
        $this->data['method'] = "placedCandidates";
        $candidateplaced = $this->AdminModel->placedCandidatesList();
        $this->data['placedCandidates'] = $candidateplaced["response"];
        $this->setVariable();
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function interviewedCandidate()
    {
        $this->data['method'] = "interviewedCandidates";
        $candidateinterviewed = $this->AdminModel->interviewedCandidatesList();
        $this->data['interviewedCandidates'] = $candidateinterviewed["response"];
        $this->setVariable();
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function rejectedCandidate()
    {
        $this->data['method'] = "rejectedCandidate";
        $candidateRejected = $this->AdminModel->rejectedCandidatesList();
        $this->data['rejectedCandidates'] = $candidateRejected["response"];
        $this->setVariable();
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function relievedCandidate()
    {
        $this->data['method'] = "relievedCandidate";
        $candidateRelieved = $this->AdminModel->relievedCandidatesList();
        $this->data['relievedCandidates'] = $candidateRelieved["response"];
        $this->setVariable();
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function candidateRequestList()
    {
        $this->data['method'] = "candidateRequestList";
        $candidateRequestList = $this->AdminModel->candidateRequestDetails();
        $this->data['candidateRequestList'] = $candidateRequestList["response"];
        $this->setVariable();
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function approveCandidateRequest()
    {
        $postData = $this->input->post(null, true);
        $approveRequest = $this->AdminModel->approveRequest();
        $this->candidateChart();
    }

    public function cancelCandidateRequest()
    {
        $postData = $this->input->post(null, true);
        $cancelRequest = $this->AdminModel->cancelRequest();
        $this->candidateRequestList();
    }

    public function categoryRequest()
    {
        $this->data['method'] = "categoryRequest";

        $candidateNewCategory = $this->AdminModel->candidateNewCategory();
        $this->data['candidateNewCategory'] = $candidateNewCategory;

        $candidateNewCategoryArea = $this->AdminModel->candidateNewCategoryArea();
        $this->data['candidateNewCategoryArea'] = $candidateNewCategoryArea;

        $employerNewCategory = $this->AdminModel->employerNewCategory();
        $this->data['employerNewCategory'] = $employerNewCategory;

        $this->setVariable();

        $this->load->view('adminDashboard.php', $this->data);
    }

    public function addNewCategoryExperience()
    {
        $postData = $this->input->post(null, true);
        $newcategory = $this->AdminModel->addcategoryExperience();
        $this->categoryRequest();
    }

    public function addNewCategoryArea()
    {
        $postData = $this->input->post(null, true);
        $newcategory = $this->AdminModel->addcategoryArea();
        $this->categoryRequest();
    }

    public function employerNewCategory()
    {
        $postData = $this->input->post(null, true);
        $newcategory = $this->AdminModel->addcategoryEmployerJob();
        $this->categoryRequest();
    }

    public function cancelNewCategoryExp()
    {
        $postData = $this->input->post(null, true);
        $cancelnewcategory = $this->AdminModel->cancelNewCategoryExp();
        $this->categoryRequest();
    }

    public function cancelNewCategoryArea()
    {
        $postData = $this->input->post(null, true);
        $cancelnewcategory = $this->AdminModel->cancelNewCategoryArea();
        $this->categoryRequest();
    }

    public function cancelNewCategoryJob()
    {
        $postData = $this->input->post(null, true);
        $cancelnewcategory = $this->AdminModel->cancelNewCategoryJob();
        $this->categoryRequest();
    }
    public function logout()
    {
        $this->session->sess_destroy();
        $this->index();
    }

    // public function logout()
    // {
    //     $this->session->unset_userdata('userLoggedIn');
    //     $this->index();
    // }


    // CANDIDATE FORM

    public function basicDetails()
    {
        $id = $this->uri->segment(3);
        $basicDetails = $this->AdminModel->getBasicDetails($id);
        $this->data['basicDetails'] = $basicDetails;
        $this->setVariable();
        $this->data['method'] = 'basicdetails';
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function updateBasicDetails()
    {
        $postData = $this->input->post(null, true);
        $updateBasicDetails = $this->CandidateModel->updateBasicDetails();
        $this->newCandidateList();
        echo '<script>alert("Basic details inserted successfully by admin.");</script>';
    }


    // education

    public function educationTable()
    {
        $id = $this->uri->segment(3);
        //  $educationTable = $this->AdminModel->educationTable($id);
        //  $this->data['educationTable'] = $educationTable;
        $this->data['candidateId'] = $id;
        $this->setVariable();
        $this->data['method'] = 'educationTable';
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function insertEducationForm()
    {
        $insertEducationForm = $this->CandidateModel->insertEducationForm();
        // $insertEducationForm = $this->CandidateModel->insertSubmit();

        $this->newCandidateList();
        echo '<script>alert("Education details inserted successfully by admin.");</script>';

    }


    // experience

   
    public function experienceTable()
    {
        $id = $this->uri->segment(3);
        $this->data['candidateId'] = $id;
       
        // $experienceTable = $this->CandidateModel->experienceTable();
        // $this->data['experienceTable'] = $experienceTable['response'];

        $categoryList = $this->CandidateModel->getCategoryList();
        $this->data['categoryList'] = $categoryList;

        $this->setVariable();
        $this->data['method'] = "experienceTable";
        $this->load->view('adminDashboard.php', $this->data);
    }


    // public function addExperirenceForm()
    // {
    //     $basicDetails = $this->CandidateModel->getBasicDetails();
    //     $this->data['basicDetails'] = $basicDetails;

    //     $categoryList = $this->CandidateModel->getCategoryList();
    //     $this->data['categoryList'] = $categoryList;

    //     $this->data['method'] = "addExperirenceForm";
    //     $this->load->view('candidateDashboard.php', $this->data);
    // }

    public function insertExperienceForm()
    {
        $insertExperienceForm = $this->CandidateModel->insertExperienceForm();
        // $insertExperienceForm = $this->CandidateModel->insertSubmitExp();

        $this->newCandidateList();
        echo '<script>alert("Experience details inserted successfully.");</script>';
    }

    public function insertFresherForm()
    {
        // $id = $this->uri->segment(3);
        $insertExperienceForm = $this->CandidateModel->insertFresherForm();

        $this->newCandidateList();
        echo '<script>alert("Experience is inserted as No experience.");</script>';
    }

    public function updateExperience()
    {
        $experienceId = $this->uri->segment(3);
        $this->data['method'] = "updateExperience";

        $experienceTable = $this->CandidateModel->experienceTable();
        $this->data['experienceTable'] = $experienceTable['response'];

        $updateExperience = $this->CandidateModel->updateExperience($experienceId);
        $this->data['updateExperience'] = $updateExperience;

        $categoryList = $this->CandidateModel->getCategoryList();
        $this->data['categoryList'] = $categoryList;

        $this->setVariable();

        $this->load->view('adminDashboard.php', $this->data);
    }

    public function updateInsertExperience()
    {
        $post = $this->input->post(null, true);
        $updateInsertExperience = $this->CandidateModel->updateInsertExperience();
        $this->experienceTable();
        echo '<script>alert("Experience details updated successfully.");</script>';
    }

    // public function deleteExperience()
    // {
    //     $deleteExperienceId = $this->uri->segment(3);
    //     $delete = $this->CandidateModel->deleteExperience($deleteExperienceId);
    //     if ($delete == null) {
    //         $this->experienceTable();
    //     } else {
    //         echo "Error deleting record";
    //     }
    // }

    public function deleteExperience()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['selected_items']) && is_array($_POST['selected_items'])) {
                $selectedItems = $_POST['selected_items'];
                foreach ($selectedItems as $itemId) {
                    $this->CandidateModel->deleteExp($itemId);
                }
                $this->experienceTable();
            } else {
                $this->experienceTable();
                echo '<script>alert("Please select the checkbox to delete.");</script>';
            }
        }
    }

    public function areaOfIntrestTable()
    {
        $id = $this->uri->segment(3);
        $this->data['candidateId'] = $id;

        $this->data['method'] = "areaOfIntrestTable";

        // $areaOfIntrestTable = $this->CandidateModel->areaOfIntrestTable();
        // $this->data['areaOfIntrestTable'] = $areaOfIntrestTable['response'];

        // $skillTable = $this->CandidateModel->skillTable();
        // $this->data['skillTable'] = $skillTable;

        $categoryList = $this->CandidateModel->getCategoryList();
        $this->data['categoryList'] = $categoryList;

        $this->setVariable();
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function insertAreaOfIntrest()
    {
        $insertAreaOfIntrest = $this->AdminModel->jobInterestResume();

        $this->newCandidateList();
        echo '<script>alert("Area of interest inserted successfully by admin.");</script>';
    }

   

    // skills
    public function skillTable()
    {
        $this->data['method'] = "addSkillForm";
        $id = $this->uri->segment(3);
        $this->data['candidateId'] = $id;
        // $skillTable = $this->CandidateModel->skillTable();
        // $this->data['skillTable'] = $skillTable;
        $this->setVariable();
        $this->load->view('adminDashboard.php', $this->data);
    }

    public function insertSkillForm()
    {
        $insertSkillForm = $this->CandidateModel->insertSkillForm();
        $this->newCandidateList();
        echo '<script>alert("Skill inserted successfully by admin.");</script>';
    }


}

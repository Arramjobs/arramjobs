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

    // Dashboard
    public function dashboard()
    {
        if (isset($_SESSION['adminId'])) {

            $admin = $this->AdminModel->admin();
            $this->data['admin'] = $admin;

            $employer = $this->AdminModel->employer();
            $this->data['employer'] = $employer;

            $employee = $this->AdminModel->employee();
            $this->data['employee'] = $employee;

            $placedCandidatesList = $this->AdminModel->placedCandidatesList();
            $this->data['placedCandidatesList'] = $placedCandidatesList;

            $this->data['method'] = "dashboard";
            $this->setVariable();
            $this->load->view('adminDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }

    // Admin 

    public function createAdminUser()
    {
        if (isset($_SESSION['adminId'])) {
            $this->data['method'] = "createAdminUser";
            $this->setVariable();
            $this->load->view('adminDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }

    public function insertAdminUser()
    {
        if (isset($_SESSION['adminId'])) {
            $postData = $this->input->post(null, true);
            $register = $this->AdminModel->createAdminUser();
            $generatedeeid = $this->AdminModel->generate_customer_id();
            $this->adminUsers();
        } else {
            $this->index();
        }
    }

    public function adminUsers()
    {
        if (isset($_SESSION['adminId'])) {
            $this->data['method'] = "adminUsers";
            $adminUsers = $this->AdminModel->adminUsers();
            $this->data['adminUsers'] = $adminUsers;
            $this->setVariable();
            $this->load->view('adminDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }

    public function deleteAdminuser()
    {
        if (isset($_SESSION['adminId'])) {
            $adminId = $this->uri->segment(3);
            $delete = $this->AdminModel->deleteAdminUser($adminId);
            if ($delete == null) {
                $this->adminUsers();
            } else {
                echo "Error deleting record";
            }
        } else {
            $this->index();
        }
    }

    // Employer

    public function createEmployer()
    {
        if (isset($_SESSION['adminId'])) {
            $this->data['method'] = "createEmployer";
            $this->setVariable();
            $this->load->view('adminDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }

    public function insertEmployer()
    {
        if (isset($_SESSION['adminId'])) {
            $postData = $this->input->post(null, true);
            $responses = $this->EmployerModel->register();
            $generatedid = $this->EmployerModel->generate_customer_id();
            $this->newEmployersList();
            echo '<script>alert("Employer registered successfully.");</script>';
        } else {
            $this->index();
        }
    }

    public function newEmployersList()
    {
        if (isset($_SESSION['adminId'])) {
            $this->data['method'] = "unVerifiedEmployers";
            $unVerifiedEmployers = $this->AdminModel->unVerifiedEmployers();
            $this->data['unVerifiedEmployers'] = $unVerifiedEmployers;
            $this->setVariable();
            $this->load->view('adminDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }

    public function verifiedEmployers()
    {
        if (isset($_SESSION['adminId'])) {
            $this->data['method'] = "verifiedEmployers";
            $verifiedEmployers = $this->AdminModel->verifiedEmployers();
            $this->data['verifiedEmployers'] = $verifiedEmployers;
            $this->setVariable();
            $this->load->view('adminDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }

    public function pendingEmployers()
    {
        if (isset($_SESSION['adminId'])) {
            $this->data['method'] = "pendingEmployers";
            $pendingEmployers = $this->AdminModel->pendingEmployers();
            $this->data['pendingEmployers'] = $pendingEmployers;
            $this->setVariable();
            $this->load->view('adminDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }

    public function deleteEmployerList()
    {
        if (isset($_SESSION['adminId'])) {
            $this->data['method'] = "deleteEmployerList";
            $deleteEmployerList = $this->AdminModel->deleteEmployerList();
            $this->data['deleteEmployerList'] = $deleteEmployerList;
            $this->setVariable();
            $this->load->view('adminDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }
    public function overallEmployers()
    {
        if (isset($_SESSION['adminId'])) {
            $this->data['method'] = "overallEmployers";
            $overallEmployers = $this->AdminModel->overallEmployers();
            $this->data['overallEmployers'] = $overallEmployers;
            $this->setVariable();
            $this->load->view('adminDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }

    public function deleteOverallEmployers()
    {
        if (isset($_SESSION['adminId'])) {
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
        } else {
            $this->index();
        }
    }

    public function manageEmployer()
    {
        if (isset($_SESSION['adminId'])) {
            $id = $this->uri->segment(3);

            $verifyEmployerDetails = $this->AdminModel->verifyEmployerDetails($id);
            $this->data['manageEmployer'] = $verifyEmployerDetails;

            $this->setVariable();

            $this->data['method'] = "manageEmployer";
            $this->load->view('adminDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }

    public function viewEmployer()
    {
        if (isset($_SESSION['adminId'])) {
            $id = $this->uri->segment(3);

            $verifyEmployerDetails = $this->AdminModel->verifyEmployerDetails($id);
            $this->data['manageEmployer'] = $verifyEmployerDetails;

            $employerJobDetails = $this->AdminModel->employerJobDetails($id);
            $this->data['jobDetails'] = $employerJobDetails;

            $this->setVariable();

            $this->data['method'] = "viewEmployer";
            $this->load->view('adminDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }

    public function verifyEmployer()
    {
        if (isset($_SESSION['adminId'])) {
            $postData = $this->input->post(null, true);
            $verifyEmployer = $this->AdminModel->verifyEmployer();
            $this->dashboard();
        } else {
            $this->index();
        }
    }

    public function deleteEmployerForm()
    {
        if (isset($_SESSION['adminId'])) {
            $postData = $this->input->post(null, true);
            $deleteRequestEmployer = $this->AdminModel->deleteEmployer();
            $this->dashboard();
        } else {
            $this->index();
        }
    }

    public function restoreEmployerform()
    {
        if (isset($_SESSION['adminId'])) {
            $postData = $this->input->post(null, true);
            $restoreEmployerDetails = $this->AdminModel->restoreEmployerDetails();
            $this->deleteEmployerList();
        } else {
            $this->index();
        }
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


    // EMPLOYER JOB POST BY ADMIN

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


    // CANDIDATES

    public function createCandidates()
    {
        if (isset($_SESSION['adminId'])) {
            $this->data['method'] = "createEmployees";
            $this->setVariable();
            $this->load->view('adminDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }


    public function employeeRegistration()
    {
        if (isset($_SESSION['adminId'])) {
            $postData = $this->input->post(null, true);
            $register = $this->CandidateModel->register();
            $generatedeeid = $this->CandidateModel->generate_customer_id();
            $this->newCandidateList();
            echo '<script>alert("Candidate registered successfully.");</script>';
        } else {
            $this->index();
        }
    }

    public function createCandidatesAdmin()
    {
        if (isset($_SESSION['adminId'])) {
            $this->data['method'] = "createEmployees1";
            $this->setVariable();
            $this->load->view('adminDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }

    public function employeeRegistrationAdmin()
    {
        if (isset($_SESSION['adminId'])) {
            $postData = $this->input->post(null, true);
            $register = $this->CandidateModel->register();
            $generatedeeid = $this->CandidateModel->generate_customer_id();
            $this->basicDetails();
            echo '<script>alert("Candidate registered successfully.");</script>';
        } else {
            $this->index();
        }
    }

    public function newCandidateList()
    {
        if (isset($_SESSION['adminId'])) {
            $this->data['method'] = "unVerifiedEmployees";
            $unVerifiedEmployees = $this->AdminModel->unVerifiedEmployees();
            $this->data['unVerifiedEmployees'] = $unVerifiedEmployees;
            $this->setVariable();
            $this->load->view('adminDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }

    public function verifiedCandidate()
    {
        if (isset($_SESSION['adminId'])) {
            $this->data['method'] = "verifiedEmployees";
            $verifiedEmployees = $this->AdminModel->verifiedEmployees();
            $this->data['verifiedEmployees'] = $verifiedEmployees;
            $this->setVariable();
            $this->load->view('adminDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }
    public function pendingCandidates()
    {
        if (isset($_SESSION['adminId'])) {
            $this->data['method'] = "pendingEmployees";
            $pendingEmployees = $this->AdminModel->pendingEmployees();
            $this->data['pendingEmployees'] = $pendingEmployees;
            $this->setVariable();
            $this->load->view('adminDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }

    public function deleteCandidateList()
    {
        if (isset($_SESSION['adminId'])) {
            $this->data['method'] = "deleteEmployeeList";
            $deleteEmployeeList = $this->AdminModel->deleteEmployeeList();
            $this->data['deleteEmployeeList'] = $deleteEmployeeList;
            $this->setVariable();
            $this->load->view('adminDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }

    public function overallCandidates()
    {
        if (isset($_SESSION['adminId'])) {
            $this->data['method'] = "overallEmployees";
            $overallEmployees = $this->AdminModel->overallEmployees();
            $this->data['overallEmployees'] = $overallEmployees;
            $this->setVariable();
            $this->load->view('adminDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }

    public function deleteOverallEmployees()
    {
        if (isset($_SESSION['adminId'])) {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST['selected_items']) && is_array($_POST['selected_items'])) {
                    $selectedItems = $_POST['selected_items'];
                    foreach ($selectedItems as $itemId) {
                        $this->AdminModel->deleteOverallEmployees($itemId);
                    }
                    $this->deleteCandidateList();
                } else {
                    $this->overallCandidates();
                    echo '<script>alert("Please select the checkbox to delete.");</script>';
                }
            }
        } else {
            $this->index();
        }
    }

    // CANDIDATE FORM

    public function basicDetails()
    {
        if (isset($_SESSION['adminId'])) {
            $id = $this->uri->segment(3);
            $basicDetails = $this->AdminModel->getBasicDetails($id);
            $this->data['basicDetails'] = $basicDetails;
            $this->setVariable();
            $this->data['method'] = 'basicdetails';
            $this->load->view('adminDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }

    public function updateBasicDetails()
    {
        if (isset($_SESSION['adminId'])) {
            $postData = $this->input->post(null, true);
            $updateBasicDetails = $this->CandidateModel->updateBasicDetails();
            $this->overallCandidates();
            echo '<script>alert("Basic details inserted successfully by admin.");</script>';
        } else {
            $this->index();
        }
    }

    // EDUCATION

    public function educationTable()
    {
        if (isset($_SESSION['adminId'])) {
            $id = $this->uri->segment(3);
            //  $educationTable = $this->AdminModel->educationTable($id);
            //  $this->data['educationTable'] = $educationTable;
            $this->data['candidateId'] = $id;
            $this->setVariable();
            $this->data['method'] = 'educationTable';
            $this->load->view('adminDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }

    public function insertEducationForm()
    {
        if (isset($_SESSION['adminId'])) {
            $insertEducationForm = $this->CandidateModel->insertEducationForm();
            // $insertEducationForm = $this->CandidateModel->insertSubmit();

            $this->overallCandidates();
            echo '<script>alert("Education details inserted successfully by admin.");</script>';
        } else {
            $this->index();
        }
    }

    // EXPERIENCE    

    public function experienceTable()
    {
        if (isset($_SESSION['adminId'])) {
            $id = $this->uri->segment(3);
            $this->data['candidateId'] = $id;

            $categoryList = $this->CandidateModel->getCategoryList();
            $this->data['categoryList'] = $categoryList;

            $this->setVariable();
            $this->data['method'] = "experienceTable";
            $this->load->view('adminDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }

    public function insertExperienceForm()
    {
        if (isset($_SESSION['adminId'])) {
            $insertExperienceForm = $this->CandidateModel->insertExperienceForm();

            $this->overallCandidates();
            echo '<script>alert("Experience details inserted successfully.");</script>';
        } else {
            $this->index();
        }
    }

    public function insertFresherForm()
    {
        if (isset($_SESSION['adminId'])) {
            // $id = $this->uri->segment(3);
            $insertExperienceForm = $this->CandidateModel->insertFresherForm();

            $this->overallCandidates();
            echo '<script>alert("Experience is inserted as No experience.");</script>';
        } else {
            $this->index();
        }
    }

    // AREA OF INTEREST

    public function areaOfIntrestTable()
    {
        if (isset($_SESSION['adminId'])) {
            $id = $this->uri->segment(3);
            $this->data['candidateId'] = $id;

            $this->data['method'] = "areaOfIntrestTable";

            $categoryList = $this->CandidateModel->getCategoryList();
            $this->data['categoryList'] = $categoryList;

            $this->setVariable();
            $this->load->view('adminDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }

    public function insertAreaOfIntrest()
    {
        if (isset($_SESSION['adminId'])) {
            $insertAreaOfIntrest = $this->AdminModel->jobInterestResume();

            $this->overallCandidates();
            echo '<script>alert("Area of interest inserted successfully by admin.");</script>';
        } else {
            $this->index();
        }
    }

    // SKILLS

    public function skillTable()
    {
        if (isset($_SESSION['adminId'])) {
            $this->data['method'] = "addSkillForm";
            $id = $this->uri->segment(3);
            $this->data['candidateId'] = $id;
            $this->setVariable();
            $this->load->view('adminDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }

    public function insertSkillForm()
    {
        if (isset($_SESSION['adminId'])) {
            $insertSkillForm = $this->CandidateModel->insertSkillForm();
            $this->overallCandidates();
            echo '<script>alert("Skill inserted successfully by admin.");</script>';
        } else {
            $this->index();
        }
    }

    public function manageCandidate()
    {
        if (isset($_SESSION['adminId'])) {
            $id = $this->uri->segment(3);
            $this->data['method'] = "manageEmployee";

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
        } else {
            $this->index();
        }
    }

    public function viewCandidate()
    {
        if (isset($_SESSION['adminId'])) {
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
        } else {
            $this->index();
        }
    }

    public function resumePrint()
    {
        if (isset($_SESSION['adminId'])) {
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
        } else {
            $this->index();
        }
    }

    public function verifyEmployee()
    {
        if (isset($_SESSION['adminId'])) {
            $postData = $this->input->post(null, true);
            $verifyEmployeeDetails = $this->AdminModel->verifyEmployeeDetails();
            $this->verifiedCandidate();
        } else {
            $this->index();
        }
    }

    public function deleteEmployeeform()
    {
        if (isset($_SESSION['adminId'])) {
            $postData = $this->input->post(null, true);
            $deleteEmployeeDetails = $this->AdminModel->deleteEmployeeDetails();
            $this->deleteCandidateList();
        } else {
            $this->index();
        }
    }

    public function restoreEmployeeform()
    {
        if (isset($_SESSION['adminId'])) {
            $postData = $this->input->post(null, true);
            $restoreEmployeeDetails = $this->AdminModel->restoreEmployeeDetails();
            $this->deleteCandidateList();
        } else {
            $this->index();
        }
    }

    // Delete Employee from Table permanently

    // public function employerApprovelRequest()
    // {
    //     $addNewEmployerApprovel = $this->AdminModel->addNewEmployerApprovel();
    //     $this->data['addNewEmployerApprovel'] = $addNewEmployerApprovel;

    //     $deleteEmployerApprovel = $this->AdminModel->deleteEmployerApprovel();
    //     $this->data['deleteEmployerApprovel'] = $deleteEmployerApprovel;

    //     $this->data['method'] = "addNewEmployerApprovel";
    //     $this->load->view('adminDashboard.php', $this->data);
    // }


    // CANDIDATE AND EMPLOYER TRACKING CHART

    public function candidateChart()
    {
        if (isset($_SESSION['adminId'])) {
            $this->data['method'] = "candidateChart";
            $candidateChartList = $this->AdminModel->candidateChartDetails();
            $this->data['candidateChartList'] = $candidateChartList["response"];
            $this->setVariable();
            $this->load->view('adminDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }

    // public function employerChart()
    // {
    //     $this->data['method'] = "employerChart";
    //     $employerChartList = $this->AdminModel->employerChartDetails();
    //     $this->data['employerChartList'] = $employerChartList["response"];
    //     // $filteredEmployerChartList = array_filter($employerChartList["response"], function($item) {
    //     //     return $item['currentStatus'] == 1;
    //     // });

    //     // $this->data['employerChartList'] = $filteredEmployerChartList;
    //     $this->setVariable();
    //     $this->load->view('adminDashboard.php', $this->data);
    // }


    public function employerChart()
    {
        if (isset($_SESSION['adminId'])) {
            $this->data['method'] = "employerChart";
            $candidateplaced = $this->AdminModel->employerChartDetails();
            $this->data['employerChart'] = $candidateplaced["response"];
            $this->setVariable();
            $this->load->view('adminDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }

    public function updateCurrentStatus()
    {
        if (isset($_SESSION['adminId'])) {
            $postData = $this->input->post(null, true);
            $updateStatus = $this->AdminModel->candidateStatus();
            $currentStatus = $this->AdminModel->currentStatusSpf();
            $this->candidateChart();
        } else {
            $this->index();
        }
    }

    public function updateCurrentStatusEmp()
    {
        if (isset($_SESSION['adminId'])) {
            $postData = $this->input->post(null, true);
            $updateStatus = $this->AdminModel->employerStatus();
            $currentStatus = $this->AdminModel->currentStatusSpfEmp();
            $this->employerChart();
        } else {
            $this->index();
        }
    }

    // CANDIDATE STATUS

    public function placedCandidate()
    {
        if (isset($_SESSION['adminId'])) {
            $this->data['method'] = "placedCandidates";
            $candidateplaced = $this->AdminModel->placedCandidatesList();
            $this->data['placedCandidates'] = $candidateplaced["response"];
            $this->setVariable();
            $this->load->view('adminDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }

    public function placedCandidatesDetails()
    {
        $this->data['method'] = "placedCandidatesDetails";
        $candidateplaced = $this->AdminModel->placedCandidatesDetails();
        $this->data['placedCandidatesDetails'] = $candidateplaced;
        $this->setVariable();

        $id = $this->uri->segment(3);
        $basicDetails = $this->EmployerModel->candidate($id);
        $this->data['basicDetails'] = $basicDetails;

        $areaOfInterest = $this->EmployerModel->areaOfInterest($id);
        $this->data['areaOfInterest'] = $areaOfInterest;

        $employerJobDetails = $this->AdminModel->employerJobDetails($id);
        $this->data['jobDetails'] = $employerJobDetails;

        $this->load->view('adminDashboard.php', $this->data);
    }

    public function interviewedCandidate()
    {
        if (isset($_SESSION['adminId'])) {
            $this->data['method'] = "interviewedCandidates";
            $candidateinterviewed = $this->AdminModel->interviewedCandidatesList();
            $this->data['interviewedCandidates'] = $candidateinterviewed["response"];
            $this->setVariable();
            $this->load->view('adminDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }

    public function rejectedCandidate()
    {
        if (isset($_SESSION['adminId'])) {
            $this->data['method'] = "rejectedCandidate";
            $candidateRejected = $this->AdminModel->rejectedCandidatesList();
            $this->data['rejectedCandidates'] = $candidateRejected["response"];
            $this->setVariable();
            $this->load->view('adminDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }

    public function relievedCandidate()
    {
        if (isset($_SESSION['adminId'])) {
            $this->data['method'] = "relievedCandidate";
            $candidateRelieved = $this->AdminModel->relievedCandidatesList();
            $this->data['relievedCandidates'] = $candidateRelieved["response"];
            $this->setVariable();
            $this->load->view('adminDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }

    // CANDIDATE REQUEST

    public function candidateRequestList()
    {
        if (isset($_SESSION['adminId'])) {
            $this->data['method'] = "candidateRequestList";
            $candidateRequestList = $this->AdminModel->candidateRequestDetails();
            $this->data['candidateRequestList'] = $candidateRequestList["response"];
            $this->setVariable();
            $this->load->view('adminDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }

    public function approveCandidateRequest()
    {
        if (isset($_SESSION['adminId'])) {
            $postData = $this->input->post(null, true);
            $approveRequest = $this->AdminModel->approveRequest();
            $this->candidateChart();
        } else {
            $this->index();
        }
    }

    public function cancelCandidateRequest()
    {
        if (isset($_SESSION['adminId'])) {
            $postData = $this->input->post(null, true);
            $cancelRequest = $this->AdminModel->cancelRequest();
            $this->candidateRequestList();
        } else {
            $this->index();
        }
    }

    // CATEGORY REQUEST

    public function categoryRequest()
    {
        if (isset($_SESSION['adminId'])) {
            $this->data['method'] = "categoryRequest";

            $candidateNewCategory = $this->AdminModel->candidateNewCategory();
            $this->data['candidateNewCategory'] = $candidateNewCategory;

            $candidateNewCategoryArea = $this->AdminModel->candidateNewCategoryArea();
            $this->data['candidateNewCategoryArea'] = $candidateNewCategoryArea;

            $employerNewCategory = $this->AdminModel->employerNewCategory();
            $this->data['employerNewCategory'] = $employerNewCategory;

            $this->setVariable();

            $this->load->view('adminDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }

    public function addNewCategoryExperience()
    {
        if (isset($_SESSION['adminId'])) {
            $postData = $this->input->post(null, true);
            $newcategory = $this->AdminModel->addcategoryExperience();
            $this->categoryRequest();
        } else {
            $this->index();
        }
    }

    public function addNewCategoryArea()
    {
        if (isset($_SESSION['adminId'])) {
            $postData = $this->input->post(null, true);
            $newcategory = $this->AdminModel->addcategoryArea();
            $this->categoryRequest();
        } else {
            $this->index();
        }
    }

    public function employerNewCategory()
    {
        if (isset($_SESSION['adminId'])) {
            $postData = $this->input->post(null, true);
            $newcategory = $this->AdminModel->addcategoryEmployerJob();
            $this->categoryRequest();
        } else {
            $this->index();
        }
    }

    public function cancelNewCategoryExp()
    {
        if (isset($_SESSION['adminId'])) {
            $postData = $this->input->post(null, true);
            $cancelnewcategory = $this->AdminModel->cancelNewCategoryExp();
            $this->categoryRequest();
        } else {
            $this->index();
        }
    }

    public function cancelNewCategoryArea()
    {
        if (isset($_SESSION['adminId'])) {
            $postData = $this->input->post(null, true);
            $cancelnewcategory = $this->AdminModel->cancelNewCategoryArea();
            $this->categoryRequest();
        } else {
            $this->index();
        }
    }

    public function cancelNewCategoryJob()
    {
        if (isset($_SESSION['adminId'])) {
            $postData = $this->input->post(null, true);
            $cancelnewcategory = $this->AdminModel->cancelNewCategoryJob();
            $this->categoryRequest();
        } else {
            $this->index();
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('adminId');
        $this->session->unset_userdata('adminName');
        $this->session->unset_userdata('adminNumber');
        $this->session->unset_userdata('role');
        $this->session->unset_userdata('adminid');

        $this->index();
    }

}

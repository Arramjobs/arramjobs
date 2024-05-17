<?php
class Employer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('EmployerModel');
        $this->load->library('session');
    }

    public function login()
    {
        $this->load->view('employerLogin.php');
    }

    public function registration()
    {
        $this->load->view('employerRegistration.php');
    }

    public function index()
    {
        //$responses=$this->EmployerModel->register();
        $this->load->view('employerLogin.php');
    }

    // public function setVariable()
    // {
    //     $jobCategory = $this->uri->segment(3);
    //     $candidateTotalRows = $this->EmployerModel->candidates($jobCategory);
    //     $this->data['canReqTotalRows'] = $candidateTotalRows["totalRows"];
    // }

    public function employerRegistration()
    {
        $phone_number = $this->input->post('mobile');

        if ($this->EmployerModel->checkUserExistence($phone_number)) {
            echo '<script>alert("Phone number already exists. Please use a different number.");</script>';
            $this->load->view('employerRegistration');
        } else {
            $postData = $this->input->post(null, true);
            $register = $this->EmployerModel->register();
            $generatedeeid = $this->EmployerModel->generate_customer_id();
            // $data['generatedeeid'] = $generatedeeid;
            $this->load->view('employerRegistered.php');
        }
    }


    //  public function load_login()
    // {
    //      $postData=$this->input->post(null,true);
    //      $response=$this->EmployerModel->database_login();
    //      if(isset($response[0]['id']))
    //     {
    //         $this->data['method']="dashboard";
    //         $this->load->view('exampleDashboard.php',$this->data);
    //     }
    //     else{
    //         $this->load->view('provider_login.php');
    //     }
    // }


    // ,$this[data]


    // public function viewDashboard()
    // {
    //     $postData = $this->input->post(null, true);
    //     $response = $this->EmployerModel->providerLogin();
    //     if (isset($response[0]['id'])) {
    //         $userLoggedIn = array(
    //             'jobProviderId' => $response[0]['id'],
    //             'jobProviderUsername' => $response[0]['company_name'],
    //             'jobProviderNumber' => $response[0]['company_mobile_number'],
    //             'employerid' => $response[0]['erid'],

    //             'jobProviderId' => $response[0]['jobProviderId'],
    //             'jobProviderUserId' => $response[0]['user_id'],
    //             'jobProviderPassword' => $response[0]['password']

    //         );
    //         $this->session->set_userdata($userLoggedIn);
    //         $this->data['method'] = "dashboard";
    //         $this->load->view('employerDashboard.php', $this->data);
    //     } else {

    //         $this->load->view('employerLogin.php');
    //         echo '<script>alert("Please enter registered company details.");</script>';
    //     }
    // }

    public function viewDashboard()
    {
        $postData = $this->input->post(null, true);
        $response = $this->EmployerModel->providerLogin();
        $verifyOne = (isset($response[0]['verifyOne'])) ? ($response[0]['verifyOne']) : null;
        $verifyTwo = (isset($response[0]['verifyTwo'])) ? ($response[0]['verifyTwo']) : null;
        $deleteStatus = (isset($response[0]['deleteStatus'])) ? ($response[0]['deleteStatus']) : null;
        if ($verifyOne == '1' && $verifyTwo == '1' && $deleteStatus == '0') {
            $userLoggedIn = array(
                'jobProviderId' => $response[0]['id'],
                'jobProviderUsername' => $response[0]['company_name'],
                'jobProviderNumber' => $response[0]['company_mobile_number'],
                'employerid' => $response[0]['erid'],
            );
            $this->session->set_userdata($userLoggedIn);
            $this->data['method'] = "dashboard";
            $this->load->view('employerDashboard.php', $this->data);
        } else if ($verifyOne == '0' || $verifyTwo == '0' || $deleteStatus == '1') {
            // $this->load->view('employerLogin.php');
            $this->load->view('employerLoginMessage.php');
            // echo '<script>alert("Please wait. Your company details are under registration process.");</script>';
        } else {
            $this->load->view('employerLogin.php');
            echo '<script>alert("Please enter registered company details.");</script>';
        }
    }

    // public function checkMobileNumber() {
    //     $mobileNumber = $this->input->post('mobilenumber');

    //     $existsInDatabase = $this->EmployerModel->checkMobileNumberExists($mobileNumber);

    //     header('Content-Type: application/json');
    //     echo json_encode(['exists' => $existsInDatabase]);
    // }


    public function dashboard()
    {
        if (isset($_SESSION['jobProviderId'])) {
            $this->data['method'] = "dashboard";
            $this->load->view('employerDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }

    public function updateRegistration()
    {
        if (isset($_SESSION['jobProviderId'])) {
            $this->data['method'] = "updateJob";
            $provider = $this->EmployerModel->provider_detail();
            $this->data['providerDetail'] = $provider;
            $this->load->view('employerDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }

    public function jobViewTable()
    {
        if (isset($_SESSION['jobProviderId'])) {
            $this->data['method'] = "jobview";

            $tab = $this->EmployerModel->addTab();
            $this->data['providerJobs'] = $tab;

            $categoryList = $this->EmployerModel->getCategoryList();
            $this->data['categoryList'] = $categoryList;

            $jobProviderId = $_SESSION['jobProviderId'];
            $employerId = $_SESSION['employerid'];

            $counts = $this->EmployerModel->getSeekerCountsByJobCategory($jobProviderId, $employerId);
            $this->data['mcCount'] = $counts;

            $this->load->view('employerDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }

    public function jobMatchedTable()
    {
        if (isset($_SESSION['jobProviderId'])) {
            $jobCategory = $this->uri->segment(3);
            $response = $this->EmployerModel->candidates($jobCategory);
            $this->data['method'] = "match";
            // $this->data['response'] = $response["response"];
            $this->data['response'] = $response;
            $this->data['category'] = $jobCategory;
            // $this->setVariable();
            $this->load->view('employerDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }

    public function matchedCandidate()
    {
        if (isset($_SESSION['jobProviderId'])) {
            $allcandidates = $this->EmployerModel->matchedAllCandidate();
            $this->data['method'] = "allCandidate";

            $this->data['candidateView'] = $allcandidates;
            $this->load->view('exampleDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }


    // public function jobWishlistCandidates()
    // {
    //     $this->data['method'] = "wishlist";
    //     // $this->load->view('job_wishlist_candidates.php');
    //     $this->load->view('exampleDashboard.php', $this->data);
    // }


    public function update_record()
    {
        if (isset($_SESSION['jobProviderId'])) {
            $postData = $this->input->post(null, true);
            $var = $this->EmployerModel->update_data();
            // echo "Record updated successfully";
            $this->jobViewTable();
            echo '<script>alert("Company profile updated successfully.");</script>';
        } else {
            $this->index();
        }
    }


    // public function addNewJob()
    // {
    //     $this->data['method'] = "addnew";

    //     $categoryList = $this->EmployerModel->getCategoryList();
    //     $this->data['categoryList'] = $categoryList;

    //     $this->load->view('employerDashboard.php', $this->data);
    // }


    public function insertJob()
    {
        if (isset($_SESSION['jobProviderId'])) {
            $this->data['method'] = "jobs";
            $addJob = $this->EmployerModel->addNew();
            // echo "Record added seccessfuly";
            $this->jobViewTable();
            echo '<script>alert("Job details inserted successfully.");</script>';
        } else {
            $this->index();
        }
    }

    public function updateAddNew()
    {
        if (isset($_SESSION['jobProviderId'])) {
            $id = $this->uri->segment(3);
            $this->data['method'] = "updateaddnew";

            $tab = $this->EmployerModel->addTab();
            $this->data['providerJobs'] = $tab;

            $addjob = $this->EmployerModel->updatejob($id);
            $this->data['updateAddNew'] = $addjob;

            $categoryList = $this->EmployerModel->getCategoryList();
            $this->data['categoryList'] = $categoryList;

            //$this->load->view('update_addnew_jobs.php',$this->data);
            $this->load->view('employerDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }

    public function updateInsert()
    {
        if (isset($_SESSION['jobProviderId'])) {
            $postData = $this->input->post(null, true);
            $add = $this->EmployerModel->update_job();

            // echo "Record updated Successfully";
            $this->jobViewTable();
            echo '<script>alert("Job details updated successfully.");</script>';
        } else {
            $this->index();
        }
    }

    public function deleteAddJob()
    {
        if (isset($_SESSION['jobProviderId'])) {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST['selected_items']) && is_array($_POST['selected_items'])) {
                    $selectedItems = $_POST['selected_items'];
                    foreach ($selectedItems as $deleteId) {
                        $this->EmployerModel->deleteAddJob($deleteId);
                    }
                    $this->jobViewTable();
                } else {
                    $this->jobViewTable();
                    echo '<script>alert("Please select the checkbox to delete.");</script>';
                }
            }
        } else {
            $this->index();
        }
    }

    public function resumeCard()
    {
        if (isset($_SESSION['jobProviderId'])) {
            $id = $this->uri->segment(3);
            $this->data['method'] = "resume";


            $education = $this->EmployerModel->educationalDetails($id);
            $this->data['education'] = $education;

            $skills = $this->EmployerModel->skills($id);
            $this->data['skills'] = $skills;

            $projectDetails = $this->EmployerModel->projectDetails($id);
            $this->data['projectDetails'] = $projectDetails;

            $areaOfInterest = $this->EmployerModel->areaOfInterest($id);
            $this->data['areaOfInterest'] = $areaOfInterest;

            $experienceDetails = $this->EmployerModel->experienceDetails($id);
            $this->data['experienceDetails'] = $experienceDetails;

            $seekerName = $this->EmployerModel->candidate($id);
            $this->data['basicDetails'] = $seekerName;

            $reqStatus = $this->EmployerModel->canRequestStatus($id);
            $this->data['canReqStatus'] = $reqStatus;

            $this->load->view('employerDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }

    public function resumePrint()
    {
        if (isset($_SESSION['jobProviderId'])) {
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

            // $this->setVariable();

            $this->load->view('employerDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }

    public function basicDetails()
    {
        if (isset($_SESSION['jobProviderId'])) {
            $id = $this->uri->segment(3);
            $basicDetails = $this->AdminModel->getBasicDetails($id);
            $this->data['basicDetails'] = $basicDetails;
            // $this->setVariable();
            $this->data['method'] = 'basicdetails';
            $this->load->view('employerDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }

    public function educationTable()
    {
        if (isset($_SESSION['jobProviderId'])) {
            $id = $this->uri->segment(3);
            //  $educationTable = $this->AdminModel->educationTable($id);
            //  $this->data['educationTable'] = $educationTable;
            $this->data['candidateId'] = $id;
            // $this->setVariable();
            $this->data['method'] = 'educationTable';
            $this->load->view('employerDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }

    public function experienceTable()
    {
        if (isset($_SESSION['jobProviderId'])) {
            $id = $this->uri->segment(3);
            $this->data['candidateId'] = $id;

            // $experienceTable = $this->CandidateModel->experienceTable();
            // $this->data['experienceTable'] = $experienceTable['response'];

            $categoryList = $this->CandidateModel->getCategoryList();
            $this->data['categoryList'] = $categoryList;

            $this->setVariable();
            $this->data['method'] = "experienceTable";
            $this->load->view('adminDashboard.php', $this->data);
        } else {
            $this->index();
        }
    }

    // public function filterAllCandidate()
    // {
    //     $postData = $this->input->post(null, true);
    //     $category = $postData['category'];
    //     $subcategory = $postData['subcategory'];
    //     $filter = $this->EmployerModel->filterCandidate($category, $subcategory);
    //     $this->data['filtercandidate'] = $filter;
    //     $this->data['method'] = "filltercandidate";
    //     $this->load->view('exampleDashboard.php', $this->data);
    // }


    public function requestCandidate()
    {
        if (isset($_SESSION['jobProviderId'])) {
            $postData = $this->input->post(null, true);
            $requestCandidate = $this->EmployerModel->requestForCandidate();
            $this->jobViewTable();
        } else {
            $this->index();
        }
    }


    public function logout()
    {
        // $this->session->unset_userdata('userLoggedIn');
        $this->session->unset_userdata('jobProviderId');
        $this->session->unset_userdata('jobProviderUsername');
        $this->session->unset_userdata('jobProviderNumber');
        $this->session->unset_userdata('employerid');
        $this->index();
    }


    //     public function filter() {
    //         $this->data['method']="match";
    //         $category = $this->input->post('category'); 
    //         $subcategory = $this->input->post('subcategory'); 
    //         $filtered_records = $this->EmployerModel->getFilteredRecords($category, $subcategory);

    //         $data['filtered_records'] = $filtered_records;
    //         $this->load->view('exampleDashboard.php', $data); 

    // }


    // public function innerjoin()
    // {
    //     $id=$this->uri->segment(3);
    //     $this->load->EmployerModel->joinTables($id);
    // }

}

?>
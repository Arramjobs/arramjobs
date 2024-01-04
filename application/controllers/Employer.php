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

    public function employerRegistration() {
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
        $verifyOne = (isset($response[0]['verifyOne']))? ($response[0]['verifyOne']) : null;
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
            echo '<script>alert("You now have access to login with your mobile number and password.");</script>';
        } else if ($verifyOne == '0' || $verifyTwo == '0' || $deleteStatus == '1') {
            $this->load->view('employerLogin.php');
            echo '<script>alert("Approval for your login is under process. Please wait ...");</script>';
        } else {
            $this->load->view('employerLogin.php');
            echo '<script>alert("Please enter registered Mobile number and password.");</script>';
        }
    }

public function checkMobileNumber() {
    $mobileNumber = $this->input->post('mobilenumber');

    $existsInDatabase = $this->EmployerModel->checkMobileNumberExists($mobileNumber);

    header('Content-Type: application/json');
    echo json_encode(['exists' => $existsInDatabase]);
}

    // public function viewDashboard()
    // {
    //     $postData = $this->input->post(null, true);
    //     $response = $this->EmployerModel->database_login();
    //     if (isset($response[0]['id'])) {
    //         $userLoggedIn = array(
    //             'jobProviderId' => $response[0]['jobProviderId'],
    //             'jobProviderUserId' => $response[0]['user_id'],
    //             'jobProviderPassword' => $response[0]['password']
    //         );
    //         $this->session->set_userdata($userLoggedIn);
    //         $this->data['method'] = "dashboard";
    //         $this->load->view('exampleDashboard.php', $this->data);
    //     } else {
    //         $this->load->view('providerLogin.php');
    //     }
    // }


    public function dashboard()
    {
        $this->data['method'] = "dashboard";
        $this->load->view('employerDashboard.php', $this->data);
    }



    public function updateRegistration()
    {
        $this->data['method'] = "updateJob";
        $provider = $this->EmployerModel->provider_detail();
        $this->data['providerDetail'] = $provider;
        $this->load->view('employerDashboard.php', $this->data);
    }

    public function jobViewTable()
    {
        $this->data['method'] = "jobview";

        $tab = $this->EmployerModel->addTab();
        $this->data['providerJobs'] = $tab;

        $categoryList = $this->EmployerModel->getCategoryList();
        $this->data['categoryList'] = $categoryList;

        $this->load->view('employerDashboard.php', $this->data);
    }


    public function jobMatchedTable()
    {
        $jobCategory = $this->uri->segment(3);
        $response = $this->EmployerModel->candidates($jobCategory);
        $this->data['method'] = "match";
        $this->data['response'] = $response;
        $this->data['category'] = $jobCategory;
        $this->load->view('employerDashboard.php', $this->data);
    }

    public function matchedCandidate()
    {
        $allcandidates = $this->EmployerModel->matchedAllCandidate();
        $this->data['method'] = "allCandidate";

        $this->data['candidateView'] = $allcandidates;
        $this->load->view('exampleDashboard.php', $this->data);
    }



    public function jobWishlistCandidates()
    {
        $this->data['method'] = "wishlist";
        // $this->load->view('job_wishlist_candidates.php');
        $this->load->view('exampleDashboard.php', $this->data);
    }


    public function update_record()
    {
        $postData = $this->input->post(null, true);
        $var = $this->EmployerModel->update_data();
        // echo "Record updated successfully";
        $this->jobViewTable();
        echo '<script>alert("Company profile updated successfully.");</script>';
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
        $this->data['method'] = "jobs";
        $addJob = $this->EmployerModel->addNew();
        // echo "Record added seccessfuly";
        $this->jobViewTable();
        echo '<script>alert("Job details inserted successfully.");</script>';
    }

    public function updateAddNew()
    {
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
    }

    public function updateInsert()
    {
        $postData = $this->input->post(null, true);
        $add = $this->EmployerModel->update_job();

        echo "Record updated Successfully";
        $this->jobViewTable();
        echo '<script>alert("Job details updated successfully.");</script>';
    }

    public function deleteAddJob()
    {
        $deleteId = $this->uri->segment(3);
        $delete = $this->EmployerModel->deleteAddJob($deleteId);
        if ($delete == null) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record";
        }

        $this->jobViewTable();
    }

    public function resumeCard()
    {
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


        $this->load->view('employerDashboard.php', $this->data);
    }

    public function filterAllCandidate()
    {
        $postData = $this->input->post(null, true);
        $category = $postData['category'];
        $subcategory = $postData['subcategory'];
        $filter = $this->EmployerModel->filterCandidate($category, $subcategory);
        $this->data['filtercandidate'] = $filter;
        $this->data['method'] = "filltercandidate";
        $this->load->view('exampleDashboard.php', $this->data);
    }


    public function requestCandidate()
    {
        $postData = $this->input->post(null, true);
        $requestCandidate = $this->EmployerModel->requestForCandidate();
        $this->jobViewTable();
    }


    public function logout()
    {
        $this->session->unset_userdata('userLoggedIn');
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
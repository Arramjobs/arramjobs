<?php
class Candidate extends CI_Controller
{
    private $data = array();
    public function __construct()
    {
        parent::__construct();
        $this->load->model('CandidateModel');
        $this->load->library('session');
    }

    public function registration()
    {
        $this->load->view('candidateRegistration.php');
    }


    public function index()
    {
        $this->load->view('candidateLogin.php');
    }

    public function otpregister()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // $response = $this->CandidateModel->otp();
            echo "<script>window.location.href = 'dash';</script>";
        }
        $this->load->view('seekerOtp.php');
    }

    public function candidateLogin()
    {
        $postData = $this->input->post(null, true);
        $login = $this->CandidateModel->seekerLogin();
        if (isset($login[0]['id'])) {
            $userLoggedIn = array(
                'seekerId' => $login[0]['id'],
                'seekerName' => $login[0]['name'],
                'seekerPhoneNumber' => $login[0]['phonenumber'],
                'employeeidd' => $login[0]['eeid'],
            );
            $this->session->set_userdata($userLoggedIn);
            $this->data['method'] = "dash";
            $this->dash();
        } else {
            $this->load->view('candidateLogin.php', $this->data);
            echo '<script>alert("Please enter registered mobile number.");</script>';
        }
    }

    // public function employeeRegistration()
    // {
    //     $postData = $this->input->post(null, true);
    //     $register = $this->CandidateModel->register();
    //     $generatedeeid = $this->CandidateModel->generate_customer_id();
    //     $data['generatedeeid'] = $generatedeeid;
    //     // $this->load->view('loginform.php');
    //     $this->load->view('employeeRegistered.php', $data);
    // }




    public function candidateRegistration() {
        $phone_number = $this->input->post('phonenumber');

        if ($this->CandidateModel->checkUserExistence($phone_number)) {
            echo '<script>alert("Phone number already exists. Please use a different number.");</script>';
            $this->load->view('candidateRegistration');
        } else {
            $postData = $this->input->post(null, true);
            $register = $this->CandidateModel->register();
            $generatedeeid = $this->CandidateModel->generate_customer_id();
            // $data['generatedeeid'] = $generatedeeid;
            $this->load->view('candidateRegistered.php');
        }
    }


    public function setVariable()
    {
        $basicDetails = $this->CandidateModel->getBasicDetails();
        $this->data['basicDetails'] = $basicDetails;

        $eduTotalRows = $this->CandidateModel->educationTable();
        $this->data['eduTotalRows'] = $eduTotalRows["totalRows"];

        $expTotalRows = $this->CandidateModel->experienceTable();
        $this->data['expTotalRows'] = $expTotalRows["totalRows"];

        $resume = $this->CandidateModel->areaOfIntrestTable();
        $this->data['resume'] = $resume["response"];

        $areaTotalRows = $this->CandidateModel->areaOfIntrestTable();
        $this->data['areaTotalRows'] = $areaTotalRows["totalRows"];
    }


    public function dash()
    {
        $basicDetails = $this->CandidateModel->getBasicDetails();
        $this->data['basicDetails'] = $basicDetails;
        $this->data['method'] = "dash";
        $this->setVariable();
        $this->load->view('candidateDashboard.php',  $this->data);
    }


    public function basicDetails()
    {
        // $basicDetails = $this->CandidateModel->getBasicDetails();
        // $this->data['basicDetails'] = $basicDetails;
        $this->data['method'] = 'basicdetails';
        $this->setVariable();
        $this->load->view('candidateDashboard.php', $this->data);
    }

    public function updateBasicDetails()
    {
        $postData = $this->input->post(null, true);
        $updateBasicDetails = $this->CandidateModel->updateBasicDetails();
        $this->educationTable();
        echo '<script>alert("Basic details inserted successfully.");</script>';
    }



    // education

    public function educationTable()
    {
        $this->data['method'] = "educationTable";
        $educationTable = $this->CandidateModel->educationTable();
        $this->data['educationTable'] = $educationTable['response'];
        $this->setVariable();
        $this->load->view('candidateDashboard.php', $this->data);
    }

    // public function addEducationForm()
    // {
    //     $this->data['method'] = "addEducationForm";
    //     $this->load->view('candidateDashboard.php', $this->data);
    // }

    public function insertEducationForm()
    {
        $insertEducationForm = $this->CandidateModel->insertEducationForm();
        $insertEducationForm = $this->CandidateModel->insertSubmit();

        $this->educationTable();
        echo '<script>alert("Education details inserted successfully.");</script>';

    }
    public function updateEducation()
    {
        $educationTable = $this->CandidateModel->educationTable();
        $this->data['educationTable'] = $educationTable['response'];
        $educationId = $this->uri->segment(3);
        $this->data['method'] = "updateEducation";
        $updateEducation = $this->CandidateModel->updateEducation($educationId);
        $this->data['updateEducation'] = $updateEducation;
        $this->setVariable();
        $this->load->view('candidateDashboard.php', $this->data);
    }
    public function updateInsertEducation()
    {
        $post = $this->input->post(null, true);
        $updateInsertEducation = $this->CandidateModel->updateInsertEducation();

        $this->educationTable();
        echo '<script>alert("Education details updated successfully.");</script>';

    }

    // public function deleteEducation()
    // {
    //     $deleteEducationId = $this->uri->segment(3);
    //     $delete = $this->CandidateModel->deleteEducation($deleteEducationId);
    //     if ($delete == null) {
    //         $this->educationTable();
    //     } else {
    //         echo "Error deleting record";
    //     }
    // }

    public function delete_selected()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['selected_items']) && is_array($_POST['selected_items'])) {
                $selectedItems = $_POST['selected_items'];
                foreach ($selectedItems as $itemId) {
                    $this->CandidateModel->delete_item($itemId);
                }
                $this->educationTable();
            } else {
                $this->educationTable();
                echo '<script>alert("Please select the checkbox to delete.");</script>';
            }
        }
    }


    // experience

    public function experienceTable()
    {
        $this->data['method'] = "experienceTable";

        $experienceTable = $this->CandidateModel->experienceTable();
        $this->data['experienceTable'] = $experienceTable['response'];

        $categoryList = $this->CandidateModel->getCategoryList();
        $this->data['categoryList'] = $categoryList;

        $this->setVariable();

        $this->load->view('candidateDashboard.php', $this->data);
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
        $insertExperienceForm = $this->CandidateModel->insertSubmitExp();

        $this->experienceTable();
        echo '<script>alert("Experience details inserted successfully.");</script>';
    }

    public function insertFresherForm()
    {
        $insertExperienceForm = $this->CandidateModel->insertFresherForm();

        $this->areaOfIntrestTable();
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

        $this->load->view('candidateDashboard.php', $this->data);
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



    //    project

    // public function projectTable()
    // {
    //     $this->data['method'] = "projectTable";
    //     $projectTable = $this->CandidateModel->projectTable();
    //     $this->data['projectTable'] = $projectTable;

    //     $this->load->view('seekerView.php', $this->data);
    // }

    // public function addProjectForm()
    // {
    //     $this->data['method'] = "addProjectForm";
    //     $this->load->view('seekerView.php', $this->data);
    // }

    // public function insertProjectForm()
    // {
    //     $insertProjectForm = $this->CandidateModel->insertProjectForm();
    //     $this->projectTable();
    // }

    // public function updateProject()
    // {
    //     $projectId = $this->uri->segment(3);
    //     $this->data['method'] = "updateProject";
    //     $updateProject = $this->CandidateModel->updateProject($projectId);
    //     $this->data['updateProject'] = $updateProject;
    //     $this->load->view('seekerView.php', $this->data);
    // }

    // public function updateInsertProject()
    // {
    //     $post = $this->input->post(null, true);
    //     $updateInsertProject = $this->CandidateModel->updateInsertProject();
    //     $this->projectTable();
    // }

    // public function deleteProject()
    // {
    //     $deleteProjectId = $this->uri->segment(3);
    //     $delete = $this->CandidateModel->deleteProject($deleteProjectId);
    //     if ($delete == null) {
    //         $this->projectTable();
    //     } else {
    //         echo "Error deleting record";
    //     }
    // }



    // area of interest

    public function areaOfIntrestTable()
    {
        $this->data['method'] = "areaOfIntrestTable";

        $areaOfIntrestTable = $this->CandidateModel->areaOfIntrestTable();
        $this->data['areaOfIntrestTable'] = $areaOfIntrestTable['response'];

        $skillTable = $this->CandidateModel->skillTable();
        $this->data['skillTable'] = $skillTable;

        $categoryList = $this->CandidateModel->getCategoryList();
        $this->data['categoryList'] = $categoryList;

        $this->setVariable();

        $this->load->view('candidateDashboard.php', $this->data);
    }

    // public function addAreaOfIntrestForm()
    // {
    //     $this->data['method'] = "addAreaOfIntrestForm";
    //     $basicDetails = $this->CandidateModel->getBasicDetails();

    //     $categoryList = $this->CandidateModel->getCategoryList();
    //     $this->data['categoryList'] = $categoryList;
        
    //     $this->data['basicDetails'] = $basicDetails;
    //     $this->load->view('candidateDashboard.php', $this->data);
    // }

    public function insertAreaOfIntrest()
    {
        $insertAreaOfIntrest = $this->CandidateModel->insertAreaOfIntrest();
        $insertAreaOfIntrest = $this->CandidateModel->insertSubmitArea();


        $this->areaOfIntrestTable();
        echo '<script>alert("Area of interest inserted successfully.");</script>';

    }

    public function updateAreaOfIntrest()
    {
        $updateAreaOfIntrestId = $this->uri->segment(3);
        $this->data['method'] = "updateAreaOfIntrest";

        $areaOfIntrestTable = $this->CandidateModel->areaOfIntrestTable();
        $this->data['areaOfIntrestTable'] = $areaOfIntrestTable['response'];

        $updateAreaOfIntrest = $this->CandidateModel->updateAreaOfIntrest($updateAreaOfIntrestId);
        $this->data['updateAreaOfIntrest'] = $updateAreaOfIntrest;

        $categoryList = $this->CandidateModel->getCategoryList();
        $this->data['categoryList'] = $categoryList;

        $this->setVariable();
        
        $this->load->view('candidateDashboard.php', $this->data);
    }


    public function updateInsertAreaOfIntrest()
    {
        $post = $this->input->post(null, true);
        $updateInsertAreaOfIntrest = $this->CandidateModel->updateInsertAreaOfIntrest();
        $this->areaOfIntrestTable();
        echo '<script>alert("Area of interest updated successfully.");</script>';

    }

    // public function deleteAreaOfIntrest()
    // {
    //     $deleteAreaOfIntrestId = $this->uri->segment(3);
    //     $delete = $this->CandidateModel->deleteAreaOfIntrest($deleteAreaOfIntrestId);
    //     if ($delete == null) {
    //         $this->areaOfIntrestTable();
    //     } else {
    //         echo "Error deleting record";
    //     }
    // }

    public function deleteAreaInterest()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['selected_items']) && is_array($_POST['selected_items'])) {
                $selectedItems = $_POST['selected_items'];
                foreach ($selectedItems as $itemId) {
                    $this->CandidateModel->deleteArea($itemId);
                }
                $this->areaOfIntrestTable();
            } else {
                $this->areaOfIntrestTable();
                echo '<script>alert("Please select the checkbox to delete.");</script>';
            }
        }
    }
    


    // skills

    public function skillTable()
    {
        $this->data['method'] = "skillTable";
        $skillTable = $this->CandidateModel->skillTable();
        $this->data['skillTable'] = $skillTable;
        $this->load->view('candidateDashboard.php', $this->data);
    }


    // public function addSkillForm()
    // {
    //     $this->data['method'] = "addSkillForm";
    //     $basicDetails = $this->CandidateModel->getBasicDetails();
    //     $this->data['basicDetails'] = $basicDetails;
    //     $this->load->view('candidateDashboard.php', $this->data);
    // }

    public function insertSkillForm()
    {
        $insertSkillForm = $this->CandidateModel->insertSkillForm();
        $this->areaOfIntrestTable();
        echo '<script>alert("Skill inserted successfully.");</script>';
    }

    public function updateSkill()
    {
        $updateSkillId = $this->uri->segment(3);
        $this->data['method'] = "updateSkill";

        $skillTable = $this->CandidateModel->skillTable();
        $this->data['skillTable'] = $skillTable;

        $updateSkill = $this->CandidateModel->updateSkill($updateSkillId);
        $this->data['updateSkill'] = $updateSkill;

        $this->setVariable();

        $this->load->view('candidateDashboard.php', $this->data);
    }

    public function updateInsertSkill()
    {
        $post = $this->input->post(null, true);
        $updateInsertSkill = $this->CandidateModel->updateInsertSkill();
        $this->areaOfIntrestTable();
    }

    // public function deleteSkill()
    // {
    //     $deleteSkillId = $this->uri->segment(3);
    //     $delete = $this->CandidateModel->deleteSkill($deleteSkillId);
    //     if ($delete == null) {
    //         $this->areaOfIntrestTable();
    //     } else {
    //         echo "Error deleting record";
    //     }
    // }

    public function deleteSkill()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['selected_items']) && is_array($_POST['selected_items'])) {
                $selectedItems = $_POST['selected_items'];
                foreach ($selectedItems as $itemId) {
                    $this->CandidateModel->deleteSkill($itemId);
                }
                $this->areaOfIntrestTable();
            } else {
                $this->areaOfIntrestTable();
                echo '<script>alert("Please select the checkbox to delete.");</script>';
            }
        }
    }




    public function myProfile()
    {
        $educationTable = $this->CandidateModel->educationTable();
        $this->data['educationTable'] = $educationTable['response'];

        $experienceTable = $this->CandidateModel->experienceTable();
        $this->data['experienceTable'] = $experienceTable['response'];

        $areaOfIntrestTable = $this->CandidateModel->areaOfIntrestTable();
        $this->data['areaOfIntrestTable'] = $areaOfIntrestTable['response'];

        $skillTable = $this->CandidateModel->skillTable();
        $this->data['skillTable'] = $skillTable;

        $this->setVariable();

        $this->data['method'] = 'myProfile';
        $this->load->view('candidateDashboard.php', $this->data);
    }




    // public function insertEducation(){
    //     $this->data['method'] = "educationalDetails";
    //     $addJob = $this->RegistrationModel->insertEducation();
    //     $this->load->view('seekerView.php', $this->data);
    //     echo "Record added seccessfuly";
    // }
    // public function educationalDetails()
    // {

    //     $this->load->model('CandidateModel');
    //     $educationalDetails = $this->CandidateModel->getEducationalDetails();
    //     $this->data['educationalDetails'] = $educationalDetails;
    //     $this->data['method'] = 'educationalDetails';
    //     $this->load->view('seekerView.php', $this->data);
    // }
    // public function updateEducationDetails()
    // {

    //     $postData = $this->input->post(null, true);
    //     $updateEducationDetails = $this->CandidateModel->updateEducationDetails();

    //     $this->educationalDetails();
    // }
    // public function experienceTable()
    // {

    //     $this->data['method'] = 'experienceTable';
    //     $experienceTable=$this->CandidateModel->getExperienceDetails();
    //     $this->data['experienceTable']=$experienceTable;
    //     $this->load->view('seekerView.php', $this->data);
    // }
    // public function addExperienceForm()
    // {
    //     $this->data['method'] = 'addExperienceForm';
    //     $this->load->view('seekerView.php', $this->data);
    // }

    // public function insertExperience()
    // {
    //     $this->data['method'] = "jobs";
    //     $insertExperience = $this->CandidateModel->insertExperience();

    //     $this->load->view('seekerView.php', $this->data);
    //     echo "Record added seccessfuly";
    //     $this->experienceTable();
    // }

    //  public function experienceDetails()
    // {
    //     $this->load->model('CandidateModel');
    //     $experienceDetails = $this->CandidateModel->getExperienceDetails();
    //     $this->data['experienceDetails'] = $experienceDetails;
    //     $this->data['method'] = 'experienceDetails';
    //     $this->load->view('seekerView.php', $this->data);

    // }

    // public function updateExperienceDetails(){
    //     $id = $this->uri->segment(3);
    //     $this->data['method'] = "updateExperienceDetails";
    //     // $postData = $this->input->post(null, true);
    //     $updateExperienceDetails = $this->CandidateModel->updateExperienceDetails($id);
    //     $this->data['updateExperienceDetails'] = $updateExperienceDetails;
    //     $this->load->view('seekerView.php', $this->data);

    //     $this->experienceDetails();

    // }

    // public function projectDetails(){


    //         $this->load->model('CandidateModel');
    //         $provider = $this->CandidateModel->getProjectDetails(); 
    //         $this->data['projectDetails'] = $provider;
    //         $this->data['method'] = "project";
    //         $this->load->view('seekerView.php', $this->data);

    // }


    // public function updateProjectDetails()
    // {

    //     $postData = $this->input->post(null, true);
    //     $updateProjectDetails = $this->CandidateModel->updateProjectDetails();

    //     $this->projectDetails();
    // }

    // public function areaofinterest(){

    //     $this->data['method'] = "areaofinterest";
    //     $provider = $this->CandidateModel->getAreaOfInterest();
    //     $this->data['areaofinterest'] = $provider;
    //     $this->load->view('seekerView.php', $this->data);
    // }


    // public function updateAreaOfInterest()
    // {

    //     $postData = $this->input->post(null, true);
    //     $updateAreaOfInterest = $this->CandidateModel->updateAreaOfInterest();

    //     $this->areaofinterest();
    // }


    // public function skills()
    // {

    //     $this->data['method'] = "skills";
    //     $provider = $this->CandidateModel->getSkills();
    //     $this->data['skills'] = $provider;
    //     $this->load->view('seekerView.php', $this->data);
    // }

    // public function updateskills(){
    //     $postData = $this->input->post(null, true);
    //     $updateskills = $this->CandidateModel->updateskills();

    //     $this->skills();
    // }

    // public function resume(){

    //       $this->data['method'] = "resume";

    //     $resume=$this->CandidateModel->do_upload();
    //     $this->data['resume'] = $resume;
    //      $this->load->view('seekerView.php',$this->data);
    //     }


    public function resume()
    {
        $this->data['method'] = "resume";
        $resume = $this->CandidateModel->do_upload();
        $this->data['resume'] = $resume;
        $arearesume = $this->CandidateModel->areaOfIntrestTable();
        $this->data['arearesume'] = $arearesume['response'];
        $this->setVariable();
        $this->load->view('candidateDashboard.php', $this->data);
    }

    public function registered()
    {
        $this->data['method'] = "resume";
        $resume = $this->CandidateModel->do_upload();
        $submitresume = $this->CandidateModel->insertSubmitResume();
        $this->data['resume'] = $resume;
        $this->thank();
    }


    public function thank()
    {
        $this->data['method'] = "thank";
        $this->setVariable();
        $this->load->view('candidateDashboard.php', $this->data);
    }

    public function logout()
    {
        $this->session->unset_userdata('userLoggedIn');
        $this->index();
    }

    // public function logout()
    // {
    //     $this->session->sess_destroy();
    //     redirect('candidate'); 
    // }

    // public function logout()
    // {
    //     $this->session->sess_destroy();
    //     $this->index();
    // }


}
?>
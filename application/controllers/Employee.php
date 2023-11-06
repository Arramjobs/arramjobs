<?php
class Employee extends CI_Controller
{
    private $data = array();
    public function __construct()
    {
        parent::__construct();
        $this->load->model('EmployeeModel');
        $this->load->library('session');
    }

    public function registration()
    {
        $this->load->view('employeeRegistration.php');
    }


    public function index()
    {
        $this->load->view('employeeLogin.php');
    }

    public function otpregister()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // $response = $this->EmployeeModel->otp();
            echo "<script>window.location.href = 'dash';</script>";
        }
        $this->load->view('seekerOtp.php');
    }

    public function seekerLogin()
    {
        $postData = $this->input->post(null, true);
        $login = $this->EmployeeModel->seekerLogin();
        if (isset($login[0]['id'])) {
            $userLoggedIn = array(
                'seekerId' => $login[0]['id'],
                'seekerName' => $login[0]['name'],
                'seekerPhoneNumber' => $login[0]['phonenumber'],
                'basicdetaildata' => $login[0]['bdsubmited'],
                'edudata' => $login[0]['edusubmited'],
                'expdata' => $login[0]['expsubmited'],
                'areadata' => $login[0]['areasubmited'],
                'resumedata' => $login[0]['resumesubmited'],
            );
            $this->session->set_userdata($userLoggedIn);
            $this->data['method'] = "dash";
            $this->dash();
        } else {

            $this->load->view('employeeLogin.php', $this->data);
            echo '<script>alert("Please enter valid details.");</script>';
        }
    }

    public function seekerRegistration()
    {
        $postData = $this->input->post(null, true);
        $register = $this->EmployeeModel->register();
        $generatedeeid = $this->EmployeeModel->generate_customer_id();
        $data['generatedeeid'] = $generatedeeid;
        // $this->load->view('loginform.php');
        $this->load->view('employeeRegistered.php', $data);
        echo '<script>alert("Registered successfully.");</script>';
    }


    public function dash()
    {
        $data['method'] = "dash";
        $this->load->view('employeeDashboard.php', $data);
    }


    public function basicDetails()
    {
        // $this->load->model('EmployeeModel');
        $basicDetails = $this->EmployeeModel->getBasicDetails();
        $this->data['basicDetails'] = $basicDetails;
        $this->data['method'] = 'basicdetails';
        $this->load->view('employeeDashboard.php', $this->data);
    }

    public function updateBasicDetails()
    {
        $postData = $this->input->post(null, true);
        $updateBasicDetails = $this->EmployeeModel->updateBasicDetails();

        // $this->basicDetails();
        $this->educationTable();
        echo '<script>alert("Basic details inserted successfully.");</script>';
    }



    // education

    public function educationTable()
    {
        $this->data['method'] = "educationTable";
        $educationTable = $this->EmployeeModel->educationTable();
        $this->data['educationTable'] = $educationTable;

        $this->load->view('employeeDashboard.php', $this->data);
    }

    public function addEducationForm()
    {
        $this->data['method'] = "addEducationForm";
        $this->load->view('employeeDashboard.php', $this->data);

    }

    public function insertEducationForm()
    {
        $insertEducationForm = $this->EmployeeModel->insertEducationForm();
        $insertEducationForm = $this->EmployeeModel->insertSubmit();

        $this->educationTable();
        echo '<script>alert("Education details inserted successfully.");</script>';

    }
    public function updateEducation()
    {
        $educationId = $this->uri->segment(3);
        $this->data['method'] = "updateEducation";
        $updateEducation = $this->EmployeeModel->updateEducation($educationId);
        $this->data['updateEducation'] = $updateEducation;
        $this->load->view('employeeDashboard.php', $this->data);
    }
    public function updateInsertEducation()
    {
        $post = $this->input->post(null, true);
        $updateInsertEducation = $this->EmployeeModel->updateInsertEducation();

        $this->educationTable();
        echo '<script>alert("Education details updated successfully.");</script>';

    }


    public function deleteEducation()
    {
        $deleteEducationId = $this->uri->segment(3);
        $delete = $this->EmployeeModel->deleteEducation($deleteEducationId);
        if ($delete == null) {
            $this->educationTable();
        } else {
            echo "Error deleting record";
        }
    }



    // experience


    public function experienceTable()
    {
        $this->data['method'] = "experienceTable";
        $experienceTable = $this->EmployeeModel->experienceTable();
        $this->data['experienceTable'] = $experienceTable;

        $this->load->view('employeeDashboard.php', $this->data);
    }
    public function addExperirenceForm()
    {
        $this->data['method'] = "addExperirenceForm";
        $this->load->view('employeeDashboard.php', $this->data);

    }
    public function insertExperienceForm()
    {
        $insertExperienceForm = $this->EmployeeModel->insertExperienceForm();
        $insertExperienceForm = $this->EmployeeModel->insertSubmitExp();


        $this->experienceTable();
        echo '<script>alert("Experience details inserted successfully.");</script>';
    }

    public function updateExperience()
    {
        $experienceId = $this->uri->segment(3);
        $this->data['method'] = "updateExperience";
        $updateExperience = $this->EmployeeModel->updateExperience($experienceId);
        $this->data['updateExperience'] = $updateExperience;
        $this->load->view('employeeDashboard.php', $this->data);
    }

    public function updateInsertExperience()
    {
        $post = $this->input->post(null, true);
        $updateInsertExperience = $this->EmployeeModel->updateInsertExperience();
        $this->experienceTable();
        echo '<script>alert("Experience details updated successfully.");</script>';
    }

    public function deleteExperience()
    {
        $deleteExperienceId = $this->uri->segment(3);
        $delete = $this->EmployeeModel->deleteExperience($deleteExperienceId);
        if ($delete == null) {
            $this->experienceTable();
        } else {
            echo "Error deleting record";
        }
    }


    //    project

    public function projectTable()
    {
        $this->data['method'] = "projectTable";
        $projectTable = $this->EmployeeModel->projectTable();
        $this->data['projectTable'] = $projectTable;

        $this->load->view('seekerView.php', $this->data);
    }

    public function addProjectForm()
    {
        $this->data['method'] = "addProjectForm";
        $this->load->view('seekerView.php', $this->data);
    }

    public function insertProjectForm()
    {
        $insertProjectForm = $this->EmployeeModel->insertProjectForm();

        $this->projectTable();
    }

    public function updateProject()
    {
        $projectId = $this->uri->segment(3);
        $this->data['method'] = "updateProject";
        $updateProject = $this->EmployeeModel->updateProject($projectId);
        $this->data['updateProject'] = $updateProject;
        $this->load->view('seekerView.php', $this->data);
    }

    public function updateInsertProject()
    {
        $post = $this->input->post(null, true);
        $updateInsertProject = $this->EmployeeModel->updateInsertProject();
        $this->projectTable();
    }

    public function deleteProject()
    {
        $deleteProjectId = $this->uri->segment(3);
        $delete = $this->EmployeeModel->deleteProject($deleteProjectId);
        if ($delete == null) {
            $this->projectTable();
        } else {
            echo "Error deleting record";
        }
    }


    // area of intrest

    public function areaOfIntrestTable()
    {
        $this->data['method'] = "areaOfIntrestTable";
        $areaOfIntrestTable = $this->EmployeeModel->areaOfIntrestTable();
        $this->data['areaOfIntrestTable'] = $areaOfIntrestTable;

        $this->load->view('employeeDashboard.php', $this->data);
    }

    public function addAreaOfIntrestForm()
    {
        $this->data['method'] = "addAreaOfIntrestForm";
        $this->load->view('employeeDashboard.php', $this->data);
    }

    public function insertAreaOfIntrest()
    {
        $insertAreaOfIntrest = $this->EmployeeModel->insertAreaOfIntrest();
        $insertAreaOfIntrest = $this->EmployeeModel->insertSubmitArea();


        $this->areaOfIntrestTable();
        echo '<script>alert("Area of interest inserted successfully.");</script>';

    }

    public function updateAreaOfIntrest()
    {
        $updateAreaOfIntrestId = $this->uri->segment(3);
        $this->data['method'] = "updateAreaOfIntrest";
        $updateAreaOfIntrest = $this->EmployeeModel->updateAreaOfIntrest($updateAreaOfIntrestId);
        $this->data['updateAreaOfIntrest'] = $updateAreaOfIntrest;
        $this->load->view('employeeDashboard.php', $this->data);
    }


    public function updateInsertAreaOfIntrest()
    {
        $post = $this->input->post(null, true);
        $updateInsertAreaOfIntrest = $this->EmployeeModel->updateInsertAreaOfIntrest();
        $this->areaOfIntrestTable();
        echo '<script>alert("Area of interest updated successfully.");</script>';

    }

    public function deleteAreaOfIntrest()
    {
        $deleteAreaOfIntrestId = $this->uri->segment(3);
        $delete = $this->EmployeeModel->deleteAreaOfIntrest($deleteAreaOfIntrestId);
        if ($delete == null) {
            $this->areaOfIntrestTable();
        } else {
            echo "Error deleting record";
        }
    }


    // skills

    public function skillTable()
    {
        $this->data['method'] = "skillTable";
        $skillTable = $this->EmployeeModel->skillTable();
        $this->data['skillTable'] = $skillTable;

        $this->load->view('seekerView.php', $this->data);
    }


    public function addSkillForm()
    {
        $this->data['method'] = "addSkillForm";
        $this->load->view('seekerView.php', $this->data);
    }

    public function insertSkillForm()
    {
        $insertSkillForm = $this->EmployeeModel->insertSkillForm();

        $this->skillTable();
    }

    public function updateSkill()
    {
        $updateSkillId = $this->uri->segment(3);
        $this->data['method'] = "updateSkill";
        $updateSkill = $this->EmployeeModel->updateSkill($updateSkillId);
        $this->data['updateSkill'] = $updateSkill;
        $this->load->view('seekerView.php', $this->data);
    }

    public function updateInsertSkill()
    {
        $post = $this->input->post(null, true);
        $updateInsertSkill = $this->EmployeeModel->updateInsertSkill();
        $this->skillTable();
    }

    public function deleteSkill()
    {
        $deleteSkillId = $this->uri->segment(3);
        $delete = $this->EmployeeModel->deleteSkill($deleteSkillId);
        if ($delete == null) {
            $this->skillTable();
        } else {
            echo "Error deleting record";
        }
    }




    // public function insertEducation(){
    //     $this->data['method'] = "educationalDetails";
    //     $addJob = $this->RegistrationModel->insertEducation();
    //     $this->load->view('seekerView.php', $this->data);
    //     echo "Record added seccessfuly";
    // }
    // public function educationalDetails()
    // {

    //     $this->load->model('EmployeeModel');
    //     $educationalDetails = $this->EmployeeModel->getEducationalDetails();
    //     $this->data['educationalDetails'] = $educationalDetails;
    //     $this->data['method'] = 'educationalDetails';
    //     $this->load->view('seekerView.php', $this->data);
    // }
    // public function updateEducationDetails()
    // {

    //     $postData = $this->input->post(null, true);
    //     $updateEducationDetails = $this->EmployeeModel->updateEducationDetails();

    //     $this->educationalDetails();
    // }
    // public function experienceTable()
    // {

    //     $this->data['method'] = 'experienceTable';
    //     $experienceTable=$this->EmployeeModel->getExperienceDetails();
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
    //     $insertExperience = $this->EmployeeModel->insertExperience();

    //     $this->load->view('seekerView.php', $this->data);
    //     echo "Record added seccessfuly";
    //     $this->experienceTable();
    // }

    //  public function experienceDetails()
    // {
    //     $this->load->model('EmployeeModel');
    //     $experienceDetails = $this->EmployeeModel->getExperienceDetails();
    //     $this->data['experienceDetails'] = $experienceDetails;
    //     $this->data['method'] = 'experienceDetails';
    //     $this->load->view('seekerView.php', $this->data);

    // }

    // public function updateExperienceDetails(){
    //     $id = $this->uri->segment(3);
    //     $this->data['method'] = "updateExperienceDetails";
    //     // $postData = $this->input->post(null, true);
    //     $updateExperienceDetails = $this->EmployeeModel->updateExperienceDetails($id);
    //     $this->data['updateExperienceDetails'] = $updateExperienceDetails;
    //     $this->load->view('seekerView.php', $this->data);

    //     $this->experienceDetails();

    // }

    // public function projectDetails(){


    //         $this->load->model('EmployeeModel');
    //         $provider = $this->EmployeeModel->getProjectDetails(); 
    //         $this->data['projectDetails'] = $provider;
    //         $this->data['method'] = "project";
    //         $this->load->view('seekerView.php', $this->data);

    // }


    // public function updateProjectDetails()
    // {

    //     $postData = $this->input->post(null, true);
    //     $updateProjectDetails = $this->EmployeeModel->updateProjectDetails();

    //     $this->projectDetails();
    // }

    // public function areaofinterest(){

    //     $this->data['method'] = "areaofinterest";
    //     $provider = $this->EmployeeModel->getAreaOfInterest();
    //     $this->data['areaofinterest'] = $provider;
    //     $this->load->view('seekerView.php', $this->data);
    // }


    // public function updateAreaOfInterest()
    // {

    //     $postData = $this->input->post(null, true);
    //     $updateAreaOfInterest = $this->EmployeeModel->updateAreaOfInterest();

    //     $this->areaofinterest();
    // }


    // public function skills()
    // {

    //     $this->data['method'] = "skills";
    //     $provider = $this->EmployeeModel->getSkills();
    //     $this->data['skills'] = $provider;
    //     $this->load->view('seekerView.php', $this->data);
    // }

    // public function updateskills(){
    //     $postData = $this->input->post(null, true);
    //     $updateskills = $this->EmployeeModel->updateskills();

    //     $this->skills();
    // }

    // public function resume(){

    //       $this->data['method'] = "resume";

    //     $resume=$this->EmployeeModel->do_upload();
    //     $this->data['resume'] = $resume;
    //      $this->load->view('seekerView.php',$this->data);
    //     }


    public function resume()
    {

        $this->data['method'] = "resume";
        $resume = $this->EmployeeModel->do_upload();
        $this->data['resume'] = $resume;
        $this->load->view('employeeDashboard.php', $this->data);
    }

    public function registered()
    {
        $this->data['method'] = "resume";
        $resume = $this->EmployeeModel->do_upload();
        $submitresume = $this->EmployeeModel->insertSubmitResume();
        $this->data['resume'] = $resume;
        $this->thank();
    }


    public function thank()
    {
        $this->data['method'] = "thank";
        $this->load->view('employeeDashboard.php', $this->data);
    }

    public function logout()
    {
        $this->session->unset_userdata('userLoggedIn');
        $this->index();
    }



}
?>
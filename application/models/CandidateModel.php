<?php
class CandidateModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // public function login()
    // {
    //     $phonenumber=$this->input->post('phonenumber');

    //     $insert = array(
    //         "phonenumber" => $phonenumber
    //     );
    //     $this->db->insert('seeker_profile_form', $insert);
    // }

    public function seekerLogin()
    {
        $postData = $this->input->post(null, true);
        // $username = $postData['username'];
        $phonenumber = $postData['phonenumber'];
        $password = $postData['cdpassword'];
        $query = "SELECT * FROM seeker_profile_form WHERE phonenumber = '$phonenumber' AND password = '$password'";
        $count = $this->db->query($query);
        return $count->result_array();
    }


    public function checkUserExistence($phone_number)
    {
        $this->db->where('phonenumber', $phone_number);
        $query = $this->db->get('seeker_profile_form');
        return $query->num_rows() > 0;
    }

    public function otp()
    {
        $otp = $this->input->post('otp');
        $insert = array(
            'otp' => $otp
        );

        $this->db->insert('seeker_otp', $insert);
    }

    public function register()
    {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phonenumber = $this->input->post('phonenumber');
        $password = $this->input->post('cmpassword');

        $insert = array(
            'name' => $name,
            'email' => $email,
            'phonenumber' => $phonenumber,
            'password' => $password,
        );

        $this->db->insert('seeker_profile_form', $insert);
    }

    public function generate_customer_id()
{
    $current_year = date('Y');

    $latest_customer_id = $this->get_latest_customer_id();

    $last_four_digits = substr($latest_customer_id, -4);

    $incremented_id = str_pad((int)$last_four_digits + 1, 4, '0', STR_PAD_LEFT);

    $customer_id = "AJC{$current_year}{$incremented_id}";

    $insert = array(
        'eeid' => $customer_id
    );

    $phonenumber = $this->input->post('phonenumber');

    $this->db->where('phonenumber', $phonenumber);
    $this->db->update('seeker_profile_form', $insert);
    
    return $customer_id;
}

public function get_latest_customer_id()
{
    $this->db->select('eeid');
    $this->db->from('seeker_profile_form');
    $this->db->like('eeid', 'AJC' . date('Y'), 'after');
    $this->db->order_by('eeid', 'DESC');
    $this->db->limit(1);

    $query = $this->db->get();
    if ($query->num_rows() > 0) {
        $row = $query->row();
        return $row->eeid;
    } else {
        return 'AJC' . date('Y') . '0000';
    }
}

    public function getUserData($phonenumber)
    {
        $this->db->where('phonenumber', $phonenumber);
        $query = $this->db->get('seeker_profile_form');
        $userData = $query->row_array();

        print_r($userData);

        return $userData;
    }


// CANDIDATE FORM 

// Basic details

    public function getBasicDetails()
    {
        $seekerId = $_SESSION['seekerId'];
        $provider = "SELECT * FROM `seeker_profile_form` WHERE `id` = $seekerId";
        $select = $this->db->query($provider);
        return $select->result_array();
    }

    public function updateBasicDetails()
    {
        $postData = $this->input->post(null, true);
        // var_dump($postData);

        $config['upload_path'] = "./uploads/";
        $basepath = base_url() . 'uploads/';
        $config['allowed_types'] = "jpg|png|pdf|jpeg";
        $config['max_size'] = 4096;

        $this->load->library('upload', $config);

        $aadharf = $postData['oldaadharfront'];
        $aadharb = $postData['oldaadharback'];
        $photop = $postData['oldprofilephoto'];

        if ($this->upload->do_upload('aadharfrontphoto')) {
            $data = $this->upload->data();
            $aadharf = $data['file_name'];
        }
        if ($this->upload->do_upload('aadharbackphoto')) {
            $data = $this->upload->data();
            $aadharb = $data['file_name'];
        }
        if ($this->upload->do_upload('photo')) {
            $data = $this->upload->data();
            $photop = $data['file_name'];
        } else {
            $error = $this->upload->display_errors();
        }

        $aadharfront = $basepath . $aadharf;
        $aadharback = $basepath . $aadharb;
        $profilephoto = $basepath . $photop;


        // Update query to modify the existing user's data
        $updateData = array(
            'name' => $postData['name'],
            'email' => $postData['email'],
            'password' => $postData['password'],
            'phonenumber' => $postData['phonenumber'],
            'phonenumber1' => $postData['phonenumber1'],
            'dateofbirth' => $postData['dateofbirth'],
            'age' => $postData['age'],
            'gender' => $postData['gender'],
            'buildingName' => $postData['doorno'],
            'address' => $postData['streetaddress'],
            'landmark' => $postData['landmark'],
            'pincode' => $postData['pincode'],
            'district' => $postData['district'],
            'maritalstatus' => $postData['maritalstatus'],
            'aadhar_front' => $aadharfront,
            'aadhar_back' => $aadharback,
            'photo' => $profilephoto,
            'aadharfront_filename' => $aadharf,
            'aadharback_filename' => $aadharb,
            'aadharnumber' => $postData['aadharnumber'],
            'photo_filename' => $photop,
            'bdsubmited' => $postData['bdsubmit'],
        );
        $this->db->where('id', $postData['id']);

        $result = $this->db->update('seeker_profile_form', $updateData);
    }

// Education table

    public function educationTable()
    {
        $seekerId = $_SESSION['seekerId'];
        $seekerId = "SELECT * FROM `seeker_educational_details` Where `seekerId`= $seekerId";
        $addtab = $this->db->query($seekerId);
        // return $addtab->result_array();
        return array("response" => $addtab->result_array(), "totalRows" => $addtab->num_rows());
    }

    public function insertEducationForm()
    {
        // $seekerId=$_SESSION['seekerId'];
        $post = $this->input->post(null, true);

        if ($post['seekerId'] != NULL) {
            $seekerId = $post['seekerId'];
         } else {
              $seekerId = $_SESSION['seekerId'];
         }
         
        $config['upload_path'] = "./uploads/";
        $basepath = base_url() . 'uploads/';
        $config['allowed_types'] = "jpg|png|pdf|jpeg";
        $config['max_size'] = 4096;

        $this->load->library('upload', $config);

        $cer10 = "None";
        $cer12 = "None";
        $cerdip = 'None';
        $cerug = "None";
        $cerpg = "None";
        $cerdoct = "None";

        if ($this->upload->do_upload('certificate_10th')) {
            $data = $this->upload->data();
            $cer10 = $data['file_name'];
        }
        if ($this->upload->do_upload('certificate_12th')) {
            $data = $this->upload->data();
            $cer12 = $data['file_name'];
        }
        if ($this->upload->do_upload('certificate_dip')) {
            $data = $this->upload->data();
            $cerdip = $data['file_name'];
        }

        if ($this->upload->do_upload('certificate_ug')) {
            $data = $this->upload->data();
            $cerug = $data['file_name'];
        }
        if ($this->upload->do_upload('certificate_pg')) {
            $data = $this->upload->data();
            $cerpg = $data['file_name'];
        }
        if ($this->upload->do_upload('certificate_doctorate')) {
            $data = $this->upload->data();
            $cerdoct = $data['file_name'];
        } else {
            $error = $this->upload->display_errors();
        }

        $urlten = $basepath . $cer10;
        $urltwelve = $basepath . $cer12;
        $urldiploma = $basepath . $cerdip;
        $urlug = $basepath . $cerug;
        $urlpg = $basepath . $cerpg;
        $urldoc = $basepath . $cerdoct;

        $add = array(
            'seekerId' => $seekerId,
            'educational_qualification' => $post['qualification'],
            'department' => $post['department'],
            'educationmode' => $post['educationmode'],
            'school_college_name' => $post['school'],
            'percentage' => $post['percentage'],
            'yearOfPassing' => $post['year_passed'],
            'tencer_url' => $urlten,
            'twelvecer_url' => $urltwelve,
            'diplomacer_url' => $urldiploma,
            'ugcer_url' => $urlug,
            'pgcer_url' => $urlpg,
            'doccer_url' => $urldoc,
            'ten_cer' => $cer10,
            'twelve_cer' => $cer12,
            'diploma_cer' => $cerdip,
            'ug_cer' => $cerug,
            'pg_cer' => $cerpg,
            'doc_cer' => $cerdoct
        );

        $this->db->insert('seeker_educational_details', $add);
    }

    public function insertSubmit()
    {
        $post = $this->input->post(null, true);

        $seekerId = $_SESSION['seekerId'];

        $addsubmit = array(
            'edusubmited' => $post['edusubmit'],
        );
        $this->db->where('id', $seekerId);

        $this->db->update('seeker_profile_form', $addsubmit);

    }

    public function updateEducation($educationId)
    {
        $update = "SELECT * FROM `seeker_educational_details` Where `id`=$educationId";
        $add = $this->db->query($update);
        return $add->result_array();
    }

    public function updateInsertEducation()
    {
        $post = $this->input->post(null, true);

        $config['upload_path'] = "./uploads/";
        // $basepath = 'http://localhost/arramjobs/uploads/';
        $basepath = base_url() . 'uploads/';

        $config['allowed_types'] = "jpg|png|pdf";
        $config['max_size'] = 4096;

        $this->load->library('upload', $config);

        $ucer10 = $post['old10cer'];
        $ucer12 = $post['old12cer'];
        $ucerdip = $post['olddipcer'];
        $ucerug = $post['oldugcer'];
        $ucerpg = $post['oldpgcer'];
        $ucerdoct = $post['olddoccer'];

        if ($this->upload->do_upload('certificate_10th')) {
            $data = $this->upload->data();
            $ucer10 = $data['file_name'];
        }
        if ($this->upload->do_upload('certificate_12th')) {
            $data = $this->upload->data();
            $ucer12 = $data['file_name'];
        }
        if ($this->upload->do_upload('certificate_dip')) {
            $data = $this->upload->data();
            $ucerdip = $data['file_name'];
        }
        if ($this->upload->do_upload('certificate_ug')) {
            $data = $this->upload->data();
            $ucerug = $data['file_name'];
        }
        if ($this->upload->do_upload('certificate_pg')) {
            $data = $this->upload->data();
            $ucerpg = $data['file_name'];
        }
        if ($this->upload->do_upload('certificate_doctorate')) {
            $data = $this->upload->data();
            $ucerdoct = $data['file_name'];
        } else {
            $error = $this->upload->display_errors();
        }

        $urltenu = $basepath . $ucer10;
        $urltwelveu = $basepath . $ucer12;
        $urldiplomau = $basepath . $ucerdip;
        $urlugu = $basepath . $ucerug;
        $urlpgu = $basepath . $ucerpg;
        $urldocu = $basepath . $ucerdoct;

        $educationId = $post['id'];
        $updateInsertEducation = array(
            'educational_qualification' => $post['qualification'],
            'department' => $post['department'],
            'educationmode' => $post['educationmode'],
            'school_college_name' => $post['school'],
            'percentage' => $post['percentage'],
            'yearOfPassing' => $post['year_passed'],
            'tencer_url' => $urltenu,
            'twelvecer_url' => $urltwelveu,
            'diplomacer_url' => $urldiplomau,
            'ugcer_url' => $urlugu,
            'pgcer_url' => $urlpgu,
            'doccer_url' => $urldocu,
            'ten_cer' => $ucer10,
            'twelve_cer' => $ucer12,
            'diploma_cer' => $ucerdip,
            'ug_cer' => $ucerug,
            'pg_cer' => $ucerpg,
            'doc_cer' => $ucerdoct

        );
        $this->db->where('id', $educationId);
        $this->db->update('seeker_educational_details', $updateInsertEducation);
    }

    // public function deleteEducation($deleteEducationId)
    // {
    //     $delete = "DELETE FROM `seeker_educational_details` WHERE `id`=$deleteEducationId";
    //     $del = $this->db->query($delete);
    // }

    public function delete_item($item_id)
    {
        $this->db->where('id', $item_id);
        $this->db->delete('seeker_educational_details');
    }

    // Experience table

    public function experienceTable()
    {
        $seekerId = $_SESSION['seekerId'];
        $seekerId = "SELECT * FROM `seeker_experience` Where `seekerId`= $seekerId";
        $addtab = $this->db->query($seekerId);
        // return $addtab->result_array();
        return array('response' => $addtab->result_array(), "totalRows" => $addtab->num_rows());
    }

    public function getCategoryList()
    {
        $category = " SELECT * FROM category_master WHERE (categoryName, id) IN (
                        SELECT DISTINCT categoryName, MIN(id) AS id FROM category_master GROUP BY categoryName )
                        ORDER BY categoryName ASC";
        $select = $this->db->query($category);
        return $select->result();
    }

    public function insertExperienceForm()
    {
        $post = $this->input->post(null, true);

        $tillNowChecked = isset($post['till_now']);
        $toDate = $tillNowChecked ? date("Y-m-d") : $post['toDate'];

        if ($post['seekerId'] != NULL) {
            $seekerId = $post['seekerId'];
         } else {
              $seekerId = $_SESSION['seekerId'];
         }
        
        $add = array(
            'seekerId' => $seekerId,
            'other_category' => $post['category'],
            'other_sub_category' => $post['subcategory'],
            'expYear' => $post['fromDate'],
            'expMonth' => $toDate,
            'company_name' => $post['companyname'],
            'company_location' => $post['companylocation'],
            'job_role' => $post['role'],
            'company_mobilenum' => $post['company_mobilenum'],
            // 'profile' => $post['profile'],
            'previous_employer_name' => $post['nameofemployer'],
            'previous_employer_mobile' => $post['number'],
            'previous_employer_email' => $post['emailid'],
            'categoryOthers' => isset($post['newcategory']) && $post['newcategory'] === "" ? "0" : "1",
            'newCategory' => isset($post['newcategory']) ? $post['newcategory'] : "0",
        );

        $this->db->insert('seeker_experience', $add);
    }

    public function insertFresherForm()
    {
        $seekerId = $_SESSION['seekerId'];
        $post = $this->input->post(null, true);

        $add = array(
            'seekerId' => $seekerId,
            'workStatus' => $post['fresher']
        );

        $this->db->insert('seeker_experience', $add);
    }

    public function insertSubmitExp()
    {
        $post = $this->input->post(null, true);
        $seekerId = $_SESSION['seekerId'];

        $submitexp = array(
            'expsubmited' => $post['expsubmit'],
        );
        $this->db->where('id', $seekerId);

        $this->db->update('seeker_profile_form', $submitexp);
    }

    public function updateExperience($experienceId)
    {
        $update = "SELECT * FROM `seeker_experience` Where `id`=$experienceId";
        $add = $this->db->query($update);
        return $add->result_array();
    }

    public function updateInsertExperience()
    {
        $post = $this->input->post(null, true);
        $experienceId = $post['id'];

        $tillNowChecked = isset($post['till_now']);
        $toDate = $tillNowChecked ? date("Y-m-d") : $post['toDate'];
        $updateInsertExperience = array(

            'other_category' => $post['category'],
            'other_sub_category' => $post['subcategory'],
            'expYear' => $post['fromDate'],
            'expMonth' => $toDate,
            'company_name' => $post['companyname'],
            'company_location' => $post['companylocation'],
            'job_role' => $post['role'],
            'company_mobilenum' => $post['company_mobilenum'],
            // 'profile' => $post['profile'],
            'previous_employer_name' => $post['nameofemployer'],
            'previous_employer_mobile' => $post['number'],
            'previous_employer_email' => $post['emailid'],
        );

        $this->db->where('id', $experienceId);
        $this->db->update('seeker_experience', $updateInsertExperience);
    }

    // public function deleteExperience($deleteExperienceId)
    // {
    //     $delete = "DELETE FROM `seeker_experience` WHERE `id`=$deleteExperienceId";
    //     $del = $this->db->query($delete);
    // }

    public function deleteExp($item_id)
    {
        $this->db->where('id', $item_id);
        $this->db->delete('seeker_experience');
    }


    // Area of interest

    public function areaOfIntrestTable()
    {
        $seekerId = $_SESSION['seekerId'];
        $seekerId = "SELECT * FROM `seeker_area_of_interst` Where `seekerId`= $seekerId";
        $addtab = $this->db->query($seekerId);
        // return $addtab->result_array();
        return array("response" => $addtab->result_array(), "totalRows" => $addtab->num_rows());
    }

    public function insertAreaOfIntrest()
    {
        $seekerId = $_SESSION['seekerId'];
        
        $post = $this->input->post(null, true);
        // if ($post['seekerId'] != NULL) {
        //     $seekerId = $post['seekerId'];
        //  } else {
        //       $seekerId = $_SESSION['seekerId'];
        //  }

        $add = array(
            'seekerId' => $seekerId,
            'other_interst_category' => $post['category'],
            'other_sub_interst_category' => $post['subcategory'],
            'prefered_location' => $post['preferred-location'],
            // 'expYear' => $post['expYear'],
            // 'expMonth' => $post['expMonth'],
            'job_type' => $post['jobtype'],
            'description' => $post['description'],
            'expected_salary' => $post['expected-salary'],
            'categoryOthers' => isset($post['newcategory']) && $post['newcategory'] === "" ? "0" : "1",
            'newCategory' => isset($post['newcategory']) ? $post['newcategory'] : "0",
            // 'skillname' => $post['skillname'],
            // 'skillexperience' => $post['skillexperience'],
            // 'skilllevel' => $post['skilllevel']
        );

        $this->db->insert('seeker_area_of_interst', $add);
    }

    public function insertSubmitArea()
    {
        $post = $this->input->post(null, true);
        $seekerId = $_SESSION['seekerId'];

        $submitarea = array(
            'areasubmited' => $post['areasubmit'],
        );
        $this->db->where('id', $seekerId);

        $this->db->update('seeker_profile_form', $submitarea);
    }

    public function updateAreaOfIntrest($updateAreaOfIntrestId)
    {
        $update = "SELECT * FROM `seeker_area_of_interst` Where `id`= $updateAreaOfIntrestId";
        $add = $this->db->query($update);
        return $add->result_array();
    }

    public function updateInsertAreaOfIntrest()
    {
        $post = $this->input->post(null, true);
        $areaOfIntrest = $post['id'];
        $updateInsertAreaOfIntrest = array(
            'other_interst_category' => $post['category'],
            'other_sub_interst_category' => $post['subcategory'],
            'prefered_location' => $post['preferred-location'],
            // 'expYear' => $post['expYear'],
            // 'expMonth' => $post['expMonth'],
            'job_type' => $post['jobtype'],
            'description' => $post['description'],
            'expected_salary' => $post['expected-salary'],
            // 'skillname' => $post['skillname'],
            // 'skillexperience' => $post['skillexperience'],
            // 'skilllevel' => $post['skilllevel']
        );

        $this->db->where('id', $areaOfIntrest);
        $this->db->update('seeker_area_of_interst', $updateInsertAreaOfIntrest);
    }

    // public function deleteAreaOfIntrest($deleteAreaOfIntrestId)
    // {
    //     $delete = "DELETE FROM `seeker_area_of_interst` WHERE `id`=$deleteAreaOfIntrestId";
    //     $del = $this->db->query($delete);
    // }

    public function deleteArea($item_id)
    {
        $this->db->where('id', $item_id);
        $this->db->delete('seeker_area_of_interst');
    }

    //  Skills
    
    public function skillTable()
    {
        $seekerId = $_SESSION['seekerId'];
        $seekerId = "SELECT * FROM `seeker_skill` Where `seekerId`= $seekerId";
        $addtab = $this->db->query($seekerId);
        return $addtab->result_array();
    }

    public function insertSkillForm()
    {
        // $seekerId = $_SESSION['seekerId'];
        $post = $this->input->post(null, true);
        if ($post['seekerId'] != NULL) {
            $seekerId = $post['seekerId'];
         } else {
              $seekerId = $_SESSION['seekerId'];
         }

        $add = array(
            'seekerId' => $seekerId,
            'skill' => $post['skillname'],
            'experience' => $post['experience'],
            // 'expMonth' => $post['skillexperience'],
            'skill_level' => $post['skilllevel']
        );

        $this->db->insert('seeker_skill', $add);
    }

    public function updateSkill($updateSkillId)
    {
        $update = "SELECT * FROM `seeker_skill` Where `id`= $updateSkillId";
        $add = $this->db->query($update);
        return $add->result_array();
    }

    public function updateInsertSkill()
    {
        $post = $this->input->post(null, true);
        $areaOfIntrest = $post['id'];
        $updateInsertSkill = array(
            'skill' => $post['skillname'],
            'experience' => $post['experience'],
            'skill_level' => $post['skilllevel']
        );

        $this->db->where('id', $areaOfIntrest);
        $this->db->update('seeker_skill', $updateInsertSkill);
    }

    public function deleteSkill($deleteSkillId)
    {
        $delete = "DELETE FROM `seeker_skill` WHERE `id`=$deleteSkillId";
        $del = $this->db->query($delete);
    }

    //     public function insertEducation()
    //     {
    //       $postData = $this->input->post(null, true);

    //       $insert = array(
    //         'educational_qualification' => $postData['qualification'], 'department' => $postData['department'],
    //         'school_college_name' => $postData['school'], 'percentage' => $postData['percentage'],
    //         'yearOfPassing' => $postData['year_passed']
    //       );

    //       $this->db->insert('seeker_educational_details', $insert);
    //     }

    //     public function getEducationalDetails()
    //     {
    //         $seekerId=$_SESSION['seekerId'];
    //         $provider = "SELECT * FROM `seeker_educational_details` WHERE `seekerId` = $seekerId";
    //         $select = $this->db->query($provider);
    //         return $select->result_array();

    //     public function updateEducationDetails(){

    //         $postData = $this->input->post(null, true);

    //         $updateData = array(
    //             'educational_qualification' => $postData['qualification'],
    //             'department' => $postData['department'],
    //             'school_college_name' => $postData['school'],
    //             'percentage' => $postData['percentage'],
    //             'yearOfPassing' => $postData['year_passed'],
    //         );
    //         $this->db->where('id', $postData['id']);
    //         $result = $this->db->update(' seeker_educational_details', $updateData);
    //     }

    //     public function experienceTable()
    //     {
    //       $seekerId=$_SESSION['seekerId'];
    //       $provider = "SELECT * FROM `seeker_experience` Where `seekerId`= $seekerId";
    //       $addtab = $this->db->query($provider);
    //       return $addtab->result_array();

    //     }
    //     public function insertExperience()
    //     {

    //       $post = $this->input->post(null, true);

    //       $addExperience = array(
    //          'seekerId' =>  $seekerId, 'experience' => $post['experience'], 'other_category' =>  $post['category'],
    //         'other_sub_category' => $post['subcategory'], 'company_name' => $post['companyname'],
    //         'job_role' => $post['role'], 'previous_employer_name' => $post['nameofemployer'],
    //         'previous_employer_mobile' => $post['number'], 'previous_employer_email' => $post['emailid'],
    //       );

    //       $this->db->insert('seeker_experience', $addExperience);
    //     }


    //     public function getExperienceDetails(){

    //         $seekerId=$_SESSION['seekerId'];
    //         $provider = "SELECT * FROM `seeker_experience` Where `id`= $seekerId";
    //         $select = $this->db->query($provider);
    //         return $select->result_array();
    //      }

    //     public function updateExperienceDetails()
    //     {
    //         $postData = $this->input->post(null, true);

    //         $updateData = array(

    //             'other_category' => $postData['category'],
    //             'other_sub_category' => $postData['subcategory'],
    //             'experience' => $postData['experience'],
    //             'company_name' => $postData['companyname'],
    //             'job_role' => $postData['role'],
    //             'previous_employer_name' => $postData['nameofemployer'],
    //             'previous_employer_mobile' => $postData['number'],
    //             'previous_employer_email' => $postData['emailid'],
    //         );
    //         $this->db->where('id', $postData['id']);
    //         $result = $this->db->update('seeker_experience', $updateData);

    //     }


    //     public function getAreaOfInterest(){

    //         $seekerId=$_SESSION['seekerId'];
    //         $provider = "SELECT * FROM `seeker_area_of_interst` Where `seekerId` = $seekerId";
    //         $select = $this->db->query($provider);
    //         return $select->result_array();
    //     }

    //     public function updateAreaOfInterest()
    //     {
    //         $postData = $this->input->post(null, true);

    //             $updateData = array(
    //             'other_interst_category' => $postData['category'],
    //             'other_sub_interst_category' => $postData['subcategory'],
    //             'prefered_location' => $postData['preferred-location'],
    //             'experience' => $postData['experience'],
    //             'job_type' => $postData['jobtype'],
    //             'description' => $postData['description'],
    //             'expected_salary' => $postData['expected-salary']
    //         );
    //         $this->db->where('seekerId', $postData['seekerId']);
    //         $this->db->update('seeker_area_of_interst', $updateData);

    //     }

    //     public function getSkills()
    //     {

    //         $seekerId=$_SESSION['seekerId'];
    //         $provider = "SELECT * FROM `seeker_skill` Where `seekerId` = $seekerId";
    //         $select = $this->db->query($provider);
    //         return $select->result_array();

    //     }

    //     public function updateskills()
    //     {

    //     $postData = $this->input->post(null, true);

    //     $updateData = array(
    //     'skill' => $postData['skillname'],
    //     'experience' => $postData['experience'],
    //     'skill_level' => $postData['skilllevel'],
    // );
    // $this->db->where('seekerId', $postData['seekerId']);
    // $this->db->update('seeker_skill', $updateData);
    //     }

    public function updateresumefilename($resumefilename)
    {
        $seekerId = $_SESSION['seekerId'];
        $basepath = base_url() . 'uploads/';

        $updateresume['resume_filename'] = $resumefilename;
        $updateresume['resume_filename_url'] = $basepath . $resumefilename;

        $this->db->where('seekerId', $seekerId);
        $this->db->update('seeker_area_of_interst', $updateresume);
    }

    public function insertSubmitResume()
    {
        $post = $this->input->post(null, true);
        $seekerId = $_SESSION['seekerId'];

        $submitresume = array(
            'resumesubmited' => $post['resumesubmit'],
        );
        $this->db->where('id', $seekerId);

        $this->db->update('seeker_profile_form', $submitresume);
    }

    public function do_upload()
    {

        $config['upload_path'] = "./uploads/";
        $config['allowed_types'] = "jpg|png|pdf";
        $config['max_size'] = 4096;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file')) {
            $data = $this->upload->data();
            $resumefilename = $data['file_name'];
            $this->updateresumefilename($resumefilename);

        } else {
            $error = $this->upload->display_errors();
        }


    }
}
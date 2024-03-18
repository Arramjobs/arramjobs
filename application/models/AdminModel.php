<?php
class AdminModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function adminLogin()
    {
        $postData = $this->input->post(null, true);
        $userName = $postData['userName'];
        $password = $postData['password'];
        $query = "SELECT * FROM admin_login WHERE `userName`='$userName' AND `password`='$password'";
        $count = $this->db->query($query);
        return $count->result_array();
    }

    public function createAdminUser()
    {
        $postData = $this->input->post(null, true);
        $insert = array(
            'name' => $postData['name'],
            'mobileNumber' => $postData['mobileNumber'],
            'email' => $postData['email'],
            'userName' => $postData['userName'],
            'password' => $postData['password'],
            "userRole" => $postData['userRole'],
            // 'address' => $postData['address'],
            // 'address2' => $postData['address2'],
            // 'city' => $postData['city'],
            // 'state' => $postData['state'],
            // 'pincode' => $postData['pincode']
        );
        $this->db->insert('admin_login', $insert);
    }

    public function generate_customer_id()
    {

        $latest_customer_id = $this->get_latest_customer_id();
        $incremented_id = str_pad((int) substr($latest_customer_id, -2) + 1, 2, '0', STR_PAD_LEFT);
        $customer_id = $incremented_id;
        $insert = array(
            'admin_id' => $customer_id
        );
        $mobileNumber = $this->input->post('mobileNumber');
        $this->db->where('mobileNumber', $mobileNumber);
        $this->db->update('admin_login', $insert);
        return $customer_id;
    }

    public function get_latest_customer_id()
    {
        $this->db->select('admin_id');
        $this->db->from('admin_login');
        $this->db->order_by('admin_id', 'DESC');
        $this->db->limit(1);

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->admin_id;
        } else {
            return '00';
        }
    }

    public function admin()
    {
        $admin = "SELECT * FROM `admin_login`";
        $select = $this->db->query($admin);
        return array('response' => $select->result_array(), "totalRows" => $select->num_rows());
    }

    public function deleteAdminUser($adminId)
    {
        $delete = "DELETE FROM `admin_login` WHERE `id`=$adminId";
        $del = $this->db->query($delete);
    }

    public function employer()
    {
        $employer = "SELECT * FROM `provider_registration_form`";
        $select = $this->db->query($employer);
        return array('response' => $select->result_array(), "totalRows" => $select->num_rows());
    }

    public function employee()
    {
        $employee = "SELECT * FROM `seeker_profile_form`";
        $select = $this->db->query($employee);
        return array('response' => $select->result_array(), "totalRows" => $select->num_rows());
    }

    public function adminUsers()
    {
        $provider = "SELECT * FROM `admin_login`";
        $select = $this->db->query($provider);
        return $select->result_array();
    }

    public function unVerifiedEmployers()
    {
        $unVerifiedEmployers = "SELECT * FROM `provider_registration_form` WHERE verifyOne ='0' AND verifyTwo ='0' AND newList = '0' AND deleteStatus = '0' ";
        $response = $this->db->query($unVerifiedEmployers);
        return $response->result_array();
    }

    public function verifiedEmployers()
    {
        $verifiedEmployers = "SELECT * FROM `provider_registration_form` WHERE verifyOne ='1' AND verifyTwo ='1' AND deleteStatus = '0'";
        $response = $this->db->query($verifiedEmployers);
        return $response->result_array();
    }

    public function pendingEmployers()
    {
        $verifiedEmployers = "SELECT * FROM `provider_registration_form` WHERE (verifyOne ='0' OR verifyTwo ='0') AND newList = '1' AND deleteStatus = '0'";
        $response = $this->db->query($verifiedEmployers);
        return $response->result_array();
    }

    public function overallEmployers()
    {
        $overallEmployers = "SELECT * FROM `provider_registration_form` ";        
        $response = $this->db->query($overallEmployers);
        return $response->result_array();
    }

    public function deleteOverallEmployers($item_id)
    {
        $this->db->where('id', $item_id);
        $this->db->delete('provider_registration_form');
    }

    public function verifyEmployerDetails($id)
    {
        $verifyEmployerDetails = "SELECT * FROM `provider_registration_form` WHERE id = $id";
        $response = $this->db->query($verifyEmployerDetails);
        return $response->result_array();
    }

    public function employerJobDetails($id)
    {
        $employerJobDetails = "SELECT * FROM `provider_job` WHERE jobProviderid = $id";
        $response = $this->db->query($employerJobDetails);
        return $response->result_array();
    }
    public function verifyEmployer()
    {
        $postData = $this->input->post(null, true);
        $updateVerificationStatus = array(
            'verifyOne' => isset($postData['verifyone']) ? $postData['verifyone'] : "0",
            'verifyTwo' => isset($postData['verifytwo']) ? $postData['verifytwo'] : "0",
            'verificationRemarks' => $postData['verificationRemarks'],
            'verifiedBy' => $postData['verifiedName'],
            'newList' => $postData['newList']
        );

        $this->db->where('id', $postData['id']);
        $this->db->update('provider_registration_form', $updateVerificationStatus);
    }

    public function deleteEmployer()
    {
        $postData = $this->input->post(null, true);
        $updateDeleteRequestStatus = array(
            'deleteStatus' => $postData['deleteStatus'],
            'deleteRemarks' => $postData['deleteRemarks'],
            'newList' => $postData['newList']
        );

        $this->db->where('id', $postData['id']);
        $this->db->update('provider_registration_form', $updateDeleteRequestStatus);
    }

    public function deleteEmployerList()
    {
        $deleteEmployerList = "SELECT * FROM `provider_registration_form` WHERE deleteStatus = '1' ";
        $response = $this->db->query($deleteEmployerList);
        return $response->result_array();
    }

    public function restoreEmployerDetails()
    {
        $postData = $this->input->post(null, true);
        $updateRestoreStatus = array(
            'deleteStatus' => $postData['deleteStatus']
        );

        $this->db->where('id', $postData['EmployerId']);
        $this->db->update('provider_registration_form', $updateRestoreStatus);
    }

//     public function addNew()
//   {
//     $jobProviderId = $_SESSION['jobProviderId'];
//     $post = $this->input->post(null, true);

//     $add = array(
//       'jobProviderId' => $jobProviderId,
//       'company_name' => $post['company_name'],
//       'job_category_id' => $post['category'],
//       'jobCategory' => $post['category'],
//       'jobSubCategory' => $post['subcategory'],
//       'job_sub_category_id' => $post['subcategory'],
//       'location' => $post['preferred_location'],
//       'locationUrl' => $post['preferred_location_url'],
//       'job_type' => $post['jobtype'],
//       'salary' => $post['expected_salary'],
//       'experience' => $post['experience'],
//       'number_of_openings' => $post['no_of_openings'],
//       'description' => $post['description'],
//       'categoryOthers' => isset($post['newcategory']) && $post['newcategory'] === "" ? "0" : "1",
//       'newCategory' => isset($post['newcategory']) ? $post['newcategory'] : "0"

//     );

//     $this->db->insert('provider_job', $add);
//   }

//   public function updatejob($id)
//   {
//     $update = "SELECT * FROM `provider_job` Where `id`=$id";
//     $add = $this->db->query($update);
//     return $add->result_array();
//   }

//   public function update_job()
//   {
//     $post = $this->input->post(null, true);
//     $id = $post['id'];
//     $addjob = array(
//       'company_name' => $post['company_name'],
//       'job_category_id' => $post['category'],
//       'jobCategory' => $post['category'],
//       'jobSubCategory' => $post['subcategory'],
//       'job_sub_category_id' => $post['subcategory'],
//       'location' => $post['preferred_location'],
//       'locationUrl' => $post['preferred_location_url'],
//       'job_type' => $post['jobtype'],
//       'salary' => $post['expected_salary'],
//       'experience' => $post['experience'],
//       'number_of_openings' => $post['no_of_openings'],
//       'description' => $post['description']
//     );
//     $this->db->where('id', $id);
//     $this->db->update('provider_job', $addjob);
//   }

//   public function deleteAddJob($deleteId)
//   {
//     // $delete = "DELETE FROM `provider_job` WHERE `id`=$deleteId";
//     // $del = $this->db->query($delete);
//     // $this->db->where('id', $deleteId);

//     $this->db->where('id', $deleteId);
//     $this->db->delete('provider_job');
//   }

//   public function updateStatus($cid)
// {
//     // Update the status from 6 to 5 in the database
//     $this->db->where('candidate_id', $cid);
//     $this->db->update('candidate_requests', array('request_status' => '5'));
// }


//   public function requestForCandidate()
//   {
//     $postData = $this->input->post(null, true);
//     $updateRequestStatus = array(
//       'employer_id' => $postData['employer_id'],
//       'candidate_id' => $postData['candidateid'],
//       'request_status' => $postData['requestadmin'],
//     );
//     $this->db->insert('candidate_requests', $updateRequestStatus);
//   }

//   public function candidates($jobCategory)
//   {
//     $query = "SELECT spf.id AS seekerId, spf.eeid AS cdid, spf.name AS name, saoi.other_interst_category AS oic, saoi.other_sub_interst_category AS oisc, GROUP_CONCAT(ssk.skill) AS skills,
//      cr.employer_id AS eprid, cr.candidate_id AS cndid, cr.request_status AS rqsts, GROUP_CONCAT(se.workStatus) AS experienceTable
//       FROM seeker_profile_form spf 
//       INNER JOIN seeker_area_of_interst saoi ON saoi.seekerId = spf.id 
//       LEFT JOIN seeker_skill ssk ON ssk.seekerId = spf.id
//       LEFT JOIN seeker_experience se ON se.seekerId = spf.id 
//       LEFT JOIN candidate_requests cr ON cr.employer_id = '" . $_SESSION['employerid'] . "' AND cr.candidate_id = spf.id 
//       WHERE saoi.other_interst_category = '" . $jobCategory . "' 
//       AND spf.identityVerify = '1'
//        AND spf.addressVerify = '1'
//         AND spf.employmentVerify = '1'
//          AND spf.identityVerify = '1'
//           AND spf.deleteStatus = '0'
//           AND spf.currentStatus = '0'
//            GROUP BY spf.id, spf.name;";
//     $result = $this->db->query($query);
//     return $result->result_array();

//   }


    // public function employerApprovelStatus()
    // {
    //     $postData = $this->input->post(null, true);
    //     $updateVerificationStatus = array(
    //         'addNewApprovel' => $postData['addNewApprovel'],
    //         'addNewApprovelRemarks' => $postData['addNewApprovelRemarks'],
    //         'deleteApprovel' => $postData['deleteApprovel'],
    //         'deleteApprovelRemarks' => $postData['deleteApprovelRemarks'],
    //         'addNewRequest' => $postData['addNewRequest'],
    //         'deleteRequest' => $postData['deleteRequest']
    //     );

    //     $this->db->where('id', $postData['id']);
    //     $this->db->update('provider_registration_form', $updateVerificationStatus);
    // }


    // Delete employer permanently from table
    // public function deleteEmployer($deleteEmployerId)
    // {
    //     $delete = "DELETE FROM `provider_registration_form` WHERE `id`=$deleteEmployerId";
    //     $del = $this->db->query($delete);
    // }


    public function unVerifiedEmployees()
    {
        $unVerifiedEmployees = "SELECT * FROM `seeker_profile_form` WHERE identityVerify ='0' AND addressVerify ='0' AND employmentVerify ='0' AND educationverify ='0' AND newList = '0' AND deleteStatus ='0'";
        $response = $this->db->query($unVerifiedEmployees);
        return $response->result_array();
    }

    public function verifiedEmployees()
    {
        $verifiedEmployees = "SELECT * FROM `seeker_profile_form` WHERE identityVerify ='1' AND addressVerify ='1' AND employmentVerify ='1' AND educationverify ='1' AND deleteStatus ='0'";
        $response = $this->db->query($verifiedEmployees);
        return $response->result_array();
    }
    public function pendingEmployees()
    {
        $pendingEmployees = "SELECT * FROM `seeker_profile_form` WHERE (identityVerify ='0' OR addressVerify ='0' OR employmentVerify ='0' OR educationverify ='0') AND newList = '1' AND deleteStatus ='0'";
        $response = $this->db->query($pendingEmployees);
        return $response->result_array();
    }

    public function deleteEmployeeList()
    {
        $deleteEmployeeList = "SELECT * FROM `seeker_profile_form` WHERE deleteStatus ='1'";
        $response = $this->db->query($deleteEmployeeList);
        return $response->result_array();
    }

    public function overallEmployees()
    {                          
        $overallEmployees = "SELECT * FROM `seeker_profile_form`";
        $response = $this->db->query($overallEmployees);
        return $response->result_array();

    }

    public function deleteOverallEmployees($item_id)
    {
        $this->db->where('id', $item_id);
        $this->db->delete('seeker_profile_form');
    }

    public function verifyEmployeeDetails()
    {
        $postData = $this->input->post(null, true);
        $updateVerificationStatus = array(
            'identityverify' => isset($postData['identityVerify']) ? $postData['identityVerify'] : "0",
            'addressverify' => isset($postData['addressVerify']) ? $postData['addressVerify'] : "0",
            'employmentverify' => isset($postData['employmentVerify']) ? $postData['employmentVerify'] : "0",
            'educationverify' => isset($postData['educationVerify']) ? $postData['educationVerify'] : "0",
            'verificationRemarks' => $postData['verificationRemarks'],
            'verifiedBy' => $postData['verifiedName'],
            'newList' => $postData['newList']
        );

        $this->db->where('id', $postData['EmployeeId']);
        $this->db->update('seeker_profile_form', $updateVerificationStatus);
    }

    public function deleteEmployeeDetails()
    {
        $postData = $this->input->post(null, true);
        $updateDeleteStatus = array(
            'deleteRemarks' => $postData['deleteEmployeeRemarks'],
            'deleteStatus' => $postData['deleteEmployeeStatus'],
            'newList' => $postData['newList']
        );

        $this->db->where('id', $postData['EmployeeId']);
        $this->db->update('seeker_profile_form', $updateDeleteStatus);
    }

    public function restoreEmployeeDetails()
    {
        $postData = $this->input->post(null, true);
        $updateRestoreStatus = array(
            'deleteStatus' => $postData['restoreEmployee']
        );

        $this->db->where('id', $postData['EmployeeId']);
        $this->db->update('seeker_profile_form', $updateRestoreStatus);
    }


    // public function candidateRequestDetails()
    // {
    //     $candidateRequestList = "SELECT * FROM `seeker_profile_form` WHERE identityVerify ='1' AND addressVerify ='1' AND employmentVerify ='1' AND educationverify ='1' AND deleteStatus ='0' AND requestCandidate ='1'";
    //     $response = $this->db->query($candidateRequestList);
    //     // return $response->result_array();
    //  return array("response" =>$response->result_array(), "totalRows" => $response->num_rows());
    // }
    public function candidateRequestDetails()
    {
        $candidateRequestList = "SELECT spf.id AS seekerId, spf.eeid AS cdid, spf.name AS name, spf.phonenumber AS mobilenum,
            prf.id AS providerId, prf.erid AS emprid, prf.company_name AS cname, cr.job_category AS jobCategory
             FROM  candidate_requests cr
             INNER JOIN provider_registration_form prf ON prf.erid = cr.employer_id 
             INNER JOIN seeker_profile_form spf ON spf.id = cr.candidate_id 
             WHERE cr.request_status = '1' ;";

        $response = $this->db->query($candidateRequestList);
        return array("response" => $response->result_array(), "totalRows" => $response->num_rows());
    }

    public function approveRequest()
    {
        $postData = $this->input->post(null, true);
        $updateRequestApprovel = array(
            'request_status' => $postData['approveCandidateRequest']
        );

        $this->db->where(array('employer_id' => $postData['employerId'], 'candidate_id' => $postData['seekerId']));
        $this->db->update('candidate_requests', $updateRequestApprovel);
    }

    public function cancelRequest()
    {
        $postData = $this->input->post(null, true);
        $updateRequestApprovel = array(
            'request_status' => $postData['cancelCandidateRequest']
        );

        $this->db->where(array('employer_id' => $postData['employerId'], 'candidate_id' => $postData['seekerId']));
        $this->db->update('candidate_requests', $updateRequestApprovel);
    }


    public function candidateNewCategory()
    {
        $candidateNewCategory = "SELECT * FROM `seeker_experience` WHERE categoryOthers ='1' ";
        $response = $this->db->query($candidateNewCategory);
        return $response->result_array();
    }
    public function candidateNewCategoryArea()
    {
        $candidateNewCategoryArea = "SELECT * FROM `seeker_area_of_interst` WHERE categoryOthers ='1' ";
        $response = $this->db->query($candidateNewCategoryArea);
        return $response->result_array();
    }

    public function employerNewCategory()
    {
        $employernewcategory = "SELECT * FROM `provider_job` WHERE categoryOthers ='1' ";
        $response = $this->db->query($employernewcategory);
        return $response->result_array();
    }

    public function addcategoryExperience()
    {
        $postData = $this->input->post(null, true);
        $addnewcategory = array(
            'other_category' => $postData['new_category'],
            'categoryOthers' => $postData['categoryexp']
        );

        $this->db->where('id', $postData['expTableId']);
        $this->db->update('seeker_experience', $addnewcategory);

        $newcategorytable = array(
            'categoryName' => $postData['new_category'],
        );
        $this->db->insert('category_master', $newcategorytable);
    }

    public function addcategoryArea()
    {
        $postData = $this->input->post(null, true);
        $addnewcategory = array(
            'other_interst_category' => $postData['new_category'],
            'categoryOthers' => $postData['categoryarea']
        );

        $this->db->where('id', $postData['areaTableId']);
        $this->db->update('seeker_area_of_interst', $addnewcategory);

        $newcategorytable = array(
            'categoryName' => $postData['new_category'],
        );
        $this->db->insert('category_master', $newcategorytable);
    }

    public function addcategoryEmployerJob()
    {
        $postData = $this->input->post(null, true);
        $addnewcategory = array(
            'jobCategory' => $postData['new_category'],
            'categoryOthers' => $postData['categoryjob']
        );

        $this->db->where('id', $postData['jobTableId']);
        $this->db->update('provider_job', $addnewcategory);

        $newcategorytable = array(
            'categoryName' => $postData['new_category'],
        );
        $this->db->insert('category_master', $newcategorytable);
    }

    function cancelNewCategoryExp()
    {
        $postData = $this->input->post(null, true);
        $cancelnewcategory = array(
            'categoryOthers' => $postData['categoryothers']
        );

        $this->db->where('id', $postData['jobTableId']);
        $this->db->update('seeker_experience', $cancelnewcategory);
    }

    function cancelNewCategoryArea()
    {
        $postData = $this->input->post(null, true);
        $cancelnewcategory = array(
            'categoryOthers' => $postData['categoryothers']
        );

        $this->db->where('id', $postData['jobTableId']);
        $this->db->update('seeker_area_of_interst', $cancelnewcategory);
    }

    function cancelNewCategoryJob()
    {
        $postData = $this->input->post(null, true);
        $cancelnewcategory = array(
            'categoryOthers' => $postData['categoryothers']
        );

        $this->db->where('id', $postData['jobTableId']);
        $this->db->update('provider_job', $cancelnewcategory);
    }

//     public function provider_detail()
//   {
//     // $jobProviderId = $_SESSION['jobProviderId'];
//     $provider = "SELECT * FROM `provider_registration_form`";
//     $select = $this->db->query($provider);
//     return $select->result_array();


//     // $seekerId=$_SESSION['seekerId'];
//     // $provider = "SELECT * FROM `seeker_profile_form` WHERE `id` = $seekerId";
//     // $select = $this->db->query($provider);
//     // return $select->result_array();
//   }


//     public function addTab($jobProviderId)
//   {
//     // $jobProviderId = $_SESSION['jobProviderId'];
//     $providerAdd = "SELECT * FROM `provider_job` Where `jobProviderId`= $jobProviderId";
//     $addtab = $this->db->query($providerAdd);
//     return $addtab->result_array();
//   }

//     public function update_data()
//     {
//       $postData = $this->input->post(null, true);
//       $id = $postData['id'];
  
//       $config['upload_path'] = "./uploads/";
//       $basepath = base_url() . 'uploads/';
//       $config['allowed_types'] = "jpg|png|pdf|jpeg";
//       $config['max_size'] = 1024;
  
//       $this->load->library('upload', $config);
  
//       $cmp_logou = $postData['oldimgname'];
  
//       if ($this->upload->do_upload('logo1')) {
//         $data = $this->upload->data();
//         $cmp_logou = $data['file_name'];
//       } else {
//         $error = $this->upload->display_errors();
//       }
  
//       $cmplogourlu = $basepath . $cmp_logou;
  
  
//       $data = array(
//         'company_name' => $postData['name'],
//         'company_mobile_number' => $postData['phno'],
//         'password' => $postData['password'],
//         'company_email' => $postData['email'],
//         'street_address' => $postData['addr'],
//         'Landmark' => $postData['landmark1'],
//         'City' => $postData['city1'],
//         'district' => $postData['district1'],
//         'state' => $postData['state1'],
//         'pincode' => $postData['pincode1'],
//         'companyLocationUrl' => $postData['locationUrl'],
//         'company_logourl' => $cmplogourlu,
//         'company_logo' => $cmp_logou,
//         'companywebsite' => $postData['cwebsite1'],
//         'companypan' => $postData['cpan1'],
//         'companygst' => $postData['cgst1'],
//         'name' => $postData['name1'],
//         'role' => $postData['role'],
//         'mobile_number' => $postData['phno1'],
//         'email' => $postData['mail1'],
  
//       );
//       $this->db->where('id', $id);
//       $this->db->update('provider_registration_form', $data);
//     }

    public function educationalDetails($id)
  {
    $education = "SELECT * FROM seeker_educational_details WHERE `seekerId`=$id";
    $seekerEducation = $this->db->query($education);
    return $seekerEducation->result_array();
  }

  public function skills($id)
  {
    $skills = "SELECT * FROM seeker_skill WHERE  `seekerId`=$id";
    $seekerSkill = $this->db->query($skills);
    return $seekerSkill->result_array();
  }

  public function areaOfInterest($id)
  {
    $areaOfInterest = "SELECT * FROM seeker_area_of_interst WHERE  `seekerId`=$id";
    $areaOfInterest = $this->db->query($areaOfInterest);
    return $areaOfInterest->result_array();
  }

//   public function experienceTable($seekerId)
//     {
//         // $seekerId = $_SESSION['seekerId'];
//         $seekerId = "SELECT * FROM `seeker_experience` Where `seekerId`= $seekerId";
//         $addtab = $this->db->query($seekerId);
//         // return $addtab->result_array();
//         return array('response' => $addtab->result_array(), "totalRows" => $addtab->num_rows());
//     }


//     public function insertExperienceForm($seekerId)
//     {
//         $post = $this->input->post(null, true);

//         $tillNowChecked = isset($post['till_now']);
//         $toDate = $tillNowChecked ? date("Y-m-d") : $post['toDate'];

//         if ($post['seekerId'] != NULL) {
//             $seekerId = $post['seekerId'];
//          } else {
//             $seekerId = "SELECT * FROM `seeker_experience` Where `seekerId`= $seekerId";
//         }
        
//         $add = array(
//             'seekerId' => $seekerId,
//             'other_category' => $post['category'],
//             'other_sub_category' => $post['subcategory'],
//             'expYear' => $post['fromDate'],
//             'expMonth' => $toDate,
//             'company_name' => $post['companyname'],
//             'company_location' => $post['companylocation'],
//             'job_role' => $post['role'],
//             'company_mobilenum' => $post['company_mobilenum'],
//             // 'profile' => $post['profile'],
//             'previous_employer_name' => $post['nameofemployer'],
//             'previous_employer_mobile' => $post['number'],
//             'previous_employer_email' => $post['emailid'],
//             'categoryOthers' => isset($post['newcategory']) && $post['newcategory'] === "" ? "0" : "1",
//             'newCategory' => isset($post['newcategory']) ? $post['newcategory'] : "0",
//         );

//         $this->db->insert('seeker_experience', $add);
//     }


public function experienceTable($seekerId)
    {
        // $seekerId = $_SESSION['seekerId'];
        $seekerId = "SELECT * FROM `seeker_experience` Where `seekerId`= $seekerId";
        $addtab = $this->db->query($seekerId);
        // return $addtab->result_array();
        return array('response' => $addtab->result_array(), "totalRows" => $addtab->num_rows());
    }

    public function insertFresherForm($seekerId)
    {
        // $seekerId = $_SESSION['seekerId'];
        $seekerId = "SELECT * FROM `seeker_experience` Where `seekerId`= $seekerId";
        $post = $this->input->post(null, true);

        $add = array(
            'seekerId' => $seekerId,
            'workStatus' => $post['fresher']
        );

        $this->db->insert('seeker_experience', $add);
    }


  public function candidate($id)
  {
    $seekerName = "SELECT * FROM seeker_profile_form WHERE  `id`=$id";
    $seekerName = $this->db->query($seekerName);
    return $seekerName->result_array();
  }

  public function canRequestStatus($id)
  {
    $reqStatus = "SELECT * FROM candidate_requests WHERE  `candidate_id`=$id AND  `employer_id`= '" . $_SESSION['employerid'] . "' ";
    $reqStatus = $this->db->query($reqStatus);
    return $reqStatus->result_array();
  }

  public function matchedAllCandidate()
  {
    // $allTableJoins = "SELECT spf.id as seekerId, spf.name as name, sed.educational_qualification as eq, sed.percentage as per, saoi.id as id, 
    // saoi.other_interst_category as oic, saoi.experience as exp , saoi.skillname as skill FROM seeker_profile_form spf 
    // INNER JOIN seeker_educational_details sed ON sed.seekerId = spf.id INNER JOIN  seeker_area_of_interst saoi ON saoi.seekerId=spf.id;";
    $allTableJoins = "SELECT spf.id as seekerId, spf.name as name, spf.dateofbirth as dob, spf.gender as gender,
     spf.district as dist FROM seeker_profile_form spf WHERE spf.verificationStatus = '1' ;";
    $result = $this->db->query($allTableJoins);
    return $result->result_array();
  }

  public function getCategoryList()
  {
    // $category = "SELECT * FROM `category_master` ORDER BY `categoryName` ASC ";
    $category = " SELECT * FROM category_master WHERE (categoryName, id) IN (
      SELECT DISTINCT categoryName, MIN(id) AS id FROM category_master GROUP BY categoryName )
      ORDER BY categoryName ASC";
    $select = $this->db->query($category);
    return $select->result();
  }

    public function placedCandidatesList()
    {
        $candidatechartList = "SELECT spf.id AS seekerId, spf.eeid AS cdid, spf.name AS name, spf.phonenumber AS mobilenum, spf.position AS position,
            prf.id AS providerId, prf.erid AS emprid, cr.request_status AS curStatus, cr.candidate_id AS cid, prf.company_name AS compName
             FROM  candidate_requests cr
             INNER JOIN provider_registration_form prf ON prf.erid = cr.employer_id 
             INNER JOIN seeker_profile_form spf ON spf.id = cr.candidate_id 
             WHERE (cr.request_status = '6');";
        $response = $this->db->query($candidatechartList);
        return array("response" => $response->result_array(), "totalRows" => $response->num_rows());
    }

    public function interviewedCandidatesList()
    {
        $candidatechartList = "SELECT spf.id AS seekerId, spf.eeid AS cdid, spf.name AS name, spf.phonenumber AS mobilenum,
            prf.id AS providerId, prf.erid AS emprid, cr.request_status AS curStatus, prf.company_name AS compName
             FROM  candidate_requests cr
             INNER JOIN provider_registration_form prf ON prf.erid = cr.employer_id 
             INNER JOIN seeker_profile_form spf ON spf.id = cr.candidate_id 
             WHERE (cr.request_status = '4');";
        $response = $this->db->query($candidatechartList);
        return array("response" => $response->result_array(), "totalRows" => $response->num_rows());
    }

    public function rejectedCandidatesList()
    {
        $candidatechartList = "SELECT spf.id AS seekerId, spf.eeid AS cdid, spf.name AS name, spf.phonenumber AS mobilenum,
            prf.id AS providerId, prf.erid AS emprid, cr.request_status AS curStatus, prf.company_name AS compName
             FROM  candidate_requests cr
             INNER JOIN provider_registration_form prf ON prf.erid = cr.employer_id 
             INNER JOIN seeker_profile_form spf ON spf.id = cr.candidate_id 
             WHERE (cr.request_status = '5');";
        $response = $this->db->query($candidatechartList);
        return array("response" => $response->result_array(), "totalRows" => $response->num_rows());
    }

    public function candidateChartDetails()
    {
        $candidatechartList = "SELECT spf.id AS seekerId, spf.eeid AS cdid, spf.name AS name, spf.phonenumber AS mobilenum,
            prf.id AS providerId, prf.erid AS emprid, cr.request_status AS curStatus
             FROM  candidate_requests cr
             INNER JOIN provider_registration_form prf ON prf.erid = cr.employer_id 
             INNER JOIN seeker_profile_form spf ON spf.id = cr.candidate_id 
             WHERE (cr.request_status = '3' OR cr.request_status = '4');";
        $response = $this->db->query($candidatechartList);
        return array("response" => $response->result_array(), "totalRows" => $response->num_rows());
    }

    public function employerChartDetails()
    {
        $employerchartList = "SELECT * FROM `seeker_profile_form` WHERE placedAtEmployer !=''";
        $response = $this->db->query($employerchartList);
        return array("response" => $response->result_array(), "totalRows" => $response->num_rows());
    }

    // Candidate Request Table
    public function candidateStatus()
    {
        $postData = $this->input->post(null, true);
        $currentStatus = array(
            'request_status' => $postData['currentStatus']
        );

        $this->db->where('candidate_id', $postData['seekerId']);
        $this->db->where('employer_id', $postData['employerId']);
        $this->db->update('candidate_requests', $currentStatus);
    }


    // Seeker Profile Form
    public function currentStatusSpf()
    {
        $postData = $this->input->post(null, true);
        if ($postData['currentStatus'] == '6') {

            $currentStatus = array(
                'currentStatus' => '1',
                'placedAtEmployer' => $postData['employerId']
            );
            $this->db->where('id', $postData['seekerId']);
            $this->db->update('seeker_profile_form', $currentStatus);
        }
        else if ($postData['currentStatus'] == '5') {

            $currentStatus = array(
                'currentStatus' => '2',
                'placedAtEmployer' => $postData['employerId']
            );
            $this->db->where('id', $postData['seekerId']);
            $this->db->update('seeker_profile_form', $currentStatus);
        }
        else if ($postData['currentStatus'] == '4') {

            $currentStatus = array(
                'currentStatus' => '0',
                'placedAtEmployer' => $postData['employerId']
            );
            $this->db->where('id', $postData['seekerId']);
            $this->db->update('seeker_profile_form', $currentStatus);
        }
        else if ($postData['currentStatus'] == '0') {

            $currentStatus = array(
                'currentStatus' => '2',
                'placedAtEmployer' => $postData['employerId']
            );
            $this->db->where('id', $postData['seekerId']);
            $this->db->update('seeker_profile_form', $currentStatus);
        }
    }


    // Delete Employee from Table permanently
    // public function deleteEmployee($deleteEmployeeId)
    // {
    //     $delete = "DELETE FROM `seeker_profile_form` WHERE `id`=$deleteEmployeeId";
    //     $del = $this->db->query($delete);

    //     $delete = "DELETE FROM `seeker_educational_details` WHERE `seekerId`=$deleteEmployeeId";
    //     $del = $this->db->query($delete);

    //     $delete = "DELETE FROM `seeker_experience` WHERE `seekerId`=$deleteEmployeeId";
    //     $del = $this->db->query($delete);

    //     $delete = "DELETE FROM `seeker_skill` WHERE `seekerId`=$deleteEmployeeId";
    //     $del = $this->db->query($delete);

    //     $delete = "DELETE FROM `seeker_area_of_interst` WHERE `seekerId`=$deleteEmployeeId";
    //     $del = $this->db->query($delete);
    // }


    // public function addNewAdminApprovel()
    // {
    //     $addNewAdminApprovel = "SELECT * FROM `provider_registration_form` WHERE verificationStatus ='1' And addNewRequest ='0'";
    //     $response = $this->db->query($addNewAdminApprovel);
    //     return array('response' => $response->result_array(), "totalRows" => $response->num_rows());
    // }

    // public function deleteAdminApprovel()
    // {
    //     $addNewAdminApprovel = "SELECT * FROM `provider_registration_form` WHERE verificationStatus ='1' And addNewRequest ='0'";
    //     $response = $this->db->query($addNewAdminApprovel);
    //     return array('response' => $response->result_array(), "totalRows" => $response->num_rows());
    // }

    // public function addNewEmployerApprovel()
    // {
    //     $addNewAdminApprovel = "SELECT * FROM `provider_registration_form` WHERE verificationStatus ='1' And addNewRequest ='1' AND addNewApprovel != '1'";
    //     $response = $this->db->query($addNewAdminApprovel);
    //     return array('response' => $response->result_array(), "totalRows" => $response->num_rows());
    // }

    // public function deleteEmployerApprovel()
    // {
    //     $addNewAdminApprovel = "SELECT * FROM `provider_registration_form` WHERE deleteRequest ='1' AND deleteApprovel != '1'";
    //     $response = $this->db->query($addNewAdminApprovel);
    //     return array('response' => $response->result_array(), "totalRows" => $response->num_rows());
    // }



    // Candidate details entered by Admin

    public function getBasicDetails($id)
    {
        $getBasicDetails = "SELECT * FROM `seeker_profile_form` WHERE `id` = $id";
        $select = $this->db->query($getBasicDetails);
        return $select->result_array();
    }

    public function jobInterestResume()
    {
        $post = $this->input->post(null, true);

        $interestResume = array(
            'seekerId' => $post['seekerId'],
            'other_interst_category' => $post['category'],
            'other_sub_interst_category' => $post['subcategory'],
            'prefered_location' => $post['preferred-location'],
            'job_type' => $post['jobtype'],
            'description' => $post['description'],
            'expected_salary' => $post['expected-salary'],
            'categoryOthers' => isset($post['newcategory']) && $post['newcategory'] === "" ? "0" : "1",
            'newCategory' => isset($post['newcategory']) ? $post['newcategory'] : "0",
        );
        $this->db->insert('seeker_area_of_interst', $interestResume);


        $config['upload_path'] = "./uploads/";
        $config['allowed_types'] = "jpg|png|pdf|jpeg";
        $config['max_size'] = 1024; // 1MB
        $this->load->library('upload', $config);
        $resumefilename = "No Resume";
        if ($this->upload->do_upload('resumeFile')) {
            $data = $this->upload->data();
            $resumefilename = $data['file_name'];
        } else {
            $error = $this->upload->display_errors();
        }
        $basepath = base_url() . 'uploads/';
        $urlresume = $basepath . $resumefilename;

        // Resume Upload
        $updateResume = array(
            'resume_filename' => $resumefilename,
            'resume_filename_url' => $urlresume
        );
        $this->db->where('seekerId', $post['seekerId']);
        $this->db->update('seeker_area_of_interst', $updateResume);
    }


    public function do_upload()
    {

        $config['upload_path'] = "./uploads/";
        $config['allowed_types'] = "jpg|png|pdf";
        $config['max_size'] = 1024;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file')) {
            $data = $this->upload->data();
        } else {
            $error = $this->upload->display_errors();
        }
    }


}

?>
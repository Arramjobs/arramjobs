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

        public function generate_customer_id() {
    
            $latest_customer_id = $this->get_latest_customer_id();
            $incremented_id = str_pad((int)substr($latest_customer_id, -2) + 1, 2, '0', STR_PAD_LEFT);
            $customer_id =  $incremented_id;
            $insert = array(
                'admin_id' => $customer_id
            );
            $mobileNumber = $this->input->post('mobileNumber');
            $this->db->where('mobileNumber',$mobileNumber);
            $this->db->update('admin_login', $insert);
            return $customer_id;
        }
    
        public function get_latest_customer_id() {
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
            prf.id AS providerId, prf.erid AS emprid
             FROM  candidate_requests cr
             INNER JOIN provider_registration_form prf ON prf.erid = cr.employer_id 
             INNER JOIN seeker_profile_form spf ON spf.id = cr.candidate_id 
             WHERE cr.request_status = '1' ;";

            $response = $this->db->query($candidateRequestList);
            return array("response" =>$response->result_array(), "totalRows" => $response->num_rows());
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

        public function addcategoryExperience(){
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

        public function addcategoryArea(){
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

        public function addcategoryEmployerJob(){
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

         function cancelNewCategoryExp(){
            $postData = $this->input->post(null, true);
            $cancelnewcategory = array(
                'categoryOthers' => $postData['categoryothers']
            );

            $this->db->where('id', $postData['jobTableId']);
            $this->db->update('seeker_experience', $cancelnewcategory);
        }

        function cancelNewCategoryArea(){
            $postData = $this->input->post(null, true);
            $cancelnewcategory = array(
                'categoryOthers' => $postData['categoryothers']
            );

            $this->db->where('id', $postData['jobTableId']);
            $this->db->update('seeker_area_of_interst', $cancelnewcategory);
        }

        function cancelNewCategoryJob(){
            $postData = $this->input->post(null, true);
            $cancelnewcategory = array(
                'categoryOthers' => $postData['categoryothers']
            );

            $this->db->where('id', $postData['jobTableId']);
            $this->db->update('provider_job', $cancelnewcategory);
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
            $getBasicDetails = "SELECT * FROM `seeker_profile_form` WHERE id = $id";
            $response = $this->db->query($getBasicDetails);
            return $response->result_array();
    }

    public function educationTable($id)
    {
        $educationTable = "SELECT * FROM `seeker_educational_details` WHERE id = $id";
        $response = $this->db->query($educationTable);
        // $addtab = $this->db->query($id);
        // return $addtab->result_array();
        
        return $response->result_array();
        // return array("response" =>$addtab->result_array(), "totalRows" => $addtab->num_rows());
    }

    public function insertEducationForm()
    {
        // $seekerId=$_SESSION['seekerId'];
        $post = $this->input->post(null, true);


        $config['upload_path'] = "./uploads/";
        $basepath =  base_url().'uploads/';
        $config['allowed_types'] = "jpg|png|pdf|jpeg";
        $config['max_size'] = 1024;


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

        $seekerId = $_SESSION['seekerId'];
        $add = array(
            'seekerId' => $seekerId,
            'educational_qualification' => $post['qualification'],
            'department' => $post['department'],
            'educationmode' => $post['educationmode'],
            'school_college_name' => $post['school'],
            'percentage' => $post['percentage'],
            'yearOfPassing' => $post['year_passed'],
            'tencer_url' =>   $urlten,
            'twelvecer_url' =>   $urltwelve,
            'diplomacer_url' =>   $urldiploma,
            'ugcer_url' =>  $urlug,
            'pgcer_url' =>  $urlpg,
            'doccer_url' =>  $urldoc,
            'ten_cer' =>  $cer10,
            'twelve_cer' =>  $cer12,
            'diploma_cer' =>  $cerdip,
            'ug_cer' =>  $cerug,
            'pg_cer' =>  $cerpg,
            'doc_cer' =>  $cerdoct
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
        $basepath =  base_url().'uploads/';

         $config['allowed_types'] = "jpg|png|pdf";
         $config['max_size'] = 1024;
 
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
            'tencer_url' =>   $urltenu,
            'twelvecer_url' =>   $urltwelveu,
            'diplomacer_url' =>   $urldiplomau,
            'ugcer_url' =>  $urlugu,
            'pgcer_url' =>  $urlpgu,
            'doccer_url' =>  $urldocu,
            'ten_cer' =>  $ucer10,
            'twelve_cer' =>  $ucer12,
            'diploma_cer' =>  $ucerdip,
            'ug_cer' =>  $ucerug,
            'pg_cer' =>  $ucerpg,
            'doc_cer' =>  $ucerdoct

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



    public function experienceTable()
    {
        $seekerId = $_SESSION['seekerId'];
        $seekerId = "SELECT * FROM `seeker_experience` Where `seekerId`= $seekerId";
        $addtab = $this->db->query($seekerId);
        // return $addtab->result_array();
        return array('response' => $addtab->result_array(), "totalRows" => $addtab->num_rows());
    }

    public function getCategoryList(){
        $category = " SELECT * FROM category_master WHERE (categoryName, id) IN (
                        SELECT DISTINCT categoryName, MIN(id) AS id FROM category_master GROUP BY categoryName )
                        ORDER BY categoryName ASC";
        $select = $this->db->query($category);
        return $select->result(); 
    }


    public function insertExperienceForm()
    {
        $seekerId = $_SESSION['seekerId'];
        $post = $this->input->post(null, true);

    $tillNowChecked = isset($post['till_now']);
    $toDate = $tillNowChecked ? date("Y-m-d") : $post['toDate'];

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
            'categoryOthers' =>isset($post['newcategory']) && $post['newcategory'] === "" ? "0" : "1",
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

    public function areaOfIntrestTable()
    {
        $seekerId = $_SESSION['seekerId'];
        $seekerId = "SELECT * FROM `seeker_area_of_interst` Where `seekerId`= $seekerId";
        $addtab = $this->db->query($seekerId);
        // return $addtab->result_array();
        return array("response" =>$addtab->result_array(), "totalRows" => $addtab->num_rows());
    }

    public function insertAreaOfIntrest()
    {
        $seekerId = $_SESSION['seekerId'];
        $post = $this->input->post(null, true);

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
            'categoryOthers' =>isset($post['newcategory']) && $post['newcategory'] === "" ? "0" : "1",
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




    //  skill,
    public function skillTable()
    {
        $seekerId = $_SESSION['seekerId'];
        $seekerId = "SELECT * FROM `seeker_skill` Where `seekerId`= $seekerId";
        $addtab = $this->db->query($seekerId);
        return $addtab->result_array();
    }

    public function insertSkillForm()
    {
        $seekerId = $_SESSION['seekerId'];
        $post = $this->input->post(null, true);

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
    public function updateresumefilename($resumefilename)
    {
        $seekerId = $_SESSION['seekerId'];
        $basepath =  base_url().'uploads/';
       
        $updateresume['resume_filename'] = $resumefilename;
        $updateresume['resume_filename_url'] = $basepath.$resumefilename;

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
        $config['max_size'] = 1024;

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

    ?>
 

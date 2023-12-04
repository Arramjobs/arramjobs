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


        public function candidateRequestDetails()
        {
            $candidateRequestList = "SELECT * FROM `seeker_profile_form` WHERE identityVerify ='1' AND addressVerify ='1' AND employmentVerify ='1' AND educationverify ='1' AND deleteStatus ='0' AND requestCandidate ='1'";
            $response = $this->db->query($candidateRequestList);
            return $response->result_array();
        }

        public function approveRequest()
        {
            $postData = $this->input->post(null, true);
            $updateRequestApprovel = array(
                'requestCandidate' => $postData['approveCandidateRequest']
            );

            $this->db->where('id', $postData['EmployeeId']);
            $this->db->update('seeker_profile_form', $updateRequestApprovel);
        }

        public function cancelRequest()
        {
            $postData = $this->input->post(null, true);
            $updateRequestApprovel = array(
                'requestCandidate' => $postData['cancelCandidateRequest']
            );

            $this->db->where('id', $postData['EmployeeId']);
            $this->db->update('seeker_profile_form', $updateRequestApprovel);
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

    }

    ?>
 

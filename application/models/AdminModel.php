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
            $unVerifiedEmployers = "SELECT * FROM `provider_registration_form` WHERE verificationStatus ='0' AND deleteApprovel !='1'";
            $response = $this->db->query($unVerifiedEmployers);
            return $response->result_array();
        }

        public function verifiedEmployers()
        {
            // $verifiedEmployers = "SELECT * FROM `provider_registration_form` WHERE verificationStatus ='1' AND addNewRequest = '1' AND addNewApprovel = '1'";
            $verifiedEmployers = "SELECT * FROM `provider_registration_form` WHERE verificationStatus ='1' AND ( addNewApprovel = '1' OR deleteApprovel = '2')";
            $response = $this->db->query($verifiedEmployers);
            return $response->result_array();
        }

        public function verifyEmployerDetails($id)
        {
            $verifyEmployerDetails = "SELECT * FROM `provider_registration_form` WHERE id = $id";
            $response = $this->db->query($verifyEmployerDetails);
            return $response->result_array();
        }

        public function verifyEmployer()
        {
            $postData = $this->input->post(null, true);
            $updateVerificationStatus = array(
                'verificationStatus' => $postData['verificationStatus'],
                'verificationRemarks' => $postData['verificationRemarks'],
                'addNewRequest' => $postData['addRequest'],
                'addNewApprovel' => $postData['addApprovel'],
                'deleteApprovel' => $postData['deleteApprovel']
            );

            $this->db->where('id', $postData['id']);
            $this->db->update('provider_registration_form', $updateVerificationStatus);
        }


        public function verifyEmployerVerified()
        {
            $postData = $this->input->post(null, true);
            $updateVerification = array(
                'verificationStatus' => $postData['verificationStatus'],
                'verificationRemarks' => $postData['verificationRemarks'],
                'addNewRequest' => $postData['addNewRequest'],
                'deleteRequest' => $postData['deleteRequest'],
                'addNewApprovel' => $postData['addNewApprovel'],
                'deleteApprovel' => $postData['deleteApprovel']
            );

            $this->db->where('id', $postData['id']);
            $this->db->update('provider_registration_form', $updateVerification);
        }

        public function deleteRequestEmployer()
        {
            $postData = $this->input->post(null, true);
            $updateDeleteRequestStatus = array(
                'deleteRequest' => $postData['deleteRequest'],
                'deleteRequestRemarks' => $postData['deleteRequestRemarks'],
                'addNewRequest' => $postData['addNewRequest'],
                'addNewApprovel' => $postData['addNewApprovel'],
            );

            $this->db->where('id', $postData['id']);
            $this->db->update('provider_registration_form', $updateDeleteRequestStatus);
        }

        public function employerApprovelStatus()
        {
            $postData = $this->input->post(null, true);
            $updateVerificationStatus = array(
                'addNewApprovel' => $postData['addNewApprovel'],
                'addNewApprovelRemarks' => $postData['addNewApprovelRemarks'],
                'deleteApprovel' => $postData['deleteApprovel'],
                'deleteApprovelRemarks' => $postData['deleteApprovelRemarks'],
                'addNewRequest' => $postData['addNewRequest'],
                'deleteRequest' => $postData['deleteRequest']
            );

            $this->db->where('id', $postData['id']);
            $this->db->update('provider_registration_form', $updateVerificationStatus);
        }

        public function deleteEmployerList()
        {
            $deleteEmployerList = "SELECT * FROM `provider_registration_form` WHERE deleteApprovel = '1' OR addNewApprovel = '2' ";
            $response = $this->db->query($deleteEmployerList);
            return $response->result_array();
        }

        public function restoreEmployerDetails()
        {
            $postData = $this->input->post(null, true);
            $updateRestoreStatus = array(
                'deleteRequest' => $postData['deleterequest'],
                'deleteApprovel' => $postData['deleteapprovel'],
                'addNewRequest' => $postData['addrequest'],
                'addNewApprovel' => $postData['addapprovel'],
                'verificationStatus' => $postData['verificationstatus']
            );

            $this->db->where('id', $postData['EmployerId']);
            $this->db->update('provider_registration_form', $updateRestoreStatus);
        }

        public function deleteEmployer($deleteEmployerId)
        {
            $delete = "DELETE FROM `provider_registration_form` WHERE `id`=$deleteEmployerId";
            $del = $this->db->query($delete);
        }


        public function unVerifiedEmployees()
        {
            $unVerifiedEmployees = "SELECT * FROM `seeker_profile_form` WHERE verificationStatus ='0' AND deleteStatus ='0'";
            $response = $this->db->query($unVerifiedEmployees);
            return $response->result_array();
        }

        public function verifiedEmployees()
        {
            $verifiedEmployees = "SELECT * FROM `seeker_profile_form` WHERE verificationStatus ='1' AND deleteStatus ='0'";
            $response = $this->db->query($verifiedEmployees);
            return $response->result_array();
        }

        public function deleteEmployeeList()
        {
            $deleteEmployeeList = "SELECT * FROM `seeker_profile_form` WHERE deleteStatus ='1'";
            $response = $this->db->query($deleteEmployeeList);
            return $response->result_array();
        }

        public function verifyEmployeeDetails()
        {
            $postData = $this->input->post(null, true);
            $updateVerificationStatus = array(
                'verificationStatus' => $postData['verificationStatus'],
                'verificationRemarks' => $postData['verificationRemarks']
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

        public function deleteEmployee($deleteEmployeeId)
        {
            $delete = "DELETE FROM `seeker_profile_form` WHERE `id`=$deleteEmployeeId";
            $del = $this->db->query($delete);

            $delete = "DELETE FROM `seeker_educational_details` WHERE `seekerId`=$deleteEmployeeId";
            $del = $this->db->query($delete);

            $delete = "DELETE FROM `seeker_experience` WHERE `seekerId`=$deleteEmployeeId";
            $del = $this->db->query($delete);

            $delete = "DELETE FROM `seeker_skill` WHERE `seekerId`=$deleteEmployeeId";
            $del = $this->db->query($delete);
            
            $delete = "DELETE FROM `seeker_area_of_interst` WHERE `seekerId`=$deleteEmployeeId";
            $del = $this->db->query($delete);
        }

        public function addNewAdminApprovel()
        {
            $addNewAdminApprovel = "SELECT * FROM `provider_registration_form` WHERE verificationStatus ='1' And addNewRequest ='0'";
            $response = $this->db->query($addNewAdminApprovel);
            return array('response' => $response->result_array(), "totalRows" => $response->num_rows());
        }

        public function deleteAdminApprovel()
        {
            $addNewAdminApprovel = "SELECT * FROM `provider_registration_form` WHERE verificationStatus ='1' And addNewRequest ='0'";
            $response = $this->db->query($addNewAdminApprovel);
            return array('response' => $response->result_array(), "totalRows" => $response->num_rows());
        }

        public function addNewEmployerApprovel()
        {
            $addNewAdminApprovel = "SELECT * FROM `provider_registration_form` WHERE verificationStatus ='1' And addNewRequest ='1' AND addNewApprovel != '1'";
            $response = $this->db->query($addNewAdminApprovel);
            return array('response' => $response->result_array(), "totalRows" => $response->num_rows());
        }

        public function deleteEmployerApprovel()
        {
            $addNewAdminApprovel = "SELECT * FROM `provider_registration_form` WHERE deleteRequest ='1' AND deleteApprovel != '1'";
            $response = $this->db->query($addNewAdminApprovel);
            return array('response' => $response->result_array(), "totalRows" => $response->num_rows());
        }
    }

    ?>
 

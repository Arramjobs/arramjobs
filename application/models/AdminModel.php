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
            $unVerifiedEmployers = "SELECT * FROM `provider_registration_form` WHERE verificationStatus ='0'";
            $response = $this->db->query($unVerifiedEmployers);
            return $response->result_array();
        }

        public function verifiedEmployers()
        {
            $verifiedEmployers = "SELECT * FROM `provider_registration_form` WHERE verificationStatus ='1'";
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
                'verificationRemarks' => $postData['verificationRemarks']
            );

            $this->db->where('id', $postData['id']);
            $this->db->update('provider_registration_form', $updateVerificationStatus);
        }

        public function employerApprovelStatus()
        {
            $postData = $this->input->post(null, true);
            $updateVerificationStatus = array(
                'addNewApprovel' => $postData['addNewApprovel'],
                'addNewApprovelRemarks' => $postData['addNewApprovelRemarks'],
                'deleteApprovel' => $postData['deleteApprovel'],
                'deleteApprovelRemarks' => $postData['deleteApprovelRemarks']
            );

            $this->db->where('id', $postData['id']);
            $this->db->update('provider_registration_form', $updateVerificationStatus);
        }

        public function unVerifiedEmployees()
        {
            $unVerifiedEmployees = "SELECT * FROM `seeker_profile_form` WHERE verificationStatus ='0'";
            $response = $this->db->query($unVerifiedEmployees);
            return $response->result_array();
        }

        public function verifiedEmployees()
        {
            $verifiedEmployees = "SELECT * FROM `seeker_profile_form` WHERE verificationStatus ='1'";
            $response = $this->db->query($verifiedEmployees);
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
            $addNewAdminApprovel = "SELECT * FROM `provider_registration_form` WHERE verificationStatus ='1' And addNewRequest ='1' And addNewApprovel ='0'";
            $response = $this->db->query($addNewAdminApprovel);
            return array('response' => $response->result_array(), "totalRows" => $response->num_rows());
        }

        public function deleteEmployerApprovel()
        {
            $addNewAdminApprovel = "SELECT * FROM `provider_registration_form` WHERE verificationStatus ='1' And addNewApprovel ='1' And deleteRequest ='1' And deleteApprovel ='0'";
            $response = $this->db->query($addNewAdminApprovel);
            return array('response' => $response->result_array(), "totalRows" => $response->num_rows());
        }
    }

    ?>
 

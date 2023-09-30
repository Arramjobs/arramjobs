 <?php
    class AdminModel extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
        }

        Public function adminLogin(){
            $postData = $this->input->post(null, true);
            $userName = $postData['userName'];
            $password = $postData['password'];
            $query = "SELECT * FROM admin_login WHERE `userName`='$userName' AND `password`='$password'";
            $count = $this->db->query($query);
            return $count->result_array();
        }

        public function createAdminUser(){
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

        public function adminUsers(){
            $provider = "SELECT * FROM `admin_login`";
            $select = $this->db->query($provider);
            return $select->result_array();
        }

        public function unVerifiedEmployers(){
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

        public function unVerifiedCandidates()
        {
            $unVerifiedCandidates = "SELECT * FROM `seeker_profile_form` WHERE verificationStatus ='0'";
            $response = $this->db->query($unVerifiedCandidates);
            return $response->result_array();
        }

        public function verifiedCandidates()
        {
            $verifiedCandidates = "SELECT * FROM `seeker_profile_form` WHERE verificationStatus ='1'";
            $response = $this->db->query($verifiedCandidates);
            return $response->result_array();
        }

        public function verifyCandidateDetails(){
            $postData = $this->input->post(null, true);
            $updateVerificationStatus = array(
                'verificationStatus' => $postData['verificationStatus']
            );

            $this->db->where('id', $postData['candidateId']);
            $this->db->update('seeker_profile_form', $updateVerificationStatus);
        }
    }

    ?>
 

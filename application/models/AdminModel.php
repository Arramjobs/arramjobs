 <?php
    class AdminModel extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
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
    }

    ?>
 

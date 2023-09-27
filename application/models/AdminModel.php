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
                'address' => $postData['address'],
                'address2' => $postData['address2'],
                'city' => $postData['city'],
                'state' => $postData['state'],
                'pincode' => $postData['pincode']
            );
            $this->db->insert('admin_login', $insert);
        }
    }

    ?>
 

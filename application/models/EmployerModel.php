<?php


class EmployerModel extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }


  public function register()
  {
    $postData = $this->input->post(null, true);

    $config['upload_path'] = "./uploads/";
    // $basepath = 'http://localhost/arramjobs/uploads/';
    $basepath =  base_url().'uploads/';
    $config['allowed_types'] = "jpg|png|pdf|jpeg";
    $config['max_size'] = 1024;

    $this->load->library('upload', $config);

    $cmp_logo = "None";
    if ($this->upload->do_upload('logo')) {
      $data = $this->upload->data();
      $cmp_logo = $data['file_name'];
    } else {
      $error = $this->upload->display_errors();
    }

    $cmplogourl = $basepath . $cmp_logo;

    $insert = array(
      'company_name' => $postData['name'],
      'company_mobile_number' => $postData['mobile'],
      'company_email' => $postData['email'],
      'password' => $postData['cmpassword'],
      'street_address' => $postData['address'],
      'Landmark' => $postData['landmark'],
      'City' => $postData['city'],
      'district' => $postData['district'],
      'state' => $postData['state'],
      'pincode' => $postData['pincode'],
      'companyLocationUrl' => $postData['locationUrl'],
      'company_logourl' => $cmplogourl,
      'company_logo' => $cmp_logo,
      'companywebsite' => $postData['cwebsite'],
      'companypan' => $postData['cpan'],
      'companygst' => $postData['cgst'],
      'name' => $postData['name1'],
      'role' => $postData['role'],
      'mobile_number' => $postData['mobile1'],
      'email' => $postData['email1'],
    );

    $this->db->insert('provider_registration_form', $insert);
  }


  public function generate_customer_id() {
    $current_year = date('Y');

    $latest_customer_id = $this->get_latest_customer_id();
    $incremented_id = str_pad((int)substr($latest_customer_id, -4) + 1, 4, '0', STR_PAD_LEFT);
    
    $customer_id = "AJER" . $current_year . $incremented_id;

    $insert = array(
        'erid' => $customer_id
    );

    $mobilenumber = $this->input->post('mobile');

    $this->db->where('company_mobile_number',$mobilenumber);
    $this->db->update('provider_registration_form', $insert);
    return $customer_id;
}

public function get_latest_customer_id() {
    $this->db->select('erid');
    $this->db->from('provider_registration_form'); 
    $this->db->order_by('erid', 'DESC');
    $this->db->limit(1);

    $query = $this->db->get();
    if ($query->num_rows() > 0) {
        $row = $query->row();
        return $row->erid;
    } else {
        return 'AJER' . date('Y') . '0000';
    }
}

public function checkUserExistence($phone_number)
    {
        $this->db->where('company_mobile_number', $phone_number);
        $query = $this->db->get('provider_registration_form');
        return $query->num_rows() > 0;
    }


  // public function database_login()
  // {
  //   $postData = $this->input->post(null, true);
  //   $user_id = $postData['userID'];
  //   $password = $postData['password'];
  //   $query = "SELECT * FROM provider_login WHERE user_id='$user_id' AND password='$password'";
  //   $count = $this->db->query($query);
  //   return $count->result_array();
  // }


  // public function providerLogin()
  // {
  //   $postData = $this->input->post(null, true);
  //   // $employerid = $postData['userName'];
  //   $companyMobile = $postData['mobilenumber'];
  //   $companyPassword = $postData['erpassword'];
  //   $query = "SELECT * FROM provider_registration_form WHERE company_mobile_number = '$companyMobile' AND password = '$companyPassword' AND verifyOne = '1' AND  verifyTwo = '1' AND deleteStatus = '0'";
  //   $count = $this->db->query($query);
  //   return $count->result_array();
  // }

  public function providerLogin()
  {
    $postData = $this->input->post(null, true);
    $companyMobile = $postData['mobilenumber'];
    $companyPassword = $postData['erpassword'];
    $query = "SELECT * FROM provider_registration_form WHERE company_mobile_number = '$companyMobile' AND password = '$companyPassword' ";
    $count = $this->db->query($query);
    return $count->result_array();
  }


  public function provider_detail()
  {
    $jobProviderId = $_SESSION['jobProviderId'];
    $provider = "SELECT * FROM `provider_registration_form` Where `id`= $jobProviderId";
    $select = $this->db->query($provider);
    return $select->result_array();

    // $seekerId=$_SESSION['seekerId'];
    // $provider = "SELECT * FROM `seeker_profile_form` WHERE `id` = $seekerId";
    // $select = $this->db->query($provider);
    // return $select->result_array();
  }


  public function update_data()
  {
    $postData = $this->input->post(null, true);
    $id = $postData['id'];

    $config['upload_path'] = "./uploads/";
    $basepath =  base_url().'uploads/';
    $config['allowed_types'] = "jpg|png|pdf|jpeg";
    $config['max_size'] = 1024;

    $this->load->library('upload', $config);

    $cmp_logou = $postData['oldimgname'];
    
    if ($this->upload->do_upload('logo1')) {
      $data = $this->upload->data();
      $cmp_logou = $data['file_name'];
    } else {
      $error = $this->upload->display_errors();
    }

    $cmplogourlu = $basepath . $cmp_logou;


    $data = array(
      'company_name' => $postData['name'],
      'company_mobile_number' => $postData['phno'],
      'company_email' => $postData['email'],
      'street_address' => $postData['addr'],
      'Landmark' => $postData['landmark1'],
      'City' => $postData['city1'],
      'district' => $postData['district1'],
      'state' => $postData['state1'],
      'pincode' => $postData['pincode1'],
      'companyLocationUrl' => $postData['locationUrl'],
      'company_logourl' => $cmplogourlu,
      'company_logo' => $cmp_logou,
      'companywebsite' => $postData['cwebsite1'],
      'companypan' => $postData['cpan1'],
      'companygst' => $postData['cgst1'],
      'name' => $postData['name1'],
      'role' => $postData['role'],
      'mobile_number' => $postData['phno1'],
      'email' => $postData['mail1'],

    );
    $this->db->where('id', $id);
    $this->db->update('provider_registration_form', $data);
  }



  public function addNew()
  {
    $jobProviderId = $_SESSION['jobProviderId'];
    $post = $this->input->post(null, true);

    $add = array(
      'jobProviderId' => $jobProviderId,
      'company_name' => $post['company_name'],
      'job_category_id' => $post['category'],
      'jobCategory' => $post['category'],
      'jobSubCategory' => $post['subcategory'],
      'job_sub_category_id' => $post['subcategory'],
      'location' => $post['preferred_location'],
      'locationUrl' => $post['preferred_location_url'],
      'job_type' => $post['jobtype'],
      'salary' => $post['expected_salary'],
      'experience' => $post['experience'],
      'number_of_openings' => $post['no_of_openings'],
      'description' => $post['description'],
      'categoryOthers' =>isset($post['newcategory']) && $post['newcategory'] === "" ? "0" : "1",
      'newCategory' => isset($post['newcategory']) ? $post['newcategory'] : "0"

    );

    $this->db->insert('provider_job', $add);
  }


  public function addTab()
  {
    $jobProviderId = $_SESSION['jobProviderId'];
    $providerAdd = "SELECT * FROM `provider_job` Where `jobProviderId`= $jobProviderId";
    $addtab = $this->db->query($providerAdd);
    return $addtab->result_array();


    // $jobProviderId=$_SESSION['jobProviderId'];
    // $provider = "SELECT * FROM `provider_registration_form` Where `id`= $jobProviderId";
    // $select = $this->db->query($provider);
    // return $select->result_array();
  }


  public function updatejob($id)
  {
    $update = "SELECT * FROM `provider_job` Where `id`=$id";
    $add = $this->db->query($update);
    return $add->result_array();
  }

  public function update_job()
  {
    $post = $this->input->post(null, true);
    $id = $post['id'];
    $addjob = array(
      'company_name' => $post['company_name'],
      'job_category_id' => $post['category'],
      'jobCategory' => $post['category'],
      'jobSubCategory' => $post['subcategory'],
      'job_sub_category_id' => $post['subcategory'],
      'location' => $post['preferred_location'],
      'locationUrl' => $post['preferred_location_url'],
      'job_type' => $post['jobtype'],
      'salary' => $post['expected_salary'],
      'experience' => $post['experience'],
      'number_of_openings' => $post['no_of_openings'],
      'description' => $post['description']
    );
    $this->db->where('id', $id);
    $this->db->update('provider_job', $addjob);
  }


  public function deleteAddJob($deleteId)
  {

    $delete = "DELETE FROM `provider_job` WHERE `id`=$deleteId";
    $del = $this->db->query($delete);
    // $this->db->where('id', $deleteId);
  }

  public function getCategoryList(){
    // $category = "SELECT * FROM `category_master` ORDER BY `categoryName` ASC ";
    $category = " SELECT * FROM category_master WHERE (categoryName, id) IN (
      SELECT DISTINCT categoryName, MIN(id) AS id FROM category_master GROUP BY categoryName )
      ORDER BY categoryName ASC";
    $select = $this->db->query($category);
    return $select->result(); 
}


  //   public function joinTables($jobCategory)
  //   {
  //       $query = "SELECT spf.id as id, spf.name as name, sed.educational_qualification as eq, sed.percentage as per, sk.experience as exp, sk.skill as skill,
  //                 saoi.id as id, saoi.other_interst_category as oic FROM seeker_profile_form spf INNER JOIN seeker_educational_details sed ON sed.id = spf.id INNER JOIN seeker_skill sk ON sk.id = spf.id INNER JOIN seeker_area_of_interst saoi ON saoi.id=spf.id WHERE  saoi.other_interst_category = '".$jobCategory."'";
  //       $result = $this->db->query($query);
  //       return $result->result();
  //   }

  public function candidates($jobCategory)
  {
    // $query = "SELECT spf.id as seekerId, spf.name as name,  saoi.other_sub_interst_category as oisc, saoi.experience as exps, ssk.skill as skills 
    // FROM seeker_profile_form spf 
    // INNER JOIN  seeker_area_of_interst saoi ON saoi.seekerId = spf.id 
    // INNER JOIN  seeker_skill ssk ON ssk.seekerId = spf.id
    // WHERE  saoi.other_interst_category = '" . $jobCategory . "' AND spf.identityVerify ='1' AND spf.addressVerify ='1' AND spf.employmentVerify ='1' AND spf.educationVerify ='1' AND spf.deleteStatus ='0' ;" ;
     $query = "SELECT spf.id AS seekerId, spf.eeid AS cdid, spf.requestCandidate AS rqstCd, spf.name AS name, saoi.other_interst_category AS oic, saoi.other_sub_interst_category AS oisc, GROUP_CONCAT(ssk.skill) AS skills
      FROM seeker_profile_form spf 
      INNER JOIN seeker_area_of_interst saoi ON saoi.seekerId = spf.id 
      INNER JOIN seeker_skill ssk ON ssk.seekerId = spf.id 
      WHERE saoi.other_interst_category = '" . $jobCategory . "' 
      AND spf.identityVerify = '1'
       AND spf.addressVerify = '1'
        AND spf.employmentVerify = '1'
         AND spf.identityVerify = '1'
          AND spf.deleteStatus = '0'
           GROUP BY spf.id, spf.name, saoi.experience;";
    $result = $this->db->query($query);
    return $result->result_array();
  }


  public function requestForCandidate()
  {
      $postData = $this->input->post(null, true);
      $updateRequestStatus = array(
          'requestCandidate' => $postData['requestadmin'],
          'requestedEmployer' => $postData['employer_id']

      );

      $this->db->where('id', $postData['candidateid']);
      $this->db->update('seeker_profile_form', $updateRequestStatus);
  }

  public function allTableJoin()
  {
    $allTableJoins = "SELECT 
                spf.id as id, 
                spf.name as name, 
                sed.educational_qualification as eq, 
                sed.department as dep ,
                sed.school_college_name as scn, 
                sed.percentage as per,
                sed.yearOfPassing as yop, 
                sk.skill as skill, 
                sk.experience as exp, 
                sk.skill_level as skl, 
                sp.projectName as PN, 
                sp.projectDuration as PD, 
                sp.roleInProject as rip, 
                sp.projectDes as PDDescription, 
                sp.skillsUsedInProject as skillsUsedInProject, 
                saoi.other_interst_category as oic, 
                saoi.other_sub_interst_category as osic, 
                saoi.prefered_location as pl, 
                saoi.experience as expe, 
                saoi.job_type as jt, 
                saoi.description as des, 
                saoi.expected_salary as es, 
                exde.other_category as oc, 
                exde.other_sub_category as osc, 
                exde.company_name as cn, 
                exde.job_role as jr, 
                exde.previous_employer_name as pen, 
                exde.previous_employer_mobile as pem, 
                exde.previous_employer_email as pee
            FROM seeker_profile_form spf
            INNER JOIN seeker_educational_details sed ON sed.id = spf.id 
            INNER JOIN seeker_skill sk ON sk.id = spf.id
            INNER JOIN seeker_projects sp ON sp.id = spf.id
            INNER JOIN seeker_area_of_interst saoi ON saoi.id = spf.id
            INNER JOIN seeker_experience exde ON exde.id = spf.id
            WHERE spf.id = $id AND spf.verification = 1";
    $results = $this->db->query($allTableJoins, array($id));
    return $result->result();
  }


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

  public function projectDetails($id)
  {
    $projectDetails = "SELECT * FROM seeker_projects WHERE  `seekerId`=$id";
    $project = $this->db->query($projectDetails);
    return $project->result_array();
  }

  public function areaOfInterest($id)
  {
    $areaOfInterest = "SELECT * FROM seeker_area_of_interst WHERE  `seekerId`=$id";
    $areaOfInterest = $this->db->query($areaOfInterest);
    return $areaOfInterest->result_array();
  }

  public function experienceDetails($id)
  {
    $experienceDetails = "SELECT * FROM seeker_experience WHERE  `seekerId`=$id";
    $experienceDetails = $this->db->query($experienceDetails);
    return $experienceDetails->result_array();
  }

  public function candidate($id)
  {
    $seekerName = "SELECT * FROM seeker_profile_form WHERE  `id`=$id";
    $seekerName = $this->db->query($seekerName);
    return $seekerName->result_array();
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

  public function filterCandidate($jobCategory, $jobSubCategory)
  {
    $query = "SELECT spf.id as seekerId, spf.name as name, sed.educational_qualification as eq, sed.percentage as per, se.experience as exp,
    saoi.skillname as skill,saoi.id as id, saoi.other_interst_category as oic, saoi.other_sub_interst_category as osic  
    FROM seeker_profile_form spf INNER JOIN seeker_educational_details sed ON sed.seekerId = spf.id INNER JOIN seeker_experience se 
    ON se.seekerId = spf.id INNER JOIN seeker_area_of_interst saoi ON saoi.seekerId = spf.id WHERE  saoi.other_interst_category = '" . $jobCategory . "' AND  saoi.other_sub_interst_category = '" . $jobSubCategory . "' AND spf.verificationStatus = '1'";
    $result = $this->db->query($query);
    return $result->result_array();
  }

  // public function getFilteredRecords($category, $subcategory) {
  //         $this->db->select('*');
  //         $this->db->from('seeker_area_of_interst'); 

  //         if (!empty($category)) {
  //             $this->db->where('category', $category);
  //         }

  //         if (!empty($subcategory)) {
  //             $this->db->where('subcategory', $subcategory);
  //         }

  //         $query = $this->db->get();
  //         return $query->result();
  //     }


  // To upload company logo
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

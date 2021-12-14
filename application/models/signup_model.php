<?php
/**
 * Author: Jomar Oliver Reyes
 * Author URL: https://www.jomaroliverreyes.com
*/

// Model class that will insert data inputs into database.

class signup_model extends CI_model{
	public function __construct(){
		parent::__construct();
		//loads database
		$this->load->database();
	}

	public function submitInfo(){
		//pass inputs to variables in database
		$data = array(
			'd30r_first_name' => $this->input->post('first-name'),
			'd30r_last_name' => $this->input->post('last-name'),
			'd30r_email' => $this->input->post('email'),
			'd30r_phone_number' => $this->input->post('phone-number'),
			'd30r_location' => $this->input->post('cities'),
      'd30r_comments' => $this->input->post('comment'),   
			'd30r_dateTime' => date('Y-m-d H:i:s')
		);
        
        //insert data inputs to database
		return $this->db->insert('customer_info', $data);
	}
}
?>
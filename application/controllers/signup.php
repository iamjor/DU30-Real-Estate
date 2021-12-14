<?php
/**
 * Author: Jomar Oliver Reyes
 * Author URL: https://www.jomaroliverreyes.com
*/

// Controller class that will validate if the inputs abide by the set of rules.
class signup extends CI_Controller{

	public function index(){
		//loads sign-up page
		$this->load->view('pages/sign-up');
	}

	public function submit(){
        
        //validates inputs in sign-up page according to rules set
		$this->form_validation->set_rules('first-name', 'First Name', 'required');
		$this->form_validation->set_rules('last-name', 'Last Name', 'required');
		$this->form_validation->set_rules('cities', 'City', 'required');
		$this->form_validation->set_rules('comment', 'Comments', 'min_length[8]');

		//if form inputs are valid, proceed to loading submitInfo() method of sign_up model class and continue to run nested if-else statements. If not, go back to the sign_up page
		if($this->form_validation->run()===TRUE){

			//loads signup_model class
			$this->load->model('signup_model');

			//use $isInserted to access submitInfo() method of signup_model class
			$isInserted = $this->signup_model->submitInfo();

			//if the inputs have been inserted successfully to the database, load thank-you page displaying the inputs entered by customer
			if($isInserted){
				 $data['fname'] = htmlspecialchars($this->input->post('first-name'));
                 $data['lname'] = htmlspecialchars($this->input->post('last-name'));
                 $data['contact'] = htmlspecialchars($this->input->post('contact'));
                 $data['email'] = htmlspecialchars($this->input->post('email'));
                 $data['phone'] = htmlspecialchars($this->input->post('phone-number'));
                 $data['city'] = htmlspecialchars($this->input->post('cities'));
                 $data['comment'] = htmlspecialchars($this->input->post('comment'));
                
				 $this->load->view('pages/thank-you', $data);
				
			}else{
				//if inputs from sign-up page were not successfully inserted to database, display "Error"
				echo "Error";
			}
		}else{
			$this->index();
		}
	}
}
?>
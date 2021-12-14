<?php
/**
 * Author: Jomar Oliver Reyes
 * Author URL: https://www.jomaroliverreyes.com
*/

// Controller class that will set the directory of pages and validate if they exists.

class Pages extends CI_Controller{
	public function view($page='home'){
		if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
			//displays error page if page doesn't exists
			show_404();
		}

		//lets us access or view pages through 'pages/', starting from the base_url()
		$this->load->view('pages/'.$page);
	}
}
?>
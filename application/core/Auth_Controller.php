<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_Controller extends MY_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('session');

		if(! $this->session->userdata('identity')){
			return redirect('auth/login');
		}
	}
}

?>

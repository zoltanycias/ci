<?php

// With this line we avoid someone can open this controller using the path (ie: localhost/my_project/application/controllers/welcome)
defined('BASEPATH') OR exit('No direct script access allowed');

// Always extended to CI_Controller
class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// We are loading a view called welcome_message.php
		$this->load->view('login');
	}
}

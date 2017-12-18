<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
		$this->load->view('home');
	}

	public function login_check()
    {
        $username = $_POST['username'];
        $userpass = $_POST['password'];


        if ($username=="admin" && $userpass=="admin") {
            $this->load->view('home');
        } else {
            echo "
                <div>
                <center>
                    <h3 style='color: #9f191f'>Wrong Username or Password</h3>
                    <h3 style='color: #9f191f'>Try again!</h3>
                </center>
                </div>
                ";
            $this->load->view('login');
        }

    }
}

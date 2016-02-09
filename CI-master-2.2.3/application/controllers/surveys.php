<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Surveys extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function index() {
		$this->load->view('main');
	}
	public function process_form() {
		if($this->session->userdata("counter") == null) {
			$this->session->set_userdata("counter", 1);
		} else {
			$counter = $this->session->userdata("counter");
			$counter++;
			$this->session->set_userdata("counter", $counter);
		}
		$this->session->set_userdata("info", $this->input->post());
		redirect("/result");
	}
	public function result() {
		$counter = $this->session->userdata("counter");
		$info = $this->session->userdata("info");
		$this->load->view("result", array("info" => $info, "counter" => $counter));
	}
}

/* End of file surveys.php */
/* Location: ./application/controllers/surveys.php */
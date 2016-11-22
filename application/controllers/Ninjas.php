<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ninjas extends CI_Controller {
	// public $log
	public function index(){	
		if(!$this->session->userdata('goldAmount')){
			$this->session->set_userdata('goldAmount', 0);
		}
		if(!$this->session->userdata('activities')){
			$this->session->set_userdata('activities', Array());
		}
		// $goldAmount = $this->session->userdata('goldAmount');
		$this->load->view('index', array('goldAmount' => $this->session->userdata('goldAmount'), 'activities' => $this->session->userdata('activities')));

	}
	public function farm(){
		$goldAmount = $this->session->userdata('goldAmount');
		$value = rand(10,20);
		$this->session->set_userdata('goldAmount', ($goldAmount+$value));

		$message = "Earned" . $value . " Gold from the farm " . Date('F jS, Y g:i a');
		$activities=$this->session->userdata('activities');
		Array_push($activities, $message);
		$this->session->set_userdata('activities', $activities);

		redirect('/');

		// $this->load->view('index');
	}
	// public function cave(){
	// 	$goldAmount = $this->session->userdata('goldAmount');
	// 	$value = rand(5,10);
	// 	$this->session->set_userdata('goldAmount', ($goldAmount+$value));
	// 	$this->load->view('index');
	// }
	// public function house(){
	// 	$goldAmount = $this->session->userdata('goldAmount');
	// 	$value = rand(2,5);
	// 	$this->session->set_userdata('goldAmount', ($goldAmount+$value));
	// 	$this->load->view('index');
	// }
	// public function casino(){
	// 	$goldAmount = $this->session->userdata('goldAmount');
	// 	$value = rand(-50,50);
	// 	$this->session->set_userdata('goldAmount', ($goldAmount+$value));
	// 	$this->load->view('index');

		
	// }
}

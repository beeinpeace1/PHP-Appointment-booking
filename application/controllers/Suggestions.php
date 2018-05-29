<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suggestions extends CI_Controller {

	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/nav');
		$this->load->view('admin/suggestions');
		$this->load->view('includes/footer');
  }
  
  public function submit(){
    $name = $this->input->post('name');
    $email = $this->input->post('email');
    $message = $this->input->post('message');

    $data = [
      'name' => $name,
      'email' => $email,
      'message' => $message
    ];

    $this->database->insertSuggestion($data);
    redirect('/');
  }

  public function list(){
    $all_suggestions = $this->database->listSuggestions();
		$this->load->view('includes/header');
    $this->load->view('includes/nav');
		$this->load->view('admin/list', ['suggestions' => $all_suggestions]);
		$this->load->view('includes/footer');
  }
}

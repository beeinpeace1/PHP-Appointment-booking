<?php
session_start();

defined('BASEPATH') OR exit('No direct script access allowed');

class Doctors extends CI_Controller {

	public function index(){
    
    unset($_SESSION['apts']);
    unset($_SESSION['convos']);

		$this->load->view('includes/header');
		$this->load->view('includes/nav-doc');
		$this->load->view('doctors/login');
		$this->load->view('includes/footer');
  }
  
  public function login(){
    $from_db = $this->database->get_doctor_login($this->input->post('username'), $this->input->post('password'));

    if(count($from_db) > 0) {
      $data_of_doc_apts = $this->database->get_doctor_appointments($from_db[0]->id);
      $convos = $this->database->getAllConvo($from_db[0]->id);
      
      $_SESSION['apts'] = $data_of_doc_apts;
      $_SESSION['convos'] = $convos;

      redirect('/doctors/apts');
    } else {
      redirect('/doctors');
    }
  }

  public function apts(){
    if(isset($_SESSION['apts'])) {
      $this->load->view('includes/header');
      $this->load->view('doctors/apts', ['apts' => $_SESSION['apts']]);
      $this->load->view('includes/footer');
    } else {
      redirect('/doctors');
    }
  }

  public function signout(){
    if($_SESSION['apts']) {
      unset($_SESSION['apts']);
      redirect('/doctors');
    } else {
      redirect('/doctors');
    }
  }

  public function userdetails(){
    if(isset($_SESSION['apts'])) {
      $username = $_GET['un'];
      $mail = $_GET['mail'];
      $date = $_GET['date'];
      $time = $_GET['time'];

      $data_from_db = $this->database->get_doctor_appointments_user(['username' => $username, 'email' => $mail, 'DATE' => $date, 'TIME' => $time]);

      $this->load->view('includes/header');
      $this->load->view('includes/nav-doc');
      $this->load->view('doctors/userdetails', ['details' => $data_from_db]);
      $this->load->view('includes/footer');
    } else {
      redirect('/doctors');
    }
  }

  public function talk(){
		$data['departments'] = $this->database->get_departments();

		$this->load->view('includes/header');
		$this->load->view('includes/nav');
		$this->load->view('doctors/talk', $data);
    $this->load->view('includes/footer');
  }

  public function talksubmit(){
    $doc_id = $this->input->post('hidden-doc-id');
    $name = $this->input->post('name');
    $email = $this->input->post('email');
    $message = $this->input->post('message');

    $data = [
      'doc_id' => $doc_id,
      'username' => $name,
      'email' => $email,
      'message' => $message
    ];

    $this->database->insertIntoConvo($data);
    redirect('/');
  }

  public function listconvo(){
    if(isset($_SESSION['apts'])) {
      $this->load->view('includes/header');
      $this->load->view('includes/nav-doc', ['apts' => $_SESSION['apts'], 'convos' => [] ]);
      $this->load->view('doctors/listconvo', ['convos' => $_SESSION['convos']]);
      $this->load->view('includes/footer');
    } else {
      redirect('/doctors');
    }
  }
}
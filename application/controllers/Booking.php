<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
	public function index(){

		$data['doctors'] = ['Maya', 'Naveen'];
		$data['departments'] = $this->database->get_departments();

		$this->load->view('includes/header');
		$this->load->view('includes/nav');
		$this->load->view('booking', $data);
		$this->load->view('includes/footer');
	}

	public function getdoctors(){
		$department = $this->input->get('dept');
		echo json_encode(["data" => $this->database->get_doctors_of_dept($department)]);
	}

	public function getappointments(){
		$doc_id = $this->input->get('doc_id');
		echo json_encode(["data" => $this->database->get_appointments($doc_id)]);
	}
	
	public function submit(){

		// update appoitment table
		$date_time = explode('__', $this->input->post('date-time2'));
		$appointments_data = explode(',', $this->database->get_appointment_one($date_time[0])[0]->appointments);
		$pos = array_search($date_time[1], $appointments_data);
		unset($appointments_data[$pos]);

		$updated = implode(',', $appointments_data);
		$this->database->update_appointment($date_time[0], $updated);

		// this will have doc name, doc dept id, and doc ID resp.
		$doc_name = explode("___", $this->input->post('doc-name'));

		// update doctors appointment table about new appointment
		$apt_date = $date_time[0];
		$apt_time = $date_time[1];
		$doc_id = $doc_name[2];
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$address = $this->input->post('address');
		$gender = $this->input->post('gender');
		$contact = $this->input->post('contact');
		$note = $this->input->post('note');

		$doc_apt_data = [
			"doc_id" => $doc_id,
			"username" => $username,
			"DATE" => $apt_date,
			"TIME" => $apt_time,
			"gender" => $gender,
			"contact" => $contact,
			"email" => $email,
			"address" => $address,
			"note" => $note
		];

		$this->database->update_appointment_doctor($doc_apt_data);

		// get doc name and dept
		$doc_dept = $this->database->getDeptName($doc_name[1]);

		// replace example@gmail.com with your mail ID and uncomment the line.
		
		// $headers = "From: example@gmail.com";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

		$message = '<html><body style="font-size":20px;>';
		$message .= '<strong> Doctor Name: </strong>' . $doc_name[0];
		$message .= '<br><strong> Doctor Department: </strong>' . $doc_dept[0]->name;
		$message .= '<br><strong> Date and Time of Appointment: </strong>' . $this->input->post('date-time');
		$message .= '<hr>';
		$message .= '<br><strong> Patient Name: </strong>' . $this->input->post('username');
		$message .= '<br><strong> Email: </strong>' . $this->input->post('email');
		$message .= '<br><strong> Address: </strong>' . $this->input->post('address');
		$message .= '<br><strong> Gender: </strong>' . $this->input->post('gender');
		$message .= '<br><strong> Contact: </strong>' . $this->input->post('contact');
		$message .= '<br><strong> Note: </strong>' . $this->input->post('note');

		mail($this->input->post('email'),"Appointment Details - Armed Forces Hospital",$message, $headers);
		redirect('/booking/success');
	}

	public function success(){
		$this->load->view('includes/header');
		$this->load->view('success');
		$this->load->view('includes/footer');
	}
}
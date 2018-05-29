<?php

class Database extends CI_Model {
  function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }
  
    public function get_departments(){
      $query = $this->db->get('department');
      return $query->result();
    }

    public function get_doctors(){
      $query = $this->db->get('doctors');
      return $query->result();
    }

    public function get_doctors_of_dept($department){

      $query = $this->db->query('select * from doctors where dept_id in ( select id from department where name="' . $department . '")');
      return $query->result();
    }

    public function getDeptName($id){
      $query = $this->db->get_where('department', ['id' => intval($id)]);
      return $query->result();
    }

    public function get_appointments($doc_id){
      $query = $this->db->query('select * from appointments where doc_id = '. $doc_id);
      return $query->result();
    }

    public function get_appointment_one($date){
      $query = $this->db->get_where('appointments', ['DATE' => $date]);
      return $query->result();
    }

    public function update_appointment($date, $data){
      $this->db->where('DATE', $date);
      $this->db->update('appointments', ["appointments" => $data]);
    }

    public function update_appointment_doctor($data){
      $this->db->insert('appointments_docs', $data);
    }

    public function get_doctor_login($username, $password){
      $query = $this->db->get_where('doctors', ['username' => $username, 'password' => $password]);
      return $query->result();
    }

    public function get_doctor_appointments($doc_id){
      $query = $this->db->query('select * from appointments_docs where doc_id = '. $doc_id);
      return $query->result();
    }

    public function get_doctor_appointments_user($data){
      $query = $this->db->get_where('appointments_docs', $data);
      return $query->result();
    }

    public function insertSuggestion($data){
      $query = $this->db->insert('suggestions', $data);
    }
    
    public function insertIntoConvo($data){
      $query = $this->db->insert('doc_convo', $data);
    }
    
    public function getAllConvo($doc_id){
      $query = $this->db->get_where('doc_convo', ['doc_id' => $doc_id]);
      return $query->result();
    }

    public function listSuggestions(){
      $query = $this->db->get('suggestions');
      return $query->result();
    }
}
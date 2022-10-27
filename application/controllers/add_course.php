<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class add_course extends CI_Controller {
     
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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('add_course_view');
	}
	public function insert_course()
	{
		if(($this->input->post('id'))=="")
		{
		$course_title=$this->input->post('course_title');
		$qualification=$this->input->post('qualification');
		$ucas_id=$this->input->post('ucas_id');
		$keywords=$this->input->post('keywords');
		$description=$this->input->post('description');
		$course_code =substr($course_title, 0, 2).'_'.uniqid();
		$created_by='priyanka.philip93@gmail.com';//login user details
		$created_at=date('Y-m-d H:i:s');
		$this->load->model('course_model'); 
		$this->course_model->insert_data($course_title,$qualification,$ucas_id,addslashes($keywords),addslashes($description),$course_code,$created_by,$created_at);
 
	}
	else if(($this->input->post('id'))!=""){
		$data1=$_POST;
		$data1['updated_by']='priyanka.philip@gmail.com';
		$data1['updated_at']=date('Y-m-d H:i:s');
		$data1['keywords']=addslashes($data1['keywords']);
		$data1['description']=addslashes($data1['description']);
		$this->load->model('course_model'); 
		
		$this->course_model->update_course($data1);
		$data['course_list']=$this->course_model->get_course_data();
		
		$this->load->view('list_course_view',$data);
	}
	else{
	$this->load->view('add_course_view');
	}
	}
	public function course_list(){
		$this->load->model('course_model'); 
		$data['course_list']=$this->course_model->get_course_data();
		
		$this->load->view('list_course_view',$data);
	} 
	public function edit_course_details(){
		$id=$_GET['id'];
		$this->load->model('course_model'); 
		$data['course_data']=$this->course_model->get_course_data_id($id);
		$this->load->view('add_course_view',$data);
	} 
	/* public function update_course_details(){
		
		$data=$_POST;
		$data['updated_by']='priyanka.philip@gmail.com';
		$data['updated_at']=date('Y-m-d H:i:s');
		$this->load->model('course_model'); 
		$this->course_model->update_course_data_id($data);
		$data['course_list']=$this->course_model->get_course_data($id);
		$this->load->view('list_course_view',$data);
	}  */
	public function delete_course_details(){
		$id=$_GET['id'];
		$this->load->model('course_model'); 
		$this->course_model->delete_course_details($id);
		/* $data['course_list']=$this->course_model->get_course_data($id);
		$this->load->view('list_course_view',$data); */
		redirect('add_course/course_list');
	} 
}

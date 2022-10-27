<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class course_model extends CI_Model {
	
	function insert_data($course_title,$qualification,$ucas_id,$keywords,$description,$course_code,$created_by,$created_at)
	{
		//$this->load->database();
	$query=$this->db->query("select * from course_details_tbl  where ucas_id='$ucas_id'");
		$row = $query->num_rows();
		if($row)
		{
		$_SESSION['error_msg']=0;
		}
		else
		{
		$query=$this->db->query("insert into course_details_tbl  set course_title='$course_title',qualification='$qualification',ucas_id='$ucas_id',keywords='$keywords',description='$description',course_code='$course_code',created_by='$created_by',created_at='$created_at'");

		$_SESSION['error_msg']=1;
		}

		$this->load->view('add_course_view');
		

	}
	function get_course_data(){
		$this->db->where('status',1);
    $query=$this->db->get('course_details_tbl');

    return $query->result();
	}
	
	function get_course_data_id($id){
		$this->db->where('id',$id);
    $query=$this->db->get('course_details_tbl');

    return $query->result();
	}
	function delete_course_details($id){
		$this->db->set('status', '0');
		$this->db->where('id',$id);
   $this->db->update('course_details_tbl');

	}
	function update_course($data){
		
        $this->db->where('id', $data['id']);
		unset($data['id']);
		unset($data['add_course']);
        $this->db->update('course_details_tbl', $data);

	}
	
}
?>
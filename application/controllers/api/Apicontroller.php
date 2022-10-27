<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    require APPPATH.'libraries/RestController.php';
	require APPPATH . 'libraries/Format.php';
	use chriskacerguis\RestServer\RestController;
	class Apicontroller extends RestController
	{
		public function index_get(){
			$query=$this->db->query("select course_title from course_details_tbl  where status='1'");
            echo json_encode($query->result());
		}
		public function coursedata_get(){
			$query=$this->db->query("select * from course_details_tbl  where status='1'");
            echo json_encode($query->result());
		}

	}
?>
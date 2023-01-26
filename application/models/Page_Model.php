<?php
class Page_Model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_quiz_with_answer()
	{
		$this->db->select('*');
		$this->db->from('quiz q');
		$this->db->join('answers a', 'q.id = a.qid');
		$this->db->where('category', 'automotive');

		$query = $this->db->get();
		$data = $query->result_array();
		return $data;
	}
}

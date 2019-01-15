<?php

/**
 * 
 */
class M_user extends CI_Model
{
	
	public function insertData($table, $data)
	{
		$this->db->insert($table, $data);
		return $this->db->affected_rows();
	}

	public function cekLogin($table, $data)
	{
		return $this->db->get_where($table, $data)->result();
	}

	public function getAll($table)
	{
		return $this->db->get($table)->result();
	}
}
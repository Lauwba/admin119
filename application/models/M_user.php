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
        
        public function getByTindakan($table1, $table2, $id, $condition){
            return $this->db->query("SELECT * FROM $table1 INNER JOIN $table2 ON $table1.$id=$table2.$id WHERE $condition")->result();
        }
}
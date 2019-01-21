<?php

/**
 * 
 */
class M_user extends CI_Model {

    public function insertData($table, $data) {
        $this->db->insert($table, $data);
        return $this->db->affected_rows();
    }

    public function cekLogin($table, $data) {
        return $this->db->get_where($table, $data)->result();
    }

    public function getAll($table) {
        return $this->db->get($table)->result();
    }

    public function getByTindakan($table1, $table2, $id, $condition, $sortBy, $limit) {
        if (empty($limit)) {
            return $this->db->query("SELECT * FROM $table1 INNER JOIN $table2 ON $table1.$id=$table2.$id WHERE $condition ORDER BY $sortBy")->result();
        } else {
            return $this->db->query("SELECT * FROM $table1 INNER JOIN $table2 ON $table1.$id=$table2.$id WHERE $condition ORDER BY $sortBy LIMIT $limit")->result();
        }
    }

    public function updateLaporan($table, $data, $condition) {
        $this->db->where($condition);
        $this->db->update($table, $data);
        return $this->db->affected_rows();
    }

}

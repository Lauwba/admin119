<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_admin
 *
 * @author sigit
 */
class M_admin extends CI_Model {

    //put your code here

    function get($table, $condition) {
        return $this->db->get_where($table, $condition)->result();
    }

    function getLastLogin($table, $sortBy, $limit) {
        return $this->db->query("SELECT * FROM $table ORDER BY $sortBy LIMIT $limit")->result();
    }

    function updateLastLogin($table, $data, $condition) {
        $this->db->where($condition);
        $this->db->update($table, $data);
        return $this->db->affected_rows();
    }

}

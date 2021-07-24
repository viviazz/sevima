<?php

class ModelCrud extends CI_Model
{
    public function insert_user($data)
    {
        return $this->db->insert('member_vaksin', $data);
    }
    public function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
}

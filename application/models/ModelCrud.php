<?php

class ModelCrud extends CI_Model
{
    public function insert_user($data)
    {
        return $this->db->insert('member_vaksin', $data);
    }
}

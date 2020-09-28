<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Principal_model extends CI_Model
{

    public function create($table, $data)
    {
        $result = $this->db->insert($table, $data);
        return $result;
    }

    public function delete($table, $data, $key = 'id')
    {
        $this->db->where($key, $data[$key]);
        return $this->db->delete($table);

    }

    public function update($table, $data)
    {
        $res = $this->db->update($table, $data);
        return $res;
    }

    public function get($table, $query)
    {
        $res = $this->db->query($query);
        return ($res->num_rows() > 1) ? $res->result() : false;

    }

}

/* End of file principal.php */

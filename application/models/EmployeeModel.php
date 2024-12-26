<?php

class EmployeeModel extends CI_Model
{
    public function employees()
    {
        // $query = $this->db->get("employee");
        $query = $this->db->query("select * from employee");
        return $query->result();
    }

    public function insert($data)
    {
        return $this->db->insert("employee", $data);
    }

    public function employee($id)
    {
        $query = $this->db->where("id", $id)->get("employee");
        // return $query->row()->first_name;
        return $query->row();
    }

    public function update($data, $id)
    {
        return $this->db->update("employee", $data,  ["id" => $id]);
    }
}

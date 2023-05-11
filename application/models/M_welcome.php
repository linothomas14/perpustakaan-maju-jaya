<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_welcome extends CI_Model
{
    public function read($id = FALSE)
    {
        if ($id === FALSE) {
            return $this->db->get('peminjam')->result_array();
        } else {
            $query = $this->db->get_where('peminjam', array('id' => $id));
            return $query->row();
        }
    }
    public function create($data)
    {

        $this->db->insert('peminjam', $data);
    }

    public function update($id)
    {
        $data = array(
            'name' => $this->input->post('name', TRUE),
            'description' => $this->input->post('description', TRUE),
        );
        $this->db->where('id', $id);
        $this->db->update('post', $data);
    }
    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('post');
    }
    public function deleteAll()
    {
        $this->db->empty_table('post');
    }
}

<?php

    class Buku_model extends CI_Model
    {
        function get_buku() {
            // SELECT * FROM data_buku
            return $this->db->get('data_buku')->result();
        }

        function save_book($data_buku){
            return $this->db->insert('data_buku', $data_buku);
        }

        public function delete($id)
        {
            $this->db->where('id',$id);
            return $this->db->delete('data_buku');
        }

        public function get_id($id)
        {
            $this->db->where('id',$id);
            return $this->db->get('data_buku')->row();
        }

        public function update($where,$data_buku)
        {
            $this->db->where('id',$where);
            return $this->db->update('data_buku',$data_buku);
        }
    }
    
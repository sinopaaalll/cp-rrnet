<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelBase extends CI_Model
{
    public function all($table)
    {
        return $this->db->get($table)->result();
    }

    public function limit($table, $limit, $orderBy = "asc")
    {
        $this->db->limit($limit);
        $this->db->order_by('id', $orderBy);
        return $this->db->get($table)->result();
    }

    public function find($table, $id)
    {
        return $this->db->get_where($table, ['id' => $id])->row();
    }

    public function create($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function update($table, $data, $id)
    {
        $this->db->update($table, $data, ['id' => $id]);
    }

    public function delete($table, $id)
    {
        $this->db->delete($table, ['id' => $id]);
    }

    public function get_image($table, $row, $id)
    {
        return $this->db->get_where($table, ['id' => $id])->row_array()[$row];
    }

    public function findLayanan($id)
    {
        $this->db->select('l.*, u.nama');
        $this->db->from('layanan l');
        $this->db->join('user u', 'u.id = l.user_id');
        $this->db->where('l.id', $id);

        $query = $this->db->get();
        return $query->row();
    }

    public function findLayananSlug($slug)
    {
        $this->db->select('l.*, u.nama');
        $this->db->from('layanan l');
        $this->db->join('user u', 'u.id = l.user_id');
        $this->db->where('l.slug', $slug);

        $query = $this->db->get();
        return $query->row();
    }

    public function limitLayanan($limit)
    {
        $this->db->select('l.*, u.nama');
        $this->db->from('layanan l');
        $this->db->join('user u', 'u.id = l.user_id');
        $this->db->where('l.status', 1);
        $this->db->limit($limit);
        $this->db->order_by('id', 'desc');

        $query = $this->db->get();
        return $query->result();
    }

    public function limitLayananSlug($limit, $slug)
    {
        $this->db->select('l.*, u.nama');
        $this->db->from('layanan l');
        $this->db->join('user u', 'u.id = l.user_id');
        $this->db->where('l.status', 1);
        $this->db->where('l.slug !=', $slug);
        $this->db->limit($limit);
        $this->db->order_by('id', 'desc');

        $query = $this->db->get();
        return $query->result();
    }

    public function count_all($table)
    {
        return $this->db->count_all($table); // Menghitung total data
    }

    public function fetch_data($table, $limit, $start)
    {
        $this->db->limit($limit, $start); // Mengambil data sesuai batasan halaman
        $this->db->order_by('id', 'desc'); // Urutkan sesuai kebutuhan
        return $this->db->get($table)->result(); // Kembalikan hasil
    }
}

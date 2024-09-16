<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('get_config_value')) {
    function get_config_value($key)
    {
        $CI = &get_instance();
        $CI->load->database();

        $CI->db->select($key);
        $CI->db->from('konfigurasi');
        $query = $CI->db->get();

        if ($query->num_rows() > 0) {
            return $query->row()->$key;
        }

        return null;
    }
}

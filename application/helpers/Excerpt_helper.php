<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('getExcerpt')) {
    function getExcerpt($text, $limit = 20)
    {
        // Memecah string menjadi array kata
        $words = explode(' ', $text);

        // Memeriksa apakah jumlah kata lebih dari batas
        if (count($words) > $limit) {
            // Memotong array kata sesuai batas
            $excerpt = array_slice($words, 0, $limit);

            // Menggabungkan kembali menjadi string dan menambahkan "......"
            return implode(' ', $excerpt) . '......';
        } else {
            // Jika jumlah kata lebih kecil dari batas, tampilkan semua
            return $text;
        }
    }
}

if (!function_exists('getExcerptProfil')) {
    function getExcerptProfil($text, $limit = 70)
    {
        // Memecah string menjadi array kata
        $words = explode(' ', $text);

        // Memeriksa apakah jumlah kata lebih dari batas
        if (count($words) > $limit) {
            // Memotong array kata sesuai batas
            $excerpt = array_slice($words, 0, $limit);

            // Menggabungkan kembali menjadi string dan menambahkan "......"
            return implode(' ', $excerpt) . '......';
        } else {
            // Jika jumlah kata lebih kecil dari batas, tampilkan semua
            return $text;
        }
    }
}

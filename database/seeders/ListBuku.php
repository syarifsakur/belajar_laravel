<?php

namespace App\Models;


class ListBuku 
{
    private static $listBuku = [
        [
            "judul" =>"one piece",
            "kategori"=>"anime",
            "deskripsi"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero recusandae at debitis provident, commodi sed ut illo libero fuga veritatis est laborum laboriosam, odio tempore qui deleniti pariatur, inventore et?",
            "jumlah"=>10,
        ],
        [
            "judul" =>"dylan",
            "kategori"=>"romantic",
            "deskripsi"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero recusandae at debitis provident, commodi sed ut illo libero fuga veritatis est laborum laboriosam, odio tempore qui deleniti pariatur, inventore et?",
            "jumlah"=>5,
        ]
        ];

    public static function all(){
        return self::$listBuku;
    }
}   

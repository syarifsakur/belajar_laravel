<?php

namespace Database\Seeders;

use App\Models\list_buku;
use Illuminate\Database\Seeder;

class listBook extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ListBook = [
            [
                "judul" =>"one piece",
                "kategori"=>"anime",
                "deskripsi"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero recusandae at debitis provident, commodi sed ut illo libero fuga veritatis est laborum laboriosam, odio tempore qui deleniti pariatur, inventore et?",
                "jumlah"=>10,
            ],

        ];

        foreach ($ListBook as $list) {
            list_buku::create($list);
        }
    }
    }

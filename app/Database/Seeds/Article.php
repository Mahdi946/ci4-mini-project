<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Article extends Seeder
{
    public function run()
    {
        $data = [
            'title' => 'adminTile',
            'description' => 'adminDescription',
            'file' => 'adminFile',
            'user_id' => 7,
        ];
        for($i = 0; $i < 10; $i++) {
            model('Article')->insert($data);
        }
    }
}

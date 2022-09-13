<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
            [
                'npm' => '2017051044',
                'nama'    => 'Annisa',
                'alamat' => 'Padang',
                'created_at' => Time::now(),
                // 'update_at' => Time::now()
            ],
            [
                'npm' => '2017051045',
                'nama'    => 'George',
                'alamat' => 'Jakarta',
                'created_at' => Time::now(),
                // 'update_at' => Time::now()
            ],
            [
                'npm' => '2017051060',
                'nama'    => 'Emma',
                'alamat' => 'Palembang',
                'created_at' => Time::now(),
                // 'update_at' => Time::now()
            ],
            [
                'npm' => '2017051038',
                'nama'    => 'Irma',
                'alamat' => 'Bukittinggi',
                'created_at' => Time::now(),
                // 'update_at' => Time::now()
            ]
        ];

        // Using Query Builder
        foreach ($data_mahasiswa as $data) {
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}

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
                'npm' => '2017051038',
                'nama'    => 'Irma Azizah',
                'alamat' => 'Bukittinggi',
                'created_at' => Time::now(),
                // 'update_at' => Time::now()
            ],
            [
                'npm' => '2017051001',
                'nama'    => 'Fannisa Mardhatillah',
                'alamat' => 'Bandar Lampung',
                'created_at' => Time::now(),
                // 'update_at' => Time::now()
            ],
            [
                'npm' => '2057051033',
                'nama'    => 'George Weasley',
                'alamat' => 'Padang',
                'created_at' => Time::now(),
                // 'update_at' => Time::now()
            ],
            [
                'npm' => '2017051008',
                'nama'    => 'Anne Cuthburt',
                'alamat' => 'Palembang',
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

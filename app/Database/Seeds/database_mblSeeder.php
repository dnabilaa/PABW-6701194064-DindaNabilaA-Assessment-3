<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;


class database_mblSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            'nama_mobil'        => 'Innova',
            'tanggal_submit'    => '11 Januari',
            'created_at'        => Time::now(),
            'updated_at'        => Time::now()
        ];
        [
            'nama_mobil'        => 'Xenia',
            'tanggal_submit'    => '12 Januari',
            'created_at'        => Time::now(),
            'updated_at'        => Time::now()
        ];

        $this->db->table('dataset_mbl')->insert($data);
    }
}
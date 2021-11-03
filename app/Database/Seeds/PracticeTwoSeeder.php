<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PracticeTwoSeeder extends Seeder
{
    public function run()
    {
        $this->db
            ->query("INSERT INTO `practice_two` (`id`, `kepemilikan`, `jenis`, `created_at`, `updated_at`) VALUES
(8, '123', 'perorangan', '2021-11-03 00:26:11', '2021-11-03 00:26:11'),
(9, '1234', 'usaha,perorangan', '2021-11-03 00:26:17', '2021-11-03 00:26:17'),
(10, '1234567', 'yayasan', '2021-11-03 00:26:25', '2021-11-03 01:05:02'),
(11, '123', 'usaha,perorangan', '2021-11-03 01:36:23', '2021-11-03 01:36:23'),
(12, '123', 'yayasan', '2021-11-03 01:36:35', '2021-11-03 01:36:35');");
    }
}

<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KategoriSeeder extends Seeder
{
    public function run()
    {
        $this->db->query("INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'Studi'),
(2, 'Survey dan Penelitian'),
(3, 'Perencanaan Teknis'),
(4, 'Supervisi Konstruksi'),
(5, 'Manajemen Konstruksi'),
(6, 'Technical Assistance');");
    }
    public function runSeeder()
    {
        return <<<SQL
INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'Studi'),
(2, 'Survey dan Penelitian'),
(3, 'Perencanaan Teknis'),
(4, 'Supervisi Konstruksi'),
(5, 'Manajemen Konstruksi'),
(6, 'Technical Assistance');
SQL;
    }
}

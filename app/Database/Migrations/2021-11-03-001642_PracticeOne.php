<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PracticeOne extends Migration
{
    public function up()
    {
        $this->db->query("CREATE TABLE `practice_one` (
  `id` bigint(11) NOT NULL,
  `kategori_id` bigint(255) NOT NULL,
  `layanan` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");
    }
    public function down()
    {
        $this->db->query("DROP TABLE IF EXISTS 'practice_one';");
    }
}

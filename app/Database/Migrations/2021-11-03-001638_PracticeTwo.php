<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PracticeTwo extends Migration
{
    public function up()
    {
        $this->db->query("CREATE TABLE `practice_two` (
  `id` bigint(11) NOT NULL,
  `kepemilikan` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");
    }
    public function down()
    {
        $this->db->query("DROP TABLE IF EXISTS 'practice_two';");
    }
    public function createTable()
    {
        return <<<SQL
CREATE TABLE `practice_two` (
  `id` bigint(11) NOT NULL,
  `kepemilikan` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
SQL;
    }
}

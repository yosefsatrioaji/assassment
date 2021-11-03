<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class OneData extends Migration
{
    public function up()
    {
        $this->db->query("CREATE VIEW one_data AS
    SELECT
        practice_one.id,
           practice_one.kategori_id,
           practice_one.layanan,
           kategori.nama as kategori_nama
    FROM practice_one
    LEFT JOIN kategori
        ON practice_one.kategori_id = kategori.id;");
    }
    public function down()
    {
        $this->db->query("DROP VIEW IF EXISTS 'one_data';");
    }
}

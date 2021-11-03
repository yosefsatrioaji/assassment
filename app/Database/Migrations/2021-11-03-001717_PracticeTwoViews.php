<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PracticeTwoViews extends Migration
{
    public function up()
    {
        $this->db->query("CREATE VIEW practice_two_views AS
    SELECT
        practice_two.id,
           practice_two.kepemilikan,
           practice_two.jenis
    FROM practice_two;");
    }
    public function down()
    {
        $this->db->query("DROP VIEW IF EXISTS 'practice_two_views';");
    }
}

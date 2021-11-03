<?php

namespace App\Models;

use CodeIgniter\Model;

class PracticeTwoView extends Model
{
    protected $table = "practice_two_views";
    public function search($keyword, $jumlah)
    {
        $builder = $this->table("practice_two_views");
        $builder->like("kepemilikan", $keyword)->limit(0, $jumlah);
        return $builder;
    }
}

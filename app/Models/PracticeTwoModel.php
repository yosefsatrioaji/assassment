<?php

namespace App\Models;

use CodeIgniter\Model;

class PracticeTwoModel extends Model
{
    protected $table = "practice_two";
    protected $useTimestamps = true;
    protected $allowedFields = ["kepemilikan", "jenis"];

    public function getTabel($id = false)
    {
        $builder = $this->db
            ->table("practice_two as tabel")
            ->select("tabel.*")
            ->orderBy("id", "asc");
        if ($id == false) {
            return $builder->get()->getResult();
        }
        return $builder
            ->where(["tabel.id" => $id])
            ->get()
            ->getFirstRow();
    }
}

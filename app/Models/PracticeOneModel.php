<?php

namespace App\Models;

use CodeIgniter\Model;

class PracticeOneModel extends Model
{
    protected $table = "practice_one";
    protected $useTimestamps = true;
    protected $allowedFields = ["kategori_id", "layanan"];

    public function getTabel($id = false)
    {
        $builder = $this->db
            ->table("practice_one as tabel")
            ->select("tabel.*,kategori.nama as kategori_nama")
            ->join("kategori", "kategori.id=kategori_id", "left")
            ->orderBy("id", "asc");
        if ($id == false) {
            return $builder->get()->getResult();
        }
        return $builder
            ->where(["tabel.id" => $id])
            ->get()
            ->getFirstRow();
    }

    public function getKategori()
    {
        $builder = $this->db
            ->table("kategori")
            ->select("*")
            ->orderBy("id", "asc");
        return $builder->get()->getResult();
    }
}

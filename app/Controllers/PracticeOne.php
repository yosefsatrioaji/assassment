<?php

namespace App\Controllers;

use App\Models\PracticeOneModel;
use App\Models\OneDataModel;

class PracticeOne extends BaseController
{
    protected $practiceOneModel;
    protected $pager;

    public function __construct()
    {
        $this->practiceOneModel = new PracticeOneModel();
        $this->oneDataModel = new OneDataModel();
    }

    public function index()
    {
        $currentPage = $this->request->getVar("page_isitabel")
            ? $this->request->getVar("page_isitabel")
            : 1;
        $data = [
            "title" => "Yosef | Practice Pertama",
            "isitabel" => $this->oneDataModel->paginate(4, "isitabel"),
            "pager" => $this->oneDataModel->pager,
            "kategori" => $this->practiceOneModel->getKategori(),
            "currentPage" => $currentPage,
        ];
        //dd($data);
        return view("practiceone/index", $data);
    }

    public function save()
    {
        if (
            !$this->validate([
                "layanan" => "required|is_unique[practice_one.layanan]",
                "kategori" => "required",
            ])
        ) {
            $validation = \Config\Services::validation();
            session()->setFlashdata("failed", $validation->getErrors());
            return redirect()->to("/practiceone");
        }
        $this->practiceOneModel->save([
            "kategori_id" => $this->request->getVar("kategori"),
            "layanan" => $this->request->getVar("layanan"),
        ]);
        session()->setFlashdata("success", "Data berhasil ditambahkan!");
        return redirect()->to("/practiceone");
    }

    public function hapus($id)
    {
        $this->practiceOneModel->where("id", $id)->delete($id);
        //dd($this->PracticeOneModel->error());
        return redirect()->to("/practiceone");
    }

    public function edit($id)
    {
        $currentPage = $this->request->getVar("page_isitabel")
            ? $this->request->getVar("page_isitabel")
            : 1;
        $data = [
            "title" => "Yosef | Practice Pertama",
            "isitabel" => $this->oneDataModel->paginate(4, "isitabel"),
            "pager" => $this->oneDataModel->pager,
            "kategori" => $this->practiceOneModel->getKategori(),
            "tabel" => $this->practiceOneModel->getTabel($id),
            "currentPage" => $currentPage,
        ];
        return view("practiceone/edit", $data);
    }

    public function update($id)
    {
        if (
            !$this->validate([
                "layanan" =>
                    "required|is_unique[practice_one.layanan,id," . $id . "]",
                "kategori" => "required",
            ])
        ) {
            $validation = \Config\Services::validation();
            session()->setFlashdata("failed", $validation->getErrors());
            return redirect()->to("/practiceone");
        }

        $this->practiceOneModel->save([
            "id" => $id,
            "kategori_id" => $this->request->getVar("kategori"),
            "layanan" => $this->request->getVar("layanan"),
        ]);
        session()->setFlashdata("success", "Data berhasil diubah!");
        return redirect()->to("/practiceone");
    }
}

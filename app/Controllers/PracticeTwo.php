<?php

namespace App\Controllers;

use App\Models\PracticeTwoView;
use App\Models\PracticeTwoModel;

class PracticeTwo extends BaseController
{
    protected $practiceTwoModel;
    protected $practiceTwoView;
    protected $pager;

    public function __construct()
    {
        $this->practiceTwoModel = new PracticeTwoModel();
        $this->practiceTwoView = new PracticeTwoView();
    }

    public function index()
    {
        $currentPage = $this->request->getVar("page_isitabel")
            ? $this->request->getVar("page_isitabel")
            : 1;
        $keyword = $this->request->getVar("keyword");
        $jumlah = $this->request->getVar("jumlah");
        if ($keyword) {
            $search = $this->practiceTwoView->search($keyword, $jumlah);
        } else {
            $search = $this->practiceTwoView;
        }
        $data = [
            "title" => "Yosef | Practice Kedua",
            "isitabel" => $search->paginate(4, "isitabel"),
            "pager" => $this->practiceTwoView->pager,
            "currentPage" => $currentPage,
        ];
        //dd($data);
        return view("practicetwo/index", $data);
    }

    public function save()
    {
        if (
            !$this->validate([
                "kepemilikan" => "required",
                "jenis" => "required",
            ])
        ) {
            $validation = \Config\Services::validation();
            session()->setFlashdata("failed", $validation->getErrors());
            return redirect()->to("/practicetwo");
        }
        $jenisstring = implode(",", $this->request->getVar("jenis[]"));
        $this->practiceTwoModel->save([
            "kepemilikan" => $this->request->getVar("kepemilikan"),
            "jenis" => $jenisstring,
        ]);
        session()->setFlashdata("success", "Data berhasil ditambahkan!");
        return redirect()->to("/practicetwo");
    }

    public function hapus($id)
    {
        $this->practiceTwoModel->where("id", $id)->delete($id);
        return redirect()->to("/practicetwo");
    }

    public function edit($id)
    {
        $currentPage = $this->request->getVar("page_isitabel")
            ? $this->request->getVar("page_isitabel")
            : 1;
        $keyword = $this->request->getVar("keyword");
        $jumlah = $this->request->getVar("jumlah");
        if ($keyword) {
            $search = $this->practiceTwoView->search($keyword, $jumlah);
        } else {
            $search = $this->practiceTwoView;
        }
        $data = [
            "title" => "Yosef | Practice Kedua",
            "isitabel" => $search->paginate(4, "isitabel"),
            "pager" => $this->practiceTwoView->pager,
            "tabel" => $this->practiceTwoModel->getTabel($id),
            "currentPage" => $currentPage,
        ];
        //dd($data);
        return view("practicetwo/edit", $data);
    }

    public function update($id)
    {
        if (
            !$this->validate([
                "kepemilikan" => "required",
                "jenis" => "required",
            ])
        ) {
            $validation = \Config\Services::validation();
            session()->setFlashdata("failed", $validation->getErrors());
            return redirect()->back();
        }
        $jenisstring = implode(",", $this->request->getVar("jenis[]"));
        $this->practiceTwoModel->save([
            "id" => $id,
            "kepemilikan" => $this->request->getVar("kepemilikan"),
            "jenis" => $jenisstring,
        ]);
        session()->setFlashdata("success", "Data berhasil diubah!");
        return redirect()->to("/practicetwo");
    }
}

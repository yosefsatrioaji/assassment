<?= $this->extend("layout/template") ?>

<?= $this->section("content") ?>
<?php helper("form"); ?>
<div class="container mb-4">
    <div class="row mt-2">
        <div class="col-lg-4">
            <h2>Master Kepemilikan</h2>
        </div>
        <div class="col-lg-8">
            <div class="row">
                <form class="d-flex" action="" method="get">
                    <div class="input-group me-2 w-75 col-5">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                        <input type="search" class="form-control" placeholder="Cari Nama Kepemilikan ..."
                               aria-label="Username" aria-describedby="basic-addon1" name="keyword">
                    </div>
                    <select class="form-select me-2 col-md" aria-label="Default select example" name="jumlah">
                        <?php for ($x = 1; $x <= 15; $x++): ?>
                            <option value="<?= $x ?>"><?= $x ?> Data</option>
                        <?php endfor; ?>
                    </select>
                    <button class="btn btn-primary px-3" type="submit"><i class="fas fa-chevron-right"></i></button>
                </form>
            </div>
        </div>
        <?php if (session()->getFlashdata("success")): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata("success") ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata("failed")): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul class="'mb-0">
                    <?php foreach (
                        session()->getFlashdata("failed")
                        as $errrr
                    ): ?>
                        <li><?= $errrr ?></li>
                    <?php endforeach; ?>
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
    </div>
    <div class="row mt-2">
        <div class="col-lg-4 rounded bg-grey p-3">
            <h3>Tambah Kepemilikan</h3>
            <form action="/practicetwo/save" method="post">
                <?= csrf_field() ?>
                <div class="mb-3">
                    <label for="kepemilikan" class="form-label">Nama Kepemilikan</label>
                    <input class="form-control" id="kepemilikan" name="kepemilikan" placeholder="Kepemilikan . . . " value="<?= old(
                        "kepemilikan"
                    ) ?>">
                </div>
                <div class="mb-3">
                    <label for="jenis">Jenis Kepemilikan</label>
                    <div class="form-check ms-2 mt-1 border-top">
                        <input class="form-check-input" type="checkbox" value="usaha" name="jenis[]">
                        <label class="form-check-label" for="flexCheckDefault">
                            Badan Usaha
                        </label>
                    </div>
                    <div class="form-check ms-2 mt-1 border-top">
                        <input class="form-check-input" type="checkbox" value="perorangan" name="jenis[]">
                        <label class="form-check-label" for="flexCheckChecked">
                            Perorangan
                        </label>
                    </div>
                    <div class="form-check ms-2 mt-1 border-top">
                        <input class="form-check-input" type="checkbox" value="yayasan" name="jenis[]">
                        <label class="form-check-label" for="flexCheckChecked">
                            Yayasan
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-success float-end">Submit</button>
                <button type="reset" class="btn btn-outline-dark float-end me-2">Clear</button>
            </form>
        </div>
        <div class="col-lg-8">
            <table class="table table-bordered">
                <thead class="bg-grey">
                <tr>
                    <th rowspan="2" class="text-center align-middle" scope="col">No</th>
                    <th rowspan="2" class="text-center align-middle" scope="col">Kepemilikan</th>
                    <th colspan="3" class="text-center align-middle" scope="col">Jenis</th>
                    <th rowspan="2" class="text-center align-middle" scope="col"><i class="fas fa-tools"></i></th>
                </tr>
                <tr>
                    <th class="text-center align-middle">Badan Usaha</th>
                    <th class="text-center align-middle">Perorangan</th>
                    <th class="text-center align-middle">Yayasan</th>
                </tr>
                </thead>
                <tbody>
                <?php $num = 1 + 4 * ($currentPage - 1); ?>
                <?php foreach ($isitabel as $i): ?>
                <?php $arrayjenis = explode(",", $i["jenis"]); ?>
                    <tr>
                        <th scope="row" class="text-center"><?= $num++ ?></th>
                        <td><?= $i["kepemilikan"] ?></td>
                        <td class="text-center"><?php if (
                            in_array("usaha", $arrayjenis)
                        ): ?>
                                <i class="fas fa-check"></i>
                            <?php else: ?>
                                <i class="fas fa-times"></i>
                            <?php endif; ?></td>
                        <td class="text-center"><?php if (
                            in_array("perorangan", $arrayjenis)
                        ): ?>
                                <i class="fas fa-check"></i>
                            <?php else: ?>
                                <i class="fas fa-times"></i>
                            <?php endif; ?></td>
                        <td class="text-center"><?php if (
                            in_array("yayasan", $arrayjenis)
                        ): ?>
                                <i class="fas fa-check"></i>
                            <?php else: ?>
                                <i class="fas fa-times"></i>
                            <?php endif; ?></td>
                        <td>
                            <a href="/practicetwo/<?= $i["id"] ?>" type="button"
                               class="btn btn-warning no-rounded rounded-start" role="button"><i
                                        class="fas fa-edit"></i></a>
                            <button type="button" class="btn btn-danger no-rounded rounded-end" data-bs-toggle="modal"
                                    data-bs-target="#delete<?= $i["id"] ?>"><i
                                        class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <div class="modal fade" id="delete<?= $i["id"] ?>">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Hapus Sumber Pembiayaan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Sumber Pembiayaan akan dihapus secara permanen! tetap melanjutkan?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali
                                    </button>
                                    <form action="/practicetwo/delete/<?= $i[
                                        "id"
                                    ] ?>" method="post" class="d-inline">
                                        <?= csrf_field() ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </tbody>
            </table>
            <?= $pager->links("isitabel", "my_pager") ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

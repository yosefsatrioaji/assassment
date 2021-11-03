<?= $this->extend("layout/template") ?>

<?= $this->section("content") ?>
<?php helper("form"); ?>
<div class="container mb-4">
    <div class="row mt-2">
        <h2>Practice Pertama</h2>
        <?php if (session()->getFlashdata("success")): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata("success") ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata("failed")): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul class="'mb-0">
                <?php foreach (session()->getFlashdata("failed") as $errrr): ?>
                    <li><?= $errrr ?></li>
                <?php endforeach; ?>
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
    </div>
    <div class="row mt-2">
        <div class="col-lg-4">
            <form action="/practiceone/save" method="post">
                <?= csrf_field() ?>
                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select class="form-select" id="kategori" name="kategori" placeholder="kategori" value="<?= old(
                        "kategori"
                    ) ?>">
                        <option selected disabled>lingkup</option>
                        <?php foreach ($kategori as $i): ?>
                            <option value=<?= $i->id ?>><?= $i->nama ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="form-text">Kategori lingkup layanan</div>
                </div>
                <div class="mb-3">
                    <label for="layanan" class="form-label">Layanan</label>
                    <input class="form-control" id="layanan" name="layanan" placeholder="layanan" value="<?= old(
                        "layanan"
                    ) ?>">
                    <div class="form-text">Layanan tersedia</div>
                </div>
                <button type="submit" class="btn btn-success float-end">Submit</button>
                <button type="reset" class="btn btn-outline-dark float-end me-2">Clear</button>
            </form>
        </div>
        <div class="col-lg-7 ms-2">
            <table class="table">
                <thead>
                <tr>
                    <th class="text-center" scope="col">No</th>
                    <th class="text-center" scope="col">Lingkup Layanan</th>
                    <th class="text-center" scope="col">Layanan Tersedia</th>
                    <th class="text-center" scope="col"><i class="fas fa-tools"></i></th>
                </tr>
                </thead>
                <tbody>
                <?php $num = 1 + 4 * ($currentPage - 1); ?>
                <?php foreach ($isitabel as $i): ?>
                    <tr>
                        <th scope="row"><?= $num++ ?></th>
                        <td><?= $i["kategori_nama"] ?></td>
                        <td><?= $i["layanan"] ?></td>
                        <td>
                            <a href="/practiceone/<?= $i[
                                "id"
                            ] ?>" type="button" class="btn btn-warning no-rounded rounded-start" role="button"><i
                                        class="fas fa-edit"></i></a>
                            <button type="button" class="btn btn-danger no-rounded rounded-end" data-bs-toggle="modal" data-bs-target="#delete<?= $i[
                                "id"
                            ] ?>"><i
                                        class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <div class="modal fade" id="delete<?= $i["id"] ?>">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Hapus Sumber Pembiayaan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Sumber Pembiayaan akan dihapus secara permanen! tetap melanjutkan?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                                    <form action="/practiceone/delete/<?= $i[
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

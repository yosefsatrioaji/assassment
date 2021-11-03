<?= $this->extend("layout/template") ?>

<?= $this->section("content") ?>
<div class="px-4 py-5 my-5 text-center">
    <i class="d-block mx-auto mb-4 fas fa-laptop-code"></i>
    <h1 class="display-5 fw-bold">Task Intern Folarium</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Silahkan pilih practice yang ingin diperiksa</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a role="button" href="/practiceone" class="btn btn-primary btn-lg px-4 gap-3">Practice 1</a>
            <a role="button" href="/practiceone" class="btn btn-outline-secondary btn-lg px-4">Practice 2</a>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

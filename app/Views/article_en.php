<?= $this->extend('template/en') ?>
<?= $this->section('content') ?>
    <main>
        <form method="post" action="<?= base_url('/article') ?>" enctype="multipart/form-data">
            <header>
                article
            </header>
            <br>
            <div class="form-group">
                <label for="articleTitle">Tile</label>
                <input type="text" name="title" class="form-control" id="articleTitle" aria-describedby="articleHelp" value="<?= old('title') ?>" placeholder="عنوان مقاله">
            </div>
            <div class="form-group">
                <label for="articleDescription">Description</label>
                <input type="text" class="form-control" id="articleDescription" name="description" value="<?= old('description') ?>" aria-describedby="articleHelp" placeholder="توضیحات مقاله">
            </div>
            <div class="form-group">
                <label for="articleFile">Enter Your Article</label>
                <input type="file" name="file" class="form-control-file" id="articleFile">
            </div>
            <button type="submit">Submit</button>
        </form>
        <form action="/samplearticle" method="get">
            <button class="btn btn-info" id="dnlSample" type="submit">Download SampleFile</button>
        </form>
        <?php if(isset($success)) : ?>
            <p class="text-success font-weight-bold">Submit Successfully<?= $success ?></p>
        <?php endif; ?>
        <?php if(isset($errors)) : ?>
            <?php foreach ($errors as $error) : ?>
                <p><?= $error ?></p>
            <?php endforeach; ?>
        <?php endif; ?>
    </main>
<?= $this->endSection() ?>
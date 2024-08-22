<?= $this->extend('template/fa') ?>
<?= $this->section('content') ?>
    <main>
        <form method="post" action="<?= base_url('/article') ?>" enctype="multipart/form-data">
            <header>
                ثبت مقاله
            </header>
            <br>
            <div class="form-group">
                <label for="articleTitle">عنوان مقاله</label>
                <input type="text" name="title" class="form-control" id="articleTitle" aria-describedby="articleHelp" value="<?= old('title') ?>" placeholder="عنوان مقاله">
            </div>
            <div class="form-group">
                <label for="articleDescription">توضیحات</label>
                <input type="text" class="form-control" id="articleDescription" name="description" value="<?= old('description') ?>" aria-describedby="articleHelp" placeholder="توضیحات مقاله">
            </div>
            <div class="form-group">
                <label for="articleFile">فایل خود را وارد کنید</label>
                <input type="file" name="file" class="form-control-file" id="articleFile">
            </div>
            <button type="submit">ثبت</button>
        </form>
        <form action="/samplearticle" method="get">
            <button class="btn btn-info" id="dnlSample" type="submit">دانلود نمونه فایل</button>
        </form>
        <?php if(isset($success)) : ?>
            <p class="text-success font-weight-bold">با موفقیت مقاله ثبت شد <?= $success ?></p>
        <?php endif; ?>
        <?php if(isset($errors)) : ?>
            <?php foreach ($errors as $error) : ?>
                <p><?= $error ?></p>
            <?php endforeach; ?>
        <?php endif; ?>
    </main>
<?= $this->endSection() ?>


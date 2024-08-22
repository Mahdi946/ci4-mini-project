<?= $this->extend('template/fa') ?>
<?= $this->section('content') ?>
    <main>
        <button class="btn btn-info">ساخت مقاله</button>
        <?php if(count($articles)) : ?>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">عنوان</th>
                <th scope="col">توضیحات</th>
                <th scope="col">نام فایل</th>
                <th scope="col">عملیات</th>
            </tr>
            </thead>
            <tbody>
            <?php for($i = 0; $i < count($articles); $i++) : ?>
            <tr>
                <th scope="row"><?= $i+1 ?></th>
                <td><?= $articles[$i]['title'] ?></td>
                <td><?= $articles[$i]['description'] ?></td>
                <td><?= $articles[$i]['file'] ?></td>
                <td><button id="<?= $articles[$i]['id'] ?>" name="btnDelete" class="btn btn-danger">حذف</button></td>
            </tr>
            <?php endfor; ?>
            </tbody>
        </table>
        <?php else: ?>
            <h1 class="text-white">در حال حاظر هیچ مقاله ای موجود ندارید</h1>
        <?php endif; ?>
    </main>
<?= $this->endSection() ?>
<?= $this->section('script') ?>
 <script>
     $(document).ready(function (){
         $("button[name='btnDelete']").on('click',function(e){
             $.ajax({
                 url: "/articledelete/"+e.target.id,
                 method:'GET',
                 headers: {'X-Requested-With': 'XMLHttpRequest'},
                 success:function(){
                     alert('با موفقیت حذف شد')
                     location.reload(true)
                 }
             });
         })
     });
 </script>
<?= $this->endSection() ?>

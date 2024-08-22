<?= $this->extend('template/fa') ?>
<?= $this->section('content') ?>
<main>
    <button class="btn btn-info">ساخت مقاله</button>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <?php if(count($users)) : ?>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">نام</th>
                            <th scope="col">ایمیل</th>
                            <th scope="col">تاریخ ثبت</th>
                            <th scope="col">عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php for($i = 0; $i < count($users); $i++) : ?>
                            <tr>
                                <th scope="row"><?= $i+1 ?></th>
                                <td><?= $users[$i]->username ?></td>
                                <td><?= $users[$i]->email ?></td>
                                <td><?= $users[$i]->created_at ?></td>
                                <td><button id="<?= $users[$i]->id ?>" name="btnDeleteUser" class="btn btn-danger">حذف</button></td>
                            </tr>
                        <?php endfor; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <h1 class="text-white">در حال حاضر هیچ کاربری در سایت نمی باشد</h1>
                <?php endif; ?>
            </div>
            <div class="col-6">
    <?php if(count($articles)) : ?>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">عنوان</th>
                <th scope="col">توضیحات</th>
                <th scope="col">نام فایل</th>
                <th scope="col">نام کاربر</th>
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
                    <td><?= $articles[$i]['username'] ?></td>
                    <td><button id="<?= $articles[$i]['id'] ?>" name="btnDeleteArticle" class="btn btn-danger">حذف</button></td>
                </tr>
            <?php endfor; ?>
            </tbody>
        </table>
    <?php else: ?>
        <h1 class="text-white">در حال حاظر هیچ مقاله ای موجود ندارید</h1>
    <?php endif; ?>
            </div>
        </div>
    </div>
</main>

<?= $this->endSection() ?>
<?= $this->section('script') ?>
<script>
    $(document).ready(function (){
        $("button[name='btnDeleteArticle']").on('click',function(e){
            $.ajax({
                url: "/articledelete/"+e.target.id,
                method:'GET',
                headers: {'X-Requested-With': 'XMLHttpRequest'},
                success:function(){
                    alert('مقاله با موفقیت حذف شد')
                    location.reload(true)
                }
            });
        })
        $("button[name='btnDeleteUser']").on('click',function(e){
            $.ajax({
                url:"/user/userdelete/"+e.target.id,
                method:'GET',
                headers: {'X-Requested-With': 'XMLHttpRequest'},
                success:function(){
                    alert('کاربر با موفقیت حذف شد')
                    location.reload(true)
                }
            })
        })
    });
</script>
<?= $this->endSection() ?>



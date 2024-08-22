<?= $this->extend('template/en') ?>
<?= $this->section('content') ?>
<main>
    <button class="btn btn-info">Create Article</button>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <?php if(count($users)) : ?>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Created_at</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php for($i = 0; $i < count($users); $i++) : ?>
                            <tr>
                                <th scope="row"><?= $i+1 ?></th>
                                <td><?= $users[$i]->username ?></td>
                                <td><?= $users[$i]->email ?></td>
                                <td><?= $users[$i]->created_at ?></td>
                                <td><button id="<?= $users[$i]->id ?>" name="btnDeleteUser" class="btn btn-danger">Delete</button></td>
                            </tr>
                        <?php endfor; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <h1 class="text-white">Nothing Found Users For Show</h1>
                <?php endif; ?>
            </div>
            <div class="col-6">
                <?php if(count($articles)) : ?>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Filename</th>
                            <th scope="col">Username</th>
                            <th scope="col">Action</th>
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
                                <td><button id="<?= $articles[$i]['id'] ?>" name="btnDeleteArticle" class="btn btn-danger">Delete</button></td>
                            </tr>
                        <?php endfor; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <h1 class="text-white">Nothing Articles For Show</h1>
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
                    alert('Delete Article Successfully')
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
                    alert('Delete User Successfully')
                    location.reload(true)
                }
            })
        })
    });
</script>
<?= $this->endSection() ?>



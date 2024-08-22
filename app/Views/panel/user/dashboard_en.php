<?= $this->extend('template/en') ?>
<?= $this->section('content') ?>
<main>
    <?php if(count($articles)) : ?>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">File Name</th>
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
                    <td><button id="<?= $articles[$i]['id'] ?>" name="btnDelete" class="btn btn-danger">Delete</button></td>
                </tr>
            <?php endfor; ?>
            </tbody>
        </table>
    <?php else: ?>
        <h1 class="text-white">Articles Not Found !!!</h1>
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
                    alert('Delete Successfully')
                    location.reload(true)
                }
            });
        })
    });
</script>
<?= $this->endSection() ?>

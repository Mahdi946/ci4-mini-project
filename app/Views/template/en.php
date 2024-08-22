<!doctype html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?= base_url('assets-ltr/img/smile-icon.png') ?>">

    <title>sample project</title>


    <link href="<?= base_url('assets-ltr/css/bootstrap.css') ?>" rel="stylesheet">

    <link href="<?= base_url('assets-ltr/css/style.css') ?>" rel="stylesheet">
</head>

<body class="text-center">

<div class="cover-container d-flex h-100 p-3 mx-auto flex-column">

    <?= view_cell('App\Cells\template\HeaderCell::ltrHeader',['title' => 'Sample Project']) ?>
    <?= $this->renderSection('content') ?>
    <?= view_cell('App\Cells\template\FooterCell::ltrFooter') ?>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script>window.jQuery || document.write('<script src="<?= base_url('assets-ltr/js/jquery.min.js') ?>"><\/script>')</script>
<script src="<?= base_url('assets-ltr/js/bootstrap.bundle.js') ?>"></script>
<?= $this->renderSection('script') ?>
</body>
</html>
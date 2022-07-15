<?php require 'includes/header.php' ?>
<a href="index.php">hompage</a>
<h1>hello world</h1>
<?= $GET['student'] ?>
<form method="POST">
    <h2>ID: <?= $sStudentId ?? "id" ?></h2>
    <input type="text" placeholder="<?= $sStudentId ?? "id" ?>">
    <h2>NAME: <?= $sStudentName ?? "name" ?></h2>
    <input type="text" placeholder="<?= $sStudentName ?? "name" ?>">
    <h2>EMAIL: <?= $sStudentEmail ?? "email" ?></h2>
    <input type="text" placeholder="<?= $sStudentEmail ?? "email" ?>">
    <h2>GROUP_ID: <?= $sStudentGroupId ?? "group_id" ?></h2>
    <input type="text" placeholder="<?= $sStudentGroupId ?? "group_id" ?>">
</form>
<?php require 'includes/footer.php' ?>
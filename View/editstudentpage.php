<?php require 'includes/header.php' ?>
<a href="index.php">hompage</a>
<h1>hello world</h1>
<?= $GET['student'] ?>
<form method="POST">
    <h2>ID: <?= $sStudentId ?? "id" ?></h2>
    <h2>NAME: <?= $sStudentName ?? "name" ?></h2>
    <input name="newName" type="text" placeholder="<?= $sStudentName ?? "name" ?>">
    <h2>EMAIL: <?= $sStudentEmail ?? "email" ?></h2>
    <input name="newEmail" type="text" placeholder="<?= $sStudentEmail ?? "email" ?>">
    <h2>GROUP_ID: <?= $sStudentGroupId ?? "group_id" ?></h2>
    <input name="newGroupId" type="text" placeholder="<?= $sStudentGroupId ?? "group_id" ?>">
    <br><button style="background-color:green;color:white;border-radius:10px; border-color:green;" name="updateStudent">UPDATE</button>
</form>
<?php require 'includes/footer.php' ?>
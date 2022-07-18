<?php require 'includes/header.php' ?>
<a style="color: red; font-weight: bold; text-decoration:none; border:1px solid red;" href="index.php">Hompage</a>
<a style="color: purple; font-weight: bold; text-decoration:none; border:1px solid purple;" href="index.php?page=student">Student Page</a>
<h1>hello world</h1>
<?= $GET['student'] ?>
<form method="POST">
    <h2>ID: <?= $sStudentId ?? "id" ?></h2>
    <h2>NAME: <?= $sStudentName ?? "name" ?></h2>
    <input name="newName" type="text" placeholder="<?= $sStudentName ?? "name" ?>">
    <h2>EMAIL: <?= $sStudentEmail ?? "email" ?></h2>
    <input name="newEmail" type="text" placeholder="<?= $sStudentEmail ?? "email" ?>">
    <h2>GROUP_ID: <?= $sStudentGroupId ?? "group_id" ?></h2>
    <select name="newGroupId" id="groups">
        <?php foreach ($groupFetch as $group) : ?>
            <option value="<?= $group->getGroupId(); ?>"><?= $group->getGroupName(); ?></option>
        <?php endforeach; ?>
    </select>
    <br><button style="background-color:green;color:white;border-radius:10px; border-color:green;" name="updateStudent">UPDATE</button>
</form>
<?php require 'includes/footer.php' ?>
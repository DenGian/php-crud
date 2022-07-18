<?php require 'includes/header.php' ?>

<a style="color: red; font-weight: bold; text-decoration:none; border:1px solid red;" href="index.php">Homepage</a>
<a style="color: purple; font-weight: bold; text-decoration:none; border:1px solid purple;" href="index.php?page=coach">Teacher Page</a>
<h1>hello world</h1>
<?= $GET['teacher'] ?>
<form method="POST">
    <h2>ID: <?= $sCoachId ?? "id" ?></h2>
    <h2>NAME: <?= $sCoachName ?? "name" ?></h2>
    <input name="newName" type="text" placeholder="<?= $sCoachName ?? "name" ?>">
    <h2>EMAIL: <?= $sCoachEmail ?? "email" ?></h2>
    <input name="newEmail" type="text" placeholder="<?= $sCoachEmail ?? "email" ?>">
    <br><button style="background-color:green;color:white;border-radius:10px; border-color:green;" name="updateCoach">UPDATE</button>
</form>
<?php require 'includes/footer.php' ?>

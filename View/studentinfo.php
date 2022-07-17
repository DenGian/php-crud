<?php require 'includes/header.php' ?>
<section>
    <a style="color:red; font-weight:bold; text-decoration:none;border:1px solid red;" href="index.php">Back to homepage</a>
    <a style="color:purple; font-weight:bold; text-decoration:none;border:1px solid purple;" href="index.php?page=student">Student Page</a>
    <h1 style="color:pink;">Student Info Page</h1>
    <h2><?= $student->getName() ?? 'student'; ?></h2>
    <h2>STUDENT ID: <?= $student->getId(); ?></h2>
    <h2>EMAIL: <?= $student->getEmail(); ?></h2>
    <h2>GROUP ID: <?= $student->getGroupId(); ?></h2>
</section>
<?php require 'includes/footer.php' ?>
<?php require 'includes/header.php' ?>
    <section>
        <a style="color:red; font-weight:bold; text-decoration:none;border:1px solid red;" href="index.php">Back to homepage</a>
        <a style="color:purple; font-weight:bold; text-decoration:none;border:1px solid purple;" href="index.php?page=groups">Group Page</a>
        <h1 style="color:pink;">Group Info Page</h1>
        <h2><?= $group->getGroupName() ?? 'group'; ?></h2>
        <h2>GROUP ID: <?= $group->getGroupId(); ?></h2>
        <h2>GROUP LOCATION: <?= $group->getGroupLocation(); ?></h2>
        <h3>Assinged Coach</h3>
        <h2>COACH: <?= $teacherName; ?></h2>
        <h3>Assigned students</h3>
        <h2>Student names</h2>
<!--        --><?php //var_dump($students);?>
        <?php foreach($students as $student):?>
            <h3><?=$student['firstname']?></h3>
        <?php endforeach;?>
    </section>
<?php require 'includes/footer.php' ?>
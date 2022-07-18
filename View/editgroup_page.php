<?php require 'includes/header.php' ?>
    <a style="color: red; font-weight: bold; text-decoration:none; border:1px solid red;" href="index.php">Hompage</a>
    <a style="color: purple; font-weight: bold; text-decoration:none; border:1px solid purple;" href="index.php?page=groups">group Page</a>
    <h1>hello world</h1>
<?= $GET['group'] ?>
    <form method="POST">
        <h2>ID: <?= $selectedGroupId ?? "id" ?></h2>
        <h2>GROUP NAME: <?= $selectedGroupName ?? "group name" ?></h2>
        <label>
            <input name="newGroupName" type="text" placeholder="<?= $selectedGroupName ?? "group name" ?>">
        </label>
        <h2>COACH ID: <?= $selectedGroupCoachId ?? "coach ID" ?></h2>
        <select name="newGroupCoachId" id="coach_id">
            <?php foreach ($teacherFetch as $teacher) : ?>
                <option value="<?= $teacher->getId(); ?>"><?= $teacher->getName(); ?></option>
            <?php endforeach; ?>
        </select>
        <h2>GROUP LOCATION: <?= $selectedGroupLocation ?? "group location" ?></h2>
        <label>
            <input name="newLocation" type="text" placeholder="<?= $selectedGroupLocation ?? "group location" ?>">
        </label>
        <br><button style="background-color:green;color:white;border-radius:10px; border-color:green;" name="updateGroup">UPDATE</button>
    </form>
<p><?= $succes ?? 'STATUS'; ?></p>
<?php require 'includes/footer.php' ?>
<?php require 'includes/header.php' ?>
    <a style="color:red; font-weight:bold; border:1px solid red; text-decoration:none;" href="index.php">Homepage</a>
    <a style="color:purple; font-weight:bold; border:1px solid purple; text-decoration:none;" href="index.php?page=groups">Groups Page</a>
    <h1 style="color:green;">CREATE GROUP</h1>
    <p>here you can create a new student by filling in the forms and press the create button. Have fun!!</p>
    <form method="post">
        <label for="Groupname">Name</label>
        <input type="text" name="Group-name" id="Groupname">
        <label for="coachId">coach ID</label>
        <input type="text" name="coachId" id="coachId">
        <label for="location">location</label>
        <input type="text" name="location" id="location">
        <button style="background-color:lightgreen; border:1px solid lightgreen; color:white; font-weight:bold;" name="submitNewGroup">Create!</button>
    </form>
    <p><?= $succes ?? 'STATUS'; ?></p>
<?php require 'includes/footer.php' ?>
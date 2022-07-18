<?php require 'includes/header.php' ?>
<a style="color:red; font-weight:bold; border:1px solid red; text-decoration:none;" href="index.php">Homepage</a>
<a style="color:purple; font-weight:bold; border:1px solid purple; text-decoration:none;" href="index.php?page=coach">Teacher Page</a>
<h1 style="color:green;">CREATE TEACHER</h1>
<p>here you can create a new coach by filling in the forms and press the create button. Have fun!!</p>
<form method="post">
    <label for="name">Name</label>
    <input type="text" name="coach_name" id="name">
    <label for="email">Email</label>
    <input type="text" name="email" id="email">
    <button style="background-color:lightgreen; border:1px solid lightgreen; color:white; font-weight:bold;" name="submitNewTeacher">Create!</button>
</form>
<p><?= $succes ?? 'STATUS'; ?></p>
<?php require 'includes/footer.php' ?>

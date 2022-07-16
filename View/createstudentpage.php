<?php require 'includes/header.php' ?>
<a style="color:red; font-weight:bold; border:1px solid red; text-decoration:none;" href="index.php">Homepage</a>
<a style="color:purple; font-weight:bold; border:1px solid purple; text-decoration:none;" href="index.php?page=student">Student Page</a>
<h1 style="color:orange;">CREATE STUDENT</h1>
<p>here you can create a new student by filling in the forms and press the create button. Have fun!!</p>
<form method="post">
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    <label for="email">Email</label>
    <input type="text" name="email" id="email">
    <select name="group" id="group">
        <?php foreach ($groupArray as $group) : ?>
            <option value="<?= $group->getGroupId(); ?>"><?= $group->getGroupName(); ?></option>
        <?php endforeach; ?>
    </select>
    <button style="background-color:lightgreen; border:1px solid lightgreen; color:white; font-weight:bold;" name="submitNewStudent">Create!</button>
</form>
<?php require 'includes/footer.php' ?>
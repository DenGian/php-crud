<?php require 'View/includes/header.php'; ?>
<p><a href="index.php">homepage</a></p>
<h1>hallo wereldje</h1>
<h2>students</h2>
<?php foreach ($lalaArray as $student) : ?>
   <p><a href=<?php echo "index.php?page=info&student=" . $student->getId()?>><?=$student->getName()?></a></p>
<?php endforeach; ?>
<?php require 'View/includes/footer.php'; ?>


<?php require 'includes/header.php'; ?>

<?php

foreach ($teacherArray as $teacher){
    $teacherId=$teacher->getId();
    $teacherName=$teacher->getName();
    $teacherEmail=$teacher->getEmail();
    var_dump($teacher);
}
?>




<?php require 'includes/footer.php'; ?>

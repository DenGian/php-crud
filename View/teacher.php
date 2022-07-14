<?php require 'includes/header.php'; ?>

<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
    </tr>
    <?php
    foreach ($teacherArray as $teacher){
        $teacherId=$teacher->getId();
        $teacherName=$teacher->getName();
        $teacherEmail=$teacher->getEmail();
        echo '<tr>' . '<td>' . $teacherId . '</td>' .
            '<td>' . $teacherName .'</td>' .
            '<td>' . $teacherEmail . '</td>' .
            '</tr>';
    }
    ?>

</table>

<?php require 'includes/footer.php'; ?>

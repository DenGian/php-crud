<?php require 'includes/header.php'; ?>

    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($teacherArray as $teacher) {
            $teacherId = $teacher->getId();
            $teacherName = $teacher->getName();
            $teacherEmail = $teacher->getEmail();
            echo '<tr>' .
                '<td>' . $teacherId . '</td>' .
                '<td>' . $teacherName . '</td>' .
                '<td>' . $teacherEmail . '</td>' .
                '<td><form method="post"><button class="btn btn-primary" name="student" value="' . $teacherId . '">Show students</button></form></td>' .
                //'<td><form method="post"><button class="btn btn-primary" name="student" value="'.$teacherId.'">Show students</button></form></td>' .
                '<td><form method ="post"> <button class="btn btn-warning" value="'.$teacherId .'"name="editteacher" style="padding: 0">  <a style="padding=1em;" href="index.php?page=editteacherpage&teacher='.$teacherId .'">Edit</button></form></td>'.
                '<td><form method="post"><button class="btn btn-danger" name="delete" value="' . $teacherId . '">Delete</button></form></td>' .
                '</tr>';
        }
        ?>
    </table>

<!--    <table class="table table-striped table-dark">-->
<!--        <thead>-->
<!--        <tr>-->
<!--            <th scope="col">Student name</th>-->
<!--        </tr>-->
<!--        </thead>-->
<!--        <tbody>-->
<!--        --><?php
//        foreach ($requestedStudents as $requestedStudent) {
//            $studentName = $requestedStudent->getName();
//            echo '<tr>' .
//                '<td>' . $studentName .
//                '</td> </tr>';
//        }
//        ?>
<!--    </table>-->

    <form method="post">
        <button class="btn btn-success" value = "createNewCoach" name =" create new"><a style="text-decoration:none; color:white; padding:1em" href="index.php?page=createteacher">Create new coach</button>
    </form>

<?php var_dump($_POST); ?>
<?php require 'includes/footer.php'; ?>
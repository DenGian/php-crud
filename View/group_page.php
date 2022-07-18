<?php require 'includes/header.php'?>

<table>
    <tr>
        <th>Group ID</th>
        <th>Name</th>
        <th>Location</th>
        <th>Teacher</th>
    </tr>
    <?php
    //loop through array returned from the getAllGroups function called in controller
    foreach ($groupArray as $group) {
        $groupName = ucfirst($group->getGroupName());
        $groupId = $group->getGroupId();
        $groupLocation = $group->getGroupLocation();
        $groupCoachId = $group->getGroupCoachId();
        $teacherNames = $this->DBLoader->getTeacherById($groupCoachId);
        $teacherName = $teacherNames[0]['coach_name'];

    //use the loop to create a table on screen having all information
        echo '<tr>'.
            '<td>' . $groupId . '</td>'.
            '<td>' . $groupName . '</td>'.
            '<td>' . $groupLocation . '</td>'.
            '<td>' . $teacherName . '</td>'.
            '<td><form method ="post"> <button value="'.$groupId .'"name="delete">Delete</button></form></td>'.
            '<td><form method ="post"> <button value="'.$groupId .'"name="edit">Edit</button></form></td>'.
                '</tr>';

    }
    ?>
</table>
<!--adding create new button-->
<form method="post">
    <button value = "create" name =" create new">Create new entry</button>
</form>


<?php require 'includes/footer.php'?>
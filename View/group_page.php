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
        $teacherName = $teacherNames['name'];

    //use the loop to create a table on screen having all information aswell as a delete button for each entry
        echo '<tr>'.
            '<td>' . $groupId . '</td>'.
            '<td>' . $groupName . '</td>'.
            '<td>' . $groupLocation . '</td>'.
            '<td>' . $teacherName . '</td>'.
            '<td><form method ="post"> <button value="'.$groupId .'"name="delete">Delete</button></form></td>'.
                '</tr>';

    }
    ?>
</table>
<form method="post">
    <button value = "create" name =" create new">Create new entry</button>
</form>

<?php
var_dump($POST);
require 'includes/footer.php'?>
<?php require 'includes/header.php'?>
    <a style="color: red; font-weight: bold; text-decoration:none; border:1px solid red;" href="index.php">Hompage</a>
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
            '<td> ' . $groupId . '</td>'.
            '<td><a style="text-decoration:none; color:blue; font-weight: bold; border:1px solid blue" href="index.php?page=info&group='. $groupId. '">'.$groupName. '</td>'.
            '<td>' . $groupLocation . '</td>'.
            '<td>' . $teacherName . '</td>'.
            '<td><form method ="post"> <button value="'.$groupId .'"name="delete">Delete</button></form></td>'.
            '<td><form method ="post"> <button value="'.$groupId .'"name="editgroup" style="padding: 0">  <a style="color:black; padding=1em;text-decoration:none; font-weight:bold" href="index.php?page=editgroupspage&group='.$groupId .'">Edit</button></form></td>'.
                '</tr>';

    }
    ?>
</table>
<!--adding create new button-->
<form method="post">
    <button value = "createNewGroup" name =" create new"><a style="text-decoration:none; color:black;padding:1em" href="index.php?page=createGroup">Create new entry</button>
</form>


<?php require 'includes/footer.php'?>
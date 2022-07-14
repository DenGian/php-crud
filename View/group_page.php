<?php require 'includes/header.php'?>

<table>
    <tr>
        <th>Group ID</th>
        <th>Name</th>
        <th>Location</th>
        <th>Teacher</th>
    </tr>
    <?php
    foreach ($groupArray as $group) {
        $groupName = ucfirst($group->getGroupName());
        $groupId = $group->getGroupId();
        $groupLocation = $group->getGroupLocation();
        $groupCoachId = $group->getGroupCoachId();
        foreach ($coachArray as $coach){
            $teacherName = ucfirst($coach->getName());
        }



        echo '<tr>'.
            '<td>' . $groupId . '</td>'.
            '<td>' . $groupName . '</td>'.
            '<td>' . $groupLocation . '</td>'.
//            '<td>' . $groupCoachId . '</td>'.
            '<td>' . $teacherName . '</td>'.
                '</tr>';


    }
    ?>
</table>
<?php require 'includes/footer.php'?>
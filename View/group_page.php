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
        $groupName = ucfirst($group->getName());
        $groupId = $group->getId();
        $groupLocation = $group->getLocation();
        $groupCoachId = $group->getGroupCoachId();

        echo '<tr>';
        echo '<td>' . $groupId;
        echo '<td>' . $groupName;
        echo '<td>' . $groupLocation;
        echo '<td>' . $groupCoachId;
        echo '</tr>';
    }
    ?>
</table>
<?php require 'includes/footer.php'?>
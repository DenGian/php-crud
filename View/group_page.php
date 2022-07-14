<?php require 'includes/header.php'?>
<?php
foreach ($groupArray as $group) {
    $groupName = ucfirst($group->getName());
    $groupId = $group->getId();
    $groupLocation = $group->getLocation();
    $groupCoachId = $group->getGroupCoachId();
    var_dump($group);
}
?>
<?php require 'includes/footer.php'?>
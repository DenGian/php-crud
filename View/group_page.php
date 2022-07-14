<?php require 'includes/header.php'?>
<?php
foreach ($groupArray as $group) {
    $groupName = ucfirst($group->getName());
    $groupId = $group->getId();
    $groupLocation = $group->getLocation();
    $groupCoachId = $group->getGroupCoachId();
    var_dump($group);
    echo "<br>";
    var_dump($groupId);
    echo "<br>";
    var_dump($groupName);
    echo "<br>";
    var_dump($groupLocation);
    echo "<br>";
    var_dump($groupCoachId);
    echo "<br>";
}
?>
<?php require 'includes/footer.php'?>
<?php require 'includes/header.php'?>
<?php
foreach ($groupArray as $group) {
    $groupName = ucfirst($group->getName());
    $groupId = $group->getId();
    var_dump($groupId);
    var_dump($groupName);
}
?>
<?php require 'includes/footer.php'?>
<?php require 'View/includes/header.php'; ?>
<p><a href="index.php">homepage</a></p>
<h1>hallo wereldje</h1>
<h2>students</h2>
<form method="post">
   <table style="border:1px solid black;">
      <tr>
         <th>ID</th>
         <th>name</th>
         <th>email</th>
      </tr>
      <?php foreach ($lalaArray as $student) : ?>
         <tr>
            <td><?= $student->getID(); ?></td>
            <td>
               <a href=<?php echo "index.php?page=info&student=" . $student->getId(); ?>><?= $student->getName() ?></a>
               <button style='background-color:orange; color:white; border-color:orange;' name='nameEdit'>edit</button>
               <?php if (isset($POST['nameEdit'])) : ?>
                  <input type="text" name="newName">
                  <button style='background-color:green; color:white; border-color:green;' name="newNameConfirm">confirm</button>
               <?php endif; ?>
            </td>
            <td>
               <?= $student->getEmail(); ?>
               <button style='background-color:orange; color:white; border-color:orange;' name='emailEdit'>edit</button>
               <?php if (isset($POST['emailEdit'])) : ?>
                  <input type="text" name="newEmail">
                  <button style='background-color:green; color:white; border-color:green;' name="newEmailConfirm">confirm</button>
               <?php endif; ?>
            </td>

         </tr>

      <?php endforeach; ?>
   </table>
</form>

<?php require 'View/includes/footer.php'; ?>
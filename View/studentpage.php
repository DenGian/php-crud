<?php require 'View/includes/header.php'; ?>
<p><a href="index.php">homepage</a></p>
<h1>hallo wereldje</h1>
<h2>students</h2>

<form method="post">
   <button style="border-color:green; background-color:green;" name="createNewStudent"><a style="text-decoration:none; color:white;" href="index.php?page=createStudent">Create New Student</a></button>
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
            </td>
            <td>
               <?= $student->getEmail(); ?>
            </td>
            <td>
               <button style="background-color:orange;color:white;border-color:orange;">
                  <a href="index.php?page=editstudentspage&student=<?= $student->getId() ?>">edit</a>
               </button>
            </td>
            <td>
               <button style="background-color:red;color:white;border-color:red;" name="deleteStudent" value="<?= $student->getId(); ?>">
                  delete
               </button>
            </td>
         </tr>


      <?php endforeach; ?>
   </table>
</form>

<?php require 'View/includes/footer.php'; ?>
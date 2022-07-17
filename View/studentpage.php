<?php require 'View/includes/header.php'; ?>
<p><a style="color: red; font-weight: bold; text-decoration:none; border:1px solid red;" href="index.php">homepage</a></p>
<h1 style="color:purple">STUDENTS</h1>
<p>click the students' name to go to the edit page if you want to edit the data.</p>
<form method="post">
   <button style="border-color:green; background-color:green;font-size:30px;padding:0;" name="createNewStudent"><a style="text-decoration:none; color:white;padding:1em" href="index.php?page=createStudent">+</a></button>
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
               <a style="text-decoration:none; color:blue; font-weight: bold; border:1px solid blue" href=<?php echo "index.php?page=info&student=" . $student->getId(); ?>><?= $student->getName() ?></a>
            </td>
            <td>
               <?= $student->getEmail(); ?>
            </td>
            <td>
               <button style="background-color:orange; border-color:orange;">
                  <a style="color:white; text-decoration:none; font-weight:bold" href="index.php?page=editstudentspage&student=<?= $student->getId() ?>">edit</a>
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
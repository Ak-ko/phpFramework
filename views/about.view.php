<?php require "views/partials/header.php" ?>

<?php foreach ($students as $student): ?>
  <h4><?= $student->name ?></h4>
<?php endforeach; ?>

<?php require "views/partials/footer.php" ?> 
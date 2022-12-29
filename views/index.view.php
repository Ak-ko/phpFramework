<?php require "views/partials/header.php" ?>

<h1>Submit your name</h1>

<form action="/names" method="POST">
  <input type="text" name="name">
  <input type="submit" value="submit">
</form>

<ul>
  <?php foreach($users as $user): ?>
    <li><?= $user->name ?> |
      <a href="/delete?id=<?= $user->id ?>">&times;</a> |
      <a href="/update?id=<?= $user->id ?>">Update</a>
    </li>
  <?php endforeach; ?>
</ul>

<?php require "views/partials/footer.php" ?>
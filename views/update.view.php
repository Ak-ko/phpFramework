<?php require "partials/header.php"; ?>
  
  <h1>Update Form</h1>  

  <form action="/update?id=<?= $user->id ?>" method="POST">
    <input type="text" name="updateUserName" value="<?= $user->name ?>">
    <button>Change</button>
  </form>

<?php require "partials/footer.php" ?>
<?php
require_once ('User-validator.php');

if(isset($_POST['submit'])){
    //Validate entries, if the user press submitted button, this moves
    $validation = new UserValidator($_POST);
    $errors = $validation->validateForm();

    //save data to db
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form control with Oriented Object</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<div class="new-user">
    <h2>Create new user</h2>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="Username">Username :</label>
        <input type="text" name="username" value="<?= htmlspecialchars($_POST['username'] ?? '')?>">
        <div class="error">
            <?= $errors['username'] ?? ''; ?>
        </div>

        
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
        <div class="error">
            <?= $errors['email'] ?? ''; ?>
        </div>

        <input type="submit" value="submit" name="submit">
    </form>
</div>




    
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Details</title>
</head>

<body>
    <h1>User Details</h1>
    <div>
        <p>Nom : <?= $user->name ?></p>
        <p>Email : <?= $user->email ?></p>
    </div>
    <blockquote>
        <p><?= $citation['quote'] ?></p>
        <footer>—<?= $citation['author']?></footer>
    </blockquote>
</body>

</html>
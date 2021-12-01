<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <label for="title">
            Titre
            <input type="text" name="title" id="title">
        </label>
        <label for="content">
            Contenu
            <textarea name="content" id="content" cols="30" rows="10"></textarea>
        </label>
        <label for="categorie">
            Catégorie:
            <select name="categorie_id" id="categorie">
                <?php foreach ($categories as $categorie) : ?>
                    <option value="<?= $categorie->getId() ?>"><?= $categorie->getName() ?></option>
                <?php endforeach; ?>
            </select>
        </label>
        <label for="user">
            User:
            <select name="user_id" id="user">
                <?php foreach ($users as $user) : ?>
                    <option value="<?= $user->getId() ?>"><?= $user->getNom() ?>  <?= $user->getPrenom() ?></option>
                <?php endforeach; ?>
            </select>
        </label>
        <label for="picture">
            Image
            <input type="file" name="picture" id="picture">
        </label>
        <button>Envoyer</button>
    </form>
</body>

</html>
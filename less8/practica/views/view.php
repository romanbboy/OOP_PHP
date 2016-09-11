<!DOCTYPE html>
<html>
    <head>
        <title><?=$title;?></title>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Header</h2>
        <hr>
            <h2>
                <?=$text['name'] ?>
            </h2>
            <p>
                <?= $text['description']; ?>
            </p>
        <hr>
        <h3>Footer</h3>
    </body>
</html>
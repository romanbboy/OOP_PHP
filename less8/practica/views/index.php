<!DOCTYPE html>
<html>
    <head>
        <title><?=$title;?></title>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Header</h2>
        <hr>
        <? foreach($text as $item) :?>
            <h2>
                <a href="index.php?option=view&id=<?=$item['id_auto']; ?>"><?=$item['name'] ?></a>
            </h2>
            <p>
                <?= $item['cost']; ?>
            </p>
        <? endforeach; ?>
        <hr>
        <h3>Footer</h3>
    </body>
</html>
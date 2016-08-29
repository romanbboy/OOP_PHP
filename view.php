<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1> Header </h1>
        
        <? if(isset($text)) : ?>
                <h2>
                    <a href="index.php?id=<?=$text['id_auto']; ?>"><?=$text['name']; ?></a>
                </h2>
                <p>
                    <?=$text['description'];?>
                </p>
        <? endif; ?>
    
    </body>
</html>
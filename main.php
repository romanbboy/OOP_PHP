<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1> Header </h1>
        
        <? if(isset($text)) : ?>
            <? foreach($text as $item) : ?>
                <h2>
                    <a href="index.php?id=<?=$item['id_auto']; ?>"><?=$item['name']; ?></a>
                </h2>
                <p>
                    <?=$item['cost'];?>
                </p>
            <? endforeach; ?>
        <? endif; ?>
    
    </body>
</html>
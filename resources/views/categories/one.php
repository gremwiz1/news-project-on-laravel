<?php include "menu.php" ?>

<h2><?=$categories['title']?></h2>
<p><?=$categories['text']?></p>
<h3>Новости из этой категории</h3>

<?php foreach ($news as $item): ?>
    <a href="/news/<?=$item['id']?>"><?=$item['title']?></a><br>
<?php endforeach;?>


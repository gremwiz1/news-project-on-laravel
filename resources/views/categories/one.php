<?php include "menu.php" ?>

<h2><?=$data['categories']['title']?></h2>
<p><?=$data['categories']['text']?></p>
<h3>Новости из этой категории</h3>

<?php foreach ($data['news'] as $item): ?>
    <a href="/news/<?=$item['id']?>"><?=$item['title']?></a><br>
<?php endforeach;?>


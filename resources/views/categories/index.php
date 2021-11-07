<?php include "menu.php" ?>

<h2>Категории</h2>
<?php foreach ($categories as $item): ?>
    <a href="/categories/<?=$item['category_id']?>"><?=$item['title']?></a><br>
<?php endforeach;?>

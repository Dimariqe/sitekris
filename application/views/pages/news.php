<?foreach($news as $new) {?>
    <div class="news">
        <h3><?=$new->title?></h3>
        <p><?=$new->description?></p>
        <small>Дата: <?=$new->date?> | Автор: admin</small>
    </div>
<?}?>
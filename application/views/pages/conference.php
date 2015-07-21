<?foreach($conferences as $conference){?>
    <div class="conference">
        <h3><?=$conference->title?></h3>
        <p><?=$conference->description?></p>
        <ul class="activities">
        <?foreach($conference->activities->find_all() as $acitivitie) {?>
            <a href="/register/<?=$conference->id?>">
                <li><?=$acitivitie->title?></li>
                <li><?=$acitivitie->description?></li>
                <li><?=$acitivitie->position?></li>
                <li><?=$acitivitie->date?></li>
                <li><?=$acitivitie->additional_activity?></li>
            </a>
        <?}?>
        </ul>
        <div>
            <small>Стоимость: <?=$conference->coast?>р | Дата начала: <?=$conference->date_start?> | <a href="/register/<?=$conference->id?>/">Записаться</a></small>
        </div>
    </div>
<?}?>